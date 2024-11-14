<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Public route for the Beranda page
Route::get('/', [BerandaController::class, 'index'])->name('beranda');

// Admin routes (protected by authentication)


Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/lomba', function () {
    return view('lomba');
});

Route::get('/pengaduan', function () {
    return view('pengaduan');
});

Route::get('/perpustakaan', function () {
    return view('perpustakaan');
});

Route::get('/ppdb', function () {
    return view('ppdb');
});

Route::get('/prestasi', function () {
    return view('prestasi');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/profil-guru', function () {
    return view('profil-guru');
});

