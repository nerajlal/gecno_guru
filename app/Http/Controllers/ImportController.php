<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class ImportController extends Controller
{
    public function redirectToLinkedin()
    {
        $clientId = config('services.linkedin.client_id');
        $redirectUri = config('services.linkedin.redirect');
        if (!$clientId || !$redirectUri) {
            Log::error('LinkedIn service is not configured correctly.');
            return Redirect::route('resume-template')->with('error', 'LinkedIn import is not configured.');
        }

        $state = Str::random(40);
        session(['linkedin_state' => $state]);

        $url = 'https://www.linkedin.com/oauth/v2/authorization?' . http_build_query([
            'response_type' => 'code',
            'client_id' => $clientId,
            'redirect_uri' => $redirectUri,
            'state' => $state,
            'scope' => 'r_liteprofile r_emailaddress',
        ]);

        return Redirect::to($url);
    }

    public function handleLinkedinCallback(Request $request)
    {
        if (!$request->has('code') || $request->input('state') !== session('linkedin_state')) {
            return Redirect::route('resume-template')->with('error', 'Invalid request from LinkedIn.');
        }

        try {
            $clientId = config('services.linkedin.client_id');
            $clientSecret = config('services.linkedin.client_secret');
            $redirectUri = config('services.linkedin.redirect');

            $response = Http::asForm()->post('https://www.linkedin.com/oauth/v2/accessToken', [
                'grant_type' => 'authorization_code',
                'code' => $request->input('code'),
                'redirect_uri' => $redirectUri,
                'client_id' => $clientId,
                'client_secret' => $clientSecret,
            ]);

            if ($response->failed()) {
                Log::error('LinkedIn token exchange failed.', ['response' => $response->body()]);
                return Redirect::route('resume-template')->with('error', 'Failed to authenticate with LinkedIn.');
            }

            $accessToken = $response->json('access_token');

            $profileResponse = Http::withToken($accessToken)->get('https://api.linkedin.com/v2/me');
            $emailResponse = Http::withToken($accessToken)->get('https://api.linkedin.com/v2/emailAddress?q=members&projection=(elements*(handle~))');

            if ($profileResponse->failed() || $emailResponse->failed()) {
                Log::error('Failed to fetch data from LinkedIn.', [
                    'profile_response' => $profileResponse->body(),
                    'email_response' => $emailResponse->body()
                ]);
                return Redirect::route('resume-template')->with('error', 'Failed to fetch data from LinkedIn.');
            }

            $profileData = $profileResponse->json();
            $emailData = $emailResponse->json();

            $importedData = [
                'full_name' => ($profileData['localizedFirstName'] ?? '') . ' ' . ($profileData['localizedLastName'] ?? ''),
                'email' => $emailData['elements'][0]['handle~']['emailAddress'] ?? '',
            ];

            session(['imported_data' => $importedData]);

            return Redirect::route('resume-template')->with('success', 'LinkedIn data imported successfully!');
        } catch (\Exception $e) {
            Log::error('An error occurred during LinkedIn import.', ['exception' => $e->getMessage()]);
            return Redirect::route('resume-template')->with('error', 'An unexpected error occurred while importing data from LinkedIn.');
        }
    }

    public function redirectToGithub()
    {
        $clientId = config('services.github.client_id');
        $redirectUri = config('services.github.redirect');
        if (!$clientId || !$redirectUri) {
            Log::error('GitHub service is not configured correctly.');
            return Redirect::route('resume-template')->with('error', 'GitHub import is not configured.');
        }

        $state = Str::random(40);
        session(['github_state' => $state]);

        $url = 'https://github.com/login/oauth/authorize?' . http_build_query([
            'client_id' => $clientId,
            'redirect_uri' => $redirectUri,
            'state' => $state,
            'scope' => 'user:email,read:user,repo',
        ]);

        return Redirect::to($url);
    }

    public function handleGithubCallback(Request $request)
    {
        if (!$request->has('code') || $request->input('state') !== session('github_state')) {
            return Redirect::route('resume-template')->with('error', 'Invalid request from GitHub.');
        }

        try {
            $clientId = config('services.github.client_id');
            $clientSecret = config('services.github.client_secret');

            $response = Http::withHeaders(['Accept' => 'application/json'])->post('https://github.com/login/oauth/access_token', [
                'client_id' => $clientId,
                'client_secret' => $clientSecret,
                'code' => $request->input('code'),
            ]);

            if ($response->failed()) {
                Log::error('GitHub token exchange failed.', ['response' => $response->body()]);
                return Redirect::route('resume-template')->with('error', 'Failed to authenticate with GitHub.');
            }

            $accessToken = $response->json('access_token');

            $userResponse = Http::withToken($accessToken)->get('https://api.github.com/user');
            $emailsResponse = Http::withToken($accessToken)->get('https://api.github.com/user/emails');

            if ($userResponse->failed()) {
                Log::error('Failed to fetch user data from GitHub.', ['response' => $userResponse->body()]);
                return Redirect::route('resume-template')->with('error', 'Failed to fetch user data from GitHub.');
            }

            $userData = $userResponse->json();
            $emailsData = $emailsResponse->successful() ? $emailsResponse->json() : [];

            $primaryEmail = collect($emailsData)->firstWhere('primary', true)['email']
                ?? (isset($emailsData[0]['email']) ? $emailsData[0]['email'] : '');

            $importedData = [
                'full_name' => $userData['name'] ?? '',
                'email' => $primaryEmail,
                'summary' => $userData['bio'] ?? '',
            ];

            $reposResponse = Http::withToken($accessToken)->get($userData['repos_url']);
            if ($reposResponse->successful()) {
                $repos = $reposResponse->json();
                $projects = [];
                foreach ($repos as $repo) {
                    if (!$repo['fork']) {
                        $projects[] = [
                            'project_name' => $repo['name'],
                            'project_key_points' => $repo['description'] ?? '',
                            'technologies' => $repo['language'] ?? '',
                            'tools' => '',
                        ];
                    }
                }
                $importedData['projects'] = $projects;
            }

            session(['imported_data' => $importedData]);

            return Redirect::route('resume-template')->with('success', 'GitHub data imported successfully!');
        } catch (\Exception $e) {
            Log::error('An error occurred during GitHub import.', ['exception' => $e->getMessage()]);
            return Redirect::route('resume-template')->with('error', 'An unexpected error occurred while importing data from GitHub.');
        }
    }
}