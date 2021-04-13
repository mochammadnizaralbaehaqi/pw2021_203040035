<?php
$sepatu = [
    [
    "id" => "1",
    "img" => "adidassambablack.jpg",
    "merk" => "Adidas", 
    "tipe" => "Samba Black Solid",
    "harga" => "1.800.000",
    ],
    [
    "id" => "2",
    "img" => "adidassambaputih.jpg",
    "merk" => "Adidas", 
    "tipe" => "Samba White Cream",
    "harga" => "1.500.000",
    ],
    [
    "id" => "3",
    "img" => "nikejordangreen.jpg",
    "merk" => "Nike", 
    "tipe" => "Air Jordan Green Limited",
    "harga" => "1.600.000",
    ],
    [
    "id" => "4",
    "img" => "nikejordanblue.jpg",
    "merk" => "Nike", 
    "tipe" => "Air Jordan Blue Custom",
    "harga" => "1.400.000",
    ],
    [
    "id" => "5",
    "img" => "pumaskateblack.jpg",
    "merk" => "Puma", 
    "tipe" => "Skate Black 37",
    "harga" => "1.200.000",
    ],
    [
    "id" => "6",
    "img" => "pumaskatered.jpg",
    "merk" => "Puma", 
    "tipe" => "Skate Red Limited",
    "harga" => "1.300.000",
    ],
    [
    "id" => "7",
    "img" => "conversesekolah.jpg",
    "merk" => "Converse", 
    "tipe" => "Old school Black Formal",
    "harga" => "1.000.000",
    ],
    [
    "id" => "8",
    "img" => "vanssekolah.jpg",
    "merk" => "Vans", 
    "tipe" => "Black Solid school edition",
    "harga" => "1.000.000",
    ],
    [
    "id" => "9",
    "img" => "dcshoes.jpg",
    "merk" => "DC", 
    "tipe" => "DC Original Black School",
    "harga" => "1.200.000",
    ],
    [
    "id" => "10",
    "img" => "ventelapink.jpg",
    "merk" => "Ventela", 
    "tipe" => "Pinky Limited Edition",
    "harga" => "1.300.000",
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 4a</title>
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
                    <td><?= $spt["id"]?></td>
                    <td><img src="assets/img/<?= $spt["img"]; ?>"></td>
                    <td><?= $spt["merk"]?></td>
                    <td><?= $spt["tipe"]?></td>
                    <td><?= $spt["harga"]?></td>
                </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>