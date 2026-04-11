<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PhonePeService;
use App\Models\Booking;
use Illuminate\Support\Facades\Log;

class PhonePeController extends Controller
{
    protected $phonePeService;

    public function __construct(PhonePeService $phonePeService)
    {
        $this->phonePeService = $phonePeService;
    }

    /**
     * Entry point to initiate payment for a booking
     */
    public function initiatePayment(Request $request)
    {
        $booking = Booking::findOrFail($request->booking_id);
        
        // Following Master Guide Lesson: Audit Logging
        Log::info('Initiating Payment via Service', ['booking_id' => $booking->id]);

        $merchantTransactionId = 'MT' . time() . 'BK' . $booking->id;
        
        $result = $this->phonePeService->initiatePayment(
            $booking->amount, 
            $merchantTransactionId, 
            route('payment.callback')
        );

        if ($result['success']) {
            // Store transaction ID for later verification
            $booking->update(['transaction_id' => $merchantTransactionId]);
            return redirect()->away($result['redirectUrl']);
        }

        return back()->with('error', $result['message']);
    }

    /**
     * Server-to-Server Callback / Redirect Handler
     */
    public function handleCallback(Request $request)
    {
        // For redirectMode GET/POST, merchantTransactionId is usually in the request
        $merchantTransactionId = $request->input('merchantTransactionId');
        
        if (!$merchantTransactionId) {
            return redirect('/')->with('error', 'Invalid Transaction Reference');
        }

        // Following Master Guide Lesson: Secure Server-to-Server Verification
        $statusData = $this->phonePeService->verifyStatus($merchantTransactionId);

        Log::info('PhonePe Callback Verification', ['status' => $statusData]);

        if (isset($statusData['success']) && $statusData['success'] === true && $statusData['data']['state'] === 'COMPLETED') {
            // Find booking and update
            $booking = Booking::where('transaction_id', $merchantTransactionId)->first();
            if ($booking) {
                $booking->update([
                    'status' => 'paid',
                    'response_data' => json_encode($statusData) // Following Guide Lesson: Store entire JSON for audit
                ]);
                return view('session_booking.status', ['status' => 'success', 'booking' => $booking]);
            }
        }

        return view('session_booking.status', ['status' => 'failed']);
    }
}
