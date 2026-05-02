<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Coming Soon | GecnoGuru Career Portal</title>
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
        @keyframes float {
            0% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
            100% { transform: translateY(0px) rotate(0deg); }
        }
        .animate-float { animation: float 6s ease-in-out infinite; }
    </style>
</head>
<body
    x-data="{ 
        darkMode: false, 
        sidebarToggle: false,
        userDropdown: false
    }"
    x-init="
        darkMode = JSON.parse(localStorage.getItem('darkMode')) || false;
        $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)));
    "
    :class="{'dark bg-gray-950': darkMode === true}"
    class="bg-gray-50 text-gray-800 transition-colors duration-300"
>
    <!-- Page Wrapper -->
    <div class="flex h-screen overflow-hidden">
        
        <!-- Sidebar Placeholder (Simple Version for this page) -->
        <aside class="hidden lg:flex flex-col w-72 bg-white dark:bg-gray-950 border-r border-gray-100 dark:border-gray-800">
             <div class="px-8 py-6">
                <a href="{{ route('home') }}" class="flex items-center gap-2">
                    <img src="/landing/assets/images/gecnoguru-favicon.jpg" alt="Logo" class="h-8 w-8 rounded-lg" />
                    <span class="font-bold text-lg dark:text-white">GecnoGuru</span>
                </a>
            </div>
            <nav class="mt-5 px-6">
                 <a href="{{ route('home') }}" class="flex items-center gap-2.5 rounded-lg px-4 py-3 font-medium text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-white/5 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    Back to Dashboard
                </a>
            </nav>
        </aside>

        <!-- Content Area -->
        <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
            
            <!-- Header -->
            <header class="sticky top-0 z-[99] flex w-full bg-white/80 dark:bg-gray-950/80 backdrop-blur-md border-b border-gray-100 dark:border-gray-800 px-6 py-4 items-center justify-between">
                <h1 class="text-xl font-bold dark:text-white">Coming Soon</h1>
                <button @click="darkMode = !darkMode" class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-white/5 text-gray-500 dark:text-gray-400 transition-colors">
                    <svg x-show="!darkMode" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                    <svg x-show="darkMode" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 9h-1m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </button>
            </header>

            <!-- Main Content -->
            <main class="flex-1 flex flex-col items-center justify-center p-6 text-center">
                <div class="max-w-xl w-full">
                    
                    <div class="relative mb-12 flex justify-center">
                        <!-- Abstract Animated Shapes -->
                        <div class="absolute inset-0 blur-3xl opacity-20 bg-brand-500 rounded-full animate-float"></div>
                        <div class="relative z-10 p-10 rounded-full bg-white dark:bg-gray-900 shadow-2xl border border-gray-100 dark:border-gray-800">
                             <svg class="w-24 h-24 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                             </svg>
                        </div>
                    </div>

                    <h2 class="text-4xl md:text-5xl font-black text-gray-800 dark:text-white mb-6">Exciting Features on the Way!</h2>
                    <p class="text-lg text-gray-500 dark:text-gray-400 mb-10 leading-relaxed">
                        We're putting the finishing touches on our advanced AI tracking tools to help you land your dream job faster. This module will be live shortly.
                    </p>

                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="{{ route('home') }}" class="w-full sm:w-auto px-8 py-4 bg-brand-500 hover:bg-brand-600 text-white font-bold rounded-2xl transition-all shadow-xl shadow-brand-500/20 active:scale-95">
                            Go Back Home
                        </a>
                        <a href="https://wa.me/918547349691" target="_blank" class="w-full sm:w-auto px-8 py-4 bg-white dark:bg-gray-900 text-gray-800 dark:text-white border border-gray-100 dark:border-gray-800 font-bold rounded-2xl hover:bg-gray-50 dark:hover:bg-gray-800 transition-all flex items-center justify-center gap-2">
                             Notify Me via WhatsApp
                        </a>
                    </div>

                    <div class="mt-16 flex items-center justify-center gap-8 grayscale opacity-30">
                        <div class="flex flex-col items-center">
                            <span class="text-2xl font-bold dark:text-white uppercase tracking-tighter">AI Driven</span>
                        </div>
                        <div class="w-px h-8 bg-gray-300"></div>
                        <div class="flex flex-col items-center">
                            <span class="text-2xl font-bold dark:text-white uppercase tracking-tighter">ATS Ready</span>
                        </div>
                        <div class="w-px h-8 bg-gray-300"></div>
                        <div class="flex flex-col items-center">
                            <span class="text-2xl font-bold dark:text-white uppercase tracking-tighter">Auto Apply</span>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>
</body>
</html>
