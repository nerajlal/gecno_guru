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
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-6">Career Coaching</h1>
                <p class="text-xl text-blue-50 mb-8 max-w-3xl mx-auto leading-relaxed">
                    Unlock your potential and land your dream job with our expert career coaching.
                </p>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">Our Career Coaching Services</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">We provide comprehensive support to help you succeed in your job search.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-3xl card-hover">
                    <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-chalkboard-teacher text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Online Interview Preparation</h3>
                    <p class="text-gray-700">Ace your interviews with our personalized online coaching sessions and expert tips.</p>
                </div>

                <div class="bg-gray-50 p-8 rounded-3xl card-hover">
                    <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-book-open text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Study Materials</h3>
                    <p class="text-gray-700">Access our comprehensive library of study materials to prepare for technical and behavioral assessments.</p>
                </div>

                <div class="bg-gray-50 p-8 rounded-3xl card-hover">
                    <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-file-alt text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Mock Tests</h3>
                    <p class="text-gray-700">Simulate real interview scenarios with our mock tests and receive detailed feedback.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">How It Works</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Get started with our career coaching in a few simple steps.</p>
            </div>

            <div class="grid md:grid-cols-4 gap-8">

                <div class="step-card bg-white p-6 rounded-2xl">
                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-lg mb-4">1</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Choose Your Service</h3>
                    <p class="text-gray-700">Select the coaching service that best fits your needs.</p>
                </div>

                <div class="step-card bg-white p-6 rounded-2xl">
                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-lg mb-4">2</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Schedule a Session</h3>
                    <p class="text-gray-700">Book a session with one of our expert career coaches.</p>
                </div>

                <div class="step-card bg-white p-6 rounded-2xl">
                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-lg mb-4">3</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Get Personalized Coaching</h3>
                    <p class="text-gray-700">Receive one-on-one guidance and support to achieve your career goals.</p>
                </div>

                <div class="step-card bg-white p-6 rounded-2xl">
                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-lg mb-4">4</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Land Your Dream Job</h3>
                    <p class="text-gray-700">Apply for jobs with confidence and get the offer you deserve.</p>
                </div>
            </div>
            <div class="text-center mt-12">
                @guest
                <button class="bg-blue-600 text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-blue-700 transition-all duration-200 login-trigger">
                    Start Building Now
                </button>
                @else
                <a href="{{ route('career-template') }}" class="bg-blue-600 text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-blue-700 transition-all duration-200">
                    Start Building Now
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
                <p class="text-xl text-blue-50 max-w-3xl mx-auto">See how our career coaching has helped professionals land their dream jobs</p>
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
                    <p class="text-blue-50">"The interview prep was a game-changer. I felt so confident and prepared, and it showed. I got the job!"</p>
                </div>

                <div class="glass-effect p-8 rounded-3xl">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-400 rounded-full"></div>
                        <div class="ml-4">
                            <h4 class="text-white font-bold">Michael Chen</h4>
                            <p class="text-blue-100">Marketing Director at Nike</p>
                        </div>
                    </div>
                    <p class="text-blue-50">"The mock tests were incredibly helpful. I was able to identify my weaknesses and work on them before the real interview."</p>
                </div>

                <div class="glass-effect p-8 rounded-3xl">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-purple-400 rounded-full"></div>
                        <div class="ml-4">
                            <h4 class="text-white font-bold">Jessica Williams</h4>
                            <p class="text-blue-100">Senior Product Manager at Airbnb</p>
                        </div>
                    </div>
                    <p class="text-blue-50">"The study materials were top-notch. I learned so much and was able to impress the hiring manager with my knowledge."</p>
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
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-6 drop-shadow-lg">Ready to Take the Next Step in Your Career?</h2>
            <p class="text-lg sm:text-xl text-blue-50 mb-10 max-w-2xl mx-auto drop-shadow-md">Join thousands of professionals who have transformed their careers with our expert coaching.</p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                @guest
                <button class="bg-white text-blue-700 px-6 sm:px-8 py-3 sm:py-4 rounded-full font-bold text-base sm:text-lg hover:scale-105 transition-all duration-200 glow shadow-lg login-trigger">
                    Get Started Now
                </button>
                <button class="glass-effect px-6 sm:px-8 py-3 sm:py-4 rounded-full font-semibold text-base sm:text-lg text-white hover:bg-white hover:bg-opacity-25 transition-all duration-200 border border-white border-opacity-30 login-trigger">
                    View Pricing
                </button>
                @else
                <a href="{{ route('career-template') }}" class="bg-white text-blue-700 px-6 sm:px-8 py-3 sm:py-4 rounded-full font-bold text-base sm:text-lg hover:scale-105 transition-all duration-200 glow shadow-lg">
                    Get Started Now
                </a>
                <a href="{{ route('career-template') }}" class="glass-effect px-6 sm:px-8 py-3 sm:py-4 rounded-full font-semibold text-base sm:text-lg text-white hover:bg-white hover:bg-opacity-25 transition-all duration-200 border border-white border-opacity-30">
                    View Pricing
                </a>
                @endguest
            </div>

            <p class="text-blue-100 mt-8 text-sm">Satisfaction guaranteed. 14-day money-back guarantee.</p>
        </div>
    </section>

@include('includes.footer')
