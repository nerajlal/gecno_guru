@include('includes.header')

<div class="container mx-auto px-4 py-16 mt-20 max-w-lg min-h-screen">
    <div class="bg-gray-800 rounded-lg p-8 shadow-xl text-white">
        <h2 class="text-3xl font-bold mb-4 text-center">Book a 1-on-1 Session</h2>
        <p class="text-gray-300 mb-6 text-center text-sm">{{ $sessionType->description }}</p>
        
        @if ($errors->any())
            <div class="bg-red-500 bg-opacity-80 p-3 rounded mb-4 text-sm">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('session-booking.store') }}" method="POST">
            @csrf
            <input type="hidden" name="session_type_id" value="{{ $sessionType->id }}">

            <div class="mb-5">
                <label for="booking_date" class="block font-semibold mb-2">Select Date (Future dates only)</label>
                <input type="date" id="booking_date" name="booking_date" min="{{ \Carbon\Carbon::tomorrow()->format('Y-m-d') }}" class="w-full bg-gray-700 border border-gray-600 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>

            <div class="mb-6">
                <label for="booking_time" class="block font-semibold mb-2">Select Time</label>
                <select id="booking_time" name="booking_time" class="w-full bg-gray-700 border border-gray-600 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                    <option value="" disabled selected>Select a time slot</option>
                    <option value="Morning 9-10 AM">Morning 9-10 AM</option>
                    <option value="Night 9-10 PM">Night 9-10 PM</option>
                </select>
            </div>

            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 text-white font-bold py-3 rounded-full transition-all duration-200">
                Confirm Booking
            </button>
        </form>
    </div>
</div>
@include('includes.footer')
