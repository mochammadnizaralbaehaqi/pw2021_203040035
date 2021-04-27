<?php
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>

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
</body>
</html>