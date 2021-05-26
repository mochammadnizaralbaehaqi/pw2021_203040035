<?php
session_start();
require "functions.php";
// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION["username"])) {
    header("Location: admin.php");
    exit;
}

// login
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    // mencocokan username dan password
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row["password"])) {
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["hash"] = hash("sha256", $row["id"], false);
        
        if (hash("sha256", $row["id"]) == $_SESSION["hash"]) {
            header("Location : admin.php");
            die;
        }
        header("Location: ../index.php");
        die;
        }
    }
    $error = true;
}

// cek cookie
if (isset($_COOKIE["username"]) && isset($_COOKIE["hash"])) {
    $username = $_COOKIE["username"];
    $hash = $_COOKIE["hash"];

    // ambil username berdasarkan id
    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");
    $row = mysqli_fetch_assoc($result);

    //cek cookie dan username
    if ($hash === hash("sha256", $row["id"], false)) {
        $_SESSION["username"] = $row["username"];
        header("Location : admin.php");
        exit;
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
    <title>Login</title>

    <body>

        <h4 class="light center grey-text text-darken-3">Login Admin</h4>

    <div class="container">
        <form action="" method="POST">
        <?php if (isset($error)) : ?>
            <p style="color: red; font-style: italic;">Username atau password salah</p>
        <?php endif; ?>

            <table>
                <tr>
                    <td><label for="username">Username</label></td>
                    <td>:</td>
                    <td><input type="text" name="username" id="username" autocomplete="off" autofocus></td>
                </tr>

                <tr>
                    <td><label for="password">Password</label></td>
                    <td>:</td>
                    <td><input type="password" name="password" id="password"></td>
                </tr>
            </table>

    <br>

            <div class="center-align">
                <button class="waves-effect waves-light btn-small" type="submit" name="submit">Login</button>

                <button class="waves-effect waves-light btn-small"><a class="white-text" href="../index.php">Kembali</a></button>

                <div class="registrasi">
                    <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
                </div>
            </div>
        </form>
    </div>

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="../js/materialize.min.js"></script>
    </body>
</html>