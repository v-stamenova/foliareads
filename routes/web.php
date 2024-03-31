<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');
Route::view('/about', 'about')->name('about');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::post('/payment/{month}', [PaymentController::class, 'payForMonth'])
    ->name('payForMonth');

Route::get('/quiz', [QuizController::class, 'index'])
    ->name('quiz.index');
Route::post('/quiz', [QuizController::class, 'store'])
    ->name('quiz.store');

require __DIR__ . '/auth.php';
