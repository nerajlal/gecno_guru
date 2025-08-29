<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cover Letter Preview - Sidebar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
        body { font-family: 'Lato', sans-serif; background-color: #e5e7eb; }
        .a4-sheet {
            display: flex;
            width: 210mm;
            height: 297mm;
            margin: 2rem auto;
            box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
            background: white;
        }
        .download-btn {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 100;
        }
        @media print {
            html, body {
                margin: 0;
                padding: 0;
                background-color: white;
            }
            .a4-sheet {
                margin: 0;
                box-shadow: none;
                border: none;
                width: 100%;
                height: 100%;
            }
            .download-btn { display: none; }
        }
    </style>
</head>
<body>
    <button onclick="window.print()" class="download-btn bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-700 transition">Download as PDF</button>
    <div class="a4-sheet">
        @if($coverLetter)
            <!-- Sidebar -->
            <div class="w-1/3 bg-gray-700 text-white p-8">
                <h1 class="text-3xl font-bold">{{ $coverLetter->full_name }}</h1>
                <div class="mt-8">
                    <h2 class="text-lg font-semibold border-b-2 border-gray-500 pb-2">Contact</h2>
                    <p class="mt-4 text-sm">{{ $coverLetter->address }}</p>
                    <p class="mt-2 text-sm">{{ $coverLetter->email }}</p>
                    <p class="mt-2 text-sm">{{ $coverLetter->phone }}</p>
                </div>
            </div>

            <!-- Main Content -->
            <div class="w-2/3 p-8">
                <div class="text-right mb-12">
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
            </div>
        @else
            <div class="w-full text-center text-gray-500 p-12">
                No cover letter data available to display.
            </div>
        @endif
    </div>
</body>
</html>
