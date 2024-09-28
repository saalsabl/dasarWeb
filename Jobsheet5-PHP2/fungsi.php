<?php
//membuat fungsi
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

//memanggil fungsi yang sudah dibuat
perkenalan("Icha","Hallo");

echo "<hr>";

$saya = "Icha";
$ucapanSalam = "Selamat pagi";

//memanggil lagi
perkenalan($saya);
?>