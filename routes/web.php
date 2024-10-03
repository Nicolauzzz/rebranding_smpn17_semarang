<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('berandaasli');
});

Route::get('/berita', function () {
    return view('berita');
});

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

Route::get('https://ppd.semarangkota.go.id/', function () {
    return view('https://ppd.semarangkota.go.id/');
});

Route::get('/prestasi', function () {
    return view('prestasi');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/profil-sekolah', function () {
    return view('profil-sekolah');
})->name('profil-sekolah');

Route::get('/profil-guru', function () {
    return view('profil-guru');
})->name('profil-guru');

Route::get('/profil-siswa', function () {
    return view('profil-siswa');
})->name('profil-siswa');

