<!-- resources/views/aktivitas_mahasiswa_rpl.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Homepage</title>
    <style>
        body {
			background: linear-gradient(to bottom, #02FFFB, #ffffff);
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            /* Hapus peraturan CSS overflow untuk mengizinkan scrolling */
        }

        .navbar {
            background-color: #007BFF; /* Warna navbar biru */
        }

</style>


<!-- Navbar -->
<nav class="navbar navbar-dark bg-primary">
    <div class="container">
        <a href="/" class="navbar-brand">
            Politeknik Negeri Bengkalis | D-IV Rekayasa Perangkat Lunak
        </a>
      
            <li class="nav-item">
                <a href="{{ route('biodata') }}" class="nav-link">Biodata</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('berita') }}" class="nav-link">Berita</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('lulusan') }}" class="nav-link">Profile Lulusan</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('aktifitas') }}" class="nav-link">Aktivitas Mahasiswa</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="text-secondary">Aktivitas Mahasiswa RPL</h1>
            <p>Ini adalah halaman aktivitas mahasiswa Program Studi Rekayasa Perangkat Lunak.</p>
        </div>
    </div>
</div>
<!-- Daftar Aktivitas Mahasiswa -->
<div class="row">
    <!-- Aktivitas 1 -->
    <div class="col-md-6">
        <div class="card mb-4">
            <img src="gambar_aktivitas_1.jpg" class="card-img-top" alt="Gambar Aktivitas 1">
            <div class="card-body">
                <h5 class="card-title">Panggung Seni</h5>
                <p class="card-text">berbagai macam penampilan seni tersedia dan pameran seni.</p>
                <a href="#" class="btn btn-primary">Detail Aktivitas</a>
            </div>
        </div>
    </div>

    <!-- Aktivitas 2 -->
    <div class="col-md-6">
        <div class="card mb-4">
            <img src="gambar_aktivitas_2.jpg" class="card-img-top" alt="Gambar Aktivitas 2">
            <div class="card-body">
                <h5 class="card-title">Lomba coding</h5>
                <p class="card-text">untuk meningkatkan kemahiran mahasiswa.</p>
                <a href="#" class="btn btn-primary">Detail Aktivitas</a>
            </div>
        </div>
    </div>

    <!-- Tambahkan Aktivitas Lainnya di sini -->

</div>
</div>

<!-- Sertakan skrip JavaScript Bootstrap (JQuery dan Popper.js) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>