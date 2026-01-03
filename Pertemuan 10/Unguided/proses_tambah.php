<?php
include "koneksi.php";

$nama = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$kategori = $_POST['kategori'];

$query = "INSERT INTO produk VALUES 
('', '$nama', '$harga', '$stok', '$kategori', NOW())";

mysqli_query($conn, $query);
header("Location: index.php");
