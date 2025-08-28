<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\ResumeNamePersonal;
use App\Models\ResumeNameExperience;
use App\Models\ResumeNameEducation;
use App\Models\ResumeNameSkill;
use App\Models\ResumeNameCertification;
use App\Models\ResumeNameProject;
use App\Models\Transaction;

class ResumeController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $resume = ResumeNamePersonal::with(['experiences', 'educations', 'skills', 'certifications', 'projects'])
            ->where('user_id', $user->id)
            ->first();

        $hasActivePlan = Transaction::where('user_id', $user->id)->exists();

        return view('resume-template', ['resume' => $resume, 'hasActivePlan' => $hasActivePlan]);
    }

    public function preview($template)
    {
        $user = Auth::user();
        $resume = ResumeNamePersonal::with(['experiences', 'educations', 'skills', 'certifications', 'projects'])
            ->where('user_id', $user->id)
            ->first();

        $viewName = 'resume-templates.' . $template;

        if (!view()->exists($viewName)) {
            abort(404);
        }

        return view($viewName, ['resume' => $resume]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'resume_id' => 'nullable|exists:resume_name_personals,id',
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'summary' => 'required|string',
            'job_title.*' => 'nullable|string|max:255',
            'company.*' => 'nullable|string|max:255',
            'start_date.*' => 'nullable|string|max:255',
            'end_date.*' => 'nullable|string|max:255',
            'responsibilities.*' => 'nullable|string',
            'school.*' => 'nullable|string|max:255',
            'degree.*' => 'nullable|string|max:255',
            'year.*' => 'nullable|string|max:255',
            'skill_category.*' => 'nullable|string|max:255',
            'skills.*' => 'nullable|string',
            'certification_name.*' => 'nullable|string|max:255',
            'issuing_organization.*' => 'nullable|string|max:255',
            'interested_areas' => 'nullable|string',
            'project_name.*' => 'nullable|string|max:255',
            'project_key_points.*' => 'nullable|string',
            'technologies.*' => 'nullable|string|max:255',
            'tools.*' => 'nullable|string|max:255',
        ]);

        DB::transaction(function () use ($validatedData, $request) {
            $personalData = [
                'user_id' => Auth::id(),
                'full_name' => $validatedData['full_name'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone'],
                'address' => $validatedData['address'],
                'summary' => $validatedData['summary'],
                'interested_areas' => $validatedData['interested_areas'] ?? null,
            ];

            if ($request->filled('resume_id')) {
                $personal = ResumeNamePersonal::where('id', $request->resume_id)
                                              ->where('user_id', Auth::id())
                                              ->firstOrFail();
                $personal->update($personalData);

                $personal->experiences()->delete();
                $personal->educations()->delete();
                $personal->skills()->delete();
                $personal->certifications()->delete();
                $personal->projects()->delete();
            } else {
                $personal = ResumeNamePersonal::create($personalData);
            }

            if (isset($validatedData['job_title'])) {
                foreach ($validatedData['job_title'] as $key => $jobTitle) {
                    if($jobTitle) {
                        $personal->experiences()->create([
                            'job_title' => $jobTitle,
                            'company' => $validatedData['company'][$key],
                            'start_date' => $validatedData['start_date'][$key],
                            'end_date' => $validatedData['end_date'][$key],
                            'responsibilities' => $validatedData['responsibilities'][$key],
                        ]);
                    }
                }
            }

            if (isset($validatedData['school'])) {
                foreach ($validatedData['school'] as $key => $school) {
                    if($school) {
                        $personal->educations()->create([
                            'school' => $school,
                            'degree' => $validatedData['degree'][$key],
                            'year' => $validatedData['year'][$key],
                        ]);
                    }
                }
            }

            if (isset($validatedData['skill_category'])) {
                foreach ($validatedData['skill_category'] as $key => $skillCategory) {
                    if($skillCategory) {
                        $personal->skills()->create([
                            'skill_category' => $skillCategory,
                            'skills' => $validatedData['skills'][$key],
                        ]);
                    }
                }
            }

            if (isset($validatedData['certification_name'])) {
                foreach ($validatedData['certification_name'] as $key => $certificationName) {
                    if($certificationName) {
                        $personal->certifications()->create([
                            'certification_name' => $certificationName,
                            'issuing_organization' => $validatedData['issuing_organization'][$key],
                        ]);
                    }
                }
            }

            if (isset($validatedData['project_name'])) {
                foreach ($validatedData['project_name'] as $key => $projectName) {
                    if($projectName) {
                        $personal->projects()->create([
                            'project_name' => $projectName,
                            'project_key_points' => $validatedData['project_key_points'][$key],
                            'technologies' => $validatedData['technologies'][$key],
                            'tools' => $validatedData['tools'][$key],
                        ]);
                    }
                }
            }
        });

        return redirect()->back()->with('success', 'Resume data saved successfully!');
    }
}
