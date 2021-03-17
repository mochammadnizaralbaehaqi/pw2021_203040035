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
//$mahasiswa = [
//["Mochammad nizar albaehaqi", "203040035", "Teknik informatika", "mochammadnizaralbaehaqi@gmail.com"], 
//["Sandhika Galih", "043040023", "Teknik informatika", "Sandhikagalih@unpas.ac.id"],
//["Doddy Ferdiansyah", "033040001", "Teknik informatika", "doddy@yahoo.com"]
//];

// array associative
// definisinya sama seperti array numeric
// key-nya adalah string yang kita buat sendiri

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
    <title>Daftar Mahasiswa</title>
</head>
<body>

<?php foreach ( $mahasiswa as $mhs) : ?>
    <h1>Daftar mahasiswa</h1>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama :<?= $mhs["nama"]; ?></li>
        <li>NRP :<?= $mhs["nrp"]; ?></li>
        <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
        <li>Email :<?= $mhs["email"]; ?></li>
    </ul>
<?php endforeach; ?>

</body>
</html>