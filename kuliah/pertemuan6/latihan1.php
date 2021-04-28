<?php 
/*
Mochammad Nizar Albaehaqi
203040035
https://github.com/mochammadnizaralbaehaqi/pw2021_203040035
Pertemuan 6 - 17 Maret 2021
Mempelajari Array Associative
*/
?>

<?php
// array
// membuat array
//$hari = array("Senin","Selasa","Rabu");
//$bulan = ["Januari", "Februari", "Maret"];
//$arr = [100, "teks", true];
// menampilkan array
// versi debugging
//var_dump($hari);
//echo"<br>";
//print_r($bulan);
// menampilkan 1 elemen pada array
//echo $arr[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan array</title>
    <style>
        .kotak{
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear{
            clear:both;
        }
    </style>
</head>
<body>
    <?php
    $angka = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ];
    echo $angka[2][2];
    ?>

    <?php foreach( $angka as $a) :?>
        <?php foreach( $a as $b) :?>
                <div class="kotak"><?= $b; ?></div>
        <?php endforeach; ?>
            <div class ="clear"></div>
    <?php endforeach; ?>

</body>
</html>