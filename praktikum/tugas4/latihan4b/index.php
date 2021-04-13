<?php
require 'php/functions.php';

$sepatu = query("SELECT * FROM sepatu")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan4b</title>
</head>
<body>
    <div class="container">
        <table cellpadding="10" cellspacing="0" border="1">
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Merk</th>
                <th>Tipe</th>
                <th>Harga</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach($sepatu as $spt) : ?>
                <tr>
                    <td><img src="assets/img/<?= $spt["img"]; ?>"></td>
                    <td><?= $spt["merk"]?></td>
                    <td><?= $spt["tipe"]?></td>
                    <td><?= $spt["Harga"]?></td>
                </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>