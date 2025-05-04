<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Galeri extends Model {
    protected $fillable = ['judul', 'gambar'];
}

// Untuk menampilkan galeri secara dinamis, buat GaleriController dan isi blade dengan looping @foreach.

// Untuk deploy: zip project, upload ke 000webhost atau deploy ke Render.com