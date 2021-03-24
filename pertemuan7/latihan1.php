<?php 
/*
Mochammad Nizar Albaehaqi
203040035
https://github.com/mochammadnizaralbaehaqi/pw2021_203040035
Pertemuan 7 - 24 Maret 2021
Mempelajari GET & POST
*/
?>

<?php
// variabel scope / lingkup variabel
//$x = 10;

//function tampilX() {
//    global $x;
//    echo $x;
//}

//tampilX();

//SUPERGLOBALS
//variabel global milik PHP
// merupakan Array Associative

//echo $_SERVER["SERVER NAME"];

$mahasiswa = [
    [
    "nama" => "Sandhika Galih", 
    "nrp" => "043040023", 
    "email" => "Sandhikagalih@unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "laptop.jpg"
    ],
    [
    "nama" => "Doddy Ferdiansyah", 
    "nrp" => "033040001", 
    "email" => "doddy@yahoo.com",
    "jurusan" => "Teknik Informatika"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
        <ul>
            <?php foreach( $mahasiswa as $mhs) : ?>
                <li>
                    <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp= <?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"];?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
</body>
</html>