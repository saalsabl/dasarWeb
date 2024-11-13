<?php
//Inisialisasi Variabel Koneksi
$serverName = "SAALSABL\SALSABILA";
//Opsi Koneksi
$connectionOptions = ["Database" => "CRUD", "TrustServerCertificate" => true, "Authentication" => "ActiveDirectoryIntegrated"];
//menyimpan data utk koneksi ke database
$conn = sqlsrv_connect($serverName, $connectionOptions);
if ($conn) {
     // echo "Koneksi berhasil";
} else {
     echo "Koneksi gagal";
}
?>