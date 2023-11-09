<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', // Kolom untuk menyimpan nama dosen
        'gelar', // Kolom untuk menyimpan gelar dosen
        'deskripsi', // Kolom untuk menyimpan deskripsi dosen
        'gambar_path', // Kolom untuk menyimpan path gambar dosen
    ];
}
