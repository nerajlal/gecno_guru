@include('includes.header')

    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 gradient-bg overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-20 h-20 bg-white bg-opacity-10 rounded-full floating"></div>
            <div class="absolute top-40 right-20 w-16 h-16 bg-white bg-opacity-10 rounded-full floating" style="animation-delay: -2s;"></div>
            <div class="absolute bottom-40 left-1/4 w-12 h-12 bg-white bg-opacity-10 rounded-full floating" style="animation-delay: -4s;"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center text-white">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-6">Cover Letter Templates</h1>
                <p class="text-xl text-blue-50 mb-8 max-w-3xl mx-auto leading-relaxed">
                    Choose a professionally designed template to match your style.
                </p>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Heading -->
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Choose Your Cover Letter Style</h2>
                <p class="text-lg text-gray-600">Select from our professional templates designed to impress employers.</p>
            </div>

            <!-- Action Buttons -->
            <div class="text-right mb-8 flex justify-end gap-4">
                <button id="add-profile-btn" class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-700 transition">
                    My Profile Data
                </button>
                <button id="fetch-job-desc-btn" class="bg-green-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-green-700 transition">
                    Job Description
                </button>
            </div>

            <!-- Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Card 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1554774853-719586f82d77?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Classic Cover Letter" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">Classic Professional</h3>
                        <p class="text-gray-600 mt-2 text-sm">A timeless design for any industrial profesionals.</p>
                        <div class="mt-6 flex gap-3">
                            <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-semibold hover:bg-blue-700 transition">Live Preview</a>
                            <a href="{{ route('cover-letter-template.show') }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-semibold hover:bg-blue-700 transition">Use Template</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Modern Professional" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">Modern Professional</h3>
                        <p class="text-gray-600 mt-2 text-sm">A professional design with a modern style.</p>
                        <div class="mt-6 flex gap-3">
                            <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-semibold hover:bg-blue-700 transition">Live Preview</a>
                            <a href="{{ route('cover-letter-template.show') }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-semibold hover:bg-blue-700 transition">Use Template</a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Creative" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">Creative</h3>
                        <p class="text-gray-600 mt-2 text-sm">A bold design for creative industries.</p>
                        <div class="mt-6 flex gap-3">
                            <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-semibold hover:bg-blue-700 transition">Live Preview</a>
                            <a href="{{ route('cover-letter-template.show') }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-semibold hover:bg-blue-700 transition">Use Template</a>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Simple & Clean" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">Simple & Clean</h3>
                        <p class="text-gray-600 mt-2 text-sm">A minimal design focused on content.</p>
                        <div class="mt-6 flex gap-3">
                            <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-semibold hover:bg-blue-700 transition">Live Preview</a>
                            <a href="{{ route('cover-letter-template.show') }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-semibold hover:bg-blue-700 transition">Use Template</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Profile Data Modal -->
    <div id="profile-modal" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg shadow-2xl p-8 w-full max-w-lg">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">My Profile Data</h2>
            <form id="profile-form">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
                    <input type="text" id="name" name="full_name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-6">
                    <label for="phone" class="block text-gray-700 font-semibold mb-2">Mobile Number</label>
                    <input type="text" id="phone" name="phone" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="text-right flex gap-4">
                    <button type="button" id="close-modal-btn" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition">Close</button>
                    <button type="submit" id="save-profile-btn" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Save</button>
                </div>
            </form>
        </div>
    </div>

@include('includes.footer')

<script>
document.addEventListener('DOMContentLoaded', function() {
    const addProfileBtn = document.getElementById('add-profile-btn');
    const profileModal = document.getElementById('profile-modal');
    const closeModalBtn = document.getElementById('close-modal-btn');
    const profileForm = document.getElementById('profile-form');
    const saveProfileBtn = document.getElementById('save-profile-btn');

    addProfileBtn.addEventListener('click', function() {
        @if ($resumePersonal)
            profileForm.elements.full_name.value = '{{ $resumePersonal->full_name }}';
            profileForm.elements.email.value = '{{ $resumePersonal->email }}';
            profileForm.elements.phone.value = '{{ $resumePersonal->phone }}';
        @endif
        profileModal.classList.remove('hidden');
    });

    closeModalBtn.addEventListener('click', function() {
        profileModal.classList.add('hidden');
    });

    profileForm.addEventListener('submit', function(event) {
        event.preventDefault();
        saveProfileBtn.disabled = true;
        saveProfileBtn.textContent = 'Saving...';

        const formData = new FormData(profileForm);
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch('/profile/update', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json',
            },
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                profileModal.classList.add('hidden');
                // Optionally, show a success message to the user
                alert('Profile updated successfully!');
            } else {
                // Handle errors, e.g., show validation messages
                alert('Error updating profile: ' + (data.message || 'Unknown error'));
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An unexpected error occurred.');
        })
        .finally(() => {
            saveProfileBtn.disabled = false;
            saveProfileBtn.textContent = 'Save';
        });
    });

    // Close modal if clicking outside of it
    window.addEventListener('click', function(event) {
        if (event.target === profileModal) {
            profileModal.classList.add('hidden');
        }
    });
});
</script>
