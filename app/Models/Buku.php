<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $fillable = [
        'gambar', // Kolom untuk menyimpan nama dosen
        'kode_buku', // Kolom untuk menyimpan gelar dosen
        'judul_buku', // Kolom untuk menyimpan deskripsi dosen
        'penulis',
        'penerbit',
        'kategori',
        'deskripdi',
        'tahun_terbit'
         // Kolom untuk menyimpan path gambar dosen
    ];
}