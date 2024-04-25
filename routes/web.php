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
use App\Http\Controllers\AccountController;
use App\Http\Controllers\UbahSandiController;

Route::get('/', [HomeController::class, 'index']);

// Info Pages
Route::get('/tos', [TosController::class, 'index']);
Route::get('/privacy-policy', [PrivacyPolicyController::class, 'index']);
Route::get('/panduan', [PanduanController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);

// Category
Route::get('/category/{categorySlug?}', [CategoryController::class, 'index']);
Route::get('/category/{categorySlug}/{subSlug?}', [CategoryController::class, 'subCategory']);

// Product
Route::get('/product/{id?}', [ProductController::class, 'index']);

// Checkout
Route::get('/checkout', [CheckoutController::class, 'index']);
// Route::post('/checkout', [CheckoutController::class, 'createTransaction']);

Route::get('/dashboard', [AccountController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/ubah-sandi', [UbahSandiController::class, 'index'])->middleware(['auth'])->name('ubahSandi');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// Google Login
Route::get('/google/redirect', [App\Http\Controllers\GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [App\Http\Controllers\GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');

require __DIR__ . '/auth.php';
