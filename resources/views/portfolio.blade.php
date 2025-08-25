@include('header')

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
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-6">AI Portfolio Builder</h1>
                <p class="text-xl text-blue-50 mb-8 max-w-3xl mx-auto leading-relaxed">
                    Create stunning portfolios that showcase your work and impress clients.
                </p>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">Why Choose Our AI Portfolio Builder?</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Create stunning portfolios that showcase your work and impress clients with cutting-edge AI technology</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-3xl card-hover">
                    <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-sparkles text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">AI-Curated Layouts</h3>
                    <p class="text-gray-700">Our AI analyzes your work and suggests the most impactful layout and presentation style for your portfolio.</p>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-3xl card-hover">
                    <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-mobile-screen text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Responsive Design</h3>
                    <p class="text-gray-700">Your portfolio looks perfect on all devices - desktop, tablet, and mobile with automatic optimization.</p>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-3xl card-hover">
                    <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-images text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Smart Media Optimization</h3>
                    <p class="text-gray-700">Automatically optimize images and videos for fast loading while maintaining stunning visual quality.</p>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-3xl card-hover">
                    <div class="w-16 h-16 bg-yellow-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-code text-yellow-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">No Code Required</h3>
                    <p class="text-gray-700">Build professional portfolios without any coding knowledge using our intuitive drag-and-drop interface.</p>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-3xl card-hover">
                    <div class="w-16 h-16 bg-red-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-chart-line text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Analytics Dashboard</h3>
                    <p class="text-gray-700">Track visitor engagement, popular projects, and get insights to improve your portfolio performance.</p>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-3xl card-hover">
                    <div class="w-16 h-16 bg-indigo-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-globe text-indigo-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Custom Domain</h3>
                    <p class="text-gray-700">Connect your own domain name to create a professional online presence that reflects your brand.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">How It Works</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Build your stunning portfolio in just a few simple steps</p>
            </div>
            
            <div class="grid md:grid-cols-4 gap-8">
                
                <div class="step-card bg-white p-6 rounded-2xl">
                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-lg mb-4">1</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Upload Your Work</h3>
                    <p class="text-gray-700">Upload your projects, images, videos, and case studies to our secure platform.</p>
                </div>
                
                <div class="step-card bg-white p-6 rounded-2xl">
                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-lg mb-4">2</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">AI Curation</h3>
                    <p class="text-gray-700">Our AI analyzes your work and suggests the best layout and presentation style.</p>
                </div>
                
                <div class="step-card bg-white p-6 rounded-2xl">
                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-lg mb-4">3</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Customize Design</h3>
                    <p class="text-gray-700">Fine-tune colors, fonts, and layouts to match your personal brand and style.</p>
                </div>

                <div class="step-card bg-white p-6 rounded-2xl">
                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-lg mb-4">4</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Publish & Share</h3>
                    <p class="text-gray-700">Launch your portfolio with a custom domain and start impressing clients.</p>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <button class="bg-blue-600 text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-blue-700 transition-all duration-200">
                    Start Building Now
                </button>
            </div>
        </div>
    </section>

    <!-- Templates Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">Stunning Portfolio Templates</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Choose from professionally designed templates for every creative field</p>
            </div>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="template-card bg-gray-100 rounded-2xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Designer Portfolio Template" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Designer</h3>
                        <p class="text-gray-700 mb-4">Perfect for graphic designers and visual artists</p>
                        <span class="feature-badge text-white text-sm px-3 py-1 rounded-full">Most Popular</span>
                    </div>
                </div>
                
                <div class="template-card bg-gray-100 rounded-2xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Developer Portfolio Template" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Developer</h3>
                        <p class="text-gray-700 mb-4">Showcase your coding projects and technical skills</p>
                    </div>
                </div>
                
                <div class="template-card bg-gray-100 rounded-2xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Photographer Portfolio Template" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Photographer</h3>
                        <p class="text-gray-700 mb-4">Stunning galleries for photographers and visual storytellers</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <button class="text-blue-600 font-bold hover:text-blue-700 transition-colors duration-200 flex items-center justify-center">
                    View All Templates 
                    <i class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform duration-200"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 gradient-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-6">Success Stories</h2>
                <p class="text-xl text-blue-50 max-w-3xl mx-auto">See how our AI Portfolio Builder has transformed creative careers</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="glass-effect p-8 rounded-3xl">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-400 rounded-full"></div>
                        <div class="ml-4">
                            <h4 class="text-white font-bold">Maya Patel</h4>
                            <p class="text-blue-100">UI/UX Designer at Airbnb</p>
                        </div>
                    </div>
                    <p class="text-blue-50">"The AI perfectly organized my design projects and created a flow that tells my story. I got 5 job offers within a month!"</p>
                </div>
                
                <div class="glass-effect p-8 rounded-3xl">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-400 rounded-full"></div>
                        <div class="ml-4">
                            <h4 class="text-white font-bold">James Wilson</h4>
                            <p class="text-blue-100">Full-Stack Developer</p>
                        </div>
                    </div>
                    <p class="text-blue-50">"My portfolio now showcases my code beautifully. Client inquiries increased by 300% after launching with GecnoGuru!"</p>
                </div>
                
                <div class="glass-effect p-8 rounded-3xl">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-purple-400 rounded-full"></div>
                        <div class="ml-4">
                            <h4 class="text-white font-bold">Sophie Martinez</h4>
                            <p class="text-blue-100">Wedding Photographer</p>
                        </div>
                    </div>
                    <p class="text-blue-50">"The gallery templates are stunning! My booking rate doubled and clients love browsing through my work online."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">Simple, Transparent Pricing</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Choose the plan that showcases your work in the best light</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-3xl border border-gray-200">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Creative</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-gray-900">$12</span>
                        <span class="text-gray-600">/month</span>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>5 Portfolio Templates</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>Up to 20 Projects</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>Basic Analytics</span>
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fa-solid fa-xmark mr-2"></i>
                            <span>Custom Domain</span>
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fa-solid fa-xmark mr-2"></i>
                            <span>Advanced SEO Tools</span>
                        </li>
                    </ul>
                    <button class="w-full bg-gray-200 text-gray-700 py-3 rounded-full font-semibold hover:bg-gray-300 transition-colors duration-200">
                        Get Started
                    </button>
                </div>
                
                <div class="bg-blue-50 p-8 rounded-3xl border border-blue-200 relative">
                    <span class="absolute top-0 right-0 bg-blue-600 text-white px-4 py-1 rounded-bl-lg rounded-tr-lg font-semibold">Most Popular</span>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Professional</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-gray-900">$25</span>
                        <span class="text-gray-600">/month</span>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>All Portfolio Templates</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>Unlimited Projects</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>Advanced Analytics</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>Custom Domain</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>Advanced SEO Tools</span>
                        </li>
                    </ul>
                    <button class="w-full bg-blue-600 text-white py-3 rounded-full font-semibold hover:bg-blue-700 transition-colors duration-200">
                        Get Started
                    </button>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-3xl border border-gray-200">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Agency</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-gray-900">$49</span>
                        <span class="text-gray-600">/month</span>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>All Professional Features</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>White-Label Solutions</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>Client Management Tools</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>Team Collaboration</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>Priority Support</span>
                        </li>
                    </ul>
                    <button class="w-full bg-gray-200 text-gray-700 py-3 rounded-full font-semibold hover:bg-gray-300 transition-colors duration-200">
                        Get Started
                    </button>
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
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-6 drop-shadow-lg">Ready to Showcase Your Creative Work?</h2>
            <p class="text-lg sm:text-xl text-blue-50 mb-10 max-w-2xl mx-auto drop-shadow-md">Join thousands of creatives who have elevated their careers with stunning AI-powered portfolios.</p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-white text-blue-700 px-6 sm:px-8 py-3 sm:py-4 rounded-full font-bold text-base sm:text-lg hover:scale-105 transition-all duration-200 glow shadow-lg">
                    Start Building Now
                </button>
                <button class="glass-effect px-6 sm:px-8 py-3 sm:py-4 rounded-full font-semibold text-base sm:text-lg text-white hover:bg-white hover:bg-opacity-25 transition-all duration-200 border border-white border-opacity-30">
                    View Live Examples
                </button>
            </div>
            
            <p class="text-blue-100 mt-8 text-sm">14-day free trial. Cancel anytime.</p>
        </div>
    </section>

@include('footer')