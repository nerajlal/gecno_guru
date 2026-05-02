<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard | GecnoGuru Career Portal</title>
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
        page: 'dashboard'
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
                    <span class="font-bold text-lg dark:text-white">GecnoGuru</span>
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
                                    class="group relative flex items-center gap-2.5 rounded-lg px-4 py-3 font-medium transition-colors"
                                    :class="page === 'dashboard' ? 'bg-brand-500/10 text-brand-500' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-white/5'">
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
                                    class="group relative flex items-center gap-2.5 rounded-lg px-4 py-3 font-medium transition-colors text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-white/5">
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

                    <div class="mt-auto pt-10">
                        <div class="rounded-xl bg-brand-500 p-6 text-center text-white">
                            <h4 class="font-bold mb-2">Need Help?</h4>
                            <p class="text-xs text-brand-100 mb-4">Contact our career experts for guidance on your journey.</p>
                            <a href="https://wa.me/918547349691" target="_blank" class="block w-full rounded-lg bg-white py-2 text-sm font-bold text-brand-500 hover:bg-brand-50">Chat on WhatsApp</a>
                        </div>
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
                        <h1 class="text-xl font-bold dark:text-white">Welcome back, {{ Auth::user()->name }}!</h1>
                    </div>

                    <div class="flex items-center space-x-4">
                        <!-- Dark Mode Toggle -->
                        <button @click="darkMode = !darkMode" class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-white/5 text-gray-500 dark:text-gray-400 transition-colors">
                            <svg x-show="!darkMode" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                            <svg x-show="darkMode" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 9h-1m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </button>

                        <!-- User Profile -->
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

                            <!-- Dropdown -->
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
                <!-- Welcome Banner -->
                <div class="bg-brand-950 rounded-2xl p-8 md:p-12 mb-8 relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-8 opacity-10">
                        <svg class="w-64 h-64 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L1 21h22L12 2zm0 3.99L18.53 19H5.47L12 5.99z"/></svg>
                    </div>
                    <div class="relative z-10 max-w-lg">
                        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Elevate Your Career with GecnoGuru AI.</h2>
                        <p class="text-brand-200 text-lg mb-8">Access professional resume builders, portfolio templates, and 1-on-1 career coaching all in one place.</p>
                        <div class="flex flex-wrap gap-4">
                            <a href="{{ route('whatsapp-redirect') }}" class="bg-brand-500 hover:bg-brand-600 text-white font-bold px-6 py-3 rounded-xl transition-colors">Build My Resume</a>
                            <a href="{{ route('session-booking.index') }}" class="bg-white/10 hover:bg-white/20 text-white font-bold px-6 py-3 rounded-xl backdrop-blur-sm transition-colors">Book Guidance</a>
                        </div>
                    </div>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8 text-white">
                    <div class="bg-white dark:bg-gray-950 p-6 rounded-2xl border border-gray-100 dark:border-gray-800 shadow-sm">
                        <div class="flex items-center justify-between mb-4 text-brand-500">
                            <div class="p-3 bg-brand-500/10 rounded-xl">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            </div>
                            <span class="text-xs font-bold bg-green-500/10 text-green-500 px-2 py-1 rounded-full">+12%</span>
                        </div>
                        <h4 class="text-gray-400 text-sm font-medium">Saved Resumes</h4>
                        <p class="text-2xl font-bold text-gray-800 dark:text-white">0</p>
                    </div>
                    <div class="bg-white dark:bg-gray-950 p-6 rounded-2xl border border-gray-100 dark:border-gray-800 shadow-sm">
                        <div class="flex items-center justify-between mb-4 text-brand-500">
                            <div class="p-3 bg-brand-500/10 rounded-xl">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                            </div>
                            <span class="text-xs font-bold bg-green-500/10 text-green-500 px-2 py-1 rounded-full">New</span>
                        </div>
                        <h4 class="text-gray-400 text-sm font-medium">Profile Views</h4>
                        <p class="text-2xl font-bold text-gray-800 dark:text-white">0</p>
                    </div>
                    <div class="bg-white dark:bg-gray-950 p-6 rounded-2xl border border-gray-100 dark:border-gray-800 shadow-sm">
                        <div class="flex items-center justify-between mb-4 text-brand-500">
                            <div class="p-3 bg-brand-500/10 rounded-xl">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                            <span class="text-xs font-bold bg-gray-500/10 text-gray-500 px-2 py-1 rounded-full">0</span>
                        </div>
                        <h4 class="text-gray-400 text-sm font-medium">Active Bookings</h4>
                        <p class="text-2xl font-bold text-gray-800 dark:text-white text-white">0</p>
                    </div>
                    <div class="bg-white dark:bg-gray-950 p-6 rounded-2xl border border-gray-100 dark:border-gray-800 shadow-sm">
                        <div class="flex items-center justify-between mb-4 text-brand-500">
                            <div class="p-3 bg-brand-500/10 rounded-xl">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <span class="text-xs font-bold bg-brand-500/10 text-brand-500 px-2 py-1 rounded-full">Active</span>
                        </div>
                        <h4 class="text-gray-400 text-sm font-medium">Credits</h4>
                        <p class="text-2xl font-bold text-gray-800 dark:text-white">0</p>
                    </div>
                </div>

                <!-- Recent Activity & Quick Actions -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Recent Activity -->
                    <div class="lg:col-span-2 bg-white dark:bg-gray-950 rounded-2xl border border-gray-100 dark:border-gray-800 p-8">
                        <div class="flex items-center justify-between mb-8">
                            <h3 class="text-xl font-bold dark:text-white">Recent Activity</h3>
                            <a href="#" class="text-brand-500 text-sm font-bold hover:underline">View All</a>
                        </div>
                        <div class="space-y-6">
                            <div class="flex items-center justify-center py-12 text-gray-400 flex-col">
                                <svg class="w-12 h-12 mb-4 opacity-20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <p>No recent activity yet. Start by building a resume!</p>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="space-y-6">
                        <div class="bg-white dark:bg-gray-950 rounded-2xl border border-gray-100 dark:border-gray-800 p-8">
                            <h3 class="text-lg font-bold dark:text-white mb-6">Quick Actions</h3>
                            <div class="space-y-4">
                                <a href="{{ route('whatsapp-redirect') }}" class="flex items-center p-4 rounded-xl border border-gray-50 dark:border-gray-900 hover:border-brand-500 hover:bg-brand-500/5 transition-all group">
                                    <div class="p-2 bg-brand-500/10 rounded-lg text-brand-500 mr-4 group-hover:bg-brand-500 group-hover:text-white transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                                    </div>
                                    <span class="font-bold text-gray-700 dark:text-gray-300">New Resume</span>
                                </a>
                                <a href="{{ route('whatsapp-redirect') }}" class="flex items-center p-4 rounded-xl border border-gray-50 dark:border-gray-900 hover:border-brand-500 hover:bg-brand-500/5 transition-all group">
                                    <div class="p-2 bg-brand-500/10 rounded-lg text-brand-500 mr-4 group-hover:bg-brand-500 group-hover:text-white transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                    </div>
                                    <span class="font-bold text-gray-700 dark:text-gray-300">Write Cover Letter</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
