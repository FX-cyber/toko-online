<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route untuk Profile (SUDAH ADA)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ==========================================
    // TAMBAHKAN INI UNTUK USER!
    // ==========================================
    Route::resource('user', UserController::class);

    // ==========================================
    // TAMBAHKAN INI UNTUK MAHASISWA!
    // ==========================================
    Route::resource('mahasiswa', MahasiswaController::class);
});

require __DIR__.'/auth.php';