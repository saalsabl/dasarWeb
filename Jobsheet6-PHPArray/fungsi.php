<?php
function perkenalan(){
    echo "Assalamualaikum, ";
    echo "Perkenalkan, nama saya Icha<br/>";
    echo "Senang berkanalan dengan Anda<br/>";
}

//memanggil fungsi yang sudah dibuat
perkenalan("Hamdana", "Hallo");

echo "<hr>";

$saya = "Icha";
$ucapSalam = "Selamat Pagi";

//memanggil lagi
perkenalan($saya, $ucapSalam);
?>