<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Dosen</title>
    <!-- Tautan ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Tambah Data Dosen</h2>
        <form method="POST" action="{{ route('InputDosen') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Dosen</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="gelar" class="form-label">Gelar Dosen</label>
                <input type="text" class="form-control" id="gelar" name="gelar" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi Dosen</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Unggah Gambar</label>
                <input type="file" class="form-control-file" id="gambar" name="gambar">
            </div>
            <button type="submit" class="btn btn-primary">Simpan Data Dosen</button>
        </form>
        <a href="{{ route('admin.home') }}" class="btn btn-secondary mt-3">Kembali ke Home</a>
    </div>
    <!-- Tautan ke Bootstrap JS (Opsional, tergantung kebutuhan Anda) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
