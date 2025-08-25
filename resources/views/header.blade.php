<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GecnoGuru - Premium Career Development</title>
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

        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
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
</head>
<body class="bg-gray-50 overflow-x-hidden">
    <!-- Navigation -->
    <nav class="fixed w-full z-50 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="text-2xl font-bold text-white">
                        <span class="text-blue-300">Gecno</span>Guru
                    </div>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="text-white hover:text-blue-300 transition-colors duration-200 font-medium">Home</a>
                    <a href="#services" class="text-white hover:text-blue-300 transition-colors duration-200 font-medium">Services</a>
                    <a href="#about" class="text-white hover:text-blue-300 transition-colors duration-200 font-medium">About</a>
                    <a href="#contact" class="text-white hover:text-blue-300 transition-colors duration-200 font-medium">Contact</a>
                </div>
                <button class="hidden md:block glass-effect px-6 py-2 rounded-full text-white font-semibold hover:bg-white hover:bg-opacity-25 transition-all duration-200 border border-white border-opacity-30 get-started-btn">
                    Get Started
                </button>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="menu-btn" class="hamburger focus:outline-none">
                        <span class="hamburger-top"></span>
                        <span class="hamburger-middle"></span>
                        <span class="hamburger-bottom"></span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="menu" class="mobile-menu fixed top-16 right-0 bottom-0 w-64 gradient-bg glass-effect p-6 md:hidden">
            <div class="flex flex-col space-y-6">
                <a href="#home" class="text-white hover:text-blue-300 transition-colors duration-200 font-medium">Home</a>
                <a href="#services" class="text-white hover:text-blue-300 transition-colors duration-200 font-medium">Services</a>
                <a href="#about" class="text-white hover:text-blue-300 transition-colors duration-200 font-medium">About</a>
                <a href="#contact" class="text-white hover:text-blue-300 transition-colors duration-200 font-medium">Contact</a>
                <button class="glass-effect px-6 py-2 rounded-full text-white font-semibold hover:bg-white hover:bg-opacity-25 transition-all duration-200 border border-white border-opacity-30 w-full get-started-btn">
                    Get Started
                </button>
            </div>
        </div>
    </nav>

    <!-- Modals -->
    <div id="auth-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black bg-opacity-50 transition-opacity duration-300">
        <div class="bg-white rounded-lg shadow-xl p-8 max-w-md w-full relative transform transition-all duration-300 scale-95 opacity-0" id="modal-content">
            <!-- Close button -->
            <button class="absolute top-4 right-4 text-gray-500 hover:text-gray-800" id="close-modal-btn">
                <i class="fa-solid fa-times text-2xl"></i>
            </button>

            <!-- Login Form -->
            <div id="login-form">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Welcome Back</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="login-email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                        <input type="email" id="login-email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                    </div>
                    <div class="mb-6">
                        <label for="login-password" class="block text-gray-700 font-medium mb-2">Password</label>
                        <input type="password" id="login-password" name="password" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white font-bold py-3 px-4 rounded-lg hover:bg-blue-700 transition-colors duration-200">Login</button>
                </form>
                <p class="text-center text-gray-600 mt-6">
                    Don't have an account? <button class="text-blue-600 font-semibold hover:underline" id="show-register-form">Sign up</button>
                </p>
            </div>

            <!-- Registration Form -->
            <div id="register-form" class="hidden">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Create Your Account</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="register-name" class="block text-gray-700 font-medium mb-2">Full Name</label>
                        <input type="text" id="register-name" name="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                    </div>
                    <div class="mb-4">
                        <label for="register-email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                        <input type="email" id="register-email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                    </div>
                    <div class="mb-4">
                        <label for="register-password" class="block text-gray-700 font-medium mb-2">Password</label>
                        <input type="password" id="register-password" name="password" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                    </div>
                    <div class="mb-6">
                        <label for="register-password-confirm" class="block text-gray-700 font-medium mb-2">Confirm Password</label>
                        <input type="password" id="register-password-confirm" name="password_confirmation" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white font-bold py-3 px-4 rounded-lg hover:bg-blue-700 transition-colors duration-200">Create Account</button>
                </form>
                <p class="text-center text-gray-600 mt-6">
                    Already have an account? <button class="text-blue-600 font-semibold hover:underline" id="show-login-form">Log in</button>
                </p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const authModal = document.getElementById('auth-modal');
            const modalContent = document.getElementById('modal-content');
            const closeModalBtn = document.getElementById('close-modal-btn');

            const getStartedBtns = document.querySelectorAll('.get-started-btn');

            const loginForm = document.getElementById('login-form');
            const registerForm = document.getElementById('register-form');

            const showRegisterFormBtn = document.getElementById('show-register-form');
            const showLoginFormBtn = document.getElementById('show-login-form');

            function openModal(showRegister = false) {
                if (showRegister) {
                    registerForm.classList.remove('hidden');
                    loginForm.classList.add('hidden');
                } else {
                    loginForm.classList.remove('hidden');
                    registerForm.classList.add('hidden');
                }

                authModal.classList.remove('hidden');
                authModal.classList.add('flex');
                setTimeout(() => {
                    authModal.classList.add('opacity-100');
                    modalContent.classList.remove('scale-95', 'opacity-0');
                    modalContent.classList.add('scale-100', 'opacity-100');
                }, 10);
            }

            function closeModal() {
                modalContent.classList.remove('scale-100', 'opacity-100');
                modalContent.classList.add('scale-95', 'opacity-0');
                authModal.classList.remove('opacity-100');
                setTimeout(() => {
                    authModal.classList.add('hidden');
                    authModal.classList.remove('flex');
                }, 300);
            }

            getStartedBtns.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    openModal();
                });
            });

            showRegisterFormBtn.addEventListener('click', (e) => {
                e.preventDefault();
                loginForm.classList.add('hidden');
                registerForm.classList.remove('hidden');
            });

            showLoginFormBtn.addEventListener('click', (e) => {
                e.preventDefault();
                registerForm.classList.add('hidden');
                loginForm.classList.remove('hidden');
            });

            closeModalBtn.addEventListener('click', closeModal);
            authModal.addEventListener('click', (e) => {
                if (e.target === authModal) {
                    closeModal();
                }
            });

            // Handle validation errors
            @if($errors->any())
                // If there is old input for the 'name' field, we can assume it was a registration attempt.
                @if(old('name'))
                    openModal(true); // Open with register form
                @else
                    openModal(); // Open with login form
                @endif
            @endif
        });
    </script>
