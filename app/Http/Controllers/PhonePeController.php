<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PhonePeController extends Controller
{
    private $merchantId;
    private $saltKey;
    private $saltIndex;
    private $env;

    public function __construct()
    {
        $this->merchantId = config('phonepe.merchant_id');
        $this->saltKey = config('phonepe.salt_key');
        $this->saltIndex = config('phonepe.salt_index');
        $this->env = config('phonepe.env');
    }
    
    public function showPaymentForm()
    {
        return view('payment');
    }

    public function initiatePayment(Request $request)
    {
        // Preflight validation for required config
        if (empty($this->merchantId) || empty($this->saltKey) || $this->saltIndex === null || $this->saltIndex === '') {
            Log::error('PhonePe initiatePayment: Missing configuration', [
                'merchantId_present' => !empty($this->merchantId),
                'saltKey_present' => !empty($this->saltKey),
                'saltIndex_present' => !($this->saltIndex === null || $this->saltIndex === ''),
                'env' => $this->env,
            ]);
            return redirect()->route('payment.form')
                ->withErrors(['error' => 'PhonePe configuration is missing. Please set PHONEPE_CLIENT_ID, PHONEPE_CLIENT_SECRET, PHONEPE_CLIENT_VERSION, and PHONEPE_ENV in .env and clear config cache.']);
        }

        $merchantTransactionId = 'M' . time(); // Must be a unique ID
        $amount = 10000; // Amount in paise (100.00 INR)

        $merchantUserId = 'MUID' . (auth()->id() ?? Str::random(10));

        $payload = [
            'merchantId' => $this->merchantId,
            'merchantTransactionId' => $merchantTransactionId,
            'merchantUserId' => $merchantUserId, // Unique ID for the user (handles guest users)
            'amount' => $amount,
            'redirectUrl' => route('payment.callback'),
            'redirectMode' => 'POST',
            'callbackUrl' => route('payment.callback'),
            'mobileNumber' => '9999999999', // User's mobile number
            'paymentInstrument' => [
                'type' => 'PAY_PAGE',
            ],
        ];

        // Generate the X-VERIFY header
        $base64Payload = base64_encode(json_encode($payload));
        $sha256 = hash('sha256', $base64Payload . '/pg/v1/pay' . $this->saltKey);
        $xVerify = $sha256 . '###' . $this->saltIndex;

        // Determine the API endpoint based on the environment
        $url = ($this->env === 'PROD') 
            ? 'https://api.phonepe.com/apis/hermes/pg/v1/pay' 
            : 'https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/pay';

        // Make the API call
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-VERIFY' => $xVerify,
            'X-MERCHANT-ID' => $this->merchantId,
        ])->post($url, [
            'request' => $base64Payload,
        ]);

        $responseData = $response->json();
        Log::info('PhonePe initiatePayment response', [
            'status' => $response->status(),
            'body' => $responseData,
        ]);
        
        // Check if the request was successful
        if ($response->ok() && isset($responseData['success']) && $responseData['success'] === true &&
            isset($responseData['data']['instrumentResponse']['redirectInfo']['url'])) {
            // Redirect the user to the PhonePe payment page
            return redirect()->away($responseData['data']['instrumentResponse']['redirectInfo']['url']);
        } else {
            // Handle the error
            $message = $responseData['message'] ?? 'Payment initiation failed. Please try again.';
            return redirect()->route('payment.form')->withErrors(['error' => $message]);
        }
    }
    
    // We will implement handleCallback in the next step
    public function handleCallback(Request $request)
    {
        $response = $request->input('response');
        $decodedResponse = json_decode(base64_decode($response), true);

        // Get the X-VERIFY header from the request
        $xVerifyHeader = $request->header('X-VERIFY');

        // Verify the signature
        $saltKey = $this->saltKey;
        $saltIndex = $this->saltIndex;

        $expectedSignature = hash('sha256', $request->input('response') . $saltKey) . '###' . $saltIndex;

        if ($xVerifyHeader !== $expectedSignature) {
            // Signature mismatch, handle the error
            return response()->json(['status' => 'error', 'message' => 'Invalid signature'], 400);
        }

        // Check the payment status
        if ($decodedResponse['success'] && $decodedResponse['code'] === 'PAYMENT_SUCCESS') {
            // Payment was successful
            $merchantTransactionId = $decodedResponse['data']['merchantTransactionId'];
            
            // TODO: Update your database here.
            // For example, find the order by $merchantTransactionId and mark it as paid.

            return redirect('/')->with('success', 'Payment successful!');
        } else {
            // Payment failed
            return redirect('/')->with('error', 'Payment failed. Please try again.');
        }
    }

}
