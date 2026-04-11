<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class PhonePeService
{
    private $clientId;
    private $clientSecret;
    private $clientVersion;
    private $env;

    public function __construct()
    {
        $this->clientId = config('phonepe.client_id');
        $this->clientSecret = config('phonepe.client_secret');
        $this->clientVersion = config('phonepe.client_version', 1);
        $this->env = config('phonepe.env', 'UAT');
    }

    /**
     * Get OAuth2 Access Token with caching
     */
    public function getAccessToken()
    {
        $cacheKey = 'phonepe_access_token_' . $this->clientId;
        
        if (Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }

        $url = ($this->env === 'PROD') 
            ? 'https://api.phonepe.com/apis/identity-manager/v1/oauth/token' 
            : 'https://api-preprod.phonepe.com/apis/pg-sandbox/v1/oauth/token';

        $response = Http::withoutVerifying()->asForm()->post($url, [
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'client_version' => $this->clientVersion,
            'grant_type' => 'client_credentials',
        ]);

        if ($response->successful()) {
            $data = $response->json();
            $token = $data['access_token'];
            // Cache token slightly less than expiry (usually 3600s)
            Cache::put($cacheKey, $token, now()->addSeconds($data['expires_in'] - 60));
            return $token;
        }

        Log::error('PhonePe Auth Failed', ['response' => $response->json()]);
        return null;
    }

    /**
     * Initiate a Standard Checkout Transaction
     */
    public function initiatePayment($amountInRupees, $merchantTransactionId, $redirectUrl)
    {
        $accessToken = $this->getAccessToken();
        if (!$accessToken) return ['success' => false, 'message' => 'Authentication failed'];

        $amountInPaise = (int)($amountInRupees * 100);
        
        $payload = [
            'merchantId' => $this->clientId,
            'merchantOrderId' => $merchantTransactionId,
            'merchantTransactionId' => $merchantTransactionId,
            'merchantUserId' => 'MUID' . auth()->id(),
            'amount' => $amountInPaise,
            'redirectUrl' => $redirectUrl,
            'message' => 'Payment for Session',
            'mobileNumber' => '9999999999',
            'useDefaultCustomHooks' => true
        ];

        $url = ($this->env === 'PROD') 
            ? 'https://api.phonepe.com/apis/pg/checkout/v2/pay' 
            : 'https://api-preprod.phonepe.com/apis/pg-sandbox/pg/checkout/v2/pay';

        $response = Http::withoutVerifying()->withHeaders([
            'Authorization' => 'O-Bearer ' . $accessToken,
            'Content-Type' => 'application/json',
        ])->post($url, $payload);

        Log::info('PhonePe Initiation Response', [
            'status' => $response->status(),
            'body' => $response->json(),
            'payload' => $payload
        ]);

        if ($response->successful()) {
            $data = $response->json();
            if ($data['success'] && isset($data['data']['redirectUrl'])) {
                return [
                    'success' => true,
                    'redirectUrl' => $data['data']['redirectUrl']
                ];
            }
        }

        return [
            'success' => false, 
            'message' => $response->json()['message'] ?? 'Payment initiation failed'
        ];
    }

    /**
     * Verify Transaction Status
     */
    public function verifyStatus($merchantTransactionId)
    {
        $accessToken = $this->getAccessToken();
        if (!$accessToken) return null;

        $url = ($this->env === 'PROD') 
            ? "https://api.phonepe.com/apis/pg/checkout/v2/status/{$this->clientId}/{$merchantTransactionId}" 
            : "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/checkout/v2/status/{$this->clientId}/{$merchantTransactionId}";

        $response = Http::withoutVerifying()->withHeaders([
            'Authorization' => 'O-Bearer ' . $accessToken,
            'Content-Type' => 'application/json',
        ])->get($url);

        return $response->json();
    }
}
