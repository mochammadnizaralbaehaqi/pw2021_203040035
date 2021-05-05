<?php
/*
Mochammad Nizar Albaehaqi
203040035
https://github.com/mochammadnizaralbaehaqi/pw2021_203040035
Pertemuan 11 - 5 Mei 2021
Mempelajari Delete & Update Data
*/

require "functions.php";

$id = $_GET["id"];
$pakaian = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if (isset($_POST["ubah"])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil diubah!');
                document.location.href = 'index.php';
                </script>";
    }else {
        echo "<script>
                alert('Data gagal diubah!');
                document.location.href = 'index.php';
                </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah</title>
</head>
<body>

<form action="" method="post">
    <ul>
    <li>
            <label for="nrp">NRP :</label><br>
            <input type="text" name="nrp" id="nrp" required><br><br>
        </li>

        <li>
            <label for="nama">Nama :</label><br>
            <input type="text" name="nama" id="nama" required><br><br>
        </li>

        <li>
            <label for="email">Email :</label><br>
            <input type="text" name="email" id="email" required><br><br>
        </li>

        <li>
            <label for="jurusan">Jurusan :</label><br>
            <input type="text" name="jurusan" id="jurusan" required><br><br>
        </li>
        <br>
        <button type="submit" name="ubah">Ubah Data</button>
        <button type="submit">
            <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>
</form>

</body>
</html>