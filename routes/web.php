<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\AuthController;

// ⬇️ Route login dan logout
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ⬇️ Lindungi halaman utama & karyawan dengan middleware auth
Route::middleware('auth')->group(function () {
    Route::get('/', [KaryawanController::class, 'index']);
    Route::resource('karyawan', KaryawanController::class);
});
