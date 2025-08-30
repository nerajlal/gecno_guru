<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About GecnoGuru - Empowering Careers Through Innovation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .floating {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .parallax-bg {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
        }
        
        .card-hover {
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        }
        
        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        
        .glow {
            box-shadow: 0 0 20px rgba(102, 126, 234, 0.3);
        }
        
        .text-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .section-reveal {
            opacity: 0;
            transform: translateY(30px);
            animation: reveal 0.8s ease-out forwards;
        }
        
        @keyframes reveal {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .stagger-1 { animation-delay: 0.1s; }
        .stagger-2 { animation-delay: 0.2s; }
        .stagger-3 { animation-delay: 0.3s; }
        .stagger-4 { animation-delay: 0.4s; }
        .stagger-5 { animation-delay: 0.5s; }
        .stagger-6 { animation-delay: 0.6s; }
        
        .pulse-ring {
            animation: pulse-ring 2s infinite;
        }
        
        @keyframes pulse-ring {
            0% { transform: scale(0.33); }
            40%, 50% { opacity: 0; }
            100% { opacity: 0; transform: scale(1.2); }
        }
        
        .team-card {
            position: relative;
            overflow: hidden;
        }
        
        .team-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .team-card:hover::before {
            left: 100%;
        }
        
        .stats-number {
            font-family: 'SF Mono', Monaco, 'Cascadia Code', 'Roboto Mono', Consolas, 'Courier New', monospace;
        }
    </style>
</head>
<body class="bg-gray-50">
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
                        About <span class="relative">
                            GecnoGuru
                            <div class="absolute -bottom-2 left-0 right-0 h-1 bg-white bg-opacity-30 rounded"></div>
                        </span>
                    </h1>
                </div>
                <div class="section-reveal stagger-1">
                    <p class="text-xl sm:text-2xl text-blue-50 mb-8 max-w-4xl mx-auto leading-relaxed">
                        Empowering careers through innovative technology and expert guidance
                    </p>
                </div>
                <div class="section-reveal stagger-2">
                    <div class="inline-flex items-center space-x-4">
                        <div class="flex -space-x-2">
                            <div class="w-10 h-10 bg-white bg-opacity-20 rounded-full border-2 border-white flex items-center justify-center">
                                <i class="fas fa-user text-sm"></i>
                            </div>
                            <div class="w-10 h-10 bg-white bg-opacity-20 rounded-full border-2 border-white flex items-center justify-center">
                                <i class="fas fa-user text-sm"></i>
                            </div>
                            <div class="w-10 h-10 bg-white bg-opacity-20 rounded-full border-2 border-white flex items-center justify-center">
                                <i class="fas fa-user text-sm"></i>
                            </div>
                        </div>
                        <span class="text-blue-100">Trusted by 10,000+ professionals</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="section-reveal stagger-1">
                    <div class="stats-number text-4xl font-bold text-gradient mb-2">10K+</div>
                    <div class="text-gray-600">Happy Clients</div>
                </div>
                <div class="section-reveal stagger-2">
                    <div class="stats-number text-4xl font-bold text-gradient mb-2">500+</div>
                    <div class="text-gray-600">Projects Delivered</div>
                </div>
                <div class="section-reveal stagger-3">
                    <div class="stats-number text-4xl font-bold text-gradient mb-2">98%</div>
                    <div class="text-gray-600">Success Rate</div>
                </div>
                <div class="section-reveal stagger-4">
                    <div class="stats-number text-4xl font-bold text-gradient mb-2">24/7</div>
                    <div class="text-gray-600">Support</div>
                </div>
            </div>
        </div>
    </section>

    <main class="parallax-bg py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Our Mission & Vision Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-20">
                <div class="section-reveal stagger-1 bg-white p-10 rounded-3xl shadow-xl card-hover glow">
                    <div class="flex items-center mb-6">
                        <div class="relative">
                            <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center">
                                <i class="fas fa-bullseye text-blue-600 text-2xl"></i>
                            </div>
                            <div class="absolute -top-1 -right-1 w-6 h-6 bg-blue-500 rounded-full pulse-ring"></div>
                        </div>
                        <h2 class="text-4xl font-bold text-gray-800 ml-4">Our Mission</h2>
                    </div>
                    <p class="text-gray-600 leading-relaxed text-lg">
                        To empower students, fresh graduates, freelancers, and professionals with cutting-edge tools and expert guidance they need to build extraordinary careers. We believe that a strong online presence combined with the right skills is the key to unlocking unlimited opportunities in today's competitive digital landscape.
                    </p>
                    <div class="mt-6 flex items-center text-blue-600">
                        <i class="fas fa-rocket mr-2"></i>
                        <span class="font-semibold">Launching careers to new heights</span>
                    </div>
                </div>
                
                <div class="section-reveal stagger-2 bg-white p-10 rounded-3xl shadow-xl card-hover glow">
                    <div class="flex items-center mb-6">
                        <div class="relative">
                            <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center">
                                <i class="fas fa-eye text-purple-600 text-2xl"></i>
                            </div>
                            <div class="absolute -top-1 -right-1 w-6 h-6 bg-purple-500 rounded-full pulse-ring" style="animation-delay: -0.5s;"></div>
                        </div>
                        <h2 class="text-4xl font-bold text-gray-800 ml-4">Our Vision</h2>
                    </div>
                    <p class="text-gray-600 leading-relaxed text-lg">
                        To become the world's leading platform for career development services, renowned for our unwavering commitment to quality, innovation, and customer success. We envision creating a thriving global community where individuals can accelerate their skills, showcase their unique talents, and achieve their most ambitious professional goals.
                    </p>
                    <div class="mt-6 flex items-center text-purple-600">
                        <i class="fas fa-globe mr-2"></i>
                        <span class="font-semibold">Building a global career community</span>
                    </div>
                </div>
            </div>

            <!-- Our Values Section -->
            <div class="mb-20">
                <div class="text-center mb-16 section-reveal">
                    <h2 class="text-5xl font-bold text-gray-800 mb-4">Our Core Values</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">The principles that drive everything we do</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    <div class="text-center section-reveal stagger-1">
                        <div class="relative mb-8">
                            <div class="w-28 h-28 bg-gradient-to-br from-blue-400 to-blue-600 rounded-3xl flex items-center justify-center mx-auto shadow-xl">
                                <i class="fas fa-users text-white text-4xl"></i>
                            </div>
                            <div class="absolute -top-2 -right-2 w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center">
                                <i class="fas fa-star text-white text-sm"></i>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Customer-Centric</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Every decision we make starts with our customers. We listen, understand, and deliver solutions that exceed expectations, creating lasting relationships built on trust and results.
                        </p>
                    </div>
                    
                    <div class="text-center section-reveal stagger-2">
                        <div class="relative mb-8">
                            <div class="w-28 h-28 bg-gradient-to-br from-purple-400 to-purple-600 rounded-3xl flex items-center justify-center mx-auto shadow-xl">
                                <i class="fas fa-lightbulb text-white text-4xl"></i>
                            </div>
                            <div class="absolute -top-2 -right-2 w-8 h-8 bg-green-400 rounded-full flex items-center justify-center">
                                <i class="fas fa-bolt text-white text-sm"></i>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Innovation</h3>
                        <p class="text-gray-600 leading-relaxed">
                            We embrace cutting-edge technologies and creative thinking to solve complex challenges, constantly pushing boundaries to deliver tomorrow's solutions today.
                        </p>
                    </div>
                    
                    <div class="text-center section-reveal stagger-3">
                        <div class="relative mb-8">
                            <div class="w-28 h-28 bg-gradient-to-br from-green-400 to-green-600 rounded-3xl flex items-center justify-center mx-auto shadow-xl">
                                <i class="fas fa-handshake text-white text-4xl"></i>
                            </div>
                            <div class="absolute -top-2 -right-2 w-8 h-8 bg-blue-400 rounded-full flex items-center justify-center">
                                <i class="fas fa-shield text-white text-sm"></i>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Integrity</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Transparency, honesty, and ethical practices form the foundation of our business. We build trust through consistent actions and unwavering commitment to doing what's right.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Our Team Section -->
            <div class="section-reveal">
                <div class="text-center mb-16">
                    <h2 class="text-5xl font-bold text-gray-800 mb-4">Meet Our Team</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">The passionate individuals behind GecnoGuru's success</p>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                    <div class="section-reveal stagger-1 team-card bg-white p-8 rounded-3xl shadow-xl card-hover text-center">
                        <div class="relative mb-6">
                            <img src="https://i.pravatar.cc/150?img=1" alt="John Doe" class="w-32 h-32 rounded-full mx-auto border-4 border-blue-200 shadow-lg">
                            <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-green-500 rounded-full border-4 border-white flex items-center justify-center">
                                <i class="fas fa-crown text-white text-xs"></i>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-1">John Doe</h3>
                        <p class="text-blue-600 font-semibold mb-2">CEO & Founder</p>
                        <p class="text-gray-600 mb-4 text-sm">Visionary leader with 10+ years in tech innovation and career development.</p>
                        <div class="flex justify-center space-x-4">
                            <a href="#" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-gray-500 hover:bg-blue-500 hover:text-white transition-all duration-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-gray-500 hover:bg-blue-600 hover:text-white transition-all duration-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-gray-500 hover:bg-gray-800 hover:text-white transition-all duration-300">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div class="section-reveal stagger-2 team-card bg-white p-8 rounded-3xl shadow-xl card-hover text-center">
                        <div class="relative mb-6">
                            <img src="https://i.pravatar.cc/150?img=2" alt="Sarah Wilson" class="w-32 h-32 rounded-full mx-auto border-4 border-purple-200 shadow-lg">
                            <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-purple-500 rounded-full border-4 border-white flex items-center justify-center">
                                <i class="fas fa-palette text-white text-xs"></i>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-1">Sarah Wilson</h3>
                        <p class="text-purple-600 font-semibold mb-2">Head of Design</p>
                        <p class="text-gray-600 mb-4 text-sm">Creative mastermind specializing in user experience and brand identity design.</p>
                        <div class="flex justify-center space-x-4">
                            <a href="#" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-gray-500 hover:bg-blue-500 hover:text-white transition-all duration-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-gray-500 hover:bg-blue-600 hover:text-white transition-all duration-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-gray-500 hover:bg-pink-500 hover:text-white transition-all duration-300">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div class="section-reveal stagger-3 team-card bg-white p-8 rounded-3xl shadow-xl card-hover text-center">
                        <div class="relative mb-6">
                            <img src="https://i.pravatar.cc/150?img=3" alt="Peter Jones" class="w-32 h-32 rounded-full mx-auto border-4 border-green-200 shadow-lg">
                            <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-green-500 rounded-full border-4 border-white flex items-center justify-center">
                                <i class="fas fa-code text-white text-xs"></i>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-1">Peter Jones</h3>
                        <p class="text-green-600 font-semibold mb-2">Lead Developer</p>
                        <p class="text-gray-600 mb-4 text-sm">Full-stack architect building scalable solutions that power career success.</p>
                        <div class="flex justify-center space-x-4">
                            <a href="#" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-gray-500 hover:bg-blue-500 hover:text-white transition-all duration-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-gray-500 hover:bg-blue-600 hover:text-white transition-all duration-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-gray-500 hover:bg-gray-800 hover:text-white transition-all duration-300">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call to Action Section -->
            <div class="section-reveal mt-20 text-center">
                <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl p-12 text-white">
                    <h2 class="text-4xl font-bold mb-4">Ready to Transform Your Career?</h2>
                    <p class="text-xl mb-8 max-w-2xl mx-auto">Join thousands of professionals who have accelerated their careers with GecnoGuru</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button class="bg-white text-blue-600 px-8 py-4 rounded-xl font-bold hover:bg-gray-100 transition-all duration-300 transform hover:scale-105">
                            Get Started Today
                        </button>
                        <button class="border-2 border-white text-white px-8 py-4 rounded-xl font-bold hover:bg-white hover:text-blue-600 transition-all duration-300 transform hover:scale-105">
                            Learn More
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Add scroll-based animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                }
            });
        }, observerOptions);

        // Observe all elements with section-reveal class
        document.querySelectorAll('.section-reveal').forEach(el => {
            el.style.animationPlayState = 'paused';
            observer.observe(el);
        });

        // Add counter animation for stats
        function animateCounter(element, target, duration = 2000) {
            let start = 0;
            const increment = target / (duration / 16);
            
            const timer = setInterval(() => {
                start += increment;
                if (start >= target) {
                    element.textContent = target + (element.textContent.includes('+') ? '+' : '') + (element.textContent.includes('%') ? '%' : '');
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(start) + (element.textContent.includes('+') ? '+' : '') + (element.textContent.includes('%') ? '%' : '');
                }
            }, 16);
        }

        // Animate stats when they come into view
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const text = entry.target.textContent;
                    const number = parseInt(text.replace(/[^0-9]/g, ''));
                    animateCounter(entry.target, number);
                    statsObserver.unobserve(entry.target);
                }
            });
        });

        document.querySelectorAll('.stats-number').forEach(el => {
            statsObserver.observe(el);
        });
    </script>
</body>
</html>