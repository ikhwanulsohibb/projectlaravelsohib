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
            background-color: #ffffff;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            font-size: 16px;
            color: rgb(2, 2, 2);
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #0056b3;
        }

        .container {
            text-align: center;
            padding-top: 30px;
        }

        img {
            border-radius: 50%;
            width: 200px;
            animation: spin 4s linear infinite; /* Animasi putaran */
        }

        h2 {
            text-align: center;
        }

        table, th, td {
            border: 1px solid black;
            margin: 0 auto;
        }

        table {
            width: 80%;
        }

        th, td {
            padding: 10px;
        }

        .info {
            text-align: left;
            padding-left: 20px;
        }

        .copyright {
            text-align: center;
            margin-top: 20px;
            color: #555;
        }

        /* Animasi Putaran */
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">Politeknik Negeri Bengkalis | D-IV Rekayasa Perangkat Lunak</a>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h4 class="text-secondary">Selamat Datang {{ Auth::user()->name }}</h4>
            </div>
            <div class="col"></div>
            <div class="col-1"><a href="{{ route('logout') }}" style="text-decoration: none">
                    <p class="text-end text-black fw-semibold">Logout</p>
                </a></div>
        </div>
    </div>
    <div class="row mt-5 mb-5">
        <div class="col"></div>
        <div class="col-6">
        <form action="" method="GET">
        @csrf
        <div class="input-group">
        <input type="search" name="search" class="formcontrol rounded" placeholder="Cari nama buku"
        aria-label="Search" aria-describedby="searchaddon" />
        <button type="submit" class="btn btn-outlineprimary">search</button>
        </div>
        </form>
        </div>
        <div class="col"></div>
        </div>
        @foreach ($data as $buku)
        <div class="card mb-4">
        <div class="card-body">
        <div class="row">
        <div class="col-2"><img style="width: 150px"
        src="{{ asset('images/' . $buku->gambar) }}"
        alt="cover buku"></div>
        <div class="col-2">
        <p class="fw-bold">Judul</p>
        <p class="fw-bold">Penulis</p>
        <p class="fw-bold">Penerbit</p>
        <p class="fw-bold">Tahun Terbit</p>
        <p class="fw-bold">Deskripsi Buku</p>
        </div>
        <div class="col-8">
        <p>{{ $buku->judul_buku }}</p>
        <p>{{ $buku->penulis }}</p>
        <p>{{ $buku->penerbit }}</p>
        <p>{{ $buku->tahun_terbit }}</p>
        <p>{{ $buku->deskripsi }}</p>
        </div>
        </div>
        </div>
        </div>
        @endforeach
        {{ $data->links() }}
        </div>
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundl
        e.min.js"></script>
        </body>
        </html>
        
    <div class="container mt-5">
        <div class="row">
            <!-- Card Berita RPL -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{('image/fotoberita.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Berita RPL</h5>
                        <p class="card-text">Tetap terhubung dengan berita terbaru dari Program Studi RPL.</p>
                        <a href="{{route('berita')}}" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Card Profil Lulusan RPL -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{('image/lulusan.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Profil Lulusan RPL</h5>
                        <p class="card-text">Kenali profil lulusan kami dan peluang karir yang menanti Anda.</p>
                        <a href="{{route('lulusan')}}" class="btn btn-primary">Lihat Profil</a>
                    </div>
                </div>
            </div>

            <!-- Card Aktivitas Mahasiswa RPL -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{('image')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Aktivitas Mahasiswa RPL</h5>
                        <p class="card-text">Temukan beragam aktivitas dan komunitas mahasiswa RPL.</p>
                        <a href="{{route('aktifitas')}}" class="btn btn-primary">Lihat Aktivitas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>