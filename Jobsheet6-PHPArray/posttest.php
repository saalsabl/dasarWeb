<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>
<style>
#panel, #flip {
    padding: 5px;
    text-align: center;
    background-color: pink;
    border: solid 1px #c3c3c3;
}
#panel {
    padding: 20px;
    display: none;
}
table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}
table, th, td {
    border: 1px solid black;
    padding: 8px;
    text-align: center;
}
th {
    background-color: #f2f2f2;
}
</style>
</head>

<body>

<?php
// Data murid
$murid = array(
    array("Aisyah", 21, "10A", "Sawojajar"),
    array("Marsya", 19, "10B", "Pakis"),
    array("Adinda", 21, "10A", "Bululawang"),
    array("Sandrina", 20, "10A", "Buring")
);

// Hitung rata rata
$totalUmur = 0;
foreach ($murid as $mrd) {
    $totalUmur += $mrd[1];
}
$averageAge = $totalUmur / count($murid);
?>

<h2>Data Siswa</h2>
<div id="flip">Click to show database</div>
<div id="panel">
    <table>
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Kelas</th>
            <th>Alamat</th>
        </tr>
        <?php
        // tabel
        foreach ($murid as $mrd) {
            echo "<tr>";
            echo "<td>".$mrd[0]."</td>";
            echo "<td>".$mrd[1]."</td>";
            echo "<td>".$mrd[2]."</td>";
            echo "<td>".$mrd[3]."</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <p style="font-weight: bold;">Rata-rata Umur Siswa: <?php echo number_format($averageAge, 2); ?> tahun</p>
</div>
</body>
</html>