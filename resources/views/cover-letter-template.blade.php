@include('includes.header')

<section class="py-16 bg-gray-50 pt-24">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Cover Letter Builder</h1>
            <p class="text-lg text-gray-600">Craft a professional cover letter that stands out.</p>
        </div>

        <div class="bg-white p-8 rounded-xl shadow-lg">
            <form action="{{ route('cover-letter.store') }}" method="POST">
                @csrf
                <input type="hidden" name="cover_letter_id" value="{{ $coverLetter->id ?? '' }}">

                <!-- Your Information -->
                <div class="mb-8">
                    <h3 class="text-xl font-semibold text-gray-800 border-b pb-2 mb-4">Your Information</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="full_name" class="block text-gray-700 mb-2">Full Name</label>
                            <input type="text" name="full_name" class="w-full border border-gray-300 rounded-lg py-2 px-4" value="{{ old('full_name', $coverLetter->full_name ?? '') }}" required>
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 mb-2">Email</label>
                            <input type="email" name="email" class="w-full border border-gray-300 rounded-lg py-2 px-4" value="{{ old('email', $coverLetter->email ?? '') }}" required>
                        </div>
                        <div>
                            <label for="phone" class="block text-gray-700 mb-2">Phone</label>
                            <input type="tel" name="phone" class="w-full border border-gray-300 rounded-lg py-2 px-4" value="{{ old('phone', $coverLetter->phone ?? '') }}" required>
                        </div>
                        <div>
                            <label for="address" class="block text-gray-700 mb-2">Address</label>
                            <input type="text" name="address" class="w-full border border-gray-300 rounded-lg py-2 px-4" value="{{ old('address', $coverLetter->address ?? '') }}" required>
                        </div>
                    </div>
                </div>

                <!-- Recipient Information -->
                <div class="mb-8">
                    <h3 class="text-xl font-semibold text-gray-800 border-b pb-2 mb-4">Recipient Information</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="letter_date" class="block text-gray-700 mb-2">Date</label>
                            <input type="date" name="letter_date" class="w-full border border-gray-300 rounded-lg py-2 px-4" value="{{ old('letter_date', $coverLetter->letter_date ?? date('Y-m-d')) }}" required>
                        </div>
                        <div>
                            <label for="hiring_manager_name" class="block text-gray-700 mb-2">Hiring Manager Name</label>
                            <input type="text" name="hiring_manager_name" class="w-full border border-gray-300 rounded-lg py-2 px-4" value="{{ old('hiring_manager_name', $coverLetter->recipientDetail->hiring_manager_name ?? '') }}" required>
                        </div>
                        <div>
                            <label for="hiring_manager_title" class="block text-gray-700 mb-2">Hiring Manager Title (Optional)</label>
                            <input type="text" name="hiring_manager_title" class="w-full border border-gray-300 rounded-lg py-2 px-4" value="{{ old('hiring_manager_title', $coverLetter->recipientDetail->hiring_manager_title ?? '') }}">
                        </div>
                        <div>
                            <label for="company_name" class="block text-gray-700 mb-2">Company Name</label>
                            <input type="text" name="company_name" class="w-full border border-gray-300 rounded-lg py-2 px-4" value="{{ old('company_name', $coverLetter->recipientDetail->company_name ?? '') }}" required>
                        </div>
                        <div class="md:col-span-2">
                            <label for="company_address" class="block text-gray-700 mb-2">Company Address</label>
                            <input type="text" name="company_address" class="w-full border border-gray-300 rounded-lg py-2 px-4" value="{{ old('company_address', $coverLetter->recipientDetail->company_address ?? '') }}" required>
                        </div>
                    </div>
                </div>

                <!-- Letter Body -->
                <div class="mb-8">
                    <h3 class="text-xl font-semibold text-gray-800 border-b pb-2 mb-4">Letter Body</h3>
                    <div id="letter-body-container">
                        @forelse ($coverLetter->letterBodies ?? [] as $body)
                            <div class="letter-paragraph mb-4">
                                <textarea name="letter_body[]" rows="5" class="w-full border border-gray-300 rounded-lg py-2 px-4" placeholder="Enter a paragraph..." required>{{ $body->paragraph_text }}</textarea>
                            </div>
                        @empty
                            <div class="letter-paragraph mb-4">
                                <textarea name="letter_body[]" rows="5" class="w-full border border-gray-300 rounded-lg py-2 px-4" placeholder="Enter a paragraph..." required></textarea>
                            </div>
                        @endforelse
                    </div>
                    <button type="button" id="add-paragraph-btn" class="text-blue-600 hover:text-blue-700 font-semibold mt-2">+ Add Paragraph</button>
                </div>

                <!-- Closing -->
                <div class="mb-8">
                    <h3 class="text-xl font-semibold text-gray-800 border-b pb-2 mb-4">Closing</h3>
                    <div>
                        <label for="closing_phrase" class="block text-gray-700 mb-2">Closing Phrase</label>
                        <input type="text" name="closing_phrase" class="w-full border border-gray-300 rounded-lg py-2 px-4" value="{{ old('closing_phrase', $coverLetter->closing_phrase ?? 'Sincerely') }}" required>
                    </div>
                </div>

                <div class="text-right">
                    <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">Save Cover Letter</button>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const addParagraphBtn = document.getElementById('add-paragraph-btn');
    const letterBodyContainer = document.getElementById('letter-body-container');

    if (addParagraphBtn) {
        addParagraphBtn.addEventListener('click', () => {
            const newParagraph = document.createElement('div');
            newParagraph.classList.add('letter-paragraph', 'mb-4');
            newParagraph.innerHTML = `<textarea name="letter_body[]" rows="5" class="w-full border border-gray-300 rounded-lg py-2 px-4" placeholder="Enter a paragraph..." required></textarea>`;
            letterBodyContainer.appendChild(newParagraph);
        });
    }
});
</script>

@include('includes.footer')
