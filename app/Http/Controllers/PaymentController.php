<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use App\Models\Transaction;

// Require the PhonePe SDK autoloader
require_once(resource_path('views/test/autoload.php'));

use PhonePe\payments\v2\standardCheckout\StandardCheckoutClient;
use PhonePe\payments\v2\models\request\StandardCheckoutPayRequest;
use PhonePe\Env;


class PaymentController extends Controller
{
    private $phonepeClient;

    public function __construct()
    {
        $clientId = env('PHONEPE_CLIENT_ID', 'M2306161643806082881958');
        $clientSecret = env('PHONEPE_CLIENT_SECRET', 'a7181358-48b7-442e-a576-96b610b48873');
        $env = env('PHONEPE_ENV', 'UAT');

        $this->phonepeClient = StandardCheckoutClient::getInstance($clientId, 1, $clientSecret, $env);
    }

    public function initiatePayment(Request $request)
    {
        $request->validate([
            'amount' => ['required', 'integer', Rule::in([9900, 29900, 49900])],
        ]);

        $merchantOrderId = 'M' . Str::uuid()->toString();
        $amount = (int) $request->input('amount');
        $user = Auth::user();

        // Create a transaction record in the database
        $transaction = Transaction::create([
            'user_id' => $user->id,
            'merchant_order_id' => $merchantOrderId,
            'amount' => $amount,
            'status' => 'PENDING',
        ]);

        $callbackUrl = route('payment.callback');

        $payRequest = new StandardCheckoutPayRequest(
            $merchantOrderId,
            $amount,
            ['userId' => $user->id],
            [
                "flowType" => "WEB",
                "showPaymentInstruments" => false,
                "redirectUrl" => $callbackUrl,
                "postbackUrl" => $callbackUrl
            ]
        );

        try {
            $payResponse = $this->phonepeClient->pay($payRequest);
            return redirect($payResponse->redirectUrl);
        } catch (\Exception $e) {
            // Handle exception
            return back()->withErrors(['error' => 'Payment initiation failed: ' . $e->getMessage()]);
        }
    }

    public function handleCallback(Request $request)
    {
        $payload = $request->input('response');
        if(!$payload) {
            return redirect()->route('resume-template')->withErrors(['error' => 'Invalid callback response.']);
        }

        $decodedPayload = json_decode(base64_decode($payload), true);

        if (isset($decodedPayload['success']) && $decodedPayload['success'] === true) {
            $merchantOrderId = $decodedPayload['data']['merchantOrderId'];
            $transaction = Transaction::where('merchant_order_id', $merchantOrderId)->first();

            if ($transaction) {
                // Verify amount from callback
                if ($transaction->amount == $decodedPayload['data']['amount']) {
                    $transaction->status = 'SUCCESS';
                    $transaction->phonepe_transaction_id = $decodedPayload['data']['transactionId'];
                    $transaction->save();
                    return redirect()->route('resume-template')->with('success', 'Payment successful!');
                } else {
                    $transaction->status = 'FAILED';
                    $transaction->save();
                    return redirect()->route('resume-template')->withErrors(['error' => 'Payment amount mismatch.']);
                }
            } else {
                return redirect()->route('resume-template')->withErrors(['error' => 'Transaction not found.']);
            }
        } else {
            $errorMessage = $decodedPayload['message'] ?? 'Payment failed or was cancelled.';
            return redirect()->route('resume-template')->withErrors(['error' => $errorMessage]);
        }
    }
}
