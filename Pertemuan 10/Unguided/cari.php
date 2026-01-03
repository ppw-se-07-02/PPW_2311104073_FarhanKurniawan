<?php
// File: cari.php
// Fungsi: Proses pencarian data produk

function cariProduk($conn, $keyword)
{
    // Amankan keyword dari SQL Injection
    $keyword = mysqli_real_escape_string($conn, $keyword);

    // Query pencarian
    $query = "SELECT * FROM produk 
              WHERE nama_produk LIKE '%$keyword%'
              OR kategori LIKE '%$keyword%'
              ORDER BY id DESC";

    return mysqli_query($conn, $query);
}
?>
