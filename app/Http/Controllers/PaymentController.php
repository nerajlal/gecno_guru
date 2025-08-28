<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use App\Models\Transaction;
use PhonePe\payments\v2\standardCheckout\StandardCheckoutClient;
use PhonePe\payments\v2\models\request\builders\StandardCheckoutPayRequestBuilder;
use PhonePe\common\exceptions\PhonePeException;

class PaymentController extends Controller
{
    /**
     * Initiate a payment with PhonePe.
     */
    public function initiatePayment(Request $request, StandardCheckoutClient $client)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
        ]);

        $user = Auth::user();
        $amountInPaisa = $request->amount * 100;

        $merchantOrderId = 'MUID' . Str::random(10) . time();

        $transaction = Transaction::create([
            'user_id' => $user->id,
            'merchant_order_id' => $merchantOrderId,
            'amount' => $amountInPaisa,
            'status' => 'PENDING',
        ]);

        // The redirect URL is where the user will be sent after completing the payment on the PhonePe page.
        $redirectUrl = route('payment.status', ['merchantOrderId' => $merchantOrderId]);

        // The callback URL is where PhonePe's server will send a server-to-server update.
        $callbackUrl = route('payment.callback');

        try {
            $payRequest = StandardCheckoutPayRequestBuilder::builder()
                ->merchantOrderId($merchantOrderId)
                ->amount($amountInPaisa)
                ->redirectUrl($redirectUrl)
                ->callbackUrl($callbackUrl)
                ->build();

            $payResponse = $client->pay($payRequest);

            // Assuming the response has a getRedirectUrl() method as per the new docs
            return redirect()->away($payResponse->getRedirectUrl());

        } catch (PhonePeException $e) {
            $transaction->status = 'FAILED';
            $transaction->save();
            Log::error('PhonePe Payment Initiation Failed: ' . $e->getMessage());
            return redirect()->route('resume-build')->with('error', 'Payment initiation failed. Please try again.');
        } catch (\Exception $e) {
            $transaction->status = 'FAILED';
            $transaction->save();
            Log::error('An unexpected error occurred during payment initiation: ' . $e->getMessage());
            return redirect()->route('resume-build')->with('error', 'An unexpected error occurred. Please try again.');
        }
    }

    /**
     * Handle the server-to-server callback from PhonePe.
     */
    public function handleCallback(Request $request)
    {
        $payload = $request->getContent();
        $decodedPayload = json_decode(base64_decode($payload), true);

        if (!$decodedPayload) {
            Log::error('PhonePe Callback: Invalid payload received.');
            return response()->json(['status' => 'error', 'message' => 'Invalid payload'], 400);
        }

        // TODO: Implement webhook verification when credentials are available.
        // $config = config('services.phonepe');
        // $saltKey = $config['salt_key']; // Assuming a salt key is provided for verification
        // $saltIndex = $config['salt_index'];
        // $header = $request->header('X-VERIFY');
        // $calculatedSignature = hash('sha256', $payload . '/pg/v1/pay' . $saltKey) . '###' . $saltIndex;
        // if (!hash_equals($header, $calculatedSignature)) {
        //     Log::error('PhonePe Callback: Signature verification failed.');
        //     return response()->json(['status' => 'error', 'message' => 'Signature verification failed'], 400);
        // }

        $merchantOrderId = $decodedPayload['data']['merchantOrderId'] ?? null;
        if (!$merchantOrderId) {
            Log::error('PhonePe Callback: merchantOrderId not found in payload.');
            return response()->json(['status' => 'error', 'message' => 'merchantOrderId not found'], 400);
        }

        $transaction = Transaction::where('merchant_order_id', $merchantOrderId)->first();

        if ($transaction) {
            if (isset($decodedPayload['success']) && $decodedPayload['success'] === true) {
                $transaction->status = 'COMPLETED';
                $transaction->phonepe_transaction_id = $decodedPayload['data']['transactionId'];
            } else {
                $transaction->status = 'FAILED';
            }
            $transaction->save();
            Log::info('PhonePe Callback: Transaction status updated for ' . $merchantOrderId);
            return response()->json(['status' => 'success']);
        } else {
            Log::warning('PhonePe Callback: Transaction not found for merchantOrderId: ' . $merchantOrderId);
            return response()->json(['status' => 'error', 'message' => 'Transaction not found'], 404);
        }
    }

    /**
     * Handle the user redirection after payment attempt.
     */
    public function paymentStatus(Request $request, $merchantOrderId)
    {
        $transaction = Transaction::where('merchant_order_id', $merchantOrderId)
                                  ->where('user_id', Auth::id())
                                  ->firstOrFail();

        // Optional: Call the getOrderStatus() API here to get the latest status from PhonePe
        // and update the transaction record before showing the status to the user.

        if ($transaction->status === 'COMPLETED') {
            return redirect()->route('resume-template')->with('success', 'Payment successful!');
        } else {
             return redirect()->route('resume-build')->with('error', 'Payment failed or is still pending. Please check again later.');
        }
    }
}
