@include('includes.header')

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
        
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        
        .floating {
            animation: floating 6s ease-in-out infinite;
        }
        
        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .glow {
            box-shadow: 0 0 30px rgba(30, 64, 175, 0.4);
        }
        
        .text-gradient {
            background: linear-gradient(135deg, #60a5fa, #a855f7);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .pulse-ring {
            animation: pulse-ring 2s infinite;
        }
        
        @keyframes pulse-ring {
            0% { transform: scale(1); opacity: 1; }
            100% { transform: scale(1.5); opacity: 0; }
        }
        
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease-out;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .service-icon {
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 20px;
            margin-bottom: 1.5rem;
            font-size: 2rem;
            color: white;
        }
        
        .tab-content {
            display: none;
        }
        
        .tab-content.active {
            display: block;
            animation: fadeIn 0.5s ease-in-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .nav-tab {
            transition: all 0.3s ease;
            border-bottom: 3px solid transparent;
        }
        
        .nav-tab.active {
            border-bottom-color: #3b82f6;
            color: #3b82f6;
        }
        
        .testimonial-card {
            transition: all 0.3s ease;
        }
        
        .testimonial-card:hover {
            transform: scale(1.03);
        }
        
        /* Mobile menu styles */
        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
        }
        
        .mobile-menu.active {
            transform: translateX(0);
        }
        
        /* Hamburger menu */
        .hamburger {
            cursor: pointer;
            width: 24px;
            height: 24px;
            position: relative;
        }
        
        .hamburger-top,
        .hamburger-middle,
        .hamburger-bottom {
            position: absolute;
            top: 0;
            left: 0;
            width: 24px;
            height: 2px;
            background: white;
            transform: rotate(0);
            transition: all 0.5s;
        }
        
        .hamburger-middle {
            transform: translateY(7px);
        }
        
        .hamburger-bottom {
            transform: translateY(14px);
        }
        
        .open .hamburger-top {
            transform: rotate(45deg) translateY(6px) translateX(6px);
        }
        
        .open .hamburger-middle {
            display: none;
        }
        
        .open .hamburger-bottom {
            transform: rotate(-45deg) translateY(6px) translateX(-6px);
        }
    </style>

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
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-6">Our Premium Services</h1>
                <p class="text-xl text-blue-50 mb-8 max-w-3xl mx-auto leading-relaxed">
                    Discover our comprehensive suite of career development tools designed to help you succeed in today's competitive job market.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="group relative bg-white text-blue-700 px-6 sm:px-8 py-3 sm:py-4 rounded-full font-bold text-base sm:text-lg overflow-hidden hover:scale-105 transition-all duration-200 glow shadow-lg">
                        <span class="relative z-10">Explore All Services</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-200"></div>
                    </button>
                    <button class="glass-effect px-6 sm:px-8 py-3 sm:py-4 rounded-full font-semibold text-base sm:text-lg text-white hover:bg-white hover:bg-opacity-25 transition-all duration-200 border border-white border-opacity-30">
                        <i class="fa-solid fa-calendar mr-2"></i>Book a Consultation
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Navigation -->
    <section class="py-12 bg-white sticky top-16 z-30 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex overflow-x-auto scrollbar-hide space-x-2 md:space-x-8 justify-center">
                <button class="nav-tab px-4 py-2 font-medium text-gray-700 whitespace-nowrap active" data-tab="resume">
                    <i class="fa-solid fa-file-lines mr-2"></i>Resume Builder
                </button>
                <button class="nav-tab px-4 py-2 font-medium text-gray-700 whitespace-nowrap" data-tab="coverletter">
                    <i class="fa-solid fa-envelope-open-text mr-2"></i>Cover Letters
                </button>
                <button class="nav-tab px-4 py-2 font-medium text-gray-700 whitespace-nowrap" data-tab="portfolio">
                    <i class="fa-solid fa-globe mr-2"></i>Portfolio Websites
                </button>
                <button class="nav-tab px-4 py-2 font-medium text-gray-700 whitespace-nowrap" data-tab="coaching">
                    <i class="fa-solid fa-graduation-cap mr-2"></i>Career Coaching
                </button>
                <button class="nav-tab px-4 py-2 font-medium text-gray-700 whitespace-nowrap" data-tab="interview">
                    <i class="fa-solid fa-comments mr-2"></i>Interview Prep
                </button>
            </div>
        </div>
    </section>

    <!-- Services Content -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Resume Builder -->
            <div class="tab-content active" id="resume">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">AI Resume Builder</h2>
                        <p class="text-lg text-gray-700 mb-6">
                            Create stunning, ATS-optimized resumes with our intelligent builder. Our AI analyzes thousands of successful resumes to generate impactful content tailored to your industry.
                        </p>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-green-500 text-xl mt-1 mr-3"></i>
                                <span>ATS-friendly templates that pass applicant tracking systems</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-green-500 text-xl mt-1 mr-3"></i>
                                <span>AI-powered content suggestions based on your industry</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-green-500 text-xl mt-1 mr-3"></i>
                                <span>Customizable designs that showcase your unique personality</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-green-500 text-xl mt-1 mr-3"></i>
                                <span>Export to PDF, Word, or plain text formats</span>
                            </li>
                        </ul>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <button class="bg-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-700 transition-colors duration-200">
                                Try Resume Builder
                            </button>
                            <button class="border border-blue-600 text-blue-600 px-6 py-3 rounded-full font-semibold hover:bg-blue-50 transition-colors duration-200">
                                View Samples
                            </button>
                        </div>
                    </div>
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1542435503-956c469947f6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Resume example" class="rounded-2xl shadow-xl">
                        <div class="absolute -bottom-6 -left-6 w-24 h-24 bg-yellow-400 rounded-full opacity-20 floating"></div>
                        <div class="absolute -top-6 -right-6 w-16 h-16 bg-blue-500 rounded-full opacity-20 floating" style="animation-delay: -2s;"></div>
                    </div>
                </div>
            </div>

            <!-- Cover Letter Builder -->
            <div class="tab-content" id="coverletter">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="lg:order-2">
                        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">Smart Cover Letters</h2>
                        <p class="text-lg text-gray-700 mb-6">
                            Generate personalized, compelling cover letters that capture attention and showcase your unique value proposition. Our AI helps you tailor each letter to specific job applications.
                        </p>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-green-500 text-xl mt-1 mr-3"></i>
                                <span>Customized for each job application with company-specific insights</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-green-500 text-xl mt-1 mr-3"></i>
                                <span>AI-powered content that highlights your most relevant skills</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-green-500 text-xl mt-1 mr-3"></i>
                                <span>Professional templates that match your resume design</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-green-500 text-xl mt-1 mr-3"></i>
                                <span>Save and manage multiple versions for different applications</span>
                            </li>
                        </ul>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <button class="bg-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-700 transition-colors duration-200">
                                Create Cover Letter
                            </button>
                            <button class="border border-blue-600 text-blue-600 px-6 py-3 rounded-full font-semibold hover:bg-blue-50 transition-colors duration-200">
                                View Templates
                            </button>
                        </div>
                    </div>
                    <div class="lg:order-1 relative">
                        <img src="https://images.unsplash.com/photo-1586281380117-5a60ae2050cc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Cover letter example" class="rounded-2xl shadow-xl">
                        <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-purple-400 rounded-full opacity-20 floating"></div>
                        <div class="absolute -top-6 -left-6 w-16 h-16 bg-green-400 rounded-full opacity-20 floating" style="animation-delay: -3s;"></div>
                    </div>
                </div>
            </div>

            <!-- Portfolio Websites -->
            <div class="tab-content" id="portfolio">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">Portfolio Websites</h2>
                        <p class="text-lg text-gray-700 mb-6">
                            Build a stunning online presence with our portfolio builder. Showcase your work, skills, and experience with customizable templates designed to impress potential employers and clients.
                        </p>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-green-500 text-xl mt-1 mr-3"></i>
                                <span>Professional templates designed for your industry</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-green-500 text-xl mt-1 mr-3"></i>
                                <span>Drag-and-drop editor with no coding required</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-green-500 text-xl mt-1 mr-3"></i>
                                <span>Custom domain name and hosting included</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-green-500 text-xl mt-1 mr-3"></i>
                                <span>Mobile-responsive designs that look great on all devices</span>
                            </li>
                        </ul>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <button class="bg-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-700 transition-colors duration-200">
                                Build Your Portfolio
                            </button>
                            <button class="border border-blue-600 text-blue-600 px-6 py-3 rounded-full font-semibold hover:bg-blue-50 transition-colors duration-200">
                                View Examples
                            </button>
                        </div>
                    </div>
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1516339901601-2e1b62dc0c45?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Portfolio example" class="rounded-2xl shadow-xl">
                        <div class="absolute -bottom-6 -left-6 w-24 h-24 bg-pink-400 rounded-full opacity-20 floating"></div>
                        <div class="absolute -top-6 -right-6 w-16 h-16 bg-blue-400 rounded-full opacity-20 floating" style="animation-delay: -2s;"></div>
                    </div>
                </div>
            </div>

            <!-- Career Coaching -->
            <div class="tab-content" id="coaching">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">Career Coaching</h2>
                        <p class="text-lg text-gray-700 mb-6">
                            Get personalized guidance from industry experts to accelerate your career growth. Our coaches provide tailored advice to help you navigate your career path with confidence.
                        </p>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-green-500 text-xl mt-1 mr-3"></i>
                                <span>One-on-one sessions with experienced career coaches</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-green-500 text-xl mt-1 mr-3"></i>
                                <span>Career path planning and goal setting</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-green-500 text-xl mt-1 mr-3"></i>
                                <span>Salary negotiation strategies and practice</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-green-500 text-xl mt-1 mr-3"></i>
                                <span>Personalized action plans with measurable milestones</span>
                            </li>
                        </ul>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <button class="bg-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-700 transition-colors duration-200">
                                Find a Coach
                            </button>
                            <button class="border border-blue-600 text-blue-600 px-6 py-3 rounded-full font-semibold hover:bg-blue-50 transition-colors duration-200">
                                View Coach Profiles
                            </button>
                        </div>
                    </div>
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Career coaching" class="rounded-2xl shadow-xl">
                        <div class="absolute -bottom-6 -left-6 w-24 h-24 bg-green-400 rounded-full opacity-20 floating"></div>
                        <div class="absolute -top-6 -right-6 w-16 h-16 bg-purple-400 rounded-full opacity-20 floating" style="animation-delay: -2s;"></div>
                    </div>
                </div>
            </div>

            <!-- Interview Preparation -->
            <div class="tab-content" id="interview">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="lg:order-2">
                        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">Interview Preparation</h2>
                        <p class="text-lg text-gray-700 mb-6">
                            Master the art of interviewing with our comprehensive preparation services. From mock interviews to personalized feedback, we'll help you build confidence and ace your next interview.
                        </p>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-green-500 text-xl mt-1 mr-3"></i>
                                <span>Mock interviews with industry-specific questions</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-green-500 text-xl mt-1 mr-3"></i>
                                <span>Personalized feedback on your answers and delivery</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-green-500 text-xl mt-1 mr-3"></i>
                                <span>Body language and communication技巧 training</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-green-500 text-xl mt-1 mr-3"></i>
                                <span>Company-specific research and question preparation</span>
                            </li>
                        </ul>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <button class="bg-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-700 transition-colors duration-200">
                                Prepare for Interviews
                            </button>
                            <button class="border border-blue-600 text-blue-600 px-6 py-3 rounded-full font-semibold hover:bg-blue-50 transition-colors duration-200">
                                Common Questions
                            </button>
                        </div>
                    </div>
                    <div class="lg:order-1 relative">
                        <img src="https://images.unsplash.com/photo-1588200908342-23b585c03e26?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Interview preparation" class="rounded-2xl shadow-xl">
                        <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-red-400 rounded-full opacity-20 floating"></div>
                        <div class="absolute -top-6 -left-6 w-16 h-16 bg-blue-400 rounded-full opacity-20 floating" style="animation-delay: -3s;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- All Services Overview -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">Our Complete Service Suite</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Everything you need to advance your career in one place</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-3xl card-hover">
                    <div class="service-icon bg-blue-500">
                        <i class="fa-solid fa-file-lines"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">AI Resume Builder</h3>
                    <p class="text-gray-700 mb-6">Create ATS-optimized resumes with AI-powered content suggestions and professional templates.</p>
                    <a href="/resume" class="text-blue-600 font-semibold hover:text-blue-700 transition-colors duration-200 flex items-center">
                        Learn More <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-3xl card-hover">
                    <div class="service-icon bg-green-500">
                        <i class="fa-solid fa-envelope-open-text"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Cover Letters</h3>
                    <p class="text-gray-700 mb-6">Generate personalized cover letters tailored to specific job applications and companies.</p>
                    <a href="/coverletter" class="text-green-600 font-semibold hover:text-green-700 transition-colors duration-200 flex items-center">
                        Learn More <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-3xl card-hover">
                    <div class="service-icon bg-purple-500">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Portfolio Websites</h3>
                    <p class="text-gray-700 mb-6">Build stunning online portfolios to showcase your work and attract opportunities.</p>
                    <a href="/portfolio" class="text-purple-600 font-semibold hover:text-purple-700 transition-colors duration-200 flex items-center">
                        Learn More <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-3xl card-hover">
                    <div class="service-icon bg-yellow-500">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Career Coaching</h3>
                    <p class="text-gray-700 mb-6">Get personalized guidance from industry experts to accelerate your career growth.</p>
                    <a href="#" class="text-yellow-600 font-semibold hover:text-yellow-700 transition-colors duration-200 flex items-center">
                        Learn More <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-3xl card-hover">
                    <div class="service-icon bg-red-500">
                        <i class="fa-solid fa-comments"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Interview Preparation</h3>
                    <p class="text-gray-700 mb-6">Master the art of interviewing with mock sessions and personalized feedback.</p>
                    <a href="#" class="text-red-600 font-semibold hover:text-red-700 transition-colors duration-200 flex items-center">
                        Learn More <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <script>
        // Services Page JavaScript - Complete Implementation

        document.addEventListener('DOMContentLoaded', function() {
            // Initialize all functionality
            initTabNavigation();
            initScrollAnimations();
            initMobileMenu();
            initSmoothScrolling();
            initHoverEffects();
            initIntersectionObserver();
        });

        // Tab Navigation System
        function initTabNavigation() {
            const tabs = document.querySelectorAll('.nav-tab');
            const tabContents = document.querySelectorAll('.tab-content');
            
            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    const targetTab = this.getAttribute('data-tab');
                    
                    // Remove active class from all tabs and contents
                    tabs.forEach(t => t.classList.remove('active'));
                    tabContents.forEach(content => content.classList.remove('active'));
                    
                    // Add active class to clicked tab and corresponding content
                    this.classList.add('active');
                    const targetContent = document.getElementById(targetTab);
                    if (targetContent) {
                        targetContent.classList.add('active');
                        
                        // Add entrance animation
                        targetContent.style.opacity = '0';
                        targetContent.style.transform = 'translateY(20px)';
                        
                        setTimeout(() => {
                            targetContent.style.transition = 'all 0.5s ease-out';
                            targetContent.style.opacity = '1';
                            targetContent.style.transform = 'translateY(0)';
                        }, 50);
                    }
                    
                    // Update URL hash without scrolling
                    history.pushState(null, null, `#${targetTab}`);
                });
            });
            
            // Handle initial hash navigation
            const hash = window.location.hash.substring(1);
            if (hash) {
                const targetTab = document.querySelector(`[data-tab="${hash}"]`);
                if (targetTab) {
                    targetTab.click();
                }
            }
        }

        // Scroll Animations
        function initScrollAnimations() {
            const animatedElements = document.querySelectorAll('.fade-in');
            
            const animateOnScroll = () => {
                animatedElements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const elementVisible = 150;
                    
                    if (elementTop < window.innerHeight - elementVisible) {
                        element.classList.add('visible');
                    }
                });
            };
            
            // Initial check
            animateOnScroll();
            
            // Listen for scroll events with throttling
            let ticking = false;
            window.addEventListener('scroll', () => {
                if (!ticking) {
                    requestAnimationFrame(() => {
                        animateOnScroll();
                        ticking = false;
                    });
                    ticking = true;
                }
            });
        }

        // Mobile Menu Functionality
        function initMobileMenu() {
            const hamburger = document.querySelector('.hamburger');
            const mobileMenu = document.querySelector('.mobile-menu');
            
            if (hamburger && mobileMenu) {
                hamburger.addEventListener('click', function() {
                    this.classList.toggle('open');
                    mobileMenu.classList.toggle('active');
                    
                    // Prevent body scrolling when menu is open
                    if (mobileMenu.classList.contains('active')) {
                        document.body.style.overflow = 'hidden';
                    } else {
                        document.body.style.overflow = '';
                    }
                });
                
                // Close mobile menu when clicking on links
                const mobileLinks = mobileMenu.querySelectorAll('a');
                mobileLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        hamburger.classList.remove('open');
                        mobileMenu.classList.remove('active');
                        document.body.style.overflow = '';
                    });
                });
                
                // Close mobile menu on window resize
                window.addEventListener('resize', () => {
                    if (window.innerWidth >= 768) {
                        hamburger.classList.remove('open');
                        mobileMenu.classList.remove('active');
                        document.body.style.overflow = '';
                    }
                });
            }
        }

        // Smooth Scrolling for Anchor Links
        function initSmoothScrolling() {
            const anchorLinks = document.querySelectorAll('a[href^="#"]');
            
            anchorLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');
                    
                    // Skip if it's just a hash or tab navigation
                    if (href === '#' || this.hasAttribute('data-tab')) {
                        return;
                    }
                    
                    const targetElement = document.querySelector(href);
                    if (targetElement) {
                        e.preventDefault();
                        
                        const headerOffset = 100; // Account for sticky header
                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                        
                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        }

        // Enhanced Hover Effects
        function initHoverEffects() {
            // Service cards hover effects
            const serviceCards = document.querySelectorAll('.card-hover');
            
            serviceCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-8px) scale(1.02)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });
            
            // Button hover effects with ripple
            const buttons = document.querySelectorAll('button');
            
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    const ripple = document.createElement('span');
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;
                    
                    ripple.style.cssText = `
                        position: absolute;
                        width: ${size}px;
                        height: ${size}px;
                        left: ${x}px;
                        top: ${y}px;
                        background: rgba(255, 255, 255, 0.3);
                        border-radius: 50%;
                        transform: scale(0);
                        animation: ripple 0.6s ease-out;
                        pointer-events: none;
                    `;
                    
                    this.style.position = 'relative';
                    this.style.overflow = 'hidden';
                    this.appendChild(ripple);
                    
                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });
        }

        // Intersection Observer for Advanced Animations
        function initIntersectionObserver() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-in');
                        
                        // Stagger animations for child elements
                        const children = entry.target.querySelectorAll('.stagger-animation');
                        children.forEach((child, index) => {
                            setTimeout(() => {
                                child.classList.add('animate-in');
                            }, index * 100);
                        });
                    }
                });
            }, observerOptions);
            
            // Observe sections and service cards
            const observeElements = document.querySelectorAll('section, .card-hover');
            observeElements.forEach(el => observer.observe(el));
        }

        // Sticky Navigation Enhancement
        function initStickyNavigation() {
            const navSection = document.querySelector('.sticky');
            const hero = document.querySelector('.gradient-bg');
            
            if (navSection && hero) {
                const heroHeight = hero.offsetHeight;
                
                window.addEventListener('scroll', () => {
                    if (window.pageYOffset > heroHeight - 100) {
                        navSection.classList.add('shadow-lg');
                    } else {
                        navSection.classList.remove('shadow-lg');
                    }
                });
            }
        }

        // Parallax Effect for Hero Section
        function initParallaxEffect() {
            const hero = document.querySelector('.gradient-bg');
            const floatingElements = hero.querySelectorAll('.floating');
            
            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                const rate = scrolled * -0.5;
                
                floatingElements.forEach((element, index) => {
                    const speed = (index + 1) * 0.2;
                    element.style.transform = `translateY(${rate * speed}px)`;
                });
            });
        }

        // Form Validation (if forms are added)
        function initFormValidation() {
            const forms = document.querySelectorAll('form');
            
            forms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    const inputs = this.querySelectorAll('input[required], textarea[required]');
                    let isValid = true;
                    
                    inputs.forEach(input => {
                        if (!input.value.trim()) {
                            isValid = false;
                            input.classList.add('border-red-500');
                            
                            // Create error message if doesn't exist
                            if (!input.nextElementSibling || !input.nextElementSibling.classList.contains('error-message')) {
                                const errorMsg = document.createElement('span');
                                errorMsg.className = 'error-message text-red-500 text-sm mt-1';
                                errorMsg.textContent = 'This field is required';
                                input.parentNode.insertBefore(errorMsg, input.nextSibling);
                            }
                        } else {
                            input.classList.remove('border-red-500');
                            const errorMsg = input.nextElementSibling;
                            if (errorMsg && errorMsg.classList.contains('error-message')) {
                                errorMsg.remove();
                            }
                        }
                    });
                    
                    if (isValid) {
                        // Handle form submission
                        showNotification('Form submitted successfully!', 'success');
                    }
                });
            });
        }

        // Notification System
        function showNotification(message, type = 'info') {
            const notification = document.createElement('div');
            notification.className = `fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg transform translate-x-full transition-transform duration-300 ${
                type === 'success' ? 'bg-green-500 text-white' :
                type === 'error' ? 'bg-red-500 text-white' :
                'bg-blue-500 text-white'
            }`;
            notification.textContent = message;
            
            document.body.appendChild(notification);
            
            // Slide in
            setTimeout(() => {
                notification.style.transform = 'translateX(0)';
            }, 100);
            
            // Slide out and remove
            setTimeout(() => {
                notification.style.transform = 'translateX(full)';
                setTimeout(() => {
                    notification.remove();
                }, 300);
            }, 3000);
        }

        // Loading Animation
        function showLoading(element) {
            const loader = document.createElement('div');
            loader.className = 'flex items-center justify-center p-4';
            loader.innerHTML = `
                <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-500"></div>
                <span class="ml-2">Loading...</span>
            `;
            element.innerHTML = '';
            element.appendChild(loader);
        }

        // Utility Functions
        function debounce(func, wait) {
            let timeout;
            return function executedFunction(...args) {
                const later = () => {
                    clearTimeout(timeout);
                    func(...args);
                };
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
            };
        }

        function throttle(func, limit) {
            let inThrottle;
            return function() {
                const args = arguments;
                const context = this;
                if (!inThrottle) {
                    func.apply(context, args);
                    inThrottle = true;
                    setTimeout(() => inThrottle = false, limit);
                }
            };
        }

        // CSS Animation Styles (to be added to the existing CSS)
        const additionalStyles = `
            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
            
            .animate-in {
                opacity: 1 !important;
                transform: translateY(0) !important;
            }
            
            .stagger-animation {
                opacity: 0;
                transform: translateY(20px);
                transition: all 0.6s ease-out;
            }
            
            .stagger-animation.animate-in {
                opacity: 1;
                transform: translateY(0);
            }
            
            @media (prefers-reduced-motion: reduce) {
                *, *::before, *::after {
                    animation-duration: 0.01ms !important;
                    animation-iteration-count: 1 !important;
                    transition-duration: 0.01ms !important;
                    scroll-behavior: auto !important;
                }
                
                .floating {
                    animation: none !important;
                }
            }
        `;

        // Add additional styles to the page
        const styleSheet = document.createElement('style');
        styleSheet.textContent = additionalStyles;
        document.head.appendChild(styleSheet);

        // Initialize parallax and sticky navigation
        initParallaxEffect();
        initStickyNavigation();
        initFormValidation();
    </script>


    @include('includes.footer')