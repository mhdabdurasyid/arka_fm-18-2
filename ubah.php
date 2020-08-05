<?php

require 'config.php';
$id = $_GET["id"];

$query = "select * from produk where id=$id";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Ubah Produk</h5>
                <hr>
                <?php
                while ($data = mysqli_fetch_array($result)) {
                    echo '<form action="ubah.php?id=' . $data["id"] . '" method="POST">';
                    echo '
                        <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Produk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="' . $data["nama_produk"] . '">
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="keterangan" name="keterangan" value="' . $data["keterangan"] . '">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="harga" name="harga" value="' . $data["harga"] . '">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jumlah" name="jumlah" value="' . $data["jumlah"] . '">
                            </div>
                        </div>
                        ';
                } ?>
                <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
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
    $id = $_GET["id"];
    $nama_produk = $_POST["nama"];
    $keterangan = $_POST["keterangan"];
    $harga = $_POST["harga"];
    $jumlah = $_POST["jumlah"];

    $query = "update produk set nama_produk='$nama_produk', keterangan='$keterangan', harga='$harga', jumlah='$jumlah' where id='$id'";
    $result = mysqli_query($conn, $query);
    header("Location:index.php");
    die();
}
?>