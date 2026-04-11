@include('includes.header')

<div class="container mx-auto px-4 py-32 max-w-lg min-h-screen">
    <div class="bg-gray-900 border border-gray-800 rounded-3xl p-10 shadow-2xl text-white relative overflow-hidden">
        <!-- Visual Decor -->
        <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500/10 blur-3xl rounded-full -mr-16 -mt-16"></div>
        <div class="absolute bottom-0 left-0 w-32 h-32 bg-purple-500/10 blur-3xl rounded-full -ml-16 -mb-16"></div>

        <div class="relative text-center">
            @if($status === 'success')
                <div class="w-20 h-20 bg-green-500/20 text-green-400 rounded-full flex items-center justify-center mx-auto mb-6 text-4xl shadow-[0_0_30px_rgba(34,197,94,0.3)]">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h1 class="text-3xl font-bold mb-2 text-white">Booking Confirmed!</h1>
                <p class="text-gray-400 mb-8 leading-relaxed">
                    Great news! Your session with GecnoGuru has been successfully scheduled. Check your email for details.
                </p>

                <div class="bg-gray-800/50 backdrop-blur-sm rounded-2xl p-6 mb-8 text-left border border-gray-700/50">
                    <div class="flex justify-between mb-3">
                        <span class="text-gray-400">Order ID:</span>
                        <span class="text-gray-200 font-mono">{{ $booking->transaction_id }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-400">Session:</span>
                        <span class="text-blue-400 font-semibold">{{ $booking->sessionType->name }}</span>
                    </div>
                </div>

                <a href="{{ url('/') }}" class="inline-block px-10 py-4 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-bold rounded-2xl transition-all duration-300 shadow-xl shadow-blue-500/20 active:scale-95">
                    Return Home
                </a>
            @else
                <div class="w-20 h-20 bg-red-500/20 text-red-400 rounded-full flex items-center justify-center mx-auto mb-6 text-4xl shadow-[0_0_30px_rgba(239,68,68,0.3)]">
                    <i class="fas fa-times-circle"></i>
                </div>
                <h1 class="text-3xl font-bold mb-2 text-white">Payment Failed</h1>
                <p class="text-gray-400 mb-8 leading-relaxed">
                    Something went wrong with the transaction. Don't worry, if any amount was deducted, it will be refunded automatically.
                </p>

                <div class="flex flex-col gap-3">
                    <a href="{{ url()->previous() }}" class="inline-block px-10 py-4 bg-gray-800 hover:bg-gray-700 text-white font-bold rounded-2xl transition-all duration-300 active:scale-95">
                        Try Again
                    </a>
                    <a href="{{ url('/') }}" class="text-gray-500 hover:text-white transition-colors py-2">
                        Cancel and Go Back
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>

@include('includes.footer')
