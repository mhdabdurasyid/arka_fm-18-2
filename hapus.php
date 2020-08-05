<?php

require 'config.php';
$id = $_GET["id"];

$query = "delete from produk where id=$id";
$result = mysqli_query($conn, $query);

header("Location:index.php");
die();
