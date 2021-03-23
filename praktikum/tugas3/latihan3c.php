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
    <h1>Daftar pemain bola terkenal dan clubnya</h1>
    <ul>
        <li><?= $pemain[1]; ?> : Juventus</li>
        <li><?= $pemain[2]; ?> : Barcelona</li>
        <li><?= $pemain[5]; ?> : Real Madrid</li>
        <li><?= $pemain[0]; ?> : Liverpool</li>
        <li><?= $pemain[4]; ?> : Paris Saint Germain</li>
        <li><?= $pemain[6]; ?> : Liverpool</li>
        <li><?= $pemain[3]; ?> : Ac Milan</li>
    </ul>
<?php endforeach; ?>

</body>
</html>