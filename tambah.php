<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tambah Produk</h5>
                <hr>
                <form action="tambah.php" method="POST">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Produk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="keterangan" name="keterangan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="harga" name="harga">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jumlah" name="jumlah">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Tambah</button>
                </form>
            </div>
        </div>
        <a href="index.php">Kembali ke home</a>
    </div>
</body>

</html>

<?php
if (isset($_POST["submit"])) {
    require "config.php";
    $nama_produk = $_POST["nama"];
    $keterangan = $_POST["keterangan"];
    $harga = $_POST["harga"];
    $jumlah = $_POST["jumlah"];

    $query = "insert into produk (nama_produk, keterangan, harga, jumlah) values 
    ('$nama_produk', '$keterangan', '$harga', '$jumlah')";
    $result = mysqli_query($conn, $query);
    echo '<div class="alert alert-primary" role="alert">Sukses tambah produk</div>';
}
?>