<?php
/*
Mochammad Nizar Albaehaqi
203040035
https://github.com/mochammadnizaralbaehaqi/pw2021_203040035
Pertemuan 13 - 18 Mei 2021
Mempelajari Ajax & Upload Gambar
*/



// mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if(!isset($_GET["id"])) {
    header("location:../index.php");
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
        <li><img src="img/<?= $mahasiswa['img']; ?>" width="250" alt=""></li>
        <li>NRP: <?= $mahasiswa["nrp"]; ?></li>
        <li>nama: <?= $mahasiswa["nama"]; ?></li>
        <li>email: <?= $mahasiswa["email"]; ?></li>
        <li>jurusan: <?= $mahasiswa["jurusan"]; ?></li>
        <li><a href="ubah.php?id=<?= $mahasiswa['id']; ?>">ubah</a> | <a href="hapus.php?id=<?= $mahasiswa['id']; ?>" onclick="return confirm('Hapus Data?')">hapus</a>
        <li><a href="index.php">Kembali ke daftar mahasiswa</a></li>
    </ul>
</body>
</html>