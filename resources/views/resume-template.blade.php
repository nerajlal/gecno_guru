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

    <!-- Action Buttons -->
    <div class="text-right mb-8 flex justify-end gap-4">
        @if($hasActivePlan)
        <a href="{{ route('resume-build') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-green-700 transition">
            Upgrade My Plan
        </a>
        @endif
        <a href="{{ route('import.linkedin') }}" id="import-linkedin-btn" class="bg-blue-800 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-900 transition flex items-center gap-2">
            <i class="fa-brands fa-linkedin"></i> Import from LinkedIn
        </a>
        <a href="{{ route('import.github') }}" id="import-github-btn" class="bg-gray-800 text-white px-4 py-2 rounded-lg shadow-md hover:bg-gray-900 transition flex items-center gap-2">
            <i class="fa-brands fa-github"></i> Import from GitHub
        </a>
        <button id="add-new-btn" class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-700 transition">
            Add My Data
        </button>
    </div>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

      <!-- Card 1 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
        <img src="https://www.resumebuilder.com/wp-content/uploads/2023/12/Hybrid_Example-3.pdf.jpeg" alt="Modern Elegance Resume Template" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-800">Modern Elegance</h3>
          <p class="text-gray-600 mt-2 text-sm">Clean and stylish design for professionals.</p>
          <div class="mt-6 flex gap-3">
            <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-semibold hover:bg-blue-700 transition live-preview-btn" data-template="template-4">Live Preview</button>
            @if($hasActivePlan)
            <a href="{{ route('resume.fullscreen.preview', ['template' => 'template-4']) }}" class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-100 transition">Use Template</a>
            @else
            <a href="{{ route('resume-build') }}" class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-100 transition">Use Template</a>
            @endif
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
        <img src="https://www.resumebuilder.com/wp-content/uploads/2022/12/Graphic-Design-Mid-Level.pdf.jpeg" alt="Modern Professional Resume Template" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-800">Modern Professional</h3>
          <p class="text-gray-600 mt-2 text-sm">A professional design with a touch of modern style.</p>
          <div class="mt-6 flex gap-3">
            <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-semibold hover:bg-blue-700 transition live-preview-btn" data-template="template-2">Live Preview</button>
            @if($hasActivePlan)
            <a href="{{ route('resume.fullscreen.preview', ['template' => 'template-2']) }}" class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-100 transition">Use Template</a>
            @else
            <a href="{{ route('resume-build') }}" class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-100 transition">Use Template</a>
            @endif
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
        <img src="https://www.resumebuilder.com/wp-content/uploads/2023/10/Basic-Mid-Level.pdf.jpeg" alt="Minimal White Resume Template" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-800">Minimal White</h3>
          <p class="text-gray-600 mt-2 text-sm">Simple white design with subtle highlights.</p>
          <div class="mt-6 flex gap-3">
            <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-semibold hover:bg-blue-700 transition live-preview-btn" data-template="template-3">Live Preview</button>
            @if($hasActivePlan)
            <a href="{{ route('resume.fullscreen.preview', ['template' => 'template-3']) }}" class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-100 transition">Use Template</a>
            @else
            <a href="{{ route('resume-build') }}" class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-100 transition">Use Template</a>
            @endif
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
        <img src="https://www.resumebuilder.com/wp-content/uploads/2020/03/Sales-Senior-Level.pdf.jpeg" alt="Classic Professional Resume Template" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-800">Classic Professional</h3>
          <p class="text-gray-600 mt-2 text-sm">A timeless design for any industry.</p>
          <div class="mt-6 flex gap-3">
            <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-semibold hover:bg-blue-700 transition live-preview-btn" data-template="template-1">Live Preview</button>
            @if($hasActivePlan)
            <a href="{{ route('resume.fullscreen.preview', ['template' => 'template-1']) }}" class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-100 transition">Use Template</a>
            @else
            <a href="{{ route('resume-build') }}" class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-100 transition">Use Template</a>
            @endif
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
        <img src="https://www.resumebuilder.com/wp-content/uploads/2023/07/Business-Senior-Level.pdf.jpeg" alt="Corporate Blue Resume Template" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-800">Corporate Blue</h3>
          <p class="text-gray-600 mt-2 text-sm">A corporate design with a blue header.</p>
          <div class="mt-6 flex gap-3">
            <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-semibold hover:bg-blue-700 transition live-preview-btn" data-template="template-5">Live Preview</button>
            @if($hasActivePlan)
            <a href="{{ route('resume.fullscreen.preview', ['template' => 'template-5']) }}" class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-100 transition">Use Template</a>
            @else
            <a href="{{ route('resume-build') }}" class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-100 transition">Use Template</a>
            @endif
          </div>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
        <img src="https://www.resumebuilder.com/wp-content/uploads/2022/01/System-Administrator-Senior-Level.pdf.jpeg" alt="Timeline Style Resume Template" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-800">Timeline Style</h3>
          <p class="text-gray-600 mt-2 text-sm">Showcase your journey with a timeline.</p>
          <div class="mt-6 flex gap-3">
            <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-semibold hover:bg-blue-700 transition live-preview-btn" data-template="template-6">Live Preview</button>
            @if($hasActivePlan)
            <a href="{{ route('resume.fullscreen.preview', ['template' => 'template-6']) }}" class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-100 transition">Use Template</a>
            @else
            <a href="{{ route('resume-build') }}" class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-100 transition">Use Template</a>
            @endif
          </div>
        </div>
      </div>

      <!-- Card 7 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
        <img src="https://www.resumebuilder.com/wp-content/uploads/2022/04/Filmmaker-Senior-Level.pdf.jpeg" alt="Modern Icons Resume Template" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-800">Modern Icons</h3>
          <p class="text-gray-600 mt-2 text-sm">A modern design using icons.</p>
          <div class="mt-6 flex gap-3">
            <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-semibold hover:bg-blue-700 transition live-preview-btn" data-template="template-7">Live Preview</button>
            @if($hasActivePlan)
            <a href="{{ route('resume.fullscreen.preview', ['template' => 'template-7']) }}" class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-100 transition">Use Template</a>
            @else
            <a href="{{ route('resume-build') }}" class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-100 transition">Use Template</a>
            @endif
          </div>
        </div>
      </div>

      <!-- Card 8 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
        <img src="https://www.resumebuilder.com/wp-content/uploads/2023/07/Teacher-Senior-Level.pdf.jpeg" alt="Classic Sidebar Resume Template" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-800">Classic Sidebar</h3>
          <p class="text-gray-600 mt-2 text-sm">A classic design with a sidebar.</p>
          <div class="mt-6 flex gap-3">
            <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-semibold hover:bg-blue-700 transition live-preview-btn" data-template="template-8">Live Preview</button>
            @if($hasActivePlan)
            <a href="{{ route('resume.fullscreen.preview', ['template' => 'template-8']) }}" class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-100 transition">Use Template</a>
            @else
            <a href="{{ route('resume-build') }}" class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-100 transition">Use Template</a>
            @endif
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
        <form action="{{ route('resume-template.store') }}" method="POST">
            @csrf
            <input type="hidden" name="resume_id" value="{{ $resume->id ?? '' }}">
            <!-- Personal Information -->
            <div class="mb-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Personal Information</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="full_name" class="block text-gray-700 mb-2">Full Name</label>
                        <input type="text" id="full_name" name="full_name" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="John Doe" value="{{ old('full_name', $resume->full_name ?? '') }}">
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="john.doe@example.com" value="{{ old('email', $resume->email ?? '') }}">
                    </div>
                    <div>
                        <label for="phone" class="block text-gray-700 mb-2">Phone</label>
                        <input type="tel" id="phone" name="phone" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="+1 234 567 890" value="{{ old('phone', $resume->phone ?? '') }}">
                    </div>
                    <div>
                        <label for="address" class="block text-gray-700 mb-2">Address</label>
                        <input type="text" id="address" name="address" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="123 Main St, Anytown, USA" value="{{ old('address', $resume->address ?? '') }}">
                    </div>
                </div>
            </div>

            <!-- Summary -->
            <div class="mb-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Summary</h3>
                <textarea id="summary" name="summary" rows="4" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="A brief summary of your professional background...">{{ old('summary', $resume->summary ?? '') }}</textarea>
            </div>

            <!-- Experience -->
            <div class="mb-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Experience</h3>
                <div id="experience-container">
                    @forelse ($resume->experiences ?? [] as $experience)
                    <div class="experience-entry mb-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="job_title" class="block text-gray-700 mb-2">Job Title</label>
                                <input type="text" name="job_title[]" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Software Engineer" value="{{ $experience->job_title }}">
                            </div>
                            <div>
                                <label for="company" class="block text-gray-700 mb-2">Company</label>
                                <input type="text" name="company[]" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Tech Corp" value="{{ $experience->company }}">
                            </div>
                            <div>
                                <label for="start_date" class="block text-gray-700 mb-2">Start Date</label>
                                <input type="month" name="start_date[]" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" value="{{ $experience->start_date }}">
                            </div>
                            <div>
                                <label for="end_date" class="block text-gray-700 mb-2">End Date</label>
                                <input type="month" name="end_date[]" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" value="{{ $experience->end_date }}">
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="responsibilities" class="block text-gray-700 mb-2">Responsibilities</label>
                            <textarea name="responsibilities[]" rows="4" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Describe your responsibilities and achievements...">{{ $experience->responsibilities }}</textarea>
                        </div>
                    </div>
                    @empty
                    <div class="experience-entry mb-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="job_title" class="block text-gray-700 mb-2">Job Title</label>
                                <input type="text" name="job_title[]" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Software Engineer">
                            </div>
                            <div>
                                <label for="company" class="block text-gray-700 mb-2">Company</label>
                                <input type="text" name="company[]" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Tech Corp">
                            </div>
                            <div>
                                <label for="start_date" class="block text-gray-700 mb-2">Start Date</label>
                                <input type="month" name="start_date[]" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300">
                            </div>
                            <div>
                                <label for="end_date" class="block text-gray-700 mb-2">End Date</label>
                                <input type="month" name="end_date[]" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300">
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="responsibilities" class="block text-gray-700 mb-2">Responsibilities</label>
                            <textarea name="responsibilities[]" rows="4" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Describe your responsibilities and achievements..."></textarea>
                        </div>
                    </div>
                    @endforelse
                </div>
                <button type="button" id="add-experience-btn" class="text-blue-600 hover:text-blue-700 font-semibold">+ Add Another Experience</button>
            </div>

            <!-- Education -->
            <div class="mb-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Education</h3>
                <div id="education-container">
                    @forelse ($resume->educations ?? [] as $education)
                    <div class="education-entry mb-4">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label for="school" class="block text-gray-700 mb-2">School/University</label>
                                <input type="text" name="school[]" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="University of Example" value="{{ $education->school }}">
                            </div>
                            <div>
                                <label for="degree" class="block text-gray-700 mb-2">Degree</label>
                                <input type="text" name="degree[]" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Bachelor of Science" value="{{ $education->degree }}">
                            </div>
                            <div>
                                <label for="year" class="block text-gray-700 mb-2">Year</label>
                                <input type="text" name="year[]" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="2024" value="{{ $education->year }}">
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="education-entry mb-4">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label for="school" class="block text-gray-700 mb-2">School/University</label>
                                <input type="text" name="school[]" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="University of Example">
                            </div>
                            <div>
                                <label for="degree" class="block text-gray-700 mb-2">Degree</label>
                                <input type="text" name="degree[]" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Bachelor of Science">
                            </div>
                            <div>
                                <label for="year" class="block text-gray-700 mb-2">Year</label>
                                <input type="text" name="year[]" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="2024">
                            </div>
                        </div>
                    </div>
                    @endforelse
                </div>
                <button type="button" id="add-education-btn" class="text-blue-600 hover:text-blue-700 font-semibold">+ Add Another Education</button>
            </div>

            <!-- Skills -->
            <div class="mb-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Skills</h3>
                <div id="skills-container">
                    @forelse ($resume->skills ?? [] as $skill)
                    <div class="skill-category-entry mb-4">
                        <input type="text" name="skill_category[]" class="w-full border border-gray-300 rounded-lg py-2 px-4 mb-2 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Skill Category (e.g., Programming Languages)" value="{{ $skill->skill_category }}">
                        <textarea name="skills[]" rows="3" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Enter each skill on a new line.">{{ $skill->skills }}</textarea>
                    </div>
                    @empty
                    <div class="skill-category-entry mb-4">
                        <input type="text" name="skill_category[]" class="w-full border border-gray-300 rounded-lg py-2 px-4 mb-2 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Skill Category (e.g., Programming Languages)">
                        <textarea name="skills[]" rows="3" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Enter each skill on a new line."></textarea>
                    </div>
                    @endforelse
                </div>
                <button type="button" id="add-skill-category-btn" class="text-blue-600 hover:text-blue-700 font-semibold">+ Add Skill Category</button>
            </div>

            <!-- Certifications -->
            <div class="mb-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Certifications</h3>
                <div id="certifications-container">
                    @forelse ($resume->certifications ?? [] as $certification)
                    <div class="certification-entry mb-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700 mb-2">Certification Name</label>
                                <input type="text" name="certification_name[]" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="e.g., AWS Certified Solutions Architect" value="{{ $certification->certification_name }}">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2">Issuing Organization</label>
                                <input type="text" name="issuing_organization[]" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="e.g., Amazon Web Services" value="{{ $certification->issuing_organization }}">
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="certification-entry mb-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700 mb-2">Certification Name</label>
                                <input type="text" name="certification_name[]" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="e.g., AWS Certified Solutions Architect">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2">Issuing Organization</label>
                                <input type="text" name="issuing_organization[]" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="e.g., Amazon Web Services">
                            </div>
                        </div>
                    </div>
                    @endforelse
                </div>
                <button type="button" id="add-certification-btn" class="text-blue-600 hover:text-blue-700 font-semibold">+ Add Another Certification</button>
            </div>

            <!-- Interested Areas -->
            <div class="mb-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Interested Areas</h3>
                <textarea name="interested_areas" rows="3" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Enter each area of interest on a new line.">{{ old('interested_areas', $resume->interested_areas ?? '') }}</textarea>
            </div>

            <!-- Projects -->
            <div class="mb-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Projects</h3>
                <div id="projects-container">
                    @forelse ($resume->projects ?? [] as $project)
                    <div class="project-entry mb-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="md:col-span-2">
                                <label class="block text-gray-700 mb-2">Project Name</label>
                                <input type="text" name="project_name[]" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="e.g., My Awesome Project" value="{{ $project->project_name }}">
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-gray-700 mb-2">Key Points</label>
                                <textarea name="project_key_points[]" rows="3" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Enter each key point on a new line.">{{ $project->project_key_points }}</textarea>
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2">Technologies</label>
                                <input type="text" name="technologies[]" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="e.g., Laravel, Vue.js, MySQL" value="{{ $project->technologies }}">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2">Tools</label>
                                <input type="text" name="tools[]" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="e.g., VS Code, Docker, Git" value="{{ $project->tools }}">
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="project-entry mb-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="md:col-span-2">
                                <label class="block text-gray-700 mb-2">Project Name</label>
                                <input type="text" name="project_name[]" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="e.g., My Awesome Project">
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-gray-700 mb-2">Key Points</label>
                                <textarea name="project_key_points[]" rows="3" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Enter each key point on a new line."></textarea>
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2">Technologies</label>
                                <input type="text" name="technologies[]" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="e.g., Laravel, Vue.js, MySQL">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2">Tools</label>
                                <input type="text" name="tools[]" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="e.g., VS Code, Docker, Git">
                            </div>
                        </div>
                    </div>
                    @endforelse
                </div>
                <button type="button" id="add-project-btn" class="text-blue-600 hover:text-blue-700 font-semibold">+ Add Another Project</button>
            </div>


            <div class="text-right">
                <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">Save</button>
            </div>
        </form>
    </div>
