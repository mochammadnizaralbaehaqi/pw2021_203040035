<?php
require "functions.php";

if (isset($_POST["tambah"])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'index.php';
                </script>";
    }else {
        echo "<script>
                alert('Data gagal ditambahkan!');
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
    <title>Tambah</title>
</head>
<body>

    <h3>Form Tambah Data Produk</h3>

<form action="" method="post">
    <ul>
        <li>
            <label for="nama">Nama :</label><br>
            <input type="text" name="nama" id="nama" required><br><br>
        </li>

        <li>
            <label for="ukuran">Ukuran :</label><br>
            <input type="text" name="ukuran" id="ukuran" required><br><br>
        </li>

        <li>
            <label for="harga">Harga :</label><br>
            <input type="text" name="harga" id="harga" required><br><br>
        </li>
        <br>
        <button type="submit" name="tambah">Tambah Produk</button>
        <button type="submit">
            <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>
</form>

</body>
</html>