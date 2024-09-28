<?php
$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Eligendi modi iure earum illum cum fuga impedit, 
    ipsa a eveniet! Neque error veniam dolore perspiciatis! 
    Laudantium deleniti eos nemo totam vitae. ";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter : ". strlen($loremIpsum) . "<br>";
echo "Panjang kata : " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
?>