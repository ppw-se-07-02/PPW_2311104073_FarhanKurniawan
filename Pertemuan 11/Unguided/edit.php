<?php
include "koneksi.php";
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM produk WHERE id=$id"));
?>

<form method="POST" action="proses_edit.php">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <input type="text" name="nama_produk" value="<?= $data['nama_produk'] ?>" class="form-control mb-2">
    <input type="number" name="harga" value="<?= $data['harga'] ?>" class="form-control mb-2">
    <input type="number" name="stok" value="<?= $data['stok'] ?>" class="form-control mb-2">
    <input type="text" name="kategori" value="<?= $data['kategori'] ?>" class="form-control mb-2">
    <button class="btn btn-primary">Update</button>
</form>
