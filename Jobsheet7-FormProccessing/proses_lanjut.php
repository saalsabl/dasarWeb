<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $seelctedBuah = $_POST['buah'];

    if (isset($_POST['warna'])){
        $seelctedWarna = $_POST['warna'];
    } else {
        $seelctedWarna = [];
    }

     $selectedJenisKelamin = $_POST['jenis_kelamin'];

     echo "Anda memilih buah : " . $seelctedBuah . "<br>";

     if (!empty($seelctedWarna)) {
        echo "Warna favorit Anda : " . implode(", ", $seelctedWarna) . "<br>";
     } else {
        echo "Anda tidak memilih warna favorit.<br>";
     }

     echo "Jenis kelamin Anda : " . $selectedJenisKelamin;
}