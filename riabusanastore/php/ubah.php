<?php
require "functions.php";

$id = $_GET["id"];
$pakaian = query("SELECT * FROM pakaian WHERE id = $id")[0];

if (isset($_POST["ubah"])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil diubah!');
                document.location.href = 'admin.php';
                </script>";
    }else {
        echo "<script>
                alert('Data gagal diubah!');
                document.location.href = 'admin.php';
                </script>";
    }
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
    <title>Ubah Data</title>

    <body>

        <h4 class="light center grey-text text-darken-3">Ubah Data Produk</h4>

    <div class="container">
        <form action="" method="POST">
            <ul>
                <li>
                    <input type="hidden" name="id" id="id" value="<?= $pakaian['id']; ?>">
                </li>

                <li>
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" id="nama" required value="<?= $pakaian['nama']; ?>">
                </li>

                <li>
                    <label for="ukuran">Ukuran :</label>
                    <input type="text" name="ukuran" id="ukuran" required value="<?= $pakaian['ukuran']; ?>">
                </li>

                <li>
                    <label for="harga">Harga :</label>
                    <input type="text" name="harga" id="harga" required value="<?= $pakaian['harga']; ?>">
                </li>

                <li>
                    <label for="img">Gambar :</label>
                    <input type="text" name="img" id="img" required value="<?= $pakaian['img']; ?>">
                </li>

    <br>

                <div class="center-align">
                    <button class="waves-effect waves-light btn-small" type="submit" name="ubah">Ubah Produk</button>
                    <button class="waves-effect waves-light btn-small" type="submit">
                        <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
                    </button>
                </div>
            </ul>
        </form>
    </div>

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="../js/materialize.min.js"></script>
    </body>
</html>