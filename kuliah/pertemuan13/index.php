<?php
/*
Mochammad Nizar Albaehaqi
203040035
https://github.com/mochammadnizaralbaehaqi/pw2021_203040035
Pertemuan 13 - 18 Mei 2021
Mempelajari Ajax & Upload Gambar
*/

session_start();

if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require "functions.php";

$mahasiswa = query("SELECT * FROM mahasiswa");

if(isset($_POST["cari"])){
    $mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <a href="logout.php">Logout</a>
    <h3>Daftar mahasiswa</h3>

    <a href="tambah.php">Tambah Data Mahasiswa</a>

    <form action="" method="POST">
            <input type="text" name="keyword" size="40" placeholder="masukan keyword pencarian..." autocomplete="off" autofocus class="keyword">
            <button type="submit" name="cari" class="tombol-cari">Cari!</button>
    </form>

    <div class="container">
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>

        <?php if (empty($mahasiswa)) : ?>
            <tr>
                <td colspan ="4">
                    <p style="color: red; font-style: italic;">data mahasiswa tidak ditemukan!</p>
                </td>
            </tr>
        <?php endif; ?>

        <?php $i= 1; ?>
        <?php foreach($mahasiswa as $m) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><img src="img/<?= $m["img"]; ?>" alt="" width="60";></td>
            <td><?= $m["nama"] ?></td>
            <td>
                <a href="detail.php?id=<?= $m['id']; ?>">Lihat Detail</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>

    <script src="js/script.js"></script>
</body>
</html>