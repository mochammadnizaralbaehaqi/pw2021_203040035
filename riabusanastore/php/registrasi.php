<?php
require "functions.php";

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
            alert('Registrasi Berhasil');
            document.location.href = 'login.php';
            </script>";
    }else {
        echo "<script>
            alert('Registrasi Gagal');
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
    <title>Registrasi</title>

    <body>

        <h4 class="light center grey-text text-darken-3">Daftar Baru</h4>

    <div class="container">
        <form action="" method="POST">
            <table>
                <tr>
                    <td><label for="username">username</label></td>
                    <td>:</td>
                    <td><input type="text" name="username" id="username" autocomplete="off" autofocus></td>
                </tr>

                <tr>
                    <td><label for="password">password</label></td>
                    <td>:</td>
                    <td><input type="password" name="password" id="password"></td>
                </tr>
            </table>

    <br>

            <div class="center-align">
                <button class="waves-effect waves-light btn-small" type="submit" name="register">REGISTER</button>

                <button class="waves-effect waves-light btn-small"><a class="white-text" href="../index.php">Kembali</a></button>
            </div>
        </form>
    </div>

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="../js/materialize.min.js"></script>
    </body>
    </html>