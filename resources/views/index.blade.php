@include('header')

    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen gradient-bg flex items-center overflow-hidden pt-16">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-20 h-20 bg-white bg-opacity-10 rounded-full floating"></div>
            <div class="absolute top-40 right-20 w-16 h-16 bg-white bg-opacity-10 rounded-full floating" style="animation-delay: -2s;"></div>
            <div class="absolute bottom-40 left-1/4 w-12 h-12 bg-white bg-opacity-10 rounded-full floating" style="animation-delay: -4s;"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="text-white">
                    <h1 class="text-4xl sm:text-5xl lg:text-7xl font-bold mb-6 leading-tight">
                        Your Complete
                        <span class="block text-blue-300">Career Development</span>
                        Solution
                    </h1>
                    <p class="text-lg sm:text-xl text-blue-50 mb-8 max-w-lg leading-relaxed">
                        Elevate your career with AI-powered resume building, expert guidance, and cutting-edge tools designed for the modern professional.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="group relative bg-white text-blue-700 px-6 sm:px-8 py-3 sm:py-4 rounded-full font-bold text-base sm:text-lg overflow-hidden hover:scale-105 transition-all duration-200 glow shadow-lg get-started-btn">
                            <span class="relative z-10">Start Your Journey</span>
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-200"></div>
                        </button>
                        <button class="glass-effect px-6 sm:px-8 py-3 sm:py-4 rounded-full font-semibold text-base sm:text-lg text-white hover:bg-white hover:bg-opacity-25 transition-all duration-200 border border-white border-opacity-30">
                            Watch Demo
                        </button>
                    </div>
                    
                    <!-- Stats -->
                    <div class="flex space-x-4 sm:space-x-8 mt-8 sm:mt-12">
                        <div class="text-center">
                            <div class="text-2xl sm:text-3xl font-bold text-white drop-shadow-md">50K+</div>
                            <div class="text-blue-100 text-xs sm:text-sm font-medium">Success Stories</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl sm:text-3xl font-bold text-white drop-shadow-md">98%</div>
                            <div class="text-blue-100 text-xs sm:text-sm font-medium">Success Rate</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl sm:text-3xl font-bold text-white drop-shadow-md">24/7</div>
                            <div class="text-blue-100 text-xs sm:text-sm font-medium">Support</div>
                        </div>
                    </div>
                </div>
                
                <div class="relative mt-12 lg:mt-0">
                    <div class="relative z-10 floating">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Team collaboration" class="rounded-3xl shadow-2xl">
                    </div>
                    <div class="absolute -top-6 -left-6 w-full h-full glass-effect rounded-3xl -z-10 hidden sm:block"></div>
                    <div class="absolute top-10 -right-10 w-20 h-20 bg-white bg-opacity-20 rounded-full pulse-ring hidden sm:block"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 sm:py-20 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 sm:mb-16 fade-in">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Premium Career Services</h2>
                <p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto">Unlock your potential with our comprehensive suite of professional development tools</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <!-- Resume Builder -->
                <div class="group card-hover bg-white rounded-3xl p-6 sm:p-8 shadow-xl border border-gray-100 fade-in hover:border-blue-200">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 bg-gradient-to-br from-blue-600 to-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <i class="fa-solid fa-file-lines text-white text-2xl sm:text-3xl"></i>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4">AI Resume Builder</h3>
                    <p class="text-gray-700 mb-6 leading-relaxed">Create stunning, ATS-optimized resumes with our intelligent builder. Stand out from the crowd with professional templates.</p>
                    <button class="text-blue-600 font-bold hover:text-blue-700 transition-colors duration-200 flex items-center">
                        Build Resume 
                        <i class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform duration-200"></i>
                    </button>
                </div>
                
                <!-- Cover Letter Builder -->
                <div class="group card-hover bg-white rounded-3xl p-6 sm:p-8 shadow-xl border border-gray-100 fade-in hover:border-green-200" style="animation-delay: 0.2s;">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 bg-gradient-to-br from-green-600 to-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <i class="fa-solid fa-envelope-open-text text-white text-2xl sm:text-3xl"></i>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4">Smart Cover Letters</h3>
                    <p class="text-gray-700 mb-6 leading-relaxed">Generate personalized, compelling cover letters that capture attention and showcase your unique value proposition.</p>
                    <button class="text-green-600 font-bold hover:text-green-700 transition-colors duration-200 flex items-center">
                        Write Cover Letter 
                        <i class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform duration-200"></i>
                    </button>
                </div>
                
                <!-- Portfolio Website -->
                <div class="group card-hover bg-white rounded-3xl p-6 sm:p-8 shadow-xl border border-gray-100 fade-in hover:border-purple-200" style="animation-delay: 0.4s;">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 bg-gradient-to-br from-purple-600 to-pink-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <i class="fa-solid fa-globe text-white text-2xl sm:text-3xl"></i>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4">Portfolio Websites</h3>
                    <p class="text-gray-700 mb-6 leading-relaxed">Build a stunning online presence with our portfolio builder. Showcase your work and attract opportunities.</p>
                    <button class="text-purple-600 font-bold hover:text-purple-700 transition-colors duration-200 flex items-center">
                        Build Portfolio 
                        <i class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform duration-200"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section id="about" class="py-16 sm:py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div class="fade-in">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-8">Why Choose GecnoGuru?</h2>
                    
                    <div class="space-y-6 sm:space-y-8">
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-brain text-blue-600 text-lg sm:text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-2">AI-Powered Intelligence</h3>
                                <p class="text-gray-700">Advanced algorithms analyze job market trends and optimize your applications for maximum impact.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-bolt text-green-600 text-lg sm:text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-2">Lightning Fast Results</h3>
                                <p class="text-gray-700">Get professional-quality documents in minutes, not hours. Our streamlined process saves you valuable time.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 bg-purple-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-graduation-cap text-purple-600 text-lg sm:text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-2">Expert Career Guidance</h3>
                                <p class="text-gray-700">Access insights from industry professionals and career coaches to accelerate your growth.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative fade-in" style="animation-delay: 0.3s;">
                    <div class="relative z-10">
                        <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Professional team meeting" class="rounded-3xl shadow-2xl">
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-full h-full bg-gradient-to-br from-blue-400 to-purple-500 rounded-3xl -z-10 hidden sm:block"></div>
                    <div class="absolute -top-6 -left-6 w-24 h-24 bg-yellow-400 rounded-full opacity-80 floating hidden sm:block"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 sm:py-20 gradient-bg relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-10 left-10 w-32 h-32 bg-white bg-opacity-10 rounded-full floating hidden sm:block"></div>
            <div class="absolute bottom-10 right-10 w-24 h-24 bg-white bg-opacity-10 rounded-full floating hidden sm:block" style="animation-delay: -3s;"></div>
        </div>
        
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8 relative z-10 fade-in">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-6 drop-shadow-lg">Ready to Launch Your Career?</h2>
            <p class="text-lg sm:text-xl text-blue-50 mb-10 max-w-2xl mx-auto drop-shadow-md">Join thousands of professionals who have transformed their careers with our premium platform.</p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-white text-blue-700 px-6 sm:px-8 py-3 sm:py-4 rounded-full font-bold text-base sm:text-lg hover:scale-105 transition-all duration-200 glow shadow-lg get-started-btn">
                    Get Started Now
                </button>
                <button class="glass-effect px-6 sm:px-8 py-3 sm:py-4 rounded-full font-semibold text-base sm:text-lg text-white hover:bg-white hover:bg-opacity-25 transition-all duration-200 border border-white border-opacity-30">
                    Start Free Trial
                </button>
            </div>
        </div>
    </section>

@include('footer')