<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

<h3>Tambah Produk</h3>

<form method="POST" action="proses_tambah.php">
    <input type="text" name="nama_produk" class="form-control mb-2" placeholder="Nama Produk" required>
    <input type="number" name="harga" class="form-control mb-2" placeholder="Harga" required>
    <input type="number" name="stok" class="form-control mb-2" placeholder="Stok" required>
    <input type="text" name="kategori" class="form-control mb-2" placeholder="Kategori">
    <button class="btn btn-primary">Simpan</button>
</form>

</body>
</html>
