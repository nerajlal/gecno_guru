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
     * Show a simple payment form (used by GET /pay route).
     * Normally users reach payment through the session booking flow,
     * but this handles any direct visits to /pay.
     */
    public function showPaymentForm()
    {
        return view('payment');
    }

    /**
     * Entry point to initiate payment for a booking.
     */
    public function initiatePayment(Request $request)
    {
        $request->validate([
            'booking_id' => 'required|integer|exists:bookings,id',
        ]);

        $booking = Booking::findOrFail($request->booking_id);

        // Security: ensure the booking belongs to the logged-in user (if authenticated)
        if (auth()->check() && $booking->user_id !== auth()->id()) {
            abort(403, 'Unauthorized');
        }

        Log::info('Initiating Payment via PhonePeService', [
            'booking_id' => $booking->id,
            'amount'     => $booking->amount,
        ]);

        $merchantTransactionId = 'MT' . time() . 'BK' . $booking->id;

        $result = $this->phonePeService->initiatePayment(
            $booking->amount,
            $merchantTransactionId,
            route('payment.callback')
        );

        if ($result['success']) {
            // Store transaction ID for later verification
            $booking->update(['transaction_id' => $merchantTransactionId]);

            Log::info('PhonePe redirect issued', [
                'booking_id'    => $booking->id,
                'transaction_id' => $merchantTransactionId,
                'redirect_url'  => $result['redirectUrl'],
            ]);

            return redirect()->away($result['redirectUrl']);
        }

        Log::error('PhonePe initiatePayment failed', [
            'booking_id' => $booking->id,
            'message'    => $result['message'] ?? 'Unknown error',
        ]);

        return back()->with('error', $result['message'] ?? 'Payment initiation failed. Please try again.');
    }

    /**
     * Server-to-Server Callback / Redirect Handler from PhonePe.
     *
     * PhonePe v2 sends merchantOrderId (= our merchantTransactionId) as a query param
     * on the redirectUrl after payment. We verify status server-side before trusting it.
     */
    public function handleCallback(Request $request)
    {
        // PhonePe sends merchantOrderId on the redirect URL
        $merchantTransactionId = $request->input('merchantOrderId')
                               ?? $request->input('merchantTransactionId');

        if (!$merchantTransactionId) {
            Log::warning('PhonePe Callback: No transaction ID in request', $request->all());
            return redirect('/')->with('error', 'Invalid payment reference. Please contact support.');
        }

        // Server-side status verification — never trust the redirect params alone
        $statusData = $this->phonePeService->verifyStatus($merchantTransactionId);

        Log::info('PhonePe Callback — Status Verification Result', [
            'merchantTransactionId' => $merchantTransactionId,
            'statusData'            => $statusData,
        ]);

        // PhonePe v2 status API returns state at top level (not nested under 'data')
        $state = $statusData['state'] ?? ($statusData['data']['state'] ?? null);

        $booking = Booking::where('transaction_id', $merchantTransactionId)->first();

        if (!$booking) {
            Log::error('PhonePe Callback: Booking not found', [
                'merchantTransactionId' => $merchantTransactionId,
            ]);
            return redirect('/')->with('error', 'Booking not found for this transaction.');
        }

        if ($state === 'COMPLETED') {
            $booking->update([
                'status'        => 'paid',
                'response_data' => json_encode($statusData),
            ]);

            Log::info('PhonePe Payment COMPLETED', ['booking_id' => $booking->id]);

            return view('session_booking.status', [
                'status'  => 'success',
                'booking' => $booking->load('sessionType'),
            ]);
        }

        // Payment failed or is still pending
        $booking->update([
            'status'        => strtolower($state ?? 'failed'),
            'response_data' => json_encode($statusData),
        ]);

        Log::warning('PhonePe Payment NOT completed', [
            'booking_id' => $booking->id,
            'state'      => $state,
        ]);

        return view('session_booking.status', ['status' => 'failed']);
    }
}
