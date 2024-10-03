<?php
$siswa = [
    ['nama' => 'Alice', 'nilai'=> 85],
    ['nama' => 'Bob', 'nilai'=> 92],
    ['nama' => 'Charlie', 'nilai'=> 78],
    ['nama' => 'David', 'nilai'=> 64],
    ['nama' => 'Eva', 'nilai'=> 90],
];
$totalNilai = 0;
$jumlahSiswa = count($siswa);

foreach($siswa as $data){
    $totalNilai += $data['nilai'];
}

$rataRata = $totalNilai / $jumlahSiswa;
echo "Rata-rata kelas : " . number_format($rataRata, 2) . "<br>";
echo "Daftar nilai siswa yang mencapai rata-rata kelas : <br>";
foreach ($siswa as $data) {
    if ($data['nilai'] > $rataRata) {
        echo "Nama : {$data['nama']}, Nilai : {$data['nilai']} <br>";
    }
}


?>