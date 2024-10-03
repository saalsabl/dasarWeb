<?php

$loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
    Placeat temporibus quo accusamus voluptatem sit aliquid, eveniet earum laudantium, 
    libero distinctio cupiditate magni, corrupti in harum sed perferendis soluta culpa maiores.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter : ". strlen($loremIpsum). "<br>";
echo "Panjang kata : ". str_word_count($loremIpsum). "<br>";
echo "<p>". strtoupper($loremIpsum). "</p>";
echo "<p>". strtolower($loremIpsum). "</p>";

?>