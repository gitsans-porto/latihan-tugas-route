<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

// Ikhsan pynya
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/destinasi', function () {
    return view('destinasi');
})->name('destinasi');

// Rian punya
Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

// Halaman Mahasiswa
Route::get('/data-mahasiswa', [MahasiswaController::class, 'data_mahasiswa'])->name('data-mahasiswa');

//form register
Route::get('/register', function () {
    return view('register');
})->name('form-register');

//register untuk submit
Route::post('/register', [MahasiswaController::class, 'register'])->name('submit-register');

//form login
Route::get('/login', function () {
    return view('login');
})->name('form-login');

//submit login
Route::post('/login', [MahasiswaController::class, 'login'])->name('submit-login');

//logout
Route::get('/logout', [MahasiswaController::class, 'logout'])->named('logout');

//profil
Route::get('/profil', [MahasiswaController::class, 'profil'])->name('profil');

//save data
Route::post('/register', [MahasiswaController::class, 'savedata'])->name('save-data');