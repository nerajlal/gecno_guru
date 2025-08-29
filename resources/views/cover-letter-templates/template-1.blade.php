<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cover Letter Preview - Classic</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Times+New+Roman&display=swap');
        body { font-family: 'Times New Roman', serif; }
    </style>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto bg-white p-12 shadow-lg">
        @if($coverLetter)
            <div class="flex justify-between items-start mb-12">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800">{{ $coverLetter->full_name }}</h1>
                    <p class="text-gray-600">{{ $coverLetter->address }}</p>
                    <p class="text-gray-600">{{ $coverLetter->email }} | {{ $coverLetter->phone }}</p>
                </div>
                <p class="text-gray-600">{{ \Carbon\Carbon::parse($coverLetter->letter_date)->format('F j, Y') }}</p>
            </div>

            <div class="mb-8">
                <p class="font-bold">{{ $coverLetter->recipientDetail->hiring_manager_name }}</p>
                @if($coverLetter->recipientDetail->hiring_manager_title)
                    <p class="text-gray-600">{{ $coverLetter->recipientDetail->hiring_manager_title }}</p>
                @endif
                <p class="text-gray-600">{{ $coverLetter->recipientDetail->company_name }}</p>
                @if($coverLetter->recipientDetail->company_address)
                    <p class="text-gray-600">{{ $coverLetter->recipientDetail->company_address }}</p>
                @endif
            </div>

            <div class="mb-8">
                <p class="font-bold">Dear {{ $coverLetter->recipientDetail->hiring_manager_name }},</p>
            </div>

            <div class="space-y-4 text-gray-800 leading-relaxed">
                @foreach($coverLetter->letterBodies as $body)
                    <p>{{ $body->paragraph_text }}</p>
                @endforeach
            </div>

            <div class="mt-12">
                <p class="text-gray-800">{{ $coverLetter->closing_phrase }},</p>
                <p class="mt-4 font-bold text-gray-800">{{ $coverLetter->full_name }}</p>
            </div>
        @else
            <p class="text-center text-gray-500">No cover letter data available to display.</p>
        @endif
    </div>
</body>
</html>
