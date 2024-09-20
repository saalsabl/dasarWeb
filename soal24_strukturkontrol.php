<?php
$hargaProduk = 12000;
$diskon = 0.2;

$minimumPembelian = 10000;
$hargaSebelumDiskon = $hargaProduk;

if ($hargaProduk >= $minimumPembelian) {
    $nilaiDiskon = $hargaProduk * $diskon;
    $hargaSetelahDiskon = $hargaProduk - $nilaiDiskon;
} else {
    $hargaSetelahDiskon = $hargaSebelumDiskon;
}

echo "Harga Produk : Rp " . number_format($hargaProduk) . "<br>";
echo "Harga Sebelum Diskon : Rp " . number_format($hargaSebelumDiskon) . "<br>";
echo "Diskon: " . $diskon * 100 . "% (Rp" . number_format($nilaiDiskon) . ")<br>";
echo "Harga Setelah Diskon : Rp " . number_format($hargaSetelahDiskon) . "<br>";
echo "<br><br>";
?>