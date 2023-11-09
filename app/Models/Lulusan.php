<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lulusan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', // Kolom untuk menyimpan nama lulusan
        'gelar', // Kolom untuk menyimpan gelar lulusan
        'deskripsi', // Kolom untuk menyimpan deskripsi lulusan
        'gambar_path', // Kolom untuk menyimpan path gambar lulusan
    ];
}
