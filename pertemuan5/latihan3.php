<?php 
/*
Mochammad Nizar Albaehaqi
203040035
https://github.com/mochammadnizaralbaehaqi/pw2021_203040035
Pertemuan 5 - 4 Maret 2021
Mempelajari Array
*/
?>

<?php 
$mahasiswa = [
["Mochammad nizar albaehaqi", "203040035", "Teknik informatika", "mochammadnizaralbaehaqi@gmail.com"], 
["Sandhika Galih", "043040023", "Teknik informatika", "Sandhikagalih@unpas.ac.id"],
["Doddy Ferdiansyah", "033040001", "Teknik informatika", "doddy@yahoo.com"]
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
        <li>Nama :<?= $mhs[0]; ?></li>
        <li>NRP :<?= $mhs[1]; ?></li>
        <li>Jurusan :<?= $mhs[2]; ?></li>
        <li>Email :<?= $mhs[3]; ?></li>
    </ul>
<?php endforeach; ?>

</body>
</html>