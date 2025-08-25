<!-- Sidebar (Desktop) - Fixed -->
<div class="hidden lg:block fixed top-0 left-0 h-screen w-64 glass-effect shadow-2xl">
    <div class="p-6 h-full flex flex-col">
        <div>
            <div class="text-2xl font-bold text-white mb-8">
                <span class="text-blue-300">Gecno</span>Guru
                <div class="text-sm font-normal text-blue-100 mt-1">Admin Panel</div>
            </div>

            <nav class="space-y-2">
                <a href="#" class="sidebar-active flex items-center space-x-3 px-4 py-3 rounded-xl text-white hover:bg-white hover:bg-opacity-20 transition-all duration-200">
                    <i class="fas fa-dashboard w-5 h-5"></i>
                    <span>Dashboard</span>
                </a>

                <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-blue-100 hover:bg-white hover:bg-opacity-20 transition-all duration-200">
                    <i class="fas fa-users w-5 h-5"></i>
                    <span>Users</span>
                    <span class="ml-auto bg-red-500 text-white text-xs px-2 py-1 rounded-full">23</span>
                </a>

                <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-blue-100 hover:bg-white hover:bg-opacity-20 transition-all duration-200">
                    <i class="fas fa-file-alt w-5 h-5"></i>
                    <span>Resumes</span>
                </a>

                <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-blue-100 hover:bg-white hover:bg-opacity-20 transition-all duration-200">
                    <i class="fas fa-envelope w-5 h-5"></i>
                    <span>Cover Letters</span>
                </a>

                <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-blue-100 hover:bg-white hover:bg-opacity-20 transition-all duration-200">
                    <i class="fas fa-briefcase w-5 h-5"></i>
                    <span>Portfolios</span>
                </a>

                <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-blue-100 hover:bg-white hover:bg-opacity-20 transition-all duration-200">
                    <i class="fas fa-chart-bar w-5 h-5"></i>
                    <span>Analytics</span>
                </a>

                <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-blue-100 hover:bg-white hover:bg-opacity-20 transition-all duration-200">
                    <i class="fas fa-cog w-5 h-5"></i>
                    <span>Settings</span>
                </a>
            </nav>
        </div>

        <!-- User Profile -->
        <div class="mt-auto">
            <div class="glass-effect rounded-xl p-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full flex items-center justify-center">
                            <span class="text-white font-semibold text-sm">AD</span>
                        </div>
                        <div>
                            <div class="text-white font-semibold text-sm">Admin User</div>
                            <div class="text-blue-200 text-xs">Super Admin</div>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-blue-200 hover:text-white transition-colors duration-200">
                            <i class="fas fa-sign-out-alt"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Mobile Header -->
<div class="lg:hidden fixed top-0 left-0 right-0 z-50 glass-effect p-4 flex justify-between items-center">
    <div class="text-xl font-bold text-white">
        <span class="text-blue-300">Gecno</span>Guru
    </div>
    <button id="mobile-menu-button" class="text-white p-2 rounded-lg glass-effect">
        <i class="fas fa-bars"></i>
    </button>
</div>

<!-- Mobile Menu Overlay -->
<div id="overlay" class="overlay fixed inset-0 bg-black bg-opacity-50 z-40"></div>

<!-- Mobile Menu -->
<div id="mobile-menu" class="mobile-menu fixed top-0 left-0 bottom-0 w-64 glass-effect shadow-2xl z-50 p-6">
    <div class="flex justify-between items-center mb-8">
        <div class="text-2xl font-bold text-white">
            <span class="text-blue-300">Gecno</span>Guru
            <div class="text-sm font-normal text-blue-100 mt-1">Admin Panel</div>
        </div>
        <button id="close-menu" class="text-white p-2 rounded-lg glass-effect">
            <i class="fas fa-times"></i>
        </button>
    </div>

    <nav class="space-y-2">
        <a href="#" class="sidebar-active flex items-center space-x-3 px-4 py-3 rounded-xl text-blue-100 hover:bg-white hover:bg-opacity-20 transition-all duration-200">
            <i class="fas fa-dashboard w-5 h-5"></i>
            <span>Dashboard</span>
        </a>

        <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-blue-100 hover:bg-white hover:bg-opacity-20 transition-all duration-200">
            <i class="fas fa-users w-5 h-5"></i>
            <span>Users</span>
            <span class="ml-auto bg-red-500 text-white text-xs px-2 py-1 rounded-full">23</span>
        </a>

        <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-blue-100 hover:bg-white hover:bg-opacity-20 transition-all duration-200">
            <i class="fas fa-file-alt w-5 h-5"></i>
            <span>Resumes</span>
        </a>

        <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-blue-100 hover:bg-white hover:bg-opacity-20 transition-all duration-200">
            <i class="fas fa-envelope w-5 h-5"></i>
            <span>Cover Letters</span>
        </a>

        <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-blue-100 hover:bg-white hover:bg-opacity-20 transition-all duration-200">
            <i class="fas fa-briefcase w-5 h-5"></i>
            <span>Portfolios</span>
        </a>

        <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-blue-100 hover:bg-white hover:bg-opacity-20 transition-all duration-200">
            <i class="fas fa-chart-bar w-5 h-5"></i>
            <span>Analytics</span>
        </a>

        <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-blue-100 hover:bg-white hover:bg-opacity-20 transition-all duration-200">
            <i class="fas fa-cog w-5 h-5"></i>
            <span>Settings</span>
        </a>
    </nav>

    <!-- User Profile -->
    <div class="absolute bottom-0 w-full left-0 p-6">
        <div class="glass-effect rounded-xl p-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full flex items-center justify-center">
                        <span class="text-white font-semibold text-sm">AD</span>
                    </div>
                    <div>
                        <div class="text-white font-semibold text-sm">Admin User</div>
                        <div class="text-blue-200 text-xs">Super Admin</div>
                    </div>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-blue-200 hover:text-white transition-colors duration-200">
                        <i class="fas fa-sign-out-alt"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
