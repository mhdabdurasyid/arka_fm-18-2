<?php

require 'config.php';
$query = "select * from produk";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                while ($data = mysqli_fetch_array($result)) {
                    echo '
                    <tr>
                    <th scope="row">' . $i . '</th>
                    <td>' . $data["nama_produk"] . '</td>
                    <td>' . $data["keterangan"] . '</td>
                    <td>' . $data["harga"] . '</td>
                    <td>' . $data["jumlah"] . '</td>
                    <td><a href="ubah.php?id=' . $data["id"] . '">Ubah</a></td>
                    <td><a href="hapus.php?id=' . $data["id"] . '">Hapus</a></td>
                    </tr>
                    ';
                    $i++;
                } ?>
            </tbody>
        </table>
        <a href="tambah.php">Tambah</a>
    </div>
</body>

</html>