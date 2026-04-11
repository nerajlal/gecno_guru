<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SessionType;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class SessionBookingController extends Controller
{
    public function index()
    {
        $sessionTypes = SessionType::all();
        return view('session_booking.index', compact('sessionTypes'));
    }

    public function create(SessionType $sessionType)
    {
        return view('session_booking.create', compact('sessionType'));
    }

    public function store(Request $request)
    {
        Log::info('Session Booking attempt started', ['user_id' => Auth::id(), 'request_data' => $request->all()]);

        $request->validate([
            'session_type_id' => 'required|exists:session_types,id',
            'booking_date' => 'required|date|after:today', // Future dates only
            'booking_time' => 'required|in:Morning 9-10 AM,Night 9-10 PM',
        ]);

        $sessionType = SessionType::findOrFail($request->session_type_id);

        $booking = Booking::create([
            'user_id' => Auth::id(),
            'session_type_id' => $sessionType->id,
            'booking_date' => $request->booking_date,
            'booking_time' => $request->booking_time,
            'amount' => $sessionType->cost_inr,
            'status' => 'pending_payment',
        ]);

        Log::info('Session Booking created successfully', ['booking_id' => $booking->id, 'amount' => $booking->amount]);

        return redirect()->route('session-booking.payment', ['booking' => $booking->id]);
    }

    public function payment(Booking $booking)
    {
        Log::info('Session Booking payment page accessed', ['booking_id' => $booking->id, 'user_id' => Auth::id()]);

        // Ensure user owns this booking
        if ($booking->user_id !== Auth::id()) {
            abort(403);
        }

        return view('session_booking.payment', compact('booking'));
    }
}
