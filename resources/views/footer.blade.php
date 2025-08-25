<!-- Footer -->
    <footer id="contact" class="bg-gray-900 text-white py-12 sm:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8 sm:mb-12">
                <div class="col-span-2">
                    <div class="text-2xl sm:text-3xl font-bold mb-4">
                        <span class="text-blue-400">Gecno</span>Guru
                    </div>
                    <p class="text-gray-300 mb-6 max-w-md">Empowering careers through innovative technology and expert guidance. Your success is our mission.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-600 transition-colors duration-200">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-600 transition-colors duration-200">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-600 transition-colors duration-200">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-600 transition-colors duration-200">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4 text-white">Services</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="/resume" class="hover:text-blue-400 transition-colors duration-200">Resume Builder</a></li>
                        <li><a href="/coverletter" class="hover:text-blue-400 transition-colors duration-200">Cover Letters</a></li>
                        <li><a href="/portfolio" class="hover:text-blue-400 transition-colors duration-200">Portfolio Sites</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition-colors duration-200">Career Coaching</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4 text-white">Contact</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li>support@gecnoguru.com</li>
                        <li>+1 (555) 123-4567</li>
                        <li>San Francisco, CA</li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700 pt-8 text-center text-gray-300 text-sm">
                <p>&copy; 2024 GecnoGuru. All rights reserved. Built with ❤️ for career success.</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Mobile menu functionality
            const menuBtn = document.getElementById('menu-btn');
            const menu = document.getElementById('menu');

            if(menuBtn) {
                menuBtn.addEventListener('click', () => {
                    menuBtn.classList.toggle('open');
                    menu.classList.toggle('active');
                    document.body.classList.toggle('overflow-hidden');
                });
            }

            // Close menu when clicking on links
            document.querySelectorAll('#menu a').forEach(link => {
                link.addEventListener('click', () => {
                    menuBtn.classList.remove('open');
                    menu.classList.remove('active');
                    document.body.classList.remove('overflow-hidden');
                });
            });


            // Intersection Observer for fade-in animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, observerOptions);

            // Observe all fade-in elements
            document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));

            // Smooth scrolling for navigation links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Add some interactive hover effects
            document.querySelectorAll('.card-hover').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-8px) scale(1.02)';
                });

                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });

            // Services Dropdown
            const servicesDropdown = document.getElementById('services-dropdown');
            const servicesDropdownButton = document.getElementById('services-dropdown-button');
            const servicesDropdownMenu = document.getElementById('services-dropdown-menu');

            if (servicesDropdownButton) {
                servicesDropdownButton.addEventListener('click', (e) => {
                    e.preventDefault();
                    servicesDropdownMenu.classList.toggle('hidden');
                });
            }

            document.addEventListener('click', (e) => {
                if (servicesDropdown && !servicesDropdown.contains(e.target)) {
                    servicesDropdownMenu.classList.add('hidden');
                }
            });

            // Mobile Services Dropdown
            const mobileServicesDropdownButton = document.getElementById('mobile-services-dropdown-button');
            const mobileServicesDropdownMenu = document.getElementById('mobile-services-dropdown-menu');

            if (mobileServicesDropdownButton) {
                mobileServicesDropdownButton.addEventListener('click', (e) => {
                    e.preventDefault();
                    mobileServicesDropdownMenu.classList.toggle('hidden');
                });
            }

            // Auth Modal functionality
            const loginTriggers = document.querySelectorAll('.login-trigger');
            const authModal = document.getElementById('auth-modal');
            const closeModalBtn = document.getElementById('close-modal-btn');
            const loginForm = document.getElementById('login-form');
            const registerForm = document.getElementById('register-form');
            const showRegisterFormLink = document.getElementById('show-register-form');
            const showLoginFormLink = document.getElementById('show-login-form');

            const openModal = () => {
                if(authModal) {
                    authModal.classList.remove('hidden');
                    document.body.classList.add('overflow-hidden');
                }
            };

            const closeModal = () => {
                if(authModal) {
                    authModal.classList.add('hidden');
                    document.body.classList.remove('overflow-hidden');
                }
            };

            loginTriggers.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    openModal();
                });
            });

            if(closeModalBtn) {
                closeModalBtn.addEventListener('click', closeModal);
            }

            if(authModal) {
                authModal.addEventListener('click', (e) => {
                    if (e.target === authModal) {
                        closeModal();
                    }
                });
            }

            if(showRegisterFormLink) {
                showRegisterFormLink.addEventListener('click', (e) => {
                    e.preventDefault();
                    if(loginForm && registerForm) {
                        loginForm.classList.add('hidden');
                        registerForm.classList.remove('hidden');
                    }
                });
            }

            if(showLoginFormLink) {
                showLoginFormLink.addEventListener('click', (e) => {
                    e.preventDefault();
                    if(loginForm && registerForm) {
                        registerForm.classList.add('hidden');
                        loginForm.classList.remove('hidden');
                    }
                });
            }
        });
    </script>
    <!-- Auth Modal -->
    <div id="auth-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="gradient-bg glass-effect rounded-2xl shadow-2xl p-8 w-full max-w-md relative">
            <button id="close-modal-btn" class="absolute top-4 right-4 text-white hover:text-blue-300">
                <i class="fa-solid fa-times text-2xl"></i>
            </button>

            <!-- Login Form -->
            <div id="login-form">
                <h2 class="text-3xl font-bold text-white text-center mb-6">Login</h2>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="login-email" class="block text-white mb-2">Email</label>
                        <input type="email" id="login-email" name="email" class="w-full bg-white bg-opacity-20 border border-white border-opacity-30 rounded-lg py-2 px-4 text-white placeholder-white placeholder-opacity-70 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="your@email.com" required>
                    </div>
                    <div class="mb-6">
                        <label for="login-password" class="block text-white mb-2">Password</label>
                        <input type="password" id="login-password" name="password" class="w-full bg-white bg-opacity-20 border border-white border-opacity-30 rounded-lg py-2 px-4 text-white placeholder-white placeholder-opacity-70 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="********" required>
                    </div>
                    <button type="submit" class="w-full bg-white text-blue-700 font-bold py-3 rounded-full hover:bg-blue-100 transition-all duration-200">Login</button>
                </form>
                <p class="text-center text-white mt-6">
                    Don't have an account? <a href="#" id="show-register-form" class="text-blue-300 hover:underline font-semibold">Register here</a>
                </p>
            </div>

            <!-- Register Form -->
            <div id="register-form" class="hidden">
                <h2 class="text-3xl font-bold text-white text-center mb-6">Register</h2>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="register-email" class="block text-white mb-2">Email</label>
                        <input type="email" id="register-email" name="email" class="w-full bg-white bg-opacity-20 border border-white border-opacity-30 rounded-lg py-2 px-4 text-white placeholder-white placeholder-opacity-70 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="your@email.com" required>
                    </div>
                    <div class="mb-4">
                        <label for="register-password" class="block text-white mb-2">Password</label>
                        <input type="password" id="register-password" name="password" class="w-full bg-white bg-opacity-20 border border-white border-opacity-30 rounded-lg py-2 px-4 text-white placeholder-white placeholder-opacity-70 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="********" required>
                    </div>
                    <div class="mb-6">
                        <label for="password_confirmation" class="block text-white mb-2">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="w-full bg-white bg-opacity-20 border border-white border-opacity-30 rounded-lg py-2 px-4 text-white placeholder-white placeholder-opacity-70 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="********" required>
                    </div>
                    <button type="submit" class="w-full bg-white text-blue-700 font-bold py-3 rounded-full hover:bg-blue-100 transition-all duration-200">Register</button>
                </form>
                <p class="text-center text-white mt-6">
                    Already have an account? <a href="#" id="show-login-form" class="text-blue-300 hover:underline font-semibold">Login here</a>
                </p>
            </div>
        </div>
    </div>
    <script>
        // Auth Modal functionality
        const getStartedBtns = document.querySelectorAll('.get-started-btn');
        const authModal = document.getElementById('auth-modal');
        const closeModalBtn = document.getElementById('close-modal-btn');
        const loginForm = document.getElementById('login-form');
        const registerForm = document.getElementById('register-form');
        const showRegisterFormLink = document.getElementById('show-register-form');
        const showLoginFormLink = document.getElementById('show-login-form');

        const openModal = () => {
            if(authModal) {
                authModal.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            }
        };

        const closeModal = () => {
            if(authModal) {
                authModal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }
        };

        getStartedBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                openModal();
            });
        });

        if(closeModalBtn) {
            closeModalBtn.addEventListener('click', closeModal);
        }

        if(authModal) {
            authModal.addEventListener('click', (e) => {
                if (e.target === authModal) {
                    closeModal();
                }
            });
        }

        if(showRegisterFormLink) {
            showRegisterFormLink.addEventListener('click', (e) => {
                e.preventDefault();
                if(loginForm && registerForm) {
                    loginForm.classList.add('hidden');
                    registerForm.classList.remove('hidden');
                }
            });
        }

        if(showLoginFormLink) {
            showLoginFormLink.addEventListener('click', (e) => {
                e.preventDefault();
                if(loginForm && registerForm) {
                    registerForm.classList.add('hidden');
                    loginForm.classList.remove('hidden');
                }
            });
        }
    </script>
</body>
</html>
