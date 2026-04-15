<?php

namespace App\Services;

use App\Models\PhonePeTransaction;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Throwable;

class PhonePeService
{
    private string $clientId;
    private string $clientSecret;
    private string $env;

    public function __construct()
    {
        $this->clientId     = config('phonepe.client_id');
        $this->clientSecret = config('phonepe.client_secret');
        $this->env          = config('phonepe.env', 'UAT');
    }

    // -------------------------------------------------------------------------
    // ACCESS TOKEN
    // -------------------------------------------------------------------------

    public function getAccessToken(): ?string
    {
        $cacheKey = 'phonepe_access_token_' . $this->clientId;

        if (Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }

        $url = ($this->env === 'PRODUCTION')
            ? 'https://api.phonepe.com/apis/identity-manager/v1/oauth/token'
            : 'https://api-preprod.phonepe.com/apis/pg-sandbox/v1/oauth/token';

        Log::info('PhonePe: Requesting access token', [
            'url'       => $url,
            'client_id' => $this->clientId,
            'env'       => $this->env,
        ]);

        try {
            $response = Http::withoutVerifying()->asForm()->post($url, [
                'client_id'      => $this->clientId,
                'client_secret'  => $this->clientSecret,
                'client_version' => 1,
                'grant_type'     => 'client_credentials',
            ]);

            if ($response->successful()) {
                $data  = $response->json();
                $token = $data['access_token'] ?? null;

                if ($token) {
                    $ttl = max(60, ($data['expires_in'] ?? 3600) - 60);
                    Cache::put($cacheKey, $token, now()->addSeconds($ttl));
                    Log::info('PhonePe: Access token obtained and cached', ['expires_in' => $ttl]);
                    return $token;
                }
            }

            Log::error('PhonePe: Auth failed', [
                'http_status' => $response->status(),
                'body'        => $response->json(),
            ]);

        } catch (Throwable $e) {
            Log::error('PhonePe: Exception while fetching access token', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
        }

        return null;
    }

    // -------------------------------------------------------------------------
    // INITIATE PAYMENT
    // Saves a PhonePeTransaction record; updates it on success/failure.
    // Returns ['success' => bool, 'redirectUrl' => string|null, 'message' => string, 'transaction' => PhonePeTransaction]
    // -------------------------------------------------------------------------

    public function initiatePayment(
        float  $amount,
        string $merchantTransactionId,
        string $redirectUrl,
        ?int   $bookingId = null,
        ?int   $userId    = null
    ): array {
        // --- Create a pending transaction record upfront ---
        $phonePeTxn = null;
        try {
            $phonePeTxn = PhonePeTransaction::create([
                'booking_id'             => $bookingId,
                'user_id'                => $userId,
                'merchant_transaction_id'=> $merchantTransactionId,
                'merchant_order_id'      => $merchantTransactionId,
                'amount'                 => $amount,
                'amount_paise'           => (int) ($amount * 100),
                'status'                 => PhonePeTransaction::STATUS_INITIATED,
                'environment'            => $this->env,
            ]);
        } catch (Throwable $e) {
            Log::error('PhonePe: Failed to create transaction record', [
                'merchant_transaction_id' => $merchantTransactionId,
                'error'                   => $e->getMessage(),
            ]);
            // Non-fatal — continue even if DB write failed
        }

        // --- Get token ---
        $token = $this->getAccessToken();

        if (!$token) {
            $this->updateTransaction($phonePeTxn, [
                'status'        => PhonePeTransaction::STATUS_FAILED,
                'error_code'    => 'AUTH_FAILED',
                'error_message' => 'Could not obtain PhonePe access token.',
            ]);
            return ['success' => false, 'message' => 'Auth Failed', 'transaction' => $phonePeTxn];
        }

        $url = ($this->env === 'PRODUCTION')
            ? 'https://api.phonepe.com/apis/pg/checkout/v2/pay'
            : 'https://api-preprod.phonepe.com/apis/pg-sandbox/pg/checkout/v2/pay';

        $payload = [
            'merchantOrderId'      => $merchantTransactionId,
            'merchantTransactionId'=> $merchantTransactionId,
            'amount'               => (int) ($amount * 100),
            'merchantUserId'       => 'MUID' . ($userId ?? 0),
            'mobileNumber'         => '9999999999',
            'paymentFlow'          => [
                'type'         => 'PG_CHECKOUT',
                'merchantUrls' => ['redirectUrl' => $redirectUrl],
            ],
            'useDefaultCustomHooks' => true,
        ];

        Log::info('PhonePe: Initiating payment', ['url' => $url, 'payload' => $payload]);

        try {
            $response = Http::withoutVerifying()->withHeaders([
                'Authorization' => 'O-Bearer ' . $token,
                'Content-Type'  => 'application/json',
            ])->post($url, $payload);

            $data = $response->json();

            Log::info('PhonePe: Payment initiation response', [
                'http_status'            => $response->status(),
                'merchant_transaction_id'=> $merchantTransactionId,
                'body'                   => $data,
            ]);

            if ($response->successful()) {
                $pgRedirectUrl = $data['data']['redirectUrl'] ?? $data['redirectUrl'] ?? null;

                if ($pgRedirectUrl) {
                    $this->updateTransaction($phonePeTxn, [
                        'status'       => PhonePeTransaction::STATUS_PENDING,
                        'raw_response' => $data,
                    ]);

                    return [
                        'success'     => true,
                        'redirectUrl' => $pgRedirectUrl,
                        'message'     => 'Payment initiated',
                        'transaction' => $phonePeTxn,
                    ];
                }
            }

            // API returned non-2xx or missing redirectUrl
            $errorCode    = $data['code']    ?? (string) $response->status();
            $errorMessage = $data['message'] ?? 'Payment initiation failed.';

            $this->updateTransaction($phonePeTxn, [
                'status'        => PhonePeTransaction::STATUS_FAILED,
                'error_code'    => $errorCode,
                'error_message' => $errorMessage,
                'raw_response'  => $data,
            ]);

            return [
                'success'     => false,
                'message'     => $errorMessage,
                'transaction' => $phonePeTxn,
            ];

        } catch (Throwable $e) {
            Log::error('PhonePe: Exception during payment initiation', [
                'merchant_transaction_id' => $merchantTransactionId,
                'error'                   => $e->getMessage(),
                'trace'                   => $e->getTraceAsString(),
            ]);

            $this->updateTransaction($phonePeTxn, [
                'status'        => PhonePeTransaction::STATUS_FAILED,
                'error_code'    => 'EXCEPTION',
                'error_message' => $e->getMessage(),
            ]);

            return [
                'success'     => false,
                'message'     => 'An unexpected error occurred. Please try again.',
                'transaction' => $phonePeTxn,
            ];
        }
    }

    // -------------------------------------------------------------------------
    // VERIFY PAYMENT STATUS
    // Updates the PhonePeTransaction record with final state from PhonePe.
    // -------------------------------------------------------------------------

    public function verifyStatus(string $merchantTransactionId): ?array
    {
        $token = $this->getAccessToken();

        if (!$token) {
            Log::error('PhonePe: Cannot verify status — no token', [
                'merchant_transaction_id' => $merchantTransactionId,
            ]);
            return null;
        }

        $url = ($this->env === 'PRODUCTION')
            ? "https://api.phonepe.com/apis/pg/checkout/v2/status/{$this->clientId}/{$merchantTransactionId}"
            : "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/checkout/v2/status/{$this->clientId}/{$merchantTransactionId}";

        Log::info('PhonePe: Checking payment status', [
            'url'                    => $url,
            'merchant_transaction_id'=> $merchantTransactionId,
        ]);

        try {
            $response = Http::withoutVerifying()->withHeaders([
                'Authorization' => 'O-Bearer ' . $token,
                'Content-Type'  => 'application/json',
            ])->get($url);

            $data = $response->json();

            Log::info('PhonePe: Status verification response', [
                'merchant_transaction_id' => $merchantTransactionId,
                'http_status'             => $response->status(),
                'body'                    => $data,
            ]);

            // Update the transaction record with verified status
            $phonePeTxn = PhonePeTransaction::where('merchant_transaction_id', $merchantTransactionId)->first();

            if ($phonePeTxn) {
                $state          = $data['state'] ?? ($data['data']['state'] ?? null);
                $phonePeTxnId   = $data['transactionId'] ?? ($data['data']['transactionId'] ?? null);
                $paymentMethod  = $data['paymentInstrument']['type'] ?? null;
                $paymentInstr   = $data['paymentInstrument']['utr']
                    ?? $data['paymentInstrument']['cardLastFourDigits']
                    ?? $data['paymentInstrument']['bankTransactionId']
                    ?? null;

                $this->updateTransaction($phonePeTxn, [
                    'status'                 => $this->mapState($state),
                    'phonepe_transaction_id' => $phonePeTxnId,
                    'payment_method'         => $paymentMethod,
                    'payment_instrument'     => $paymentInstr,
                    'raw_response'           => $data,
                    'error_code'             => ($state !== 'COMPLETED') ? ($data['code'] ?? null) : null,
                    'error_message'          => ($state !== 'COMPLETED') ? ($data['message'] ?? null) : null,
                ]);
            }

            return $data;

        } catch (Throwable $e) {
            Log::error('PhonePe: Exception during status verification', [
                'merchant_transaction_id' => $merchantTransactionId,
                'error'                   => $e->getMessage(),
                'trace'                   => $e->getTraceAsString(),
            ]);

            return null;
        }
    }

    // -------------------------------------------------------------------------
    // HELPERS
    // -------------------------------------------------------------------------

    /** Safely update a transaction record, swallowing any DB errors. */
    private function updateTransaction(?PhonePeTransaction $txn, array $data): void
    {
        if (!$txn) return;

        try {
            $txn->update($data);
        } catch (Throwable $e) {
            Log::error('PhonePe: Failed to update transaction record', [
                'transaction_id' => $txn->id ?? null,
                'error'          => $e->getMessage(),
            ]);
        }
    }

    /** Map PhonePe state string to our internal status. */
    private function mapState(?string $state): string
    {
        return match (strtoupper($state ?? '')) {
            'COMPLETED' => PhonePeTransaction::STATUS_COMPLETED,
            'PENDING'   => PhonePeTransaction::STATUS_PENDING,
            'CANCELLED' => PhonePeTransaction::STATUS_CANCELLED,
            default     => PhonePeTransaction::STATUS_FAILED,
        };
    }
}
