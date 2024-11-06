<?php
$serverName = "SAALSABL\SALSABILA";
$connectionOptions = ["Database" => "CRUD", "TrustServerCertificate" => true, "Authentication" => "ActiveDirectoryIntegrated"];
$conn = sqlsrv_connect($serverName, $connectionOptions);
if ($conn) {
     // echo "Koneksi berhasil";
} else {
     echo "Koneksi gagal";
}
?>