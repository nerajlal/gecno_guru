<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book a Session | GecnoGuru Career Portal</title>
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
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
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
        
        <!-- Sidebar -->
        <aside
            :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
            class="fixed left-0 top-0 z-[999] flex h-screen w-72 flex-col overflow-y-hidden bg-white dark:bg-gray-950 border-r border-gray-100 dark:border-gray-800 transition-transform duration-300 lg:static lg:translate-x-0"
        >
            <!-- Sidebar Header -->
            <div class="flex items-center justify-start px-8 py-6">
                <a href="{{ route('home') }}" class="flex items-center gap-2">
                    <img src="/landing/assets/images/gecnoguru-favicon.jpg" alt="Logo" class="h-8 w-8 rounded-lg flex-shrink-0" />
                    <span class="ml-2 font-bold text-lg dark:text-white">GecnoGuru</span>
                </a>
                <button @click="sidebarToggle = false" class="lg:hidden ml-auto text-gray-500 hover:text-brand-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

            <!-- Sidebar Content -->
            <div class="flex flex-col overflow-y-auto no-scrollbar">
                <nav class="mt-5 px-4 py-4 lg:mt-9 lg:px-6">
                    <div>
                        <h3 class="mb-4 ml-4 text-xs font-semibold text-gray-400 uppercase tracking-wider">Main Menu</h3>
                        <ul class="mb-6 flex flex-col gap-1.5">
                            <li>
                                <a href="{{ route('home') }}" 
                                    class="group relative flex items-center gap-2.5 rounded-lg px-4 py-3 font-medium transition-colors text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-white/5">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('whatsapp-redirect') }}" 
                                    class="group relative flex items-center gap-2.5 rounded-lg px-4 py-3 font-medium text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-white/5 transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                    Build Resume
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('whatsapp-redirect') }}" 
                                    class="group relative flex items-center gap-2.5 rounded-lg px-4 py-3 font-medium text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-white/5 transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    Cover Letter
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('session-booking.index') }}" 
                                    class="group relative flex items-center gap-2.5 rounded-lg px-4 py-3 font-medium transition-colors bg-brand-500/10 text-brand-500">
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
                    </div>
                </nav>
            </div>
        </aside>

        <!-- Content Area -->
        <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
            
            <!-- Header -->
            <header class="sticky top-0 z-[99] flex w-full bg-white dark:bg-gray-950 border-b border-gray-100 dark:border-gray-800 px-6 py-4">
                <div class="flex flex-grow items-center justify-between">
                    <div class="flex items-center">
                        <button @click="sidebarToggle = true" class="mr-4 lg:hidden text-gray-500 hover:text-brand-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                        </button>
                        <h1 class="text-xl font-bold dark:text-white">Expert Career Guidance</h1>
                    </div>

                    <div class="flex items-center space-x-4">
                        <!-- User Profile Dropdown (Standard) -->
                        <div class="relative" @click.outside="userDropdown = false">
                            <button @click="userDropdown = !userDropdown" class="flex items-center space-x-3 hover:opacity-80 transition-opacity">
                                <div class="w-10 h-10 rounded-full border-2 border-brand-500/20 bg-gray-100 dark:bg-gray-800 flex items-center justify-center overflow-hidden transition-colors">
                                    <svg class="w-6 h-6 text-gray-400 dark:text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                    </svg>
                                </div>
                                <div class="hidden md:block text-left">
                                    <span class="block text-sm font-bold dark:text-white leading-tight">{{ Auth::user()->name }}</span>
                                </div>
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </button>

                            <div x-show="userDropdown" x-cloak x-transition class="absolute right-0 mt-3 w-48 bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-800 rounded-xl shadow-xl py-2 z-[100]">
                                <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-600 dark:text-gray-400 hover:bg-brand-500 hover:text-white transition-colors">Profile Settings</a>
                                <div class="border-t border-gray-100 dark:border-gray-800 my-1"></div>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-500 hover:bg-red-50 transition-colors">Sign Out</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main Content -->
            <main class="p-6 md:p-8">
                <div class="max-w-6xl mx-auto">
                    
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-4">Choose Your Session Type</h2>
                        <p class="text-lg text-gray-500 dark:text-gray-400 max-w-2xl mx-auto">Accelerate your career with personalized 1-on-1 sessions from industry experts.</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @forelse($sessionTypes as $session)
                        <div class="group bg-white dark:bg-gray-950 rounded-3xl border border-gray-100 dark:border-gray-800 p-8 flex flex-col justify-between hover:border-brand-500 transition-all duration-300 hover:shadow-2xl hover:shadow-brand-500/10 relative overflow-hidden">
                            <!-- Background Decor -->
                            <div class="absolute -top-10 -right-10 w-32 h-32 bg-brand-500/5 rounded-full group-hover:bg-brand-500/10 transition-colors"></div>
                            
                            <div>
                                <div class="h-14 w-14 rounded-2xl bg-brand-500/10 text-brand-500 flex items-center justify-center mb-6">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-3">{{ $session->name }}</h3>
                                <p class="text-gray-500 dark:text-gray-400 mb-8 leading-relaxed">{{ $session->description ?? 'Get professional guidance and actionable steps to reach your career milestones faster.' }}</p>
                            </div>

                            <div>
                                <div class="flex items-baseline gap-2 mb-8">
                                    <span class="text-4xl font-black text-gray-800 dark:text-white">₹{{ number_format($session->cost_inr, 0) }}</span>
                                    <span class="text-gray-400 text-sm">/ session</span>
                                </div>

                                <a href="{{ route('session-booking.create', $session->id) }}" class="block w-full text-center py-4 rounded-xl bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-200 font-bold group-hover:bg-brand-500 group-hover:text-white transition-all shadow-sm">
                                    Book Session
                                </a>
                            </div>
                        </div>
                        @empty
                        <div class="col-span-full bg-white dark:bg-gray-950 rounded-2xl p-20 text-center border border-dashed border-gray-200 dark:border-gray-800">
                            <div class="mb-4 inline-block p-4 bg-gray-50 dark:bg-gray-900 rounded-full">
                                <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white">No sessions available</h3>
                            <p class="text-gray-500">We're updating our schedule. Please check back later.</p>
                        </div>
                        @endforelse
                    </div>

                    <!-- Additional Info -->
                    <div class="mt-16 bg-brand-950 rounded-3xl p-8 md:p-12 text-center text-white overflow-hidden relative">
                        <div class="flex flex-col md:flex-row items-center justify-between gap-8 relative z-10">
                            <div class="text-left max-w-lg">
                                <h3 class="text-2xl font-bold mb-2">Still Have Questions?</h3>
                                <p class="text-brand-200">Not sure which session is right for you? Talk to our career counselor for free.</p>
                            </div>
                            <a href="https://wa.me/918547349691" target="_blank" class="bg-white text-brand-950 font-bold px-8 py-4 rounded-xl hover:bg-brand-50 transition-colors flex items-center gap-2">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.653a11.883 11.883 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                                WhatsApp Expert
                            </a>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>
</body>
</html>
