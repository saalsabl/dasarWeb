<?php
include ('connect.php');
$conn = sqlsrv_connect( $serverName, $connectionOptions);
if( $conn === false ) {
    echo "Koneksi Gagal</br>";
    die( print_r( sqlsrv_errors(), true));
}

$kode_barang = $_POST['kode_barang'];
$namabarang = $_POST['namabarang'];
$satuan = $_POST['satuan'];
$jml_barang = $_POST['jml_barang'];

$tsql = "Insert into Barang values('$kode_barang','$namabarang','$satuan', '$jml_barang')";
$stmt = sqlsrv_query( $conn, $tsql);

if( $stmt === false ) {
    echo "Error in executing query.</br>"; 
    die( print_r( sqlsrv_errors(), true));
}

header('location:index.php');

?>
