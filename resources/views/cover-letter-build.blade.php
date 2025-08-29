@include('includes.header')

<div class="container mx-auto px-4 py-8 mt-16">
    <h1 class="text-4xl font-bold text-center my-8">Cover Letter Builder</h1>
    <p class="text-center text-lg text-gray-600 mb-8">You are editing with template: <span class="font-semibold text-blue-600">{{ $template }}</span></p>

    <div class="bg-white p-8 rounded-lg shadow-lg max-w-4xl mx-auto">
        <form action="{{ route('cover-letter-template.store') }}" method="POST">
            @csrf
            <input type="hidden" name="cover_letter_id" value="{{ $coverLetter->id ?? '' }}">

            <!-- Personal Details -->
            <fieldset class="mb-8 border p-4 rounded-lg">
                <legend class="text-xl font-semibold px-2">Your Information</legend>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div>
                        <label for="full_name" class="block text-gray-700 mb-2">Full Name</label>
                        <input type="text" name="full_name" class="w-full border-gray-300 rounded-lg p-2" value="{{ old('full_name', $coverLetter->full_name ?? '') }}" required>
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 mb-2">Email</label>
                        <input type="email" name="email" class="w-full border-gray-300 rounded-lg p-2" value="{{ old('email', $coverLetter->email ?? '') }}" required>
                    </div>
                    <div>
                        <label for="phone" class="block text-gray-700 mb-2">Phone</label>
                        <input type="text" name="phone" class="w-full border-gray-300 rounded-lg p-2" value="{{ old('phone', $coverLetter->phone ?? '') }}" required>
                    </div>
                    <div>
                        <label for="address" class="block text-gray-700 mb-2">Address</label>
                        <input type="text" name="address" class="w-full border-gray-300 rounded-lg p-2" value="{{ old('address', $coverLetter->address ?? '') }}" required>
                    </div>
                </div>
            </fieldset>

            <!-- Recipient Details -->
            <fieldset class="mb-8 border p-4 rounded-lg">
                <legend class="text-xl font-semibold px-2">Recipient Information</legend>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div>
                        <label for="letter_date" class="block text-gray-700 mb-2">Date</label>
                        <input type="date" name="letter_date" class="w-full border-gray-300 rounded-lg p-2" value="{{ old('letter_date', $coverLetter ? $coverLetter->letter_date->format('Y-m-d') : now()->format('Y-m-d')) }}" required>
                    </div>
                    <div>
                        <label for="hiring_manager_name" class="block text-gray-700 mb-2">Hiring Manager's Name</label>
                        <input type="text" name="hiring_manager_name" class="w-full border-gray-300 rounded-lg p-2" value="{{ old('hiring_manager_name', $coverLetter->recipientDetail->hiring_manager_name ?? '') }}" required>
                    </div>
                    <div>
                        <label for="hiring_manager_title" class="block text-gray-700 mb-2">Hiring Manager's Title</label>
                        <input type="text" name="hiring_manager_title" class="w-full border-gray-300 rounded-lg p-2" value="{{ old('hiring_manager_title', $coverLetter->recipientDetail->hiring_manager_title ?? '') }}">
                    </div>
                    <div>
                        <label for="company_name" class="block text-gray-700 mb-2">Company Name</label>
                        <input type="text" name="company_name" class="w-full border-gray-300 rounded-lg p-2" value="{{ old('company_name', $coverLetter->recipientDetail->company_name ?? '') }}" required>
                    </div>
                    <div class="md:col-span-2">
                        <label for="company_address" class="block text-gray-700 mb-2">Company Address</label>
                        <input type="text" name="company_address" class="w-full border-gray-300 rounded-lg p-2" value="{{ old('company_address', $coverLetter->recipientDetail->company_address ?? '') }}" required>
                    </div>
                </div>
            </fieldset>

            <!-- Letter Body -->
            <fieldset class="mb-8 border p-4 rounded-lg">
                <legend class="text-xl font-semibold px-2">Letter Content</legend>
                <div id="letter-body-container" class="mt-4 space-y-4">
                    @forelse ($coverLetter->letterBodies ?? [] as $index => $body)
                        <textarea name="letter_body[]" rows="5" class="w-full border-gray-300 rounded-lg p-2" placeholder="Paragraph {{ $index + 1 }}">{{ $body->paragraph_text }}</textarea>
                    @empty
                        <textarea name="letter_body[]" rows="5" class="w-full border-gray-300 rounded-lg p-2" placeholder="Introduction paragraph..."></textarea>
                        <textarea name="letter_body[]" rows="5" class="w-full border-gray-300 rounded-lg p-2" placeholder="Body paragraph..."></textarea>
                        <textarea name="letter_body[]" rows="5" class="w-full border-gray-300 rounded-lg p-2" placeholder="Conclusion paragraph..."></textarea>
                    @endforelse
                </div>
                <button type="button" id="add-paragraph-btn" class="mt-4 text-blue-600 hover:text-blue-700 font-semibold">+ Add Paragraph</button>
            </fieldset>

            <!-- Closing -->
            <fieldset class="mb-8 border p-4 rounded-lg">
                <legend class="text-xl font-semibold px-2">Closing</legend>
                <div class="mt-4">
                    <label for="closing_phrase" class="block text-gray-700 mb-2">Closing Phrase</label>
                    <input type="text" name="closing_phrase" class="w-full border-gray-300 rounded-lg p-2" value="{{ old('closing_phrase', $coverLetter->closing_phrase ?? 'Sincerely') }}" required>
                </div>
            </fieldset>

            <div class="text-right">
                <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">Save Cover Letter</button>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const addParagraphBtn = document.getElementById('add-paragraph-btn');
    const letterBodyContainer = document.getElementById('letter-body-container');

    if (addParagraphBtn) {
        addParagraphBtn.addEventListener('click', () => {
            const newParagraph = document.createElement('textarea');
            newParagraph.name = 'letter_body[]';
            newParagraph.rows = 5;
            newParagraph.className = 'w-full border-gray-300 rounded-lg p-2';
            newParagraph.placeholder = 'New paragraph...';
            letterBodyContainer.appendChild(newParagraph);
        });
    }
});
</script>

@include('includes.footer')
