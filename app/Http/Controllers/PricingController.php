<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;

class PricingController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $hasActivePlan = Transaction::where('user_id', $user->id)
                                    ->where('status', 'SUCCESS')
                                    ->exists();

        return view('resume-build', ['hasActivePlan' => $hasActivePlan]);
    }
}
