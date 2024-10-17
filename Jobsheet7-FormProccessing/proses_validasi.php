<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $errors = array();

    //Validasi nama
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }

    //Validasi email
    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    //Validasi password
    if (empty($password)) {
        $errors[] = "Password harus diisi.";
    }

    //Jika ada kesalahan validasi
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        // lanjutkan dengan pemrosesan data jika semua validasi berhasil
        // misalnya, menyimpan data ke database atau mengirim email
        echo "Data berhasil dikirim: Nama = $nama, Email = $email, Password = $password";
    }
}
?>