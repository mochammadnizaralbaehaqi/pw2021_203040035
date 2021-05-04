<?php
/*
// Nama : Mochammad nizar albaehaqi 
// Nrp : 203040035
// Shift : Rabu 9.00 - 10.00
*/
?>

<?php
require "php/functions.php";

$pakaian = query("SELECT * FROM pakaian")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin</title>
</head>
<body>
    
    <div class="container">

    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Ukuran</th>
        <th>Harga</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach( $pakaian as $row ) :?>
    <tr>
        <td><?= $i; ?></td>
        <td><img src="assets/img/<?= $row["img"]; ?>" width="50"></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["ukuran"]; ?></td>
        <td><?= $row["harga"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach;?>

    </table>

    </div>
</body>
</html>