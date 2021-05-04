<?php
require "functions.php";

$pakaian = query("SELECT * FROM pakaian");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan5a</title>
</head>
<body style="background-color: steelblue;">

    <table cellpadding="13" cellspacing="0" border="1">
            <tr>
                <th>#</th>
                <th>opsi</th>
                <th>Img</th>
                <th>Nama</th>
                <th>Ukuran</th>
                <th>Harga</th>
            </tr>
            <?php foreach($pakaian as $row) : ?>
                <tr>
                    <td><?= $row["id"]?></td>
                    <td>
                        <a href=""><button>Ubah</button></a>
                        <a href=""><button>Hapus</button></a>
                    </td>
                    <td><img src="../assets/img/<?= $row["img"]; ?>"></td>
                    <td><?= $row["nama"]?></td>
                    <td><?= $row["ukuran"]?></td>
                    <td><?= $row["harga"]?></td>
                </tr>
            <?php endforeach; ?>
        </table>
</body>
</html>