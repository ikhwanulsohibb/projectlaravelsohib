<?php

namespace App\Http\Controllers;

use App\Models\Berita; // Pastikan menggunakan nama model yang benar
use App\Models\Dosen;  // Pastikan menggunakan nama model yang benar
use App\Models\Lulusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OtherController extends Controller
{
    public function profile()
    {
        return view('profile');
    }

    public function lulusan()
    {
        return view('lulusan');
    }

    public function berita()
    {
        return view('berita');
    }

    public function aktifitas()
    {
        return view('aktifitas');
    }

    public function biodata()
    {
        return view('biodata');
    }

    public function home()
    {
        return view('home');
    }

    public function inputberita()
    {
        return view('admin.inputberita');
    }

    public function storeBerita(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'isi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
        ]);

        // Handle file gambar
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('gambar', 'public'); // Simpan gambar ke direktori public/gambar

            // Simpan data berita ke database
            $berita = new Berita([
                'judul' => $request->input('judul'),
                'deskripsi' => $request->input('deskripsi'),
                'isi' => $request->input('isi'),
                'gambar_path' => $gambarPath, // Simpan path gambar di database
            ]);

            $berita->save(); // Simpan data berita ke database

            return redirect()->route('admin.home')->with('success', 'Berita berhasil disimpan.'); // Redirect ke halaman input berita dengan pesan sukses
        } else {
            return redirect()->route('inputberita')->with('error', 'Terjadi kesalahan saat mengunggah gambar.'); // Redirect ke halaman input berita dengan pesan kesalahan
        }
    }

    public function InputDosen()
    {
        return view('admin.InputDosen');
    }

    public function storeDosen(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'gelar' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
        ]);

        // Handle file gambar
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('dosen', 'public'); // Simpan gambar ke direktori public/dosen

            // Simpan data dosen ke database
            $dosen = new Dosen([
                'nama' => $request->input('nama'),
                'gelar' => $request->input('gelar'),
                'deskripsi' => $request->input('deskripsi'),
                'gambar_path' => $gambarPath, // Simpan path gambar di database
            ]);

            $dosen->save(); // Simpan data dosen ke database

            return redirect()->route('admin.home')->with('success', 'Data dosen berhasil disimpan.'); // Redirect ke halaman input dosen dengan pesan sukses
        } else {
            return redirect()->route('InputDosen')->with('error', 'Terjadi kesalahan saat mengunggah gambar.'); // Redirect ke halaman input dosen dengan pesan kesalahan
        }
    }

    public function inputlulusan()
    {
        return view('admin.inputlulusan');
    }

    public function storeLulusan(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'gelar' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
        ]);

        // Handle file gambar
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('lulusan', 'public'); // Simpan gambar ke direktori public/lulusan

            // Simpan data lulusan ke database
            $lulusan = new Lulusan([
                'nama' => $request->input('nama'),
                'gelar' => $request->input('gelar'),
                'deskripsi' => $request->input('deskripsi'),
                'gambar_path' => $gambarPath, // Simpan path gambar di database
            ]);

            $lulusan->save(); // Simpan data lulusan ke database

            return redirect()->route('admin.home')->with('success', 'Data lulusan berhasil disimpan.'); // Redirect ke halaman input lulusan dengan pesan sukses
        } else {
            return redirect()->route('inputlulusan')->with('error', 'Terjadi kesalahan saat mengunggah gambar.'); // Redirect ke halaman input lulusan dengan pesan kesalahan
        }
    }
}
