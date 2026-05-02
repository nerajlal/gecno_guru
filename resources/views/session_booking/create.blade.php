<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Schedule Session | GecnoGuru Career Portal</title>
    <link rel="icon" type="image/jpg" href="/landing/assets/images/gecnoguru-favicon.jpg">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#ecf3ff',
                            100: '#dde9ff',
                            200: '#c2d6ff',
                            300: '#9cb9ff',
                            400: '#7592ff',
                            500: '#465fff',
                            600: '#3641f5',
                            700: '#2a31d8',
                            800: '#252dae',
                            900: '#262e89',
                            950: '#161950',
                        }
                    },
                    fontFamily: {
                        outfit: ['Outfit', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    
    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        [x-cloak] { display: none !important; }
        body { font-family: 'Outfit', sans-serif; }
    </style>
</head>
<body
    x-data="{ 
        loaded: true, 
        darkMode: false, 
        sidebarToggle: false,
        userDropdown: false,
        page: 'sessions'
    }"
    x-init="
        darkMode = JSON.parse(localStorage.getItem('darkMode')) || false;
        $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)));
        setTimeout(() => loaded = false, 500);
    "
    :class="{'dark bg-gray-900': darkMode === true}"
    class="bg-gray-50 text-gray-800"
>
    <!-- Preloader -->
    <div x-show="loaded" class="fixed inset-0 z-[9999] flex items-center justify-center bg-white dark:bg-black">
        <div class="h-16 w-16 animate-spin rounded-full border-4 border-solid border-brand-500 border-t-transparent"></div>
    </div>

    <!-- Page Wrapper -->
    <div class="flex h-screen overflow-hidden">
        
        <!-- Sidebar (Reused) -->
        <aside
            :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
            class="fixed left-0 top-0 z-[999] flex h-screen w-72 flex-col overflow-y-hidden bg-white dark:bg-gray-950 border-r border-gray-100 dark:border-gray-800 transition-transform duration-300 lg:static lg:translate-x-0"
        >
            <div class="flex items-center justify-start px-8 py-6">
                <a href="{{ route('home') }}" class="flex items-center gap-2">
                    <img src="/landing/assets/images/gecnoguru-favicon.jpg" alt="Logo" class="h-8 w-8 rounded-lg flex-shrink-0" />
                    <span class="ml-2 font-bold text-lg dark:text-white">GecnoGuru</span>
                </a>
                <button @click="sidebarToggle = false" class="lg:hidden ml-auto text-gray-500 hover:text-brand-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

            <div class="flex flex-col overflow-y-auto no-scrollbar">
                <nav class="mt-5 px-4 py-4 lg:mt-9 lg:px-6">
                    <ul class="flex flex-col gap-1.5">
                        <li>
                            <a href="{{ route('home') }}" class="flex items-center gap-2.5 rounded-lg px-4 py-3 font-medium text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-white/5 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('whatsapp-redirect') }}" class="flex items-center gap-2.5 rounded-lg px-4 py-3 font-medium text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-white/5 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                Build Resume
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('whatsapp-redirect') }}" class="flex items-center gap-2.5 rounded-lg px-4 py-3 font-medium text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-white/5 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                Cover Letter
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('session-booking.index') }}" class="flex items-center gap-2.5 rounded-lg px-4 py-3 font-medium bg-brand-500/10 text-brand-500 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                Book Session
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('whatsapp-redirect') }}" 
                                class="group relative flex items-center gap-2.5 rounded-lg px-4 py-3 font-medium text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-white/5 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                                Portfolio Website
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('coming-soon') }}" 
                                class="group relative flex items-center gap-2.5 rounded-lg px-4 py-3 font-medium text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-white/5 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2H2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                                Job Tracker
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('coming-soon') }}" 
                                class="group relative flex items-center gap-2.5 rounded-lg px-4 py-3 font-medium text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-white/5 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                Land Dream Job
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Area -->
        <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
            
            <header class="sticky top-0 z-[99] flex w-full bg-white dark:bg-gray-950 border-b border-gray-100 dark:border-gray-800 px-6 py-4">
                <div class="flex flex-grow items-center justify-between">
                    <div class="flex items-center">
                        <a href="{{ route('session-booking.index') }}" class="mr-4 p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-white/5 text-gray-500 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                        </a>
                        <h1 class="text-xl font-bold dark:text-white">Schedule Your Session</h1>
                    </div>
                </div>
            </header>

            <main class="p-6 md:p-8">
                <div class="max-w-4xl mx-auto">
                    
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                        
                        <!-- Left: Info -->
                        <div class="lg:col-span-1 space-y-6">
                            <div class="bg-brand-500 rounded-3xl p-8 text-white shadow-xl shadow-brand-500/20">
                                <h3 class="text-xs font-bold uppercase tracking-widest opacity-70 mb-2">Selected Session</h3>
                                <h2 class="text-2xl font-bold mb-4">{{ $sessionType->name }}</h2>
                                <p class="text-brand-100 text-sm leading-relaxed mb-6">{{ $sessionType->description ?? 'Get expert guidance tailored to your career goals.' }}</p>
                                <div class="flex items-baseline gap-1">
                                    <span class="text-3xl font-black">₹{{ number_format($sessionType->cost_inr, 0) }}</span>
                                    <span class="text-brand-200 text-xs">/ session</span>
                                </div>
                            </div>

                            <div class="bg-white dark:bg-gray-950 rounded-2xl border border-gray-100 dark:border-gray-800 p-6">
                                <h4 class="font-bold dark:text-white mb-4">What happens next?</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-start gap-3 text-sm text-gray-500">
                                        <div class="mt-1 flex-shrink-0 w-4 h-4 rounded-full bg-green-500 flex items-center justify-center text-white">
                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"></path></svg>
                                        </div>
                                        <span>Confirm your preferred slot</span>
                                    </li>
                                    <li class="flex items-start gap-3 text-sm text-gray-500">
                                        <div class="mt-1 flex-shrink-0 w-4 h-4 rounded-full bg-gray-200 flex items-center justify-center text-gray-500">2</div>
                                        <span>Complete payment securely</span>
                                    </li>
                                    <li class="flex items-start gap-3 text-sm text-gray-500">
                                        <div class="mt-1 flex-shrink-0 w-4 h-4 rounded-full bg-gray-200 flex items-center justify-center text-gray-500">3</div>
                                        <span>Receive meeting link via email</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Right: Form -->
                        <div class="lg:col-span-2">
                            <div class="bg-white dark:bg-gray-950 rounded-3xl border border-gray-100 dark:border-gray-800 p-8 md:p-10 shadow-sm">
                                
                                <form action="{{ route('session-booking.store') }}" method="POST" class="space-y-8">
                                    @csrf
                                    <input type="hidden" name="session_type_id" value="{{ $sessionType->id }}">

                                    @if ($errors->any())
                                        <div class="p-4 bg-red-500/10 border border-red-500/20 text-red-500 rounded-xl text-sm">
                                            <ul class="list-disc list-inside">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="space-y-4">
                                        <label class="block text-lg font-bold text-gray-800 dark:text-white">Choose a Date</label>
                                        <div class="relative">
                                            <input type="date" name="booking_date" min="{{ \Carbon\Carbon::tomorrow()->format('Y-m-d') }}" required 
                                                class="w-full px-5 py-4 rounded-2xl border border-gray-200 dark:border-gray-800 bg-transparent text-gray-800 dark:text-white focus:ring-4 focus:ring-brand-500/10 focus:border-brand-500 outline-none transition-all appearance-none" />
                                        </div>
                                        <p class="text-xs text-gray-400">Please select a date from tomorrow onwards.</p>
                                    </div>

                                    <div class="space-y-4">
                                        <label class="block text-lg font-bold text-gray-800 dark:text-white">Preferred Time Slot</label>
                                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                            <label class="relative cursor-pointer group">
                                                <input type="radio" name="booking_time" value="Morning 9-10 AM" required class="peer sr-only" />
                                                <div class="p-5 rounded-2xl border-2 border-gray-100 dark:border-gray-800 bg-gray-50/50 dark:bg-gray-900/50 peer-checked:border-brand-500 peer-checked:bg-brand-500/5 transition-all text-center">
                                                    <span class="block font-bold text-gray-700 dark:text-gray-300 peer-checked:text-brand-500 mb-1">Morning</span>
                                                    <span class="text-sm text-gray-400">9:00 AM - 10:00 AM</span>
                                                </div>
                                            </label>
                                            <label class="relative cursor-pointer group">
                                                <input type="radio" name="booking_time" value="Night 9-10 PM" required class="peer sr-only" />
                                                <div class="p-5 rounded-2xl border-2 border-gray-100 dark:border-gray-800 bg-gray-50/50 dark:bg-gray-900/50 peer-checked:border-brand-500 peer-checked:bg-brand-500/5 transition-all text-center">
                                                    <span class="block font-bold text-gray-700 dark:text-gray-300 peer-checked:text-brand-500 mb-1">Night</span>
                                                    <span class="text-sm text-gray-400">9:00 PM - 10:00 PM</span>
                                                </div>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="pt-6 border-t border-gray-50 dark:border-gray-800">
                                        <button type="submit" class="w-full bg-brand-500 hover:bg-brand-600 text-white font-bold py-4 rounded-2xl transition-all shadow-xl shadow-brand-500/20 active:scale-95">
                                            Proceed to Payment
                                        </button>
                                        <p class="text-center text-xs text-gray-400 mt-4 px-8">By proceeding, you agree to our booking terms and cancellation policy.</p>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
