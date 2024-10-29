<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = $_POST['data'];  

    echo '<h1>Data yang diinputkan:</h1>';
    echo '<ul>';
    foreach ($data as $item) {
        echo '<li>' . htmlspecialchars($item) . '</li>';
    }
    echo '</ul>';
}
?>