
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tambah Data Barang</title>
    <style>
        h2 {
            margin-top: 10px;
            text-align: center;
        }

        .card {
            margin-top: 20px; 
            width:800px;
            margin-left: 150px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tambah Data Barang</h2>
        <div class="card" >
            <div class="card-body">
                <form method="POST" action="proses_create.php" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="username" class="form-label">Kode Barang : </label>
                        <input type="text" class="form-control" id="kode_barang" name="kode_barang" >
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Nama Barang : </label>
                        <input type="text" class="form-control" id="namabarang" name="namabarang" >
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Satuan : </label>
                        <input type="text" class="form-control" id="satuan" name="satuan" >
                    </div>
                    <div class="mb-3">
                        <label for="pengarang" class="form-label">Jumlah Barang : </label>
                        <input type="text" class="form-control" id="jml_barang" name="jml_barang" >
                    </div>
                    <button
                     type="submit" class="btn btn-primary">Tambah</button>
                </form>
             </div>
        </div>
    </div>
</body>
</html>