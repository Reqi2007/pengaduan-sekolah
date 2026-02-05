<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;

// Halaman Depan (Form Aspirasi)
Route::get('/', [SiteController::class, 'index'])->name('home');
Route::post('/store', [SiteController::class, 'store'])->name('store.aspirasi');

// Halaman Histori Siswa
Route::get('/history', [SiteController::class, 'search'])->name('history');

// Halaman Admin (Tanpa login kompleks agar simpel sesuai tugas)
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::put('/admin/{id}', [AdminController::class, 'update'])->name('admin.update');