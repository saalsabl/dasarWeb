<?php
//$serverName = "SAALSABL\SALSABILA";
$connectionOptions = ["Database" => "CRUD", "TrustServerCertificate" => true, "Authentication" => "ActiveDirectoryIntegrated"];
$conn = sqlsrv_connect($serverName, $connectionOptions);
if ($conn === false) {
     die(print_r(sqlsrv_errors(), true));
}
?>