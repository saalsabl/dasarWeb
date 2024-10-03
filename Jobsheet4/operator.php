<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Penjumlahan a + b = $hasilTambah <br>";
echo "Hasil Pengurangan a - b = $hasilKurang <br>";
echo "Hasil Perkalian a * b = $hasilKali <br>";
echo "Hasil Pembagian a / b = $hasilBagi <br>";
echo "Sisa Bagi a % b = $sisaBagi <br>";
echo "Hasil Pangkat a ** b = $pangkat <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<br>Hasil Perbandingan: <br>";
echo "a == b adalah " . ($hasilSama ? "true" : "false") . "<br>";
echo "a != b adalah " . ($hasilTidakSama ? "true" : "false") . "<br>";
echo "a < b adalah " . ($hasilLebihKecil ? "true" : "false") . "<br>";
echo "a > b adalah " . ($hasilLebihBesar ? "true" : "false") . "<br>";
echo "a <= b adalah " . ($hasilLebihKecilSama ? "true" : "false") . "<br>";
echo "a >= b adalah " . ($hasilLebihBesarSama ? "true" : "false") . "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<br>Hasil Operator Logika: <br>";
echo "a && b adalah " . ($hasilAnd ? "true" : "false") . "<br>";
echo "a || b adalah " . ($hasilOr ? "true" : "false") . "<br>";
echo "!\$a adalah " . ($hasilNotA ? "true" : "false") . "<br>";
echo "!\$b adalah " . ($hasilNotB ? "true" : "false") . "<br>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "<br>Hasil Operasi Penugasan<br>";
echo "\$a += \$b, nilai \$a = $a <br>";
echo "\$a -= \$b, nilai \$a = $a <br>";
echo "\$a *= \$b, nilai \$a = $a <br>";
echo "\$a /= \$b, nilai \$a = $a <br>";
echo "\$a %= \$b, nilai \$a = $a <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<br>Hasil Operator Identitas: <br>";
echo "\$a === \$b adalah " . ($hasilIdentik ? "true" : "false") . "<br>";
echo "\$a !== \$b adalah " . ($hasilTidakIdentik ? "true" : "false") . "<br>";
?>