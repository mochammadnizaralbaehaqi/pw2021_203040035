<?php
// mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if(!isset($_GET["id"])) {
    header("location: ../index.php");
}

require "functions.php";

// mengambil id dari url
$id = $_GET["id"];

// melakukan query dengan parameter id yang diambil dari url
$pakaian = query("SELECT * FROM pakaian WHERE id = $id")[0];
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
    <title>Detail</title>

    <body class="teal lighten-5">

    <!-- navbar -->
        <div class="navbar-fixed">
            <nav class="teal darken-1">
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="../index.php" class="brand-logo text-align center">RIA BUSANA</a>
                    </div>
                </div>
            </nav>
        </div>

    <br><br>

    <div class="container" style="text-align: center;">
        <div class="img">
            <img src="../assets/img/<?= $pakaian["img"]; ?>">
        </div>

        <div class="keterangan">
            <p><?= $pakaian["nama"]; ?></p>
            <p>Size: <?= $pakaian["ukuran"]; ?></p>
            <p>Harga: <?= $pakaian["harga"]; ?></p>
        </div>

        <button class="waves-effect waves-light btn" type="button"><a class="white-text" href="../index.php">Kembali</a></button>

        <button class="waves-effect waves-light btn" type="button"><a class="white-text" href="">Order</a></button>
    </div>

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="../js/materialize.min.js"></script>
    </body>
    </html>