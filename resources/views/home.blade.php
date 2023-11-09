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

        .container {
            margin-top: 150px;
        }

        .text-secondary {
            color: #007BFF; /* Warna teks sekunder biru */
        }

        h6 a {
            color: #007BFF; /* Warna link biru */
        }
    </style>
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
                <h1 class="text-secondary">Selamat Datang!</h1>
                <h4 class="text-secondary">Di Perpustakaan Politeknik Negeri Bengkalis</h4>
                <h6 class="mt-3">
                    Silahkan <a href="{{ route('auth.login') }}" style="text-decoration: none">masuk</a> atau
                    <a href="{{ route('auth.register') }}" style="text-decoration: none">daftar</a> jika anda belum punya akun
            
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
