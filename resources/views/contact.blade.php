@include('includes.header')

    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 gradient-bg overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-20 h-20 bg-white bg-opacity-10 rounded-full floating"></div>
            <div class="absolute top-40 right-20 w-16 h-16 bg-white bg-opacity-10 rounded-full floating" style="animation-delay: -2s;"></div>
            <div class="absolute bottom-40 left-1/4 w-12 h-12 bg-white bg-opacity-10 rounded-full floating" style="animation-delay: -4s;"></div>
            <div class="absolute top-1/2 right-1/3 w-8 h-8 bg-white bg-opacity-10 rounded-full floating" style="animation-delay: -1s;"></div>
            <div class="absolute bottom-20 right-10 w-14 h-14 bg-white bg-opacity-10 rounded-full floating" style="animation-delay: -3s;"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center text-white">
                <div class="section-reveal">
                    <h1 class="text-5xl sm:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                        Contact <span class="relative">
                            Us
                            <div class="absolute -bottom-2 left-0 right-0 h-1 bg-white bg-opacity-30 rounded"></div>
                        </span>
                    </h1>
                </div>
                <div class="section-reveal stagger-1">
                    <p class="text-xl sm:text-2xl text-blue-50 mb-8 max-w-4xl mx-auto leading-relaxed">
                        We'd love to hear from you. Get in touch for questions, support, or collaboration opportunities.
                    </p>
                </div>
                <div class="section-reveal stagger-2">
                    <div class="inline-flex items-center space-x-2 bg-white bg-opacity-10 rounded-full px-6 py-3">
                        <div class="typing-indicator text-green-300"></div>
                        <span class="response-time font-semibold">Typical response: 2-4 hours</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Contact Stats -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
                <div class="section-reveal stagger-1">
                    <div class="text-3xl font-bold text-blue-600 mb-2">
                        <i class="fas fa-clock mr-2"></i>24/7
                    </div>
                    <div class="text-gray-600">Support Available</div>
                </div>
                <div class="section-reveal stagger-2">
                    <div class="text-3xl font-bold text-blue-600 mb-2">
                        <i class="fas fa-reply mr-2"></i>2-4hrs
                    </div>
                    <div class="text-gray-600">Response Time</div>
                </div>
                <div class="section-reveal stagger-3">
                    <div class="text-3xl font-bold text-blue-600 mb-2">
                        <i class="fas fa-users mr-2"></i>5K+
                    </div>
                    <div class="text-gray-600">Happy Clients</div>
                </div>
                <div class="section-reveal stagger-4">
                    <div class="text-3xl font-bold text-blue-600 mb-2">
                        <i class="fas fa-star mr-2"></i>4.9/5
                    </div>
                    <div class="text-gray-600">Satisfaction Rate</div>
                </div>
            </div>
        </div>
    </section>

<main class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="section-reveal bg-white rounded-3xl shadow-2xl overflow-hidden glow">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <!-- Contact Form -->
                <div class="p-8 lg:p-12">
                    <div class="mb-8">
                        <h2 class="text-4xl font-bold text-gray-800 mb-4">
                            <i class="fas fa-paper-plane text-blue-600 mr-3"></i>
                            Get in Touch
                        </h2>
                        <p class="text-gray-600 leading-relaxed text-lg">
                            Have a question or need support? Fill out the form below, and our team will get back to you promptly.
                        </p>
                    </div>
                    
                    <form id="contactForm" action="#" method="POST" class="space-y-6">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="block text-gray-700 font-bold mb-3 text-lg">
                                <i class="fas fa-user mr-2 text-blue-600"></i>Full Name
                            </label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name" 
                                class="form-input w-full px-0 py-4 text-lg bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 transition-all duration-300"
                                placeholder="Enter your full name"
                                required
                            >
                            <div class="form-line"></div>
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="block text-gray-700 font-bold mb-3 text-lg">
                                <i class="fas fa-envelope mr-2 text-blue-600"></i>Email Address
                            </label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                class="form-input w-full px-0 py-4 text-lg bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 transition-all duration-300"
                                placeholder="Enter your email address"
                                required
                            >
                            <div class="form-line"></div>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject" class="block text-gray-700 font-bold mb-3 text-lg">
                                <i class="fas fa-tag mr-2 text-blue-600"></i>Subject
                            </label>
                            <select 
                                id="subject" 
                                name="subject" 
                                class="form-input w-full px-0 py-4 text-lg bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 transition-all duration-300"
                                required
                            >
                                <option value="">Select a subject</option>
                                <option value="general">General Inquiry</option>
                                <option value="support">Technical Support</option>
                                <option value="collaboration">Partnership/Collaboration</option>
                                <option value="feedback">Feedback</option>
                                <option value="other">Other</option>
                            </select>
                            <div class="form-line"></div>
                        </div>
                        
                        <div class="form-group">
                            <label for="message" class="block text-gray-700 font-bold mb-3 text-lg">
                                <i class="fas fa-comment mr-2 text-blue-600"></i>Message
                            </label>
                            <textarea 
                                id="message" 
                                name="message" 
                                rows="5" 
                                class="form-input w-full px-0 py-4 text-lg bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 transition-all duration-300 resize-none"
                                placeholder="Tell us more about how we can help you..."
                                required
                            ></textarea>
                            <div class="form-line"></div>
                        </div>
                        
                        <button 
                            type="submit" 
                            class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold py-4 px-8 rounded-2xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105 text-lg"
                        >
                            <i class="fas fa-paper-plane mr-2"></i>
                            Send Message
                        </button>
                    </form>
                </div>
                
                <!-- Contact Information -->
                <div class="bg-gradient-to-br from-blue-50 to-purple-50 p-8 lg:p-12">
                    <h2 class="text-4xl font-bold text-gray-800 mb-8">
                        <i class="fas fa-address-book text-purple-600 mr-3"></i>
                        Contact Information
                    </h2>
                    
                    <div class="space-y-8">
                        <div class="flex items-start group">
                            <div class="contact-icon w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg">
                                <i class="fas fa-envelope text-white text-xl"></i>
                            </div>
                            <div class="ml-6">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Email Us</h3>
                                <a href="mailto:teamgecnoguru@gmail.com" class="text-lg text-blue-600 hover:text-blue-800 transition-colors duration-300 font-medium">
                                    teamgecnoguru@gmail.com
                                </a>
                                <p class="text-sm text-gray-500 mt-1">We'll respond within 2-4 hours</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start group">
                            <div class="contact-icon w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center shadow-lg">
                                <i class="fas fa-phone text-white text-xl"></i>
                            </div>
                            <div class="ml-6">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Call Us</h3>
                                <div class="space-y-1">
                                    <a href="tel:+918547470675" class="block text-lg text-green-600 hover:text-green-800 transition-colors duration-300 font-medium">
                                        +91 85474 70675
                                    </a>
                                    <a href="tel:+918547349691" class="block text-lg text-green-600 hover:text-green-800 transition-colors duration-300 font-medium">
                                        +91 85473 49691
                                    </a>
                                </div>
                                <p class="text-sm text-gray-500 mt-1">Mon-Sat, 9 AM - 8 PM IST</p>
                            </div>
                        </div>
                        
                        <!-- <div class="flex items-start group">
                            <div class="contact-icon w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg">
                                <i class="fas fa-map-marker-alt text-white text-xl"></i>
                            </div>
                            <div class="ml-6">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Visit Us</h3>
                                <p class="text-lg text-purple-600 font-medium">123 GecnoGuru Street</p>
                                <p class="text-lg text-purple-600 font-medium">Tech City, India</p>
                                <p class="text-sm text-gray-500 mt-1">Open by appointment</p>
                            </div>
                        </div> -->
                    </div>
                    
                    <div class="mt-12">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">
                            <i class="fas fa-share-alt text-indigo-600 mr-2"></i>
                            Follow Us
                        </h3>
                        <div class="flex space-x-4">
                            <a href="#" class="social-icon w-14 h-14 bg-gradient-to-br from-blue-400 to-blue-500 rounded-2xl flex items-center justify-center text-white hover:shadow-lg transition-all duration-300 transform hover:scale-110">
                                <i class="fab fa-twitter text-xl"></i>
                            </a>
                            <a href="#" class="social-icon w-14 h-14 bg-gradient-to-br from-blue-600 to-blue-700 rounded-2xl flex items-center justify-center text-white hover:shadow-lg transition-all duration-300 transform hover:scale-110">
                                <i class="fab fa-linkedin-in text-xl"></i>
                            </a>
                            <a href="#" class="social-icon w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center text-white hover:shadow-lg transition-all duration-300 transform hover:scale-110">
                                <i class="fab fa-facebook-f text-xl"></i>
                            </a>
                            <a href="#" class="social-icon w-14 h-14 bg-gradient-to-br from-pink-400 to-pink-500 rounded-2xl flex items-center justify-center text-white hover:shadow-lg transition-all duration-300 transform hover:scale-110">
                                <i class="fab fa-instagram text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="section-reveal mt-20">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-question-circle text-blue-600 mr-3"></i>
                    Frequently Asked Questions
                </h2>
                <p class="text-xl text-gray-600">Quick answers to common questions</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-lg card-hover">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">
                        <i class="fas fa-clock text-blue-600 mr-2"></i>
                        What's your response time?
                    </h3>
                    <p class="text-gray-600">We typically respond to all inquiries within 2-4 hours during business hours (Mon-Sat, 9 AM - 8 PM IST).</p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-lg card-hover">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">
                        <i class="fas fa-handshake text-blue-600 mr-2"></i>
                        Do you offer consultations?
                    </h3>
                    <p class="text-gray-600">Yes! We offer free 30-minute consultations to discuss your career goals and how we can help you achieve them.</p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-lg card-hover">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">
                        <i class="fas fa-globe text-blue-600 mr-2"></i>
                        Do you work with international clients?
                    </h3>
                    <p class="text-gray-600">Absolutely! We work with clients worldwide and accommodate different time zones for meetings and support.</p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-lg card-hover">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">
                        <i class="fas fa-shield-alt text-blue-600 mr-2"></i>
                        Is my information secure?
                    </h3>
                    <p class="text-gray-600">Yes, we take data security seriously. All communications and personal information are encrypted and kept confidential.</p>
                </div>
            </div>
        </div>
    </div>
</main>

@include('includes.footer')

