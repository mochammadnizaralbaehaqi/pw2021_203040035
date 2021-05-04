<?php
/*
// Nama : Mochammad nizar albaehaqi 
// Nrp : 203040035
// Shift : Rabu 9.00 - 10.00
*/
?>

<?php
require "php/functions.php";

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
    <title>latihan5e</title>
</head>
<body style="background-color: steelblue;">

    <div class="add">
        <a href="php/tambah.php">Tambah data</a>
        <form action="" method="get">
            <input type="text" name="keyword" autofocus>
            <button type="submit" name="cari">Cari!</button>
        </form>
    </div>

    <table cellpadding="13" cellspacing="0" border="1">
            <tr>
                <th>#</th>
                <th>opsi</th>
                <th>Img</th>
                <th>Nama</th>
                <th>Ukuran</th>
                <th>Harga</th>
            </tr>
            <?php foreach($pakaian as $row) : ?>
                <tr>
                    <td><?= $row["id"]?></td>
                    <td>
                        <a href="php/ubah.php?id=<?= $row['id'] ?>">ubah</a>
                        <a href="php/hapus.php?id=<? $row['id'] ?>" onclick="return confirm('Hapus Data?')">hapus</a>
                    </td>
                    <td><img src="assets/img/<?= $row["img"]; ?>"></td>
                    <td><?= $row["nama"]?></td>
                    <td><?= $row["ukuran"]?></td>
                    <td><?= $row["harga"]?></td>
                </tr>
            <?php endforeach; ?>
        </table>
</body>
</html>