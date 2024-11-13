<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <a href="create.php" class="btn btn-primary">Add</a>
        <form action="">
            <table class="table" style="margin-top: 20px;">
                <thead>
                    <tr>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Satuan</th>
                    <th scope="col">Jumlah Barang</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //memasukkan file koneksi
                    include "connect.php";
                    $conn = sqlsrv_connect($serverName, $connectionOptions);
                    $tsql = "Select * From Barang";
                    $stmt = sqlsrv_query( $conn, $tsql);
                    do {
                    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {                                  
                    ?>
                    <tr>
                        <td><?= $row['kode_barang'];?></td>
                        <td><?= $row['namabarang'];?></td>
                        <td><?= $row['satuan'];?></td>
                        <td><?= $row['jml_barang'];?></td>
                        <td>
                        <a href="edit.php?id=<?= $row['kode_barang']; ?>" class="btn btn-primary">Edit</a>
                        <a href="delete.php?kode_barang=<?= $row['kode_barang']; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <?php
                    }
                      } while ( sqlsrv_next_result($stmt) );
                        ?>

                </tbody>
                </table>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>