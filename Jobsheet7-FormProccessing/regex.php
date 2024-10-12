<?php
$pattern = '/[a-z]/'; // Cocokkan huruf kecil.
$text = 'This is a Sample Text.';
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "<br>Tidak ada huruf kecil!";
}

$pattern = '/[0-9]+/';
$text = 'This are 123 apples.';
if (preg_match($pattern, $text, $matches)) {
    echo "<br>Cocokkan : " . $matches[0];
} else {
    echo "<br>Tidak ada yang cocok!";
}