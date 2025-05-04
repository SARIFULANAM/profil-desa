<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'beranda');
Route::view('/profil', 'profil');
Route::view('/layanan', 'layanan');
Route::view('/galeri', 'galeri');
Route::view('/kontak', 'kontak');