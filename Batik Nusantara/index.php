<?php
// Ambil parameter halaman dari URL
$page = isset($_GET['page']) ? $_GET['page'] : 'beranda';

// Path lokasi file template
$file = "templates/" . $page . ".php";

// Cek apakah file tersebut ada
if (file_exists($file)) {
    include $file;
} else {
    echo "Halaman tidak ditemukan!";
}
?>
