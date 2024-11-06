<?php
include 'connect.php';

// Cek apakah ada ID di URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk mengambil data barang berdasarkan kode barang
    $query = "SELECT * FROM Barang WHERE kode_barang = ?";
    $params = array($id);
    $stmt = sqlsrv_query($conn, $query, $params);

    // Cek apakah query berhasil
    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    // Mengambil data dari hasil query
    $data = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);


    if (!$data) {
        echo "<div class='alert alert-danger'>Data barang tidak ditemukan.</div>";
        exit();
    }
} else {
    echo "<div class='alert alert-warning'>Kode barang tidak disertakan.</div>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Edit Data Barang</h2>
        <form method="POST" action="proses_edit.php" class="mt-4">
            <div class="mb-3">
                <label for="kode_barang" class="form-label">Kode Barang : </label>
                <input type="text" class="form-control" name="kode_barang" value="<?= htmlspecialchars($data['kode_barang'] ?? '') ?>" readonly>
            </div>

            <div class="mb-3">
                <label for="namabarang" class="form-label">Nama Barang : </label>
                <input type="text" class="form-control" name="namabarang" value="<?= htmlspecialchars($data['namabarang'] ?? '') ?>" required>
            </div>

            <div class="mb-3">
                <label for="satuan" class="form-label">Satuan : </label>
                <input type="text" class="form-control" name="satuan" value="<?= htmlspecialchars($data['satuan'] ?? '') ?>" required>
            </div>

            <div class="mb-3">
                <label for="jml_barang" class="form-label">Jumlah Barang : </label>
                <input type="text" class="form-control" name="jml_barang" value="<?= htmlspecialchars($data['jml_barang'] ?? '') ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
            <a href="index.php" class="btn btn-secondary">Back</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>