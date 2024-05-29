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
use App\Http\Controllers\SearchController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\KelolaPenggunaController;

Route::get('/', [HomeController::class, 'index']);

// Info Pages
Route::get('/tos', [TosController::class, 'index']);
Route::get('/privacy-policy', [PrivacyPolicyController::class, 'index']);
Route::get('/panduan', [PanduanController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
// Search
Route::get('/search', [SearchController::class, 'index']);
// Category
Route::get('/category/{categorySlug?}', [CategoryController::class, 'index']);
Route::get('/category/{categorySlug}/{subSlug?}', [CategoryController::class, 'subCategory']);
// Product
Route::get('/product/{id?}', [ProductController::class, 'index']);
Route::get('/allproduct', [ProductController::class, 'allProduct']);
// Checkout
Route::get('/checkout', [CheckoutController::class, 'index']);
// Route::post('/checkout', [CheckoutController::class, 'createTransaction']);

Route::get('/dashboard', [AccountController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/informasi-pribadi', [AccountController::class, 'profil'])->middleware(['auth'])->name('profil');
Route::get('/ubah-sandi', [AccountController::class, 'changePassword'])->middleware(['auth'])->name('ubahSandi');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// Google Login
Route::get('/google/redirect', [App\Http\Controllers\GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [App\Http\Controllers\GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');

// Users
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/dashboard', [AccountController::class, 'index'])->name('dashboard');
    Route::get('/informasi-pribadi', [AccountController::class, 'profil'])->name('profil');
});

// Backend Admin
Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    // Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    // Master Data
    Route::prefix("data")->group(function () {
        Route::get('produk', function () {
            dd("Ini halaman naster data produk");
        })->name('admin.data.produk');
        Route::get('kategori', function () {
            dd("Ini halaman naster data kategori");
        })->name('admin.data.kategori');
    });
    // Pengguna
    Route::prefix("pengguna")->group(function () {
        Route::get('kelola-pengguna', [KelolaPenggunaController::class, 'index'])->name('admin.pengguna.kelola-pengguna');
        Route::get('kelola-pengguna/tambah', [KelolaPenggunaController::class, 'tambah'])->name('admin.pengguna.kelola-pengguna.tambah');
        Route::get('kelola-pengguna/tambah/simpan', [KelolaPenggunaController::class, 'simpan'])->name('admin.pengguna.kelola-pengguna.tambah.simpan');
        Route::get('kelola-pengguna/edit/{id}', [KelolaPenggunaController::class, 'edit'])->name('admin.pengguna.kelola-pengguna.edit');
    });
});


require __DIR__ . '/auth.php';