</div>

<!-- Live Preview Modal -->
<div id="preview-modal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-2xl w-full max-w-4xl h-[90vh] relative">
        <button id="close-preview-modal-btn" class="absolute top-4 right-4 text-gray-800 hover:text-gray-900 z-10">
            <i class="fa-solid fa-times text-2xl"></i>
        </button>
        <div id="preview-modal-content-wrapper" class="h-full overflow-y-auto">
            <!-- Iframe will be loaded here -->
        </div>
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

        // Dynamic Experience Section
        const addExperienceBtn = document.getElementById('add-experience-btn');
        const experienceContainer = document.getElementById('experience-container');
        if (addExperienceBtn) {
            addExperienceBtn.addEventListener('click', () => {
                const newExperienceEntry = experienceContainer.querySelector('.experience-entry').cloneNode(true);
                const inputs = newExperienceEntry.querySelectorAll('input, textarea');
                inputs.forEach(input => {
                    if (input.type === 'textarea') {
                        input.innerHTML = '';
                    } else {
                        input.value = '';
                    }
                });
                experienceContainer.appendChild(newExperienceEntry);
            });
        }

        // Dynamic Education Section
        const addEducationBtn = document.getElementById('add-education-btn');
        const educationContainer = document.getElementById('education-container');
        if (addEducationBtn) {
            addEducationBtn.addEventListener('click', () => {
                const newEducationEntry = educationContainer.querySelector('.education-entry').cloneNode(true);
                const inputs = newEducationEntry.querySelectorAll('input, textarea');
                inputs.forEach(input => input.value = '');
                educationContainer.appendChild(newEducationEntry);
            });
        }

        // Dynamic Skills Section
        const skillsContainer = document.getElementById('skills-container');
        const addSkillCategoryBtn = document.getElementById('add-skill-category-btn');
        if (addSkillCategoryBtn) {
            addSkillCategoryBtn.addEventListener('click', () => {
                const newSkillCategory = skillsContainer.querySelector('.skill-category-entry').cloneNode(true);
                const inputs = newSkillCategory.querySelectorAll('input, textarea');
                inputs.forEach(input => {
                    if (input.type === 'textarea') {
                        input.innerHTML = '';
                    } else {
                        input.value = '';
                    }
                });
                skillsContainer.appendChild(newSkillCategory);
            });
        }

        // Dynamic Certifications Section
        const addCertificationBtn = document.getElementById('add-certification-btn');
        const certificationsContainer = document.getElementById('certifications-container');
        if (addCertificationBtn) {
            addCertificationBtn.addEventListener('click', () => {
                const newCertificationEntry = certificationsContainer.querySelector('.certification-entry').cloneNode(true);
                const inputs = newCertificationEntry.querySelectorAll('input');
                inputs.forEach(input => input.value = '');
                certificationsContainer.appendChild(newCertificationEntry);
            });
        }

        // Dynamic Projects Section
        const addProjectBtn = document.getElementById('add-project-btn');
        const projectsContainer = document.getElementById('projects-container');
        if (addProjectBtn) {
            addProjectBtn.addEventListener('click', () => {
                const newProjectEntry = projectsContainer.querySelector('.project-entry').cloneNode(true);
                const inputs = newProjectEntry.querySelectorAll('input, textarea');
                inputs.forEach(input => {
                    if (input.type === 'textarea') {
                        input.innerHTML = '';
                    } else {
                        input.value = '';
                    }
                });
                projectsContainer.appendChild(newProjectEntry);
            });
        }

        // Live Preview Modal Logic
        const previewModal = document.getElementById('preview-modal');
        const closePreviewModalBtn = document.getElementById('close-preview-modal-btn');
        const previewModalContentWrapper = document.getElementById('preview-modal-content-wrapper');
        const previewButtons = document.querySelectorAll('.live-preview-btn');

        const openPreviewModal = () => {
            if (previewModal) {
                previewModal.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            }
        };

        const closePreviewModal = () => {
            if (previewModal) {
                previewModal.classList.add('hidden');
                previewModalContentWrapper.innerHTML = ''; // Clear the iframe
                document.body.classList.remove('overflow-hidden');
            }
        };

        if (closePreviewModalBtn) {
            closePreviewModalBtn.addEventListener('click', closePreviewModal);
        }

        if (previewModal) {
            previewModal.addEventListener('click', (e) => {
                if (e.target === previewModal) {
                    closePreviewModal();
                }
            });
        }

        previewButtons.forEach(button => {
            button.addEventListener('click', () => {
                const template = button.dataset.template;
                if (!template) return;

                const previewUrl = `/resume/preview/${template}`;

                const iframe = document.createElement('iframe');
                iframe.src = previewUrl;
                iframe.style.width = '100%';
                iframe.style.height = '100%';
                iframe.style.border = 'none';

                previewModalContentWrapper.innerHTML = ''; // Clear previous content
                previewModalContentWrapper.appendChild(iframe);

                openPreviewModal();
            });
        });

        @if(session('imported_data'))
        const importedData = @json(session('imported_data'));

        function populateFormWithImportedData() {
            if (importedData.full_name) {
                document.getElementById('full_name').value = importedData.full_name;
            }
            if (importedData.email) {
                document.getElementById('email').value = importedData.email;
            }
            if (importedData.summary) {
                document.getElementById('summary').value = importedData.summary;
            }

            if (importedData.projects && importedData.projects.length > 0) {
                const projectsContainer = document.getElementById('projects-container');
                const projectEntries = projectsContainer.querySelectorAll('.project-entry');
                const firstProjectEntry = projectEntries[0];
                const isFirstEntryEmpty = Array.from(firstProjectEntry.querySelectorAll('input, textarea')).every(input => input.value.trim() === '');

                if (projectEntries.length === 1 && isFirstEntryEmpty) {
                    // Use the first empty entry for the first imported project
                    const firstProject = importedData.projects[0];
                    firstProjectEntry.querySelector('input[name="project_name[]"]').value = firstProject.project_name || '';
                    firstProjectEntry.querySelector('textarea[name="project_key_points[]"]').value = firstProject.project_key_points || '';
                    firstProjectEntry.querySelector('input[name="technologies[]"]').value = firstProject.technologies || '';
                    firstProjectEntry.querySelector('input[name="tools[]"]').value = firstProject.tools || '';

                    // Add the rest of the projects
                    const remainingProjects = importedData.projects.slice(1);
                    remainingProjects.forEach(project => {
                        const newProjectEntry = firstProjectEntry.cloneNode(true);
                        newProjectEntry.querySelector('input[name="project_name[]"]').value = project.project_name || '';
                        newProjectEntry.querySelector('textarea[name="project_key_points[]"]').value = project.project_key_points || '';
                        newProjectEntry.querySelector('input[name="technologies[]"]').value = project.technologies || '';
                        newProjectEntry.querySelector('input[name="tools[]"]').value = project.tools || '';
                        projectsContainer.appendChild(newProjectEntry);
                    });
                } else {
                    // Append all imported projects
                    importedData.projects.forEach(project => {
                        const newProjectEntry = firstProjectEntry.cloneNode(true);
                        // Clear the cloned inputs before populating
                        newProjectEntry.querySelectorAll('input, textarea').forEach(i => i.value = '');
                        newProjectEntry.querySelector('input[name="project_name[]"]').value = project.project_name || '';
                        newProjectEntry.querySelector('textarea[name="project_key_points[]"]').value = project.project_key_points || '';
                        newProjectEntry.querySelector('input[name="technologies[]"]').value = project.technologies || '';
                        newProjectEntry.querySelector('input[name="tools[]"]').value = project.tools || '';
                        projectsContainer.appendChild(newProjectEntry);
                    });
                }
            }
            openModal();
        }

        // Check if we should open the modal on page load
        if (Object.keys(importedData).length > 0) {
            populateFormWithImportedData();
        }
        @endif
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

            <!-- <div class="flex flex-col sm:flex-row gap-4 justify-center">
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
            </div> -->

            <p class="text-blue-100 mt-8 text-sm">No credit card required. 7-day money-back guarantee.</p>
        </div>
    </section>

    @include('includes.footer')