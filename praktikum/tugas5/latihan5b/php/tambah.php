<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
    if(tambah($_POST) > 0) {
        echo "<script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'admin.php' ;
        </script>";
    }else{
        echo "<script>
            alert('Data gagal ditambahkan');
            document.location.href = 'admin.php' ;
        </script>";
    }
}
?>

<h3>Form tambah Data Sepatu</h3>
<form actions="" method="post">
    <ul>
        <li>
            <label for="merk">Merk :</label><br>
            <input type="text" name="merk" id="merk" required><br><br>
        </li>
        <li>
            <label for="tipe">Tipe :</label><br>
            <input type="text" name="tipe" id="tipe" required><br><br>
        </li>
        <li>
            <label for="harga">Harga :</label><br>
            <input type="text" name="harga" id="harga" required><br><br>
        </li>
        <br>
        <button type="submit" name="tambah">Tambah Data</button>
        <button type="submit">
            <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>