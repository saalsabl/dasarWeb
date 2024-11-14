<?php
include "connect.php";
$conn = sqlsrv_connect($serverName, $connectionOptions);
if ($conn === false) {
    echo "Koneksi Gagal</br>";
    die(print_r(sqlsrv_errors(), true));
}

// Mengambil data dari POST
$kode_barang = $_POST['kode_barang'];
$namabarang = $_POST['namabarang'];
$satuan = $_POST['satuan'];
$jml_barang = $_POST['jml_barang'];

// Query untuk mengupdate data
$tsql = "UPDATE Barang SET namabarang = ?, satuan = ?, jml_barang = ? WHERE kode_barang = ?";
$params = array($namabarang, $satuan, $jml_barang, $kode_barang);

$stmt = sqlsrv_query($conn, $tsql, $params);

if ($stmt === false) {
    echo "Error in executing query.</br>";
    die(print_r(sqlsrv_errors(), true));
}

// Redirect ke halaman index setelah berhasil
header('location:index.php');


?>