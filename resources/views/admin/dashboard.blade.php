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
        @include('admin.sidebar')

        <!-- Main Content - Adjusted for fixed sidebar -->
        <div class="flex-1 ml-0 lg:ml-64 p-4 lg:p-8 main-content overflow-y-auto">
            <!-- Header -->
            <div class="glass-card rounded-2xl p-4 lg:p-6 mb-6 lg:mb-8 shadow-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-2 header-title">Welcome back, Admin! 👋</h1>
                        <p class="text-gray-600 text-sm lg:text-base">Here's what's happening with your platform today.</p>
                    </div>
                    <div class="flex items-center space-x-2 lg:space-x-4 header-buttons">
                        <button class="glass-effect p-2 lg:p-3 rounded-xl hover:bg-white hover:bg-opacity-25 transition-all duration-200">
                            <i class="fas fa-bell text-gray-700 text-lg lg:text-xl"></i>
                        </button>
                        <button class="glass-effect p-2 lg:p-3 rounded-xl hover:bg-white hover:bg-opacity-25 transition-all duration-200">
                            <i class="fas fa-comment text-gray-700 text-lg lg:text-xl"></i>
                        </button>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="glass-effect p-2 lg:p-3 rounded-xl hover:bg-white hover:bg-opacity-25 transition-all duration-200">
                                <i class="fas fa-sign-out-alt text-gray-700 text-lg lg:text-xl"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Metrics Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6 mb-6 lg:mb-8">
                <div class="metric-card rounded-2xl p-4 lg:p-6 card-hover fade-in shadow-lg">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm font-medium">Total Users</p>
                            <p class="text-2xl lg:text-3xl font-bold text-gray-900 mt-1">12,847</p>
                            <p class="text-green-600 text-xs lg:text-sm mt-2">
                                <span class="font-semibold">+12.5%</span> from last month
                            </p>
                        </div>
                        <div class="w-10 h-10 lg:w-12 lg:h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-users text-white text-lg lg:text-xl"></i>
                        </div>
                    </div>
                </div>

                <div class="metric-card rounded-2xl p-4 lg:p-6 card-hover fade-in shadow-lg" style="animation-delay: 0.1s;">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm font-medium">Resumes Created</p>
                            <p class="text-2xl lg:text-3xl font-bold text-gray-900 mt-1">8,245</p>
                            <p class="text-green-600 text-xs lg:text-sm mt-2">
                                <span class="font-semibold">+18.2%</span> from last month
                            </p>
                        </div>
                        <div class="w-10 h-10 lg:w-12 lg:h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-file-alt text-white text-lg lg:text-xl"></i>
                        </div>
                    </div>
                </div>

                <div class="metric-card rounded-2xl p-4 lg:p-6 card-hover fade-in shadow-lg" style="animation-delay: 0.2s;">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm font-medium">Active Sessions</p>
                            <p class="text-2xl lg:text-3xl font-bold text-gray-900 mt-1">1,429</p>
                            <p class="text-red-600 text-xs lg:text-sm mt-2">
                                <span class="font-semibold">-3.2%</span> from last hour
                            </p>
                        </div>
                        <div class="w-10 h-10 lg:w-12 lg:h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-bolt text-white text-lg lg:text-xl"></i>
                        </div>
                    </div>
                </div>

                <div class="metric-card rounded-2xl p-4 lg:p-6 card-hover fade-in shadow-lg" style="animation-delay: 0.3s;">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm font-medium">Revenue</p>
                            <p class="text-2xl lg:text-3xl font-bold text-gray-900 mt-1">$94,521</p>
                            <p class="text-green-600 text-xs lg:text-sm mt-2">
                                <span class="font-semibold">+25.8%</span> from last month
                            </p>
                        </div>
                        <div class="w-10 h-10 lg:w-12 lg:h-12 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-xl flex items-center justify-center">
                            <i class="fas fa-dollar-sign text-white text-lg lg:text-xl"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid lg:grid-cols-3 gap-6 lg:gap-8">
                <!-- Recent Activity -->
                <div class="lg:col-span-2 chart-container rounded-2xl p-4 lg:p-6 shadow-lg fade-in">
                    <div class="flex items-center justify-between mb-4 lg:mb-6">
                        <h3 class="text-xl font-bold text-gray-900">Recent Users</h3>
                        <button class="text-blue-600 hover:text-blue-700 font-medium text-sm">View All</button>
                    </div>
                    
                    <div class="responsive-table">
                        <table class="w-full">
                            <thead>
                                <tr class="border-b border-gray-200">
                                    <th class="text-left py-3 px-2 lg:px-4 font-semibold text-gray-700 text-sm">User</th>
                                    <th class="text-left py-3 px-2 lg:px-4 font-semibold text-gray-700 text-sm">Email</th>
                                    <th class="text-left py-3 px-2 lg:px-4 font-semibold text-gray-700 text-sm">Status</th>
                                    <th class="text-left py-3 px-2 lg:px-4 font-semibold text-gray-700 text-sm">Join Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-row border-b border-gray-100">
                                    <td class="py-3 lg:py-4 px-2 lg:px-4">
                                        <div class="flex items-center space-x-2 lg:space-x-3">
                                            <div class="w-8 h-8 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full flex items-center justify-center">
                                                <span class="text-white font-semibold text-xs">JS</span>
                                            </div>
                                            <span class="font-medium text-gray-900 text-sm">John Smith</span>
                                        </div>
                                    </td>
                                    <td class="py-3 lg:py-4 px-2 lg:px-4 text-gray-600 text-sm">john.smith@email.com</td>
                                    <td class="py-3 lg:py-4 px-2 lg:px-4">
                                        <span class="status-active px-2 py-1 rounded-full text-white text-xs font-medium">Active</span>
                                    </td>
                                    <td class="py-3 lg:py-4 px-2 lg:px-4 text-gray-600 text-sm">Dec 15, 2024</td>
                                </tr>
                                <tr class="table-row border-b border-gray-100">
                                    <td class="py-3 lg:py-4 px-2 lg:px-4">
                                        <div class="flex items-center space-x-2 lg:space-x-3">
                                            <div class="w-8 h-8 bg-gradient-to-br from-green-400 to-blue-500 rounded-full flex items-center justify-center">
                                                <span class="text-white font-semibold text-xs">EM</span>
                                            </div>
                                            <span class="font-medium text-gray-900 text-sm">Emma Martinez</span>
                                        </div>
                                    </td>
                                    <td class="py-3 lg:py-4 px-2 lg:px-4 text-gray-600 text-sm">emma.martinez@email.com</td>
                                    <td class="py-3 lg:py-4 px-2 lg:px-4">
                                        <span class="status-pending px-2 py-1 rounded-full text-white text-xs font-medium">Pending</span>
                                    </td>
                                    <td class="py-3 lg:py-4 px-2 lg:px-4 text-gray-600 text-sm">Dec 14, 2024</td>
                                </tr>
                                <tr class="table-row border-b border-gray-100">
                                    <td class="py-3 lg:py-4 px-2 lg:px-4">
                                        <div class="flex items-center space-x-2 lg:space-x-3">
                                            <div class="w-8 h-8 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full flex items-center justify-center">
                                                <span class="text-white font-semibold text-xs">DW</span>
                                            </div>
                                            <span class="font-medium text-gray-900 text-sm">David Wilson</span>
                                        </div>
                                    </td>
                                    <td class="py-3 lg:py-4 px-2 lg:px-4 text-gray-600 text-sm">david.wilson@email.com</td>
                                    <td class="py-3 lg:py-4 px-2 lg:px-4">
                                        <span class="status-active px-2 py-1 rounded-full text-white text-xs font-medium">Active</span>
                                    </td>
                                    <td class="py-3 lg:py-4 px-2 lg:px-4 text-gray-600 text-sm">Dec 13, 2024</td>
                                </tr>
                                <tr class="table-row">
                                    <td class="py-3 lg:py-4 px-2 lg:px-4">
                                        <div class="flex items-center space-x-2 lg:space-x-3">
                                            <div class="w-8 h-8 bg-gradient-to-br from-yellow-400 to-red-500 rounded-full flex items-center justify-center">
                                                <span class="text-white font-semibold text-xs">SL</span>
                                            </div>
                                            <span class="font-medium text-gray-900 text-sm">Sarah Lee</span>
                                        </div>
                                    </td>
                                    <td class="py-3 lg:py-4 px-2 lg:px-4 text-gray-600 text-sm">sarah.lee@email.com</td>
                                    <td class="py-3 lg:py-4 px-2 lg:px-4">
                                        <span class="status-inactive px-2 py-1 rounded-full text-white text-xs font-medium">Inactive</span>
                                    </td>
                                    <td class="py-3 lg:py-4 px-2 lg:px-4 text-gray-600 text-sm">Dec 12, 2024</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Quick Stats & Actions -->
                <div class="space-y-4 lg:space-y-6">
                    <!-- Quick Actions -->
                    <div class="chart-container rounded-2xl p-4 lg:p-6 shadow-lg fade-in">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Quick Actions</h3>
                        <div class="space-y-3 quick-actions">
                            <button class="w-full bg-white border border-gray-200 text-gray-700 px-4 py-3 rounded-xl hover:bg-gray-50 transition-all duration-200 font-medium text-sm lg:text-base">
                                📊 Generate Report
                            </button>
                            <button class="w-full bg-white border border-gray-200 text-gray-700 px-4 py-3 rounded-xl hover:bg-gray-50 transition-all duration-200 font-medium text-sm lg:text-base">
                                🎨 Update Templates
                            </button>
                        </div>
                    </div>

                    <!-- Recent Notifications -->
                    <div class="chart-container rounded-2xl p-4 lg:p-6 shadow-lg fade-in">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Notifications</h3>
                        <div class="space-y-3">
                            <div class="flex items-start space-x-3 p-3 bg-blue-50 rounded-xl">
                                <div class="w-2 h-2 bg-blue-500 rounded-full mt-2 flex-shrink-0"></div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">New user registration</p>
                                    <p class="text-xs text-gray-600">5 minutes ago</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3 p-3 bg-green-50 rounded-xl">
                                <div class="w-2 h-2 bg-green-500 rounded-full mt-2 flex-shrink-0"></div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">System backup completed</p>
                                    <p class="text-xs text-gray-600">1 hour ago</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3 p-3 bg-yellow-50 rounded-xl">
                                <div class="w-2 h-2 bg-yellow-500 rounded-full mt-2 flex-shrink-0"></div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">Template update available</p>
                                    <p class="text-xs text-gray-600">3 hours ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Add interactive functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu functionality
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const closeMenuButton = document.getElementById('close-menu');
            const mobileMenu = document.getElementById('mobile-menu');
            const overlay = document.getElementById('overlay');
            
            function openMenu() {
                mobileMenu.classList.add('open');
                overlay.classList.add('open');
                document.body.style.overflow = 'hidden';
            }
            
            function closeMenu() {
                mobileMenu.classList.remove('open');
                overlay.classList.remove('open');
                document.body.style.overflow = 'auto';
            }
            
            mobileMenuButton.addEventListener('click', openMenu);
            closeMenuButton.addEventListener('click', closeMenu);
            overlay.addEventListener('click', closeMenu);
            
            // Sidebar navigation
            const sidebarLinks = document.querySelectorAll('nav a');
            sidebarLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    sidebarLinks.forEach(l => l.classList.remove('sidebar-active'));
                    this.classList.add('sidebar-active');
                    
                    // Close mobile menu after selection
                    if (window.innerWidth < 1024) {
                        closeMenu();
                    }
                });
            });

            // Add hover effects to metric cards
            const metricCards = document.querySelectorAll('.metric-card');
            metricCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-8px) scale(1.02)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });

            // Table row interactions
            const tableRows = document.querySelectorAll('.table-row');
            tableRows.forEach(row => {
                row.addEventListener('click', function() {
                    // Simulate opening user details
                    console.log('Opening user details...');
                    this.style.background = 'rgba(59, 130, 246, 0.1)';
                    setTimeout(() => {
                        this.style.background = '';
                    }, 2000);
                });
            });

            // Quick action buttons
            const quickActions = document.querySelectorAll('.chart-container button');
            quickActions.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    // Add click animation
                    this.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        this.style.transform = 'scale(1)';
                    }, 150);
                });
            });

            // Analytics period buttons
            const periodButtons = document.querySelectorAll('.chart-container .flex button');
            periodButtons.forEach(button => {
                button.addEventListener('click', function() {
                    periodButtons.forEach(btn => {
                        btn.classList.remove('bg-blue-600', 'text-white');
                        btn.classList.add('bg-gray-100', 'text-gray-600');
                    });
                    this.classList.remove('bg-gray-100', 'text-gray-600');
                    this.classList.add('bg-blue-600', 'text-white');
                });
            });

            // Simulate real-time updates
            setInterval(() => {
                const activeSessionsElement = document.querySelector('.metric-card:nth-child(3) .text-2xl, .metric-card:nth-child(3) .text-3xl');
                if (activeSessionsElement) {
                    const currentValue = parseInt(activeSessionsElement.textContent.replace(',', ''));
                    const newValue = currentValue + Math.floor(Math.random() * 10) - 5;
                    activeSessionsElement.textContent = newValue.toLocaleString();
                }
            }, 5000);

            // Add notification badge animation
            const notificationBadge = document.querySelector('.bg-red-500');
            if (notificationBadge) {
                setInterval(() => {
                    notificationBadge.style.transform = 'scale(1.2)';
                    setTimeout(() => {
                        notificationBadge.style.transform = 'scale(1)';
                    }, 200);
                }, 3000);
            }
        });
    </script>
</body>
</html>