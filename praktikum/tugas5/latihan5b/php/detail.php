<?php
if(!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];

$sepatu = query("SELECT * FROM sepatu WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan4c</title>
</head>
<body>
    <div class="container">
        <div class="gambar">
            <img src="assets/img/<?= $mhs["img"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $spt["id"]; ?></p>
            <p><?= $spt["merk"]; ?></p>
            <p><?= $spt["tipe"]; ?></p>
            <p><?= $spt["harga"]; ?></p>
        </div>
        <button class="tombol-kembali"><a href="../index.php">kembali</a></button>
    </div>
</body>
</html>