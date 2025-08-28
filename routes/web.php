<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PricingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/resume', function () {
    return view('resume');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/coverletter', function () {
    return view('coverletter');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/resume-build', [PricingController::class, 'show'])->name('resume-build');
    Route::get('/resume-template', [ResumeController::class, 'show'])->name('resume-template');
    Route::post('/resume-template', [ResumeController::class, 'store'])->name('resume-template.store');
    Route::get('/resume/preview/{template}', [ResumeController::class, 'preview'])->name('resume.preview');
    Route::post('/payment/initiate', [PaymentController::class, 'initiatePayment'])->name('payment.initiate');
});

Route::post('/payment/callback', [PaymentController::class, 'handleCallback'])->name('payment.callback');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});
