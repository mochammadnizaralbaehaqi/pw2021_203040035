<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

// menghubungkan dengan file php lainnya
require "functions.php";

// melakukan query
$pakaian = query("SELECT * FROM pakaian");

if(isset($_GET["cari"])){
    $keyword = $_GET["keyword"];
    $pakaian = query("SELECT * FROM pakaian WHERE
                nama LIKE '%keyword%' OR
                ukuran LIKE '%keyword%' OR
                harga LIKE '%keyword%' ");
}else{
    $pakaian = query("SELECT * FROM pakaian");
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
    <h1>Hello, world!</h1>

    
    <div class="logout">
        <a href="logout.php">Log out</a>
    </div>

    <div class="add">
        <a href="tambah.php">Tambah Data</a>
        <form action="" method="get">
            <input type="text" name="keyword" autofocus>
            <button type="submit" name="cari">Cari!</button>
        </form>
    </div>
    
    <table border="1" cellpadding="13" cellspacing="0">
        <tr>
            <th>#</th>
            <th>opsi</th>
            <th>Img</th>
            <th>Nama</th>
            <th>Ukuran</th>
            <th>Harga</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($pakaian as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row['id'] ?>">ubah</a>
                    <a href="hapus.php?id=<? $row['id'] ?>" onclick="return confirm('Hapus Data?')">hapus</a>
                </td>
                <td><img src="../assets/img/<?= $row["img"]; ?>" alt=""></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["ukuran"]; ?></td>
                <td><?= $row["harga"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>
</html>