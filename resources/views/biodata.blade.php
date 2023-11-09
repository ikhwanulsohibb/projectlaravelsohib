<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Curriculum Vitae</title>
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
        .navbar a {
            float: left;
            font-size: 16px;
            color: white;
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
        <h1>CURICULLUM VITAE</h1>
        <img src="{{ asset ('img/profile.jpeg')}}" alt="Profil">
        <h2>IKHWANUL SOHIB PUTRA</h2>
        <h4>KETUA AGENSE</h4>
        <hr>
        <h2>Overview</h2>
        <p>Seni adalah jalan untuk menemukan keindahan dari segala sisi.</p>

        <table>
            <tr>
                <th>Skill</th>
                <th>Pengalaman</th>
            </tr>
            <tr>
                <td>Mengawasai beberapa alat musik yaitu gitar, bass, accordion, dan bisa menulis lagu.</td>
                <td>Menjadi ketua kesenian dan rumah pohon cinema.</td>
            </tr>
        </table>
        <hr>
        <div class="info">
            <p><strong>Profile:</strong></p>
            <p><strong>Nama Lengkap:</strong> Ikhwanul Sohib Putra</p>
            <p><strong>Nama Panggilan:</strong> Sohib</p>
            <p><strong>Alamat:</strong> Jalan Gatot Subroto</p>
            <p><strong>Tempat, Tanggal Lahir:</strong> Bengkalis, 11 Juni 2003</p>
            <p><strong>Riwayat Pendidikan:</strong></p>
            <ol>
                <li>SD 006 Bandarsyah</li>
                <li>SMPN 1 Bunguran Timur</li>
                <li>SMAN 2 Bunguran Timur</li>
            </ol>
        </div>
        <hr>
        <h3 class="copyright">Copyright 2023 @ikhwa</h3>
    </div>
</body>
</html>
