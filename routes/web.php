<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanduanController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/tos', [TosController::class, 'index']);
Route::get('/privacy-policy', [PrivacyPolicyController::class, 'index']);
Route::get('/panduan', [PanduanController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);

Route::get('/atasan', [CategoryController::class, 'index']);
Route::get('/flanel', [CategoryController::class, 'subCategory']);

Route::get('/product/{id?}', [ProductController::class, 'index']);

Route::get('/checkout', [CheckoutController::class, 'index']);
// Route::post('/checkout', [CheckoutController::class, 'createTransaction']);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    Route::get('/google/redirect', [App\Http\Controllers\GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
    Route::get('/google/callback', [App\Http\Controllers\GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');

require __DIR__ . '/auth.php';
