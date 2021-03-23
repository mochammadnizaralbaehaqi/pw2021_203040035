<?php 
// Nama : Mochammad nizar albaehaqi
// Nrp : 203040035
// Shift : Rabu 9.00 - 10.00
?>

<?php 
$pemainbola = [
["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar Jr", "Luca Modric", "Sadio Mane"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3b</title>
</head>
<body>

<?php foreach ( $pemainbola as $pemain) : ?>
    <h1>Daftar pemain bola terkenal</h1>
    <ul>
        <li>1. <?= $pemain[0]; ?></li>
        <li>2. <?= $pemain[1]; ?></li>
        <li>3. <?= $pemain[2]; ?></li>
        <li>4. <?= $pemain[3]; ?></li>
        <li>5. <?= $pemain[4]; ?></li>
    </ul>
<?php endforeach; ?>

<?php foreach ( $pemainbola as $pemain) : ?>
    <h1>Daftar pemain bola terkenal baru</h1>
    <ul>
        <li>1. <?= $pemain[1]; ?></li>
        <li>2. <?= $pemain[2]; ?></li>
        <li>3. <?= $pemain[5]; ?></li>
        <li>4. <?= $pemain[0]; ?></li>
        <li>5. <?= $pemain[4]; ?></li>
        <li>6. <?= $pemain[6]; ?></li>
        <li>7. <?= $pemain[3]; ?></li>
    </ul>
<?php endforeach; ?>

</body>
</html>