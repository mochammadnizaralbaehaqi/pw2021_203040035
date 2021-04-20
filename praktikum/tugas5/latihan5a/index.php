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
    <title>latihan5a</title>
</head>
<body>
    <div class="container">
            <?php foreach($sepatu as $spt) : ?>
                <p class= "nama">
                    <a href="php/detail.php?id=<?= $spt['id'] ?>">
                        <?= $mhs["nama"] ?>
                    </a>
                </p>
            <?php endforeach; ?>
    </div>
</body>
</html>