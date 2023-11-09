<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
protected $table = 'peminjaman';
    protected $fillable = [
        'tanggal_peminjaman', // Kolom untuk menyimpan nama dosen
        'tanggal_kembali', // Kolom untuk menyimpan gelar dosen
        'id_buku', // Kolom untuk menyimpan deskripsi dosen
        'id_user', 
        'status'// Kolom untuk menyimpan path gambar dosen
    ];
}
