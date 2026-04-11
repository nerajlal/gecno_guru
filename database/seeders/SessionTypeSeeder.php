<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SessionType;

class SessionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sessions = [
            [
                'name' => 'Lite session',
                'cost_inr' => 1.00,
                'description' => 'Quick introductory session to get started.'
            ],
            [
                'name' => '1-on-1 Session',
                'cost_inr' => 5000.00,
                'description' => 'Personalized expert guidance for your career growth.'
            ],
            [
                'name' => 'Mock Interview',
                'cost_inr' => 500.00,
                'description' => 'Practice interview with detailed feedback and tips.'
            ],
            [
                'name' => 'Resume Review',
                'cost_inr' => 100.00,
                'description' => 'Professional audit and polishing of your resume.'
            ],
        ];

        foreach ($sessions as $session) {
            SessionType::updateOrCreate(
                ['name' => $session['name']],
                $session
            );
        }
    }
}
