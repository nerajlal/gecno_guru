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
    
    <!-- Top Section -->
    <div class="flex items-center justify-between mb-12">
      <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Select Your Template</h2>
      <button class="bg-blue-600 text-white px-6 py-3 rounded-xl shadow-md hover:bg-blue-700 transition">
        Add My Data
      </button>
    </div>

    <!-- Templates Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
      
      <!-- Template Card -->
      <div class="bg-gray-50 rounded-2xl shadow-md p-4 flex flex-col items-center">
        <div class="bg-white border rounded-lg shadow-sm overflow-hidden" style="width:210px; height:297px;">
          <img src="https://via.placeholder.com/210x297" alt="Template Preview" class="w-full h-full object-cover">
        </div>
        <div class="flex gap-3 mt-4">
          <button class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300">Live Preview</button>
          <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Use Template</button>
        </div>
      </div>

      <!-- Repeat 3 More Cards -->
      <div class="bg-gray-50 rounded-2xl shadow-md p-4 flex flex-col items-center">
        <div class="bg-white border rounded-lg shadow-sm overflow-hidden" style="width:210px; height:297px;">
          <img src="https://via.placeholder.com/210x297" alt="Template Preview" class="w-full h-full object-cover">
        </div>
        <div class="flex gap-3 mt-4">
          <button class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300">Live Preview</button>
          <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Use Template</button>
        </div>
      </div>

      <div class="bg-gray-50 rounded-2xl shadow-md p-4 flex flex-col items-center">
        <div class="bg-white border rounded-lg shadow-sm overflow-hidden" style="width:210px; height:297px;">
          <img src="https://via.placeholder.com/210x297" alt="Template Preview" class="w-full h-full object-cover">
        </div>
        <div class="flex gap-3 mt-4">
          <button class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300">Live Preview</button>
          <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Use Template</button>
        </div>
      </div>

      <div class="bg-gray-50 rounded-2xl shadow-md p-4 flex flex-col items-center">
        <div class="bg-white border rounded-lg shadow-sm overflow-hidden" style="width:210px; height:297px;">
          <img src="https://via.placeholder.com/210x297" alt="Template Preview" class="w-full h-full object-cover">
        </div>
        <div class="flex gap-3 mt-4">
          <button class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300">Live Preview</button>
          <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Use Template</button>
        </div>
      </div>

    </div>
  </div>
</section>


    

    @include('includes.footer')