<?php
$totalKursi = 45;
$kursiTempati = 28;

$kursiKosong = $totalKursi - $kursiTempati;
$persentase = ($kursiKosong / $totalKursi) * 100;

echo "Total kursi di Restoran = $totalKursi <br>";
echo "Jumlah kursi yang di tempati = $kursiTempati <br>";
echo "Jumlah kursi kosong = $kursiKosong <br>";
echo "Persentase kursi yang masih kosong = $persentase <br>";
?>