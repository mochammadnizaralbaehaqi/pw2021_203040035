<?php 
// Nama : Mochammad nizar albaehaqi
// Nrp : 203040035
// Shift : Rabu 9.00 - 10.00
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1b</title>
</head>
<body>
    <table border= "1" cellspacing= "0" cellpadding= "10">
    <tr>
    <th></th>
    <?php for ($i = 1; $i <= 5; $i++) : ?>
    <th>Kolom <?= $i; ?></th>
    <?php endfor; ?>
    </tr>

    <?php for ($i = 1; $i <= 5; $i++) : ?>
    <?php if ($i % 2 == 0) : ?>
    <tr>

    <?php else :?>
    <tr>

    <?php endif; ?>
    <?php for ($j = 0; $j < 1; $j++) : ?>
    <th><?= "Baris $j"?></th>
    <?php endfor; ?>

    <?php for ($j = 1; $j <= 5; $j++) : ?>
    <td><?= "Baris ke $i, Kolom ke $j"; ?></td>
    <?php endfor; ?>
    </tr>

    <?php endfor; ?>
    </table>
</body>
</html>