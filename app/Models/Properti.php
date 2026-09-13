<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properti extends Model
{
    use HasFactory;

    // Tambahkan kolom baru agar diizinkan masuk ke database
    protected $fillable = [
        'nama_properti',
        'jenis',
        'harga',
        'lokasi',
        'luas_tanah',
        'luas_bangunan',
        'kamar_tidur',
        'kamar_mandi',
        'gambar',
        'deskripsi',
    ];
}