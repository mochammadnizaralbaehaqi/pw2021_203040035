<?php
require 'functions.php';

$mahasiswa = query("SELECT * FROM sepatu");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan5a</title>
</head>
<body>
    <div class="add">
        <a href="tambah.php">Tambah Data</a>
    </div>
    <table cellpadding="13" cellspacing="0" border="1">
            <tr>
                <th>#</th>
                <th>Opsi</th>
                <th>No</th>
                <th>Foto</th>
                <th>Merk</th>
                <th>Tipe</th>
                <th>Harga</th>
            </tr>
            <?php foreach($sepatu as $spt) : ?>
                <tr>
                    <td>
                        <a href=""><button>Ubah</button></a>
                        <a href=""><button>Hapus</button></a>
                    </td>
                    <td><?= $spt["id"]?></td>
                    <td><img src="assets/img/<?= $spt["img"]; ?>"></td>
                    <td><?= $spt["merk"]?></td>
                    <td><?= $spt["tipe"]?></td>
                    <td><?= $spt["Harga"]?></td>
                </tr>
            <?php endforeach; ?>
        </table>
</body>
</html>