<?php
/*
Mochammad Nizar Albaehaqi
203040035
https://github.com/mochammadnizaralbaehaqi/pw2021_203040035
Pertemuan 13 - 18 Mei 2021
Mempelajari Ajax & Upload Gambar
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

<form action="" method="post" enctype="multipart/form-data">
    <ul>
    <li>
            <label for="nrp">NRP :
            <input type="text" name="nrp" id="nrp" required value="<?= $mahasiswa['nrp']; ?>"><br><br>
            </label><br>
        </li>

        <li>
            <label for="nama">Nama :
            <input type="text" name="nama" id="nama" required value="<?= $mahasiswa['nama']; ?>"><br><br>
            </label><br>
        </li>

        <li>
            <label for="email">Email :
            <input type="text" name="email" id="email" required value="<?= $mahasiswa['email']; ?>"><br><br>
            </label><br>
        </li>

        <li>
            <label for="jurusan">Jurusan :
            <input type="text" name="jurusan" id="jurusan" required value="<?= $mahasiswa['jurusan']; ?>"><br><br>
            </label><br>
        </li>

        <li>
            <input type="hidden" name="img_lama" value="<?= $mahasiswa['img']; ?>">
            <label for="img">Gambar :
            <input type="file" name="img" id="img" class="img" onchange="previewImage()"><br><br>
            </label><br>
            <img src="img/<?= $mahasiswa['img']; ?>" width="120" style="display: block;" class="img-preview">
        </li>

        <br>
        <button type="submit" name="ubah">Ubah Data</button>
        <button type="submit">
            <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>
</form>

<script src="js/script.js"></script>

</body>
</html>