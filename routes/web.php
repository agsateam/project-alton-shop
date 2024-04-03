<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrivpolController;
use App\Http\Controllers\TosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/tos', [TosController::class, 'index']);
Route::get('/privacy-policy', [PrivpolController::class, 'index']);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// Route::view('tos', 'tos')
//     ->name('tos');

// Route::view('privpol', 'privpol')
//     ->name('privpol');

require __DIR__ . '/auth.php';
