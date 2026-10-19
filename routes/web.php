<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\DashboardController;


// Dashboard
Route::get('/', [DashboardController::class, 'index'])
    ->name('dashboard');


// API jadwal salat berdasarkan lokasi perangkat
Route::get('/jadwal-sholat', [DashboardController::class, 'jadwalSholat'])
    ->name('dashboard.prayer-times');


// Jadwal kegiatan keagamaan
Route::get('/jadwal-kegiatan', [JadwalController::class, 'index'])
    ->name('jadwal.index');


// Daftar dakwah Islam
Route::get('/dakwah-islam', [BlogController::class, 'index'])
    ->name('blog.index');


// Detail dakwah Islam
Route::get('/dakwah-islam/{slug}', [BlogController::class, 'show'])
    ->name('blog.show');


// Tentang kami
Route::get('/tentang-kami', function () {
    return view('tentang');
})->name('tentang');