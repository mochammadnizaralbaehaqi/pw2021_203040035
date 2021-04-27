<?php
require "php/functions.php";

$pakaian = query("SELECT * FROM pakaian");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin</title>
</head>
<body>
    
    <h1>Daftar pakaian</h1>

    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Ukuran</th>
        <th>Harga</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach( $pakaian as $row ) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">ubah</a>
            <a href="">hapus</a>
        </td>
        <td><img src="assets/img/<?= $row["img"]; ?>" width="50"></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["ukuran"]; ?></td>
        <td><?= $row["harga"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach;?>

    </table>

</body>
</html>