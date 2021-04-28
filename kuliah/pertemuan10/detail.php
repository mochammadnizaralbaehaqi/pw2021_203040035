<?php
/*
Mochammad Nizar Albaehaqi
203040035
https://github.com/mochammadnizaralbaehaqi/pw2021_203040035
Pertemuan 10 - 28 April 2021
Mempelajari Koneksi DB dan Insert Data
*/

// mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if(!isset($_GET["id"])) {
    header("location:../index3.php");
}

require "functions.php";

// mengambil id dari url
$id = $_GET["id"];

// melakukan query dengan parameter id yang diambil dari url
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail mahasiswa</title>
</head>
<body>
    <h3>Detail mahasiswa</h3>

    <ul>
        <li><img src="img/<?= $mahasiswa['img']; ?>" alt=""></li>
        <li>NRP: <?= $mahasiswa["nrp"]; ?></li>
        <li>nama: <?= $mahasiswa["nama"]; ?></li>
        <li>email: <?= $mahasiswa["email"]; ?></li>
        <li>jurusan: <?= $mahasiswa["jurusan"]; ?></li>
        <li><a href="">ubah</a> | <a href="">hapus</a></li>
        <li><a href="latihan3.php">Kembali ke daftar mahasiswa</a></li>
    </ul>
</body>
</html>