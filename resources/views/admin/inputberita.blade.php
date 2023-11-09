<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Tambah Berita Baru</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Tambah Berita Baru</h2>
        <form method="POST" action="{{ route('inputberita') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Berita</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi Berita</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
            </div>
            <div class="mb-3">
                <label for="isi" class="form-label">Isi Berita</label>
                <textarea class="form-control" id="isi" name="isi" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Unggah Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
            </div>
            <button type="submit" class="btn btn-primary">Simpan Berita</button>
        </form>
        <a href="{{ route('admin.home') }}" class="btn btn-secondary mt-3">Kembali ke Home</a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
