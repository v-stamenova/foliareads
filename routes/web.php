<?php

use App\Http\Controllers\PaymentController;
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

require __DIR__ . '/auth.php';
