<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\RecommendationController;
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
    ->middleware(['auth', 'verified'])
    ->name('payForMonth');

Route::get('/quiz', [QuizController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('quiz.index');

Route::post('/quiz', [QuizController::class, 'store'])
    ->middleware(['auth', 'verified'])
    ->name('quiz.store');

Route::get('/recommend/{request}', [RecommendationController::class, 'create'])
    ->middleware(['auth', 'verified'])
    ->name('recommend.create');

Route::post('/recommend/{request_id}', [RecommendationController::class, 'store'])
    ->middleware(['auth', 'verified'])
    ->name('recommend.store');

require __DIR__ . '/auth.php';
