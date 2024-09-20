<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
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
