<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\CoverPersonal;
use App\Models\ResumeNamePersonal;
use App\Models\CoverDetail;
use App\Models\Transaction;
use App\Models\CoverRecipientDetail;
use App\Models\CoverLetterBody;

class CoverLetterController extends Controller
{
    /**
     * Show the cover letter builder form.
     */
    public function show()
    {
        $user = Auth::user();
        $coverLetter = CoverPersonal::with(['recipientDetail', 'letterBodies'])
            ->where('user_id', $user->id)
            ->first();
        $resumePersonal = ResumeNamePersonal::where('user_id', $user->id)->first();
        $coverDetail = CoverDetail::where('user_id', $user->id)->latest()->first();
        $hasActivePlan = Transaction::where('user_id', $user->id)->exists();

        return view('cover-letter-template', [
            'coverLetter' => $coverLetter,
            'resumePersonal' => $resumePersonal,
            'coverDetail' => $coverDetail,
            'hasActivePlan' => $hasActivePlan,
        ]);
    }

    /**
     * Store a new or updated cover letter.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'cover_letter_id' => 'nullable|exists:cover_personals,id',
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'address' => 'required|string',
            'letter_date' => 'required|date',
            'hiring_manager_name' => 'required|string|max:255',
            'hiring_manager_title' => 'nullable|string|max:255',
            'company_name' => 'required|string|max:255',
            'company_address' => 'required|string',
            'letter_body' => 'required|string',
            'closing_phrase' => 'required|string|max:255',
        ]);

        DB::transaction(function () use ($validatedData, $request) {
            $personalData = [
                'user_id' => Auth::id(),
                'full_name' => $validatedData['full_name'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone'],
                'address' => $validatedData['address'],
                'letter_date' => $validatedData['letter_date'],
                'closing_phrase' => $validatedData['closing_phrase'],
            ];

            // Use updateOrCreate for personal details
            $coverPersonal = CoverPersonal::updateOrCreate(
                ['id' => $request->cover_letter_id, 'user_id' => Auth::id()],
                $personalData
            );

            // Update or create recipient details
            $coverPersonal->recipientDetail()->updateOrCreate(
                ['cover_personal_id' => $coverPersonal->id],
                [
                    'hiring_manager_name' => $validatedData['hiring_manager_name'],
                    'hiring_manager_title' => $validatedData['hiring_manager_title'],
                    'company_name' => $validatedData['company_name'],
                    'company_address' => $validatedData['company_address'],
                ]
            );

            // Delete old letter bodies and create new ones
            $coverPersonal->letterBodies()->delete();
            $paragraphs = preg_split("/\r\n|\n|\r/", $validatedData['letter_body']);
            foreach ($paragraphs as $index => $paragraph) {
                if (trim($paragraph)) {
                    $coverPersonal->letterBodies()->create([
                        'paragraph_text' => $paragraph,
                        'paragraph_order' => $index + 1,
                    ]);
                }
            }
        });

        return redirect()->back()->with('success', 'Cover letter saved successfully!');
    }

    /**
     * Show the cover letter templates page.
     */
    public function templates()
    {
        return view('cover-letter-templates');
    }

    /**
     * Update the user's profile data.
     */
    public function updateProfile(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ]);

        $user = Auth::user();
        $resumePersonal = ResumeNamePersonal::where('user_id', $user->id)->first();

        if ($resumePersonal) {
            $resumePersonal->update($validatedData);
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false, 'message' => 'Profile not found.'], 404);
    }

    /**
     * Store or update the cover letter details.
     */
    public function storeCoverDetails(Request $request)
    {
        $validatedData = $request->validate([
            'cover_detail_id' => 'nullable|exists:cover_details,id',
            'company_name' => 'required|string|max:255',
            'job_role' => 'required|string|max:255',
            'interview_date' => 'nullable|date',
        ]);

        $user = Auth::user();
        $data = [
            'user_id' => $user->id,
            'company_name' => $validatedData['company_name'],
            'job_role' => $validatedData['job_role'],
            'interview_date' => $validatedData['interview_date'],
        ];

        CoverDetail::updateOrCreate(
            ['id' => $request->cover_detail_id, 'user_id' => $user->id],
            $data
        );

        return response()->json(['success' => true]);
    }

    /**
     * Display a preview of the cover letter with a specific template.
     */
    public function preview($template)
    {
        $user = Auth::user();
        $coverLetter = CoverPersonal::with(['recipientDetail', 'letterBodies'])
            ->where('user_id', $user->id)
            ->first();

        // If a full cover letter exists, use it.
        if ($coverLetter) {
            $previewData = $coverLetter;
        } else {
            // Otherwise, create a temporary object for previewing.
            $resumePersonal = ResumeNamePersonal::where('user_id', $user->id)->first();
            $coverDetail = CoverDetail::where('user_id', $user->id)->latest()->first();

            $previewData = new CoverPersonal([
                'full_name' => optional($resumePersonal)->full_name ?? 'Your Name',
                'address' => optional($resumePersonal)->address ?? '123 Main St, Anytown, USA',
                'email' => optional($resumePersonal)->email ?? 'your.email@example.com',
                'phone' => optional($resumePersonal)->phone ?? '555-123-4567',
                'letter_date' => now(),
                'closing_phrase' => 'Sincerely',
            ]);

            $recipientDetail = new CoverRecipientDetail([
                'hiring_manager_name' => 'Hiring Manager',
                'hiring_manager_title' => '',
                'company_name' => optional($coverDetail)->company_name ?? 'Target Company Inc.',
                'company_address' => '',
            ]);
            $previewData->setRelation('recipientDetail', $recipientDetail);

            $generatedText = "Dear Hiring Manager,\n\nI am writing to express my strong interest in the " . (optional($coverDetail)->job_role ?? 'position') . " at " . (optional($coverDetail)->company_name ?? 'your esteemed company') . ". Having followed your company's progress and innovations, I am confident that my skills and experience align perfectly with your requirements.\n\nThank you for considering my application. I have attached my resume for your review and look forward to discussing how I can contribute to your team.\n\n";
            $paragraphs = preg_split("/\r\n|\n|\r/", $generatedText);
            $letterBodies = new \Illuminate\Database\Eloquent\Collection();
            foreach ($paragraphs as $index => $paragraph) {
                if (trim($paragraph)) {
                    $body = new CoverLetterBody(['paragraph_text' => $paragraph]);
                    $letterBodies->add($body);
                }
            }
            $previewData->setRelation('letterBodies', $letterBodies);
        }

        $viewName = 'cover-letter-templates.' . $template;
        if (!view()->exists($viewName)) {
            abort(404);
        }

        return view($viewName, ['coverLetter' => $previewData]);
    }

    /**
     * Show the cover letter builder page.
     */
    public function build($template)
    {
        $user = Auth::user();
        $coverLetter = CoverPersonal::with(['recipientDetail', 'letterBodies'])
            ->where('user_id', $user->id)
            ->first();
        $coverDetail = CoverDetail::where('user_id', $user->id)->latest()->first();
        $resumePersonal = ResumeNamePersonal::where('user_id', $user->id)->first();

        $letterBody = '';
        if ($coverLetter && $coverLetter->letterBodies->isNotEmpty()) {
            $letterBody = $coverLetter->letterBodies->pluck('paragraph_text')->implode("\n\n");
        } else {
            // Generate hardcoded content if no body exists
            $placeholders = [
                '[Hiring Manager Name]',
                '[Company Name]',
                '[Job Role]',
                '[Your Name]',
            ];
            $values = [
                'Hiring Manager', // This will be filled by the user on the build page
                optional($coverDetail)->company_name ?? '[Company Name]',
                optional($coverDetail)->job_role ?? '[Job Role]',
                optional($resumePersonal)->full_name ?? '[Your Name]',
            ];

            $generatedText = "Dear [Hiring Manager Name],\n\nI am writing to express my interest in the [Job Role] position at [Company Name], which I saw advertised. With my skills and experience, I am confident I would be a great fit for this role.\n\nThank you for your time and consideration. I look forward to hearing from you soon.\n\nSincerely,\n[Your Name]";

            $letterBody = str_replace($placeholders, $values, $generatedText);
        }

        return view('cover-letter-build', [
            'template' => $template,
            'coverLetter' => $coverLetter,
            'letterBody' => $letterBody,
        ]);
    }
}
