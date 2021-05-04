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
    <title>latihan5a</title>
</head>
<body>
    <div class="container">
            <?php foreach($pakaian as $row) : ?>
                <p class= "nama">
                    <a href="php/detail.php?id=<?= $row["id"] ?>">
                        <?= $row["nama"] ?>
                    </a>
                </p>
            <?php endforeach; ?>
    </div>
</body>
</html>