
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

    

     @include('admin.footer')