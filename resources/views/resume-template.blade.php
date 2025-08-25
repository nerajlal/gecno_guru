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

    <!-- Add New Button -->
    <div class="text-right mb-8">
        <button id="add-new-btn" class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-700 transition">
            Add New
        </button>
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

<!-- Add New Resume Modal -->
<div id="add-new-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-2xl shadow-2xl p-8 w-full max-w-3xl relative overflow-y-auto max-h-[90vh]">
        <button id="close-modal-btn" class="absolute top-4 right-4 text-gray-600 hover:text-gray-900">
            <i class="fa-solid fa-times text-2xl"></i>
        </button>
        <h2 class="text-2xl font-bold text-gray-900 text-center mb-6">Add Resume Data</h2>
        <form>
            <!-- Personal Information -->
            <div class="mb-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Personal Information</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="full_name" class="block text-gray-700 mb-2">Full Name</label>
                        <input type="text" id="full_name" name="full_name" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="John Doe">
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="john.doe@example.com">
                    </div>
                    <div>
                        <label for="phone" class="block text-gray-700 mb-2">Phone</label>
                        <input type="tel" id="phone" name="phone" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="+1 234 567 890">
                    </div>
                    <div>
                        <label for="address" class="block text-gray-700 mb-2">Address</label>
                        <input type="text" id="address" name="address" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="123 Main St, Anytown, USA">
                    </div>
                </div>
            </div>

            <!-- Summary -->
            <div class="mb-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Summary</h3>
                <textarea id="summary" name="summary" rows="4" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="A brief summary of your professional background..."></textarea>
            </div>

            <!-- Experience -->
            <div class="mb-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Experience</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="job_title" class="block text-gray-700 mb-2">Job Title</label>
                        <input type="text" id="job_title" name="job_title" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Software Engineer">
                    </div>
                    <div>
                        <label for="company" class="block text-gray-700 mb-2">Company</label>
                        <input type="text" id="company" name="company" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Tech Corp">
                    </div>
                    <div>
                        <label for="start_date" class="block text-gray-700 mb-2">Start Date</label>
                        <input type="month" id="start_date" name="start_date" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300">
                    </div>
                    <div>
                        <label for="end_date" class="block text-gray-700 mb-2">End Date</label>
                        <input type="month" id="end_date" name="end_date" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300">
                    </div>
                </div>
                <div class="mt-4">
                    <label for="responsibilities" class="block text-gray-700 mb-2">Responsibilities</label>
                    <textarea id="responsibilities" name="responsibilities" rows="4" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Describe your responsibilities and achievements..."></textarea>
                </div>
            </div>

            <!-- Education -->
            <div class="mb-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Education</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="school" class="block text-gray-700 mb-2">School/University</label>
                        <input type="text" id="school" name="school" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="University of Example">
                    </div>
                    <div>
                        <label for="degree" class="block text-gray-700 mb-2">Degree</label>
                        <input type="text" id="degree" name="degree" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Bachelor of Science">
                    </div>
                </div>
            </div>

            <!-- Skills -->
            <div class="mb-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Skills</h3>
                <textarea id="skills" name="skills" rows="3" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="e.g., JavaScript, Python, Teamwork, Communication"></textarea>
            </div>

            <div class="text-right">
                <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">Save</button>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const addNewBtn = document.getElementById('add-new-btn');
        const addNewModal = document.getElementById('add-new-modal');
        const closeModalBtn = document.getElementById('close-modal-btn');

        const openModal = () => {
            if (addNewModal) {
                addNewModal.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            }
        };

        const closeModal = () => {
            if (addNewModal) {
                addNewModal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }
        };

        if (addNewBtn) {
            addNewBtn.addEventListener('click', openModal);
        }

        if (closeModalBtn) {
            closeModalBtn.addEventListener('click', closeModal);
        }

        if (addNewModal) {
            addNewModal.addEventListener('click', (e) => {
                if (e.target === addNewModal) {
                    closeModal();
                }
            });
        }
    });
</script>

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