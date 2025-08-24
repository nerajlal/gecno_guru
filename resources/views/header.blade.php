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
