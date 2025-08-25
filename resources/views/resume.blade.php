@include('includes.header')



    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 gradient-bg overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-20 h-20 bg-white bg-opacity-10 rounded-full floating"></div>
            <div class="absolute top-40 right-20 w-16 h-16 bg-white bg-opacity-10 rounded-full floating" style="animation-delay: -2s;"></div>
            <div class="absolute bottom-40 left-1/4 w-12 h-12 bg-white bg-opacity-10 rounded-full floating" style="animation-delay: -4s;"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center text-white">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-6">AI Resume Builder</h1>
                <p class="text-xl text-blue-50 mb-8 max-w-3xl mx-auto leading-relaxed">
                    Craft a winning resume in minutes with the power of AI.
                </p>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">Why Choose Our AI Resume Builder?</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Powered by advanced AI technology to help you create the perfect resume</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-3xl card-hover">
                    <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-robot text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">AI-Powered Content</h3>
                    <p class="text-gray-700">Our AI analyzes thousands of successful resumes to generate impactful content tailored to your industry.</p>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-3xl card-hover">
                    <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-filter text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">ATS Optimized</h3>
                    <p class="text-gray-700">Ensure your resume passes through Applicant Tracking Systems with our optimized formatting and keywords.</p>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-3xl card-hover">
                    <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-palette text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Professional Designs</h3>
                    <p class="text-gray-700">Choose from dozens of professionally designed templates that impress hiring managers.</p>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-3xl card-hover">
                    <div class="w-16 h-16 bg-yellow-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-wand-magic-sparkles text-yellow-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">One-Click Customization</h3>
                    <p class="text-gray-700">Change colors, fonts, and layouts with a single click to match your personal style.</p>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-3xl card-hover">
                    <div class="w-16 h-16 bg-red-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-download text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Multiple Formats</h3>
                    <p class="text-gray-700">Download your resume in PDF, Word, or plain text formats with perfect formatting preserved.</p>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-3xl card-hover">
                    <div class="w-16 h-16 bg-indigo-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-shield-alt text-indigo-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Privacy First</h3>
                    <p class="text-gray-700">Your data is always secure. We never share your information with third parties.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">How It Works</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Create a professional resume in just a few simple steps</p>
            </div>
            
            <div class="grid md:grid-cols-4 gap-8">
                
                <div class="step-card bg-white p-6 rounded-2xl">
                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-lg mb-4">1</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Fill in Your Details</h3>
                    <p class="text-gray-700">Enter your information or upload your existing resume for AI enhancement.</p>
                </div>
                
                <div class="step-card bg-white p-6 rounded-2xl">
                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-lg mb-4">2</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">AI Optimization</h3>
                    <p class="text-gray-700">Our AI analyzes and optimizes your content for impact and ATS compatibility.</p>
                </div>
                
                <div class="step-card bg-white p-6 rounded-2xl">
                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-lg mb-4">3</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Select a Template</h3>
                    <p class="text-gray-700">Choose from our collection of professionally designed resume templates.</p>
                </div>

                <div class="step-card bg-white p-6 rounded-2xl">
                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-lg mb-4">4</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Download & Apply</h3>
                    <p class="text-gray-700">Download your polished resume and start applying for your dream job.</p>
                </div>
            </div>
            
            <div class="text-center mt-12">
                @guest
                <button class="bg-blue-600 text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-blue-700 transition-all duration-200 login-trigger">
                    Start Building Now
                </button>
                @else
                <a href="{{ route('resume-build') }}" class="bg-blue-600 text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-blue-700 transition-all duration-200">
                    Start Building Now
                </a>
                @endguest
            </div>
        </div>
    </section>

    <!-- Templates Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">Professional Resume Templates</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Designed to help you stand out in any industry</p>
            </div>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="template-card bg-gray-100 rounded-2xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1542435503-956c469947f6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Modern Resume Template" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Modern</h3>
                        <p class="text-gray-700 mb-4">Clean and contemporary design for all industries</p>
                        <span class="feature-badge text-white text-sm px-3 py-1 rounded-full">Most Popular</span>
                    </div>
                </div>
                
                <div class="template-card bg-gray-100 rounded-2xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1586281380117-5a60ae2050cc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Executive Resume Template" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Executive</h3>
                        <p class="text-gray-700 mb-4">Sophisticated design for leadership positions</p>
                    </div>
                </div>
                
                <div class="template-card bg-gray-100 rounded-2xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1516339901601-2e1b62dc0c45?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Creative Resume Template" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Creative</h3>
                        <p class="text-gray-700 mb-4">For designers, artists, and creative professionals</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                @guest
                <button class="text-blue-600 font-bold hover:text-blue-700 transition-colors duration-200 flex items-center justify-center login-trigger">
                    View All Templates 
                    <i class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform duration-200"></i>
                </button>
                @else
                <a href="{{ route('resume-build') }}" class="text-blue-600 font-bold hover:text-blue-700 transition-colors duration-200 flex items-center justify-center">
                    View All Templates
                    <i class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform duration-200"></i>
                </a>
                @endguest
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 gradient-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-6">Success Stories</h2>
                <p class="text-xl text-blue-50 max-w-3xl mx-auto">See how our AI Resume Builder has helped professionals land their dream jobs</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="glass-effect p-8 rounded-3xl">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-400 rounded-full"></div>
                        <div class="ml-4">
                            <h4 class="text-white font-bold">Sarah Johnson</h4>
                            <p class="text-blue-100">Software Engineer at Google</p>
                        </div>
                    </div>
                    <p class="text-blue-50">"The AI suggestions helped me highlight my achievements in a way I hadn't thought of. I got interview calls from 3 FAANG companies!"</p>
                </div>
                
                <div class="glass-effect p-8 rounded-3xl">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-400 rounded-full"></div>
                        <div class="ml-4">
                            <h4 class="text-white font-bold">Michael Chen</h4>
                            <p class="text-blue-100">Marketing Director at Nike</p>
                        </div>
                    </div>
                    <p class="text-blue-50">"The ATS optimization feature is a game-changer. My resume was getting rejected before, but after using GecnoGuru, I landed 5 interviews."</p>
                </div>
                
                <div class="glass-effect p-8 rounded-3xl">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-purple-400 rounded-full"></div>
                        <div class="ml-4">
                            <h4 class="text-white font-bold">Jessica Williams</h4>
                            <p class="text-blue-100">Senior Product Manager at Airbnb</p>
                        </div>
                    </div>
                    <p class="text-blue-50">"The templates are beautiful and professional. I received compliments on my resume from every interviewer. Worth every penny!"</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">Simple, Transparent Pricing</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Choose the plan that works best for your career goals</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-3xl border border-gray-200">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Basic</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-gray-900">$9</span>
                        <span class="text-gray-600">/one-time</span>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>1 Resume Template</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>Basic AI Suggestions</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>PDF Download</span>
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fa-solid fa-xmark mr-2"></i>
                            <span>ATS Optimization</span>
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fa-solid fa-xmark mr-2"></i>
                            <span>Cover Letter Builder</span>
                        </li>
                    </ul>
                    @guest
                    <button class="w-full bg-gray-200 text-gray-700 py-3 rounded-full font-semibold hover:bg-gray-300 transition-colors duration-200 login-trigger">
                        Get Started
                    </button>
                    @else
                    <a href="{{ route('resume-build') }}" class="w-full block text-center bg-gray-200 text-gray-700 py-3 rounded-full font-semibold hover:bg-gray-300 transition-colors duration-200">
                        Get Started
                    </a>
                    @endguest
                </div>
                
                <div class="bg-blue-50 p-8 rounded-3xl border border-blue-200 relative">
                    <span class="absolute top-0 right-0 bg-blue-600 text-white px-4 py-1 rounded-bl-lg rounded-tr-lg font-semibold">Most Popular</span>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Professional</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-gray-900">$19</span>
                        <span class="text-gray-600">/one-time</span>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>All Resume Templates</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>Advanced AI Suggestions</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>Multiple Format Downloads</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>ATS Optimization</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>Cover Letter Builder</span>
                        </li>
                    </ul>
                    @guest
                    <button class="w-full bg-blue-600 text-white py-3 rounded-full font-semibold hover:bg-blue-700 transition-colors duration-200 login-trigger">
                        Get Started
                    </button>
                    @else
                    <a href="{{ route('resume-build') }}" class="w-full block text-center bg-blue-600 text-white py-3 rounded-full font-semibold hover:bg-blue-700 transition-colors duration-200">
                        Get Started
                    </a>
                    @endguest
                </div>
                
                <div class="bg-gray-50 p-8 rounded-3xl border border-gray-200">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Premium</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-gray-900">$39</span>
                        <span class="text-gray-600">/one-time</span>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>All Professional Features</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>LinkedIn Profile Optimization</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>1-on-1 Career Consultation</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>Interview Preparation Guide</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>Job Search Strategy Session</span>
                        </li>
                    </ul>
                    @guest
                    <button class="w-full bg-gray-200 text-gray-700 py-3 rounded-full font-semibold hover:bg-gray-300 transition-colors duration-200 login-trigger">
                        Get Started
                    </button>
                    @else
                    <a href="{{ route('resume-build') }}" class="w-full block text-center bg-gray-200 text-gray-700 py-3 rounded-full font-semibold hover:bg-gray-300 transition-colors duration-200">
                        Get Started
                    </a>
                    @endguest
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="py-16 gradient-bg relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-10 left-10 w-32 h-32 bg-white bg-opacity-10 rounded-full floating"></div>
            <div class="absolute bottom-10 right-10 w-24 h-24 bg-white bg-opacity-10 rounded-full floating" style="animation-delay: -3s;"></div>
        </div>
        
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8 relative z-10">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-6 drop-shadow-lg">Ready to Create Your Winning Resume?</h2>
            <p class="text-lg sm:text-xl text-blue-50 mb-10 max-w-2xl mx-auto drop-shadow-md">Join thousands of professionals who have transformed their careers with our AI Resume Builder.</p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                @guest
                <button class="bg-white text-blue-700 px-6 sm:px-8 py-3 sm:py-4 rounded-full font-bold text-base sm:text-lg hover:scale-105 transition-all duration-200 glow shadow-lg login-trigger">
                    Start Building Now
                </button>
                <button class="glass-effect px-6 sm:px-8 py-3 sm:py-4 rounded-full font-semibold text-base sm:text-lg text-white hover:bg-white hover:bg-opacity-25 transition-all duration-200 border border-white border-opacity-30 login-trigger">
                    View Live Demo
                </button>
                @else
                <a href="{{ route('resume-build') }}" class="bg-white text-blue-700 px-6 sm:px-8 py-3 sm:py-4 rounded-full font-bold text-base sm:text-lg hover:scale-105 transition-all duration-200 glow shadow-lg">
                    Start Building Now
                </a>
                <a href="{{ route('resume-build') }}" class="glass-effect px-6 sm:px-8 py-3 sm:py-4 rounded-full font-semibold text-base sm:text-lg text-white hover:bg-white hover:bg-opacity-25 transition-all duration-200 border border-white border-opacity-30">
                    View Live Demo
                </a>
                @endguest
            </div>
            
            <p class="text-blue-100 mt-8 text-sm">No credit card required. 7-day money-back guarantee.</p>
        </div>
    </section>

    @include('includes.footer')