<?php
$totalBelanja = 750000;
$diskon = 0;

// Menentukan diskon
if ($totalBelanja >= 1000000) {
    $diskon = 0.30;
} elseif ($totalBelanja >= 500000) {
    $diskon = 0.20;
} elseif ($totalBelanja >= 100000) {
    $diskon = 0.10;
}

$potongan = $totalBelanja * $diskon;
$totalBayar = $totalBelanja - $potongan;

echo "<h2>Kalkulator Diskon</h2>";
echo "Total Belanja : Rp " . number_format($totalBelanja, 0, ',', '.') . "<br>";
echo "Diskon : " . ($diskon * 100) . "%<br>";
echo "Potongan Harga : Rp " . number_format($potongan, 0, ',', '.') . "<br>";
echo "Total Bayar : Rp " . number_format($totalBayar, 0, ',', '.') . "<br>";
?>
