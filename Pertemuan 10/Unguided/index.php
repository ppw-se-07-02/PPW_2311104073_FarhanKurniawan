<?php
include "koneksi.php";
$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
$query = "SELECT * FROM produk 
          WHERE nama_produk LIKE '%$keyword%' 
          ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kelola Produk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

<h3>Kelola Produk</h3>

<a href="tambah.php" class="btn btn-success mb-3">Tambah Produk</a>

<form method="GET" class="mb-3">
    <input type="text" name="keyword" class="form-control"
           placeholder="Cari produk..." value="<?= $keyword ?>">
</form>

<table class="table table-bordered">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Harga</th>
    <th>Stok</th>
    <th>Kategori</th>
    <th>Aksi</th>
</tr>

<?php $no=1; while($row=mysqli_fetch_assoc($result)): ?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $row['nama_produk'] ?></td>
    <td><?= $row['harga'] ?></td>
    <td><?= $row['stok'] ?></td>
    <td><?= $row['kategori'] ?></td>
    <td>
        <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm"
           onclick="return confirm('Hapus data?')">Hapus</a>
    </td>
</tr>
<?php endwhile; ?>
</table>

</body>
</html>
