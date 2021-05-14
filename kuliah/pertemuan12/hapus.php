<?php
/*
Mochammad Nizar Albaehaqi
203040035
https://github.com/mochammadnizaralbaehaqi/pw2021_203040035
Pertemuan 12 - 14 Mei 2021
Mempelajari Login & Registrasi
*/

session_start();

if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require "functions.php";
$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "<script>
            alert('Data Berhasil dihapus!');
            document.location.href = 'index.php';
            </script>";
}else {
    echo "<script>
            alert('Data gagal dihapus!');
            document.location.href = 'index.php';
            </script>";
}
?>