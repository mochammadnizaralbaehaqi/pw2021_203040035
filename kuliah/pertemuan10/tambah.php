<?php
/*
Mochammad Nizar Albaehaqi
203040035
https://github.com/mochammadnizaralbaehaqi/pw2021_203040035
Pertemuan 10 - 28 April 2021
Mempelajari Koneksi DB dan Insert Data
*/

require "functions.php";

if (isset($_POST["tambah"])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'admin.php';
                </script>";
    }else {
        echo "<script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'admin.php';
                </script>";
    }
}
?>

<h3>Tambah Data Mahasiswa</h3>
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
        <button type="submit" name="tambah">Tambah Data</button>
        <button type="submit">
            <a href="latihan3.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>
</form>