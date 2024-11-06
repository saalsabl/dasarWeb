<?php
include "connect.php";
$conn = sqlsrv_connect( $serverName, $connectionOptions);
if( $conn === false ) {
    echo "Koneksi Gagal</br>";
    die( print_r( sqlsrv_errors(), true));
}

$kode_barang = $_GET['kode_barang'];
$tsql = "Delete Barang where kode_barang = '$kode_barang'";
$stmt = sqlsrv_query( $conn, $tsql);

if( $stmt === false ) {
    echo "Error in executing query.</br>";
    die( print_r( sqlsrv_errors(), true));
}
header('location:index.php');
sqlsrv_free_stmt( $stmt);
sqlsrv_close( $conn);

?>