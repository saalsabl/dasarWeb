<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $errors = array();

    // Validasi nama
    if (empty($name)) {
        $errors[] = "Please enter your name!";
    }

    // Validasi tanggal
    if (empty($date)) {
        $errors[] = "Please select a schedule!";
    }

    // Validasi waktu
    if (empty($time)) {
        $errors[] = "Please select a schedule!";
    }

    // Jika ada kesalahan validasi
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        // Validasi jika berhasil submit
        echo "Booking successful for " . $name . " on " . $date . " at " . $time;
    }
}
?>
