<?php
// menghubungkan dengan file php lainnya
require "functions.php";

// melakukan query
$pakaian = query("SELECT * FROM pakaian");

// searching
if(isset($_GET["cari"])) {
    $keyword = $_GET["keyword"];
    $pakaian = query("SELECT * FROM pakaian WHERE
                        nama LIKE '%$keyword%' OR
                        ukuran LIKE '%$keyword%' OR
                        harga LIKE '%$keyword%' ");
}else{
    $pakaian = query("SELECT * FROM pakaian");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

        <!-- css -->
        <link rel="stylesheet" href="../css/style.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <title>Halaman Admin</title>

    <body>

    <div class="logout">
        <div class="center-align">
            <br>
            <button class="waves-effect waves-light btn-small"><a class="white-text" href="logout.php">Logout</a></button>
        </div>
    </div>

    <div class="add">
        <div class="container">
            <div class="center-align">
                <br>
                <button class="waves-effect waves-light btn"><a class="white-text" href="tambah.php">Tambah Data</a></button>
                <br><br>

                <form action="" method="GET">
                    <input type="text" name="keyword" autocomplete="off" autofocus>
                    <button class="waves-effect waves-light btn-small" type="submit" name="cari">Cari</button>
                </form>
            </div>
        </div>
    </div>

    <br><br>

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
                    <button class="waves-effect waves-light btn-small"><a href="ubah.php?id=<?= $row['id']; ?>" class="white-text">ubah</a></button>
                    <button class="waves-effect waves-light btn-small"><a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Hapus Data?')" class="white-text">hapus</a></button>
                </td>
                <td><img src="../assets/img/<?= $row["img"]; ?>"></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["ukuran"]; ?></td>
                <td><?= $row["harga"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="../js/materialize.min.js"></script>
    </body>
</html>