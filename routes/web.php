<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanduanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

// Panduan Route
Route::get('/panduan', [PanduanController::class, 'index']);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
