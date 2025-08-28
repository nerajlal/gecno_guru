@include('includes.header')

    <!-- Pricing Section -->
    <section class="py-16 bg-white pt-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">Simple, Transparent Pricing</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Choose the plan that works best for your career goals</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-3xl border border-gray-200">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Basic</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-gray-900">$9</span>
                        <span class="text-gray-600">/one-time</span>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>1 Resume Template</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>Basic AI Suggestions</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>PDF Download</span>
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fa-solid fa-xmark mr-2"></i>
                            <span>ATS Optimization</span>
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fa-solid fa-xmark mr-2"></i>
                            <span>Cover Letter Builder</span>
                        </li>
                    </ul>
                    <form action="{{ route('payment.initiate') }}" method="POST">
                        @csrf
                        <input type="hidden" name="amount" value="900">
                        <button type="submit" class="w-full bg-gray-200 text-gray-700 py-3 rounded-full font-semibold hover:bg-gray-300 transition-colors duration-200">
                            Get Started
                        </button>
                    </form>
                </div>

                <div class="bg-blue-50 p-8 rounded-3xl border border-blue-200 relative">
                    <span class="absolute top-0 right-0 bg-blue-600 text-white px-4 py-1 rounded-bl-lg rounded-tr-lg font-semibold">Most Popular</span>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Professional</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-gray-900">$19</span>
                        <span class="text-gray-600">/one-time</span>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>All Resume Templates</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>Advanced AI Suggestions</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>Multiple Format Downloads</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>ATS Optimization</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>Cover Letter Builder</span>
                        </li>
                    </ul>
                    <form action="{{ route('payment.initiate') }}" method="POST">
                        @csrf
                        <input type="hidden" name="amount" value="1900">
                        <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-full font-semibold hover:bg-blue-700 transition-colors duration-200">
                            Get Started
                        </button>
                    </form>
                </div>

                <div class="bg-gray-50 p-8 rounded-3xl border border-gray-200">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Premium</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-gray-900">$39</span>
                        <span class="text-gray-600">/one-time</span>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>All Professional Features</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>LinkedIn Profile Optimization</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>1-on-1 Career Consultation</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>Interview Preparation Guide</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>Job Search Strategy Session</span>
                        </li>
                    </ul>
                    <form action="{{ route('payment.initiate') }}" method="POST">
                        @csrf
                        <input type="hidden" name="amount" value="3900">
                        <button type="submit" class="w-full bg-gray-200 text-gray-700 py-3 rounded-full font-semibold hover:bg-gray-300 transition-colors duration-200">
                            Get Started
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@include('includes.footer')
