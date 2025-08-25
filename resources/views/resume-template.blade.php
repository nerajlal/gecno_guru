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

    <section class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Heading -->
    <div class="text-center mb-12">
      <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Choose Your Resume Style</h2>
      <p class="text-lg text-gray-600">Select from our professional templates designed to impress recruiters.</p>
    </div>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

      <!-- Card 1 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
        <img src="https://via.placeholder.com/600x350" alt="Resume Template" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-800">Modern Elegance</h3>
          <p class="text-gray-600 mt-2 text-sm">Clean and stylish design for professionals.</p>
          <div class="mt-6 flex gap-3">
            <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-semibold hover:bg-blue-700 transition">Live Preview</a>
            <a href="#" class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-100 transition">Use Template</a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
        <img src="https://via.placeholder.com/600x350" alt="Resume Template" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-800">Dark Professional</h3>
          <p class="text-gray-600 mt-2 text-sm">Sophisticated dark theme with strong impact.</p>
          <div class="mt-6 flex gap-3">
            <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-semibold hover:bg-blue-700 transition">Live Preview</a>
            <a href="#" class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-100 transition">Use Template</a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
        <img src="https://via.placeholder.com/600x350" alt="Resume Template" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-800">Minimal White</h3>
          <p class="text-gray-600 mt-2 text-sm">Simple white design with subtle highlights.</p>
          <div class="mt-6 flex gap-3">
            <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-semibold hover:bg-blue-700 transition">Live Preview</a>
            <a href="#" class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-100 transition">Use Template</a>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
        <img src="https://via.placeholder.com/600x350" alt="Resume Template" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-800">Classic Professional</h3>
          <p class="text-gray-600 mt-2 text-sm">A timeless design for any industry.</p>
          <div class="mt-6 flex gap-3">
            <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-semibold hover:bg-blue-700 transition">Live Preview</a>
            <a href="#" class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-100 transition">Use Template</a>
          </div>
        </div>
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