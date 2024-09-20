<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswa);
$totalNilai = 0;
for ($i=2; $i < count($nilaiSiswa) - 2; $i++) { 
    $totalNilai += $nilaiSiswa[$i];
}

$rataRata = $totalNilai / (count($nilaiSiswa) - 4);

echo "Total nilai yang digunakan: $totalNilai <br>";
echo "Rata-rata nilai: $rataRata <br>";
echo "<br><br>";
?>