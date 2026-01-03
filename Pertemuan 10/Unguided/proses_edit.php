<?php
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$kategori = $_POST['kategori'];

$query = "UPDATE produk SET
          nama_produk='$nama',
          harga='$harga',
          stok='$stok',
          kategori='$kategori'
          WHERE id=$id";

mysqli_query($conn, $query);
header("Location: index.php");
