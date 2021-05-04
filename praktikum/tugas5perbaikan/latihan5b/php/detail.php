<?php
if(!isset($_GET["id"])) {
    header("location: ../index.php");
    exit;
}

require "functions.php";

$id = $_GET["id"];

$pakaian = query("SELECT * FROM pakaian WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan4c</title>
</head>
<body style="background-color: steelblue;">
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $pakaian["img"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $pakaian["nama"]; ?></p>
            <p><?= $pakaian["ukuran"]; ?></p>
            <p><?= $pakaian["harga"]; ?></p>
        </div>
        <button class="tombol-kembali"><a href="../index.php">kembali</a></button>
    </div>
</body>
</html>