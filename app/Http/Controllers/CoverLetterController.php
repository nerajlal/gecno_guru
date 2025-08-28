<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\CoverPersonal;

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

        // This view will be created in the next step
        return view('cover-letter-template', ['coverLetter' => $coverLetter]);
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
            'letter_body.*' => 'required|string',
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

            // Create or update the main cover letter record
            if ($request->filled('cover_letter_id')) {
                $coverPersonal = CoverPersonal::where('id', $request->cover_letter_id)
                                              ->where('user_id', Auth::id())
                                              ->firstOrFail();
                $coverPersonal->update($personalData);

                // Clear out old related data
                $coverPersonal->recipientDetail()->delete();
                $coverPersonal->letterBodies()->delete();
            } else {
                $coverPersonal = CoverPersonal::create($personalData);
            }

            // Create the recipient detail record
            $coverPersonal->recipientDetail()->create([
                'hiring_manager_name' => $validatedData['hiring_manager_name'],
                'hiring_manager_title' => $validatedData['hiring_manager_title'],
                'company_name' => $validatedData['company_name'],
                'company_address' => $validatedData['company_address'],
            ]);

            // Create the letter body paragraphs
            if (isset($validatedData['letter_body'])) {
                foreach ($validatedData['letter_body'] as $index => $paragraph) {
                    if ($paragraph) {
                        $coverPersonal->letterBodies()->create([
                            'paragraph_text' => $paragraph,
                            'paragraph_order' => $index + 1,
                        ]);
                    }
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
}
