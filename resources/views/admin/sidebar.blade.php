<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GecnoGuru - Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #1e40af 0%, #3730a3 50%, #581c87 100%);
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }
        
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px -12px rgba(0, 0, 0, 0.15);
        }
        
        .floating {
            animation: floating 6s ease-in-out infinite;
        }
        
        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .glow {
            box-shadow: 0 0 20px rgba(30, 64, 175, 0.3);
        }
        
        .sidebar-active {
            background: rgba(59, 130, 246, 0.1);
            border-right: 3px solid #3b82f6;
        }
        
        .metric-card {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 255, 0.8) 100%);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .chart-container {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 0.6s ease-out forwards;
        }
        
        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .table-row:hover {
            background-color: rgba(59, 130, 246, 0.05);
        }
        
        .progress-bar {
            background: linear-gradient(90deg, #3b82f6, #8b5cf6);
        }
        
        .status-active { 
            background-color: #10b981; 
        }
        .status-pending { 
            background-color: #f59e0b; 
        }
        .status-inactive { 
            background-color: #ef4444; 
        }

        /* Mobile menu styles */
        .mobile-menu {
            transform: translateX(-100%);
            transition: transform 0.3s ease-in-out;
        }
        
        .mobile-menu.open {
            transform: translateX(0);
        }
        
        .overlay {
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease-in-out;
        }
        
        .overlay.open {
            opacity: 1;
            visibility: visible;
        }

        /* Responsive table */
        .responsive-table {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        /* Mobile optimizations */
        @media (max-width: 768px) {
            .metric-card {
                padding: 1rem;
            }
            
            .metric-card .text-3xl {
                font-size: 1.5rem;
            }
            
            .chart-container {
                padding: 1rem;
            }
            
            .header-buttons {
                display: flex;
            }
            
            .table-row {
                padding: 0.75rem 0.5rem;
            }
            
            .table-row td {
                padding: 0.5rem;
            }
            
            .status-active, .status-pending, .status-inactive {
                font-size: 0.7rem;
                padding: 0.25rem 0.5rem;
            }
        }

        /* Very small devices */
        @media (max-width: 480px) {
            .main-content {
                padding: 0.75rem;
            }
            
            .header-title {
                font-size: 1.5rem;
            }
            
            .grid-cols-1 {
                grid-template-columns: 1fr;
            }
            
            .quick-actions button {
                padding: 0.75rem;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body class="bg-gray-50 overflow-x-hidden">
    <!-- Animated Background -->
    <div class="fixed inset-0 gradient-bg">
        <div class="absolute top-20 left-10 w-20 h-20 bg-white bg-opacity-10 rounded-full floating"></div>
        <div class="absolute top-40 right-20 w-16 h-16 bg-white bg-opacity-10 rounded-full floating" style="animation-delay: -2s;"></div>
        <div class="absolute bottom-40 left-1/4 w-12 h-12 bg-white bg-opacity-10 rounded-full floating" style="animation-delay: -4s;"></div>
    </div>

    <div class="relative z-10 flex min-h-screen pt-16 lg:pt-0">

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
