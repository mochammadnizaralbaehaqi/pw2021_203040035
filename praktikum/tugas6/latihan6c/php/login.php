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
    $cek_user = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    // mencocokan username dan password
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if ($password_verify($password, $row["password"])) {
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["hash"] = hash("sha256", $row["id"], false);
        }
        if (hash("sha256", $row["id"]) == $_SESSION["hash"]) {
            header("Location : admin.php");
            die;
        }
        header("Location: ../index.php");
        die;
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

</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Log in</title>
</head>
<body>

    <h1>Log in</h1>

    
<form action="" method="post">
    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username atau password salah</p>
    <?php endif; ?>

    <table>
        <tr>
            <td><label for="username">username</label></td>
            <td>:</td>
            <td><input type="text" name="username" id="username"></td>
        </tr>

        <tr>
            <td><label for="password">password</label></td>
            <td>:</td>
            <td><input type="password" name="password" id="password"></td>
        </tr>
    </table>

    <button class="btn btn-primary" type="submit">Login</button>

    <button type="button" class="btn btn-info"><a href="admin.php">Login admin</a></button>

    <button type="button" class="btn btn-outline-primary"><a href="../index.php">Kembali</a></button>

    <div class="registrasi">
        <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
    </div>

</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>
</html>