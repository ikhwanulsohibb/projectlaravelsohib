<?php
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\otherController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Models\Buku; // Import model Buku
use Illuminate\Support\Facades\File; // Import File

// Middleware untuk semua rute yang memerlukan autentikasi
Route::middleware(['auth'])->group(function () {
    // Rute Logout dan Profile
    Route::get('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
    Route::get('/profile', [otherController::class, 'profile'])->name('profile');

    // Middleware untuk admin
    Route::group(['middleware' => ['checklevel:admin']], function () {
        // Rute Admin
        // ...
        Route::get('/admin/home', [LoginRegisterController::class, 'adminHome'])->name('admin.home');
        Route::get('/admin/tambah', [AdminController::class, 'tambah'])->name('admin.tambah');
        Route::get('/editAdmin/{id}', [AdminController::class, 'editAdmin'])->name('editAdmin');
        Route::get('/deleteAdmin/{id}', [AdminController::class, 'deleteAdmin'])->name('deleteAdmin');
        // ...
        Route::post('admin/postBerita', [otherController::class, 'storeBerita'])->name('postBerita');
        Route::post('admin/postDosen', [otherController::class, 'storeDosen'])->name('postDosen');
        Route::post('admin/postLulusan', [otherController::class, 'storeLulusan'])->name('postLulusan');
        // ...
        Route::get('/admin/buku', [AdminController::class, 'adminBuku'])->name('admin.buku'); // Tambahkan rute admin.buku
        Route::get('/admin/tambahBuku', [AdminController::class, 'tambahBuku'])->name('admin.tambahBuku'); // Tambahkan rute admin.tambahBuku
        Route::get('/admin/editBuku/{id}', [AdminController::class, 'editBuku'])->name('editBuku'); // Tambahkan rute admin.editBuku
        Route::get('/admin/deleteBuku/{id}', [AdminController::class, 'deleteBuku'])->name('deleteBuku'); // Tambahkan rute admin.deleteBuku

        Route::post('/posteditAdmin/{id}', [AdminController::class, 'posteditAdmin'])->name('posteditAdmin');
        Route::post('/posttambahBuku', [AdminController::class, 'posttambahBuku'])->name('posttambahBuku');
        Route::post('/posteditBuku/{id}', [AdminController::class, 'posteditBuku'])->name('posteditBuku');
        Route::get('/inputlulusan', [AdminController::class, 'inputlulusan'])->name('admin.inputlulusan');
        Route::get('/InputDosen', [AdminController::class, 'InputDosen'])->name('admin.InputDosen');
        Route::get('/inputberita', [AdminController::class, 'inputberita'])->name('admin.inputberita');
        Route::get('/admin/peminjaman', [AdminController::class, 'adminPeminjaman'])->name('admin.peminjaman');
        Route::get('/admin/tambahPeminjaman', [AdminController::class, 'tambahPeminjaman'])->name('admin.tambahPeminjaman');
        Route::post('/admin/postTambahPeminjaman', [AdminController::class, 'postTambahPeminjaman'])->name('admin.postTambahPeminjaman');
        Route::get('/admin/editPeminjaman/{id}', [AdminController::class, 'editPeminjaman'])->name('admin.editPeminjaman');
        Route::post('/admin/postEditPeminjaman/{id}', [AdminController::class, 'postEditPeminjaman'])->name('admin.postEditPeminjaman');
        Route::get('/admin/deletePeminjaman/{id}', [AdminController::class, 'deletePeminjaman'])->name('admin.deletePeminjaman');
        // Untuk detail peminjaman
        Route::get('/admin/detailPeminjaman/{idPeminjaman}/{idUser}/{idBuku}', [AdminController::class, 'detailPeminjaman'])->name('admin.detailPeminjaman');

        Route::get('/admin/cetakPeminjaman', [AdminController::class, 'cetakDataPeminjaman'])->name('admin.cetakDataPeminjaman');

    });
    Route::post('/tambahAdmin', [AdminController::class, 'postTambahAdmin'])->name('postTambahAdmin');

Route::post('/postEditAdmin/{id}', [AdminController::class, 'postEditAdmin'])->name('postEditAdmin');


    // Middleware untuk user
    Route::group(['middleware' => ['checklevel:user']], function () {
        Route::get('/user/home', [LoginRegisterController::class, 'userHome'])->name('user.home');
        Route::get('/lulusan', [otherController::class, 'lulusan'])->name('lulusan');
        Route::get('/berita', [otherController::class, 'berita'])->name('berita');
        Route::get('/home', [otherController::class, 'home'])->name('home');
        Route::get('/aktifitas', [otherController::class, 'aktifitas'])->name('aktifitas');
        Route::get('/biodata', [otherController::class, 'biodata'])->name('biodata');
    });
});

// Rute untuk tamu
Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');
});
Route::get('/auth/login', [LoginRegisterController::class, 'login'])->name('auth.login');
Route::get('/auth/register', [LoginRegisterController::class, 'register'])->name('auth.register');

// Rute Login dan Register
Route::post('/postRegister', [LoginRegisterController::class, 'postRegister'])->name('postRegister');
Route::post('/postLogin', [LoginRegisterController::class, 'postLogin'])->name('postLogin');
Route::post('admin/postBerita', [otherController::class, 'storeBerita'])->name('postBerita');
Route::post('admin/postDosen', [otherController::class, 'storeDosen'])->name('postDosen');
Route::post('admin/postLulusan', [otherController::class, 'storeLulusan'])->name('postLulusan');
