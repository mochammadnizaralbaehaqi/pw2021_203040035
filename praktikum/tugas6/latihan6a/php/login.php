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
        if ($password == $row["password"]) {
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["hash"] = $row["id"];
        }
        if ($row["id"] == $_SESSION["hash"]) {
            header("Location : admin.php");
            die;
        }
        header("Location: ../index.php");
        die;
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h1>Login</h1>

    
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

    <button type="submit" name="login">Login</button>

    <button><a href="admin.php">Login</a></button>
</form>

</body>
</html>