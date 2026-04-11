@include('includes.header')

<div class="container mx-auto px-4 py-16 mt-20 min-h-screen">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-gray-900 mb-4">Book a Session</h2>
        <p class="text-xl text-gray-600">Select the type of career session you'd like to book below.</p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($sessionTypes as $session)
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 flex flex-col hover:shadow-2xl transition-shadow duration-300">
            <div class="p-8 flex-grow">
                <h3 class="text-2xl font-bold text-gray-900 mb-3">{{ $session->name }}</h3>
                <p class="text-gray-600 mb-6">{{ $session->description ?? 'Expert guidance to advance your career path.' }}</p>
                <div class="text-3xl font-bold text-blue-600 mb-6">
                    ₹{{ number_format($session->cost_inr, 0) }}
                </div>
            </div>
            <div class="p-6 bg-gray-50 border-t border-gray-100">
                <a href="{{ route('session-booking.create', $session->id) }}" class="block w-full py-3 px-6 bg-blue-600 text-white font-bold text-center rounded-full hover:bg-blue-700 transition-colors duration-200 shadow-md">
                    Book Now
                </a>
            </div>
        </div>
        @empty
        <div class="col-span-full text-center text-gray-500 py-10">
            No session types available at the moment. Please check back later.
        </div>
        @endforelse
    </div>
</div>

@include('includes.footer')
