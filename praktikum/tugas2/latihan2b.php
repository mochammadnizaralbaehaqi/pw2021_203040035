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
    <title>Latihan2b</title>
    <style>
        style{
            font-family: arial;
            font-size:28ps;
            color:#8c782d;
            font-style:italic;
            font-weight:bold;
        }
    </style>
</head>
<body>
    <?php
    $jawabanIsset = "Isset adalah fungsi pada php yang digunakan untuk memeriksa true false jika variabel bernilai null. <br><br>";
    $jawabanEmpty = "Empty adalah fungsi pada php untuk memeriksa apakah suatu objek sudah di isi atau tidak jika belum di isi maka akan bernilai true.";

    function soal($style = "style"){
        echo $GLOBALS['jawabanIsset'];
        echo $GLOBALS['jawabanEmpty'];
    }

    echo soal($style = "style");

    ?>
</body>
</html>