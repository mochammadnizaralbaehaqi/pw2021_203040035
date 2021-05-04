<?php
require "functions.php";

$id = $_GET["id"];
$pakaian = query("SELECT * FROM pakaian WHERE id = $id")[0];

if (isset($_POST["ubah"])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil diubah!');
                document.location.href = 'admin.php';
                </script>";
    }else {
        echo "<script>
                alert('Data gagal diubah!');
                document.location.href = 'admin.php';
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
    <title>Form ubah data Produk</title>
</head>
<body>

<form action="" method="post">
    <ul>
        <li>
            <label for="nama">Nama :</label><br>
            <input type="text" name="nama" id="nama" required value="<?= $pakaian['nama']; ?>"><br><br>
        </li>

        <li>
            <label for="ukuran">Ukuran :</label><br>
            <input type="text" name="ukuran" id="ukuran" required value="<?= $pakaian['ukuran']; ?>"><br><br>
        </li>

        <li>
            <label for="harga">Harga :</label><br>
            <input type="text" name="harga" id="harga" required value="<?= $pakaian['harga']; ?>"><br><br>
        </li>
        <br>
        <button type="submit" name="ubah">Ubah Produk</button>
        <button type="submit">
            <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>
</form>

</body>
</html>