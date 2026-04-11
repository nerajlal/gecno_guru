@include('includes.header')

<div class="container mx-auto px-4 py-16 mt-20 max-w-lg min-h-screen">
    <div class="bg-gray-800 rounded-lg p-8 shadow-xl text-white">
        <h2 class="text-3xl font-bold mb-6 text-center text-blue-400">Checkout</h2>
        
        <div class="bg-gray-700 rounded-lg p-6 mb-6">
            <h3 class="text-xl font-bold mb-4 border-b border-gray-600 pb-2">Booking Details</h3>
            <p class="mb-2"><span class="font-semibold text-gray-300">Service:</span> {{ $booking->sessionType->name }}</p>
            <p class="mb-2"><span class="font-semibold text-gray-300">Date:</span> {{ \Carbon\Carbon::parse($booking->booking_date)->format('F j, Y') }}</p>
            <p class="mb-4"><span class="font-semibold text-gray-300">Time:</span> {{ $booking->booking_time }}</p>
            
            <div class="border-t border-gray-600 pt-4 mt-2 mb-2 flex justify-between text-xl font-bold">
                <span>Total Amount:</span>
                <span>₹{{ number_format($booking->amount, 2) }}</span>
            </div>
        </div>

        <div class="text-center text-sm text-gray-400 mb-6">
            Make payment to confirm your session. You'll receive a confirmation email shortly after.
        </div>

        <!-- Payment initiation button based on provided routes -->
        <form action="{{ route('payment.initiate') }}" method="POST">
            @csrf
            <!-- Provide inputs the payment route might need. In previous routes, there's amount, etc. I will pass booking id. -->
            <input type="hidden" name="booking_id" value="{{ $booking->id }}">
            <input type="hidden" name="amount" value="{{ $booking->amount }}">
            <button type="submit" class="w-full bg-green-500 hover:bg-green-400 text-white font-bold py-3 rounded-full transition-all duration-200 text-lg shadow-lg">
                Pay ₹{{ number_format($booking->amount, 2) }} Now
            </button>
        </form>
    </div>
</div>
@include('includes.footer')
