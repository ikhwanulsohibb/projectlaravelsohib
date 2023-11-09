<!-- resources/views/berita_rpl.blade.php -->
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Berita Mahasiswa</title>
</head>

<body>
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
                <h1 class="text-secondary">Berita RPL</h1>
                <p>Ini adalah halaman berita Program Studi Rekayasa Perangkat Lunak.</p>
            </div>
        </div>
    </div>
    <!-- Content -->
    <div class="container mt-4">
        <h1 class="text-center">Berita Mahasiswa</h1>
        <hr>

        <!-- Daftar Berita -->
        <div class="row">
            <!-- Berita 1 -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="gambar_berita_1.jpg" class="card-img-top" alt="Gambar Berita 1">
                    <div class="card-body">
                        <h5 class="card-title">Panggung seni 1</h5>
                        <p class="card-text">11 juni 2023 telah dilaksanakan wisata seni.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Berita 2 -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="gambar_berita_2.jpg" class="card-img-top" alt="Gambar Berita 2">
                    <div class="card-body">
                        <h5 class="card-title">lomba coding</h5>
                        <p class="card-text">untuk meningkatkan kemahiran mahasiswa.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Tambahkan Berita Lainnya di sini -->

        </div>
    </div>

    <!-- Sertakan skrip JavaScript Bootstrap (JQuery dan Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>