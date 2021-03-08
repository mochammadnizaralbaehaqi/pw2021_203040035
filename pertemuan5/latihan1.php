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
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu",);

// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "Tulisan", false];

// menampilkan array
// var_dump() / print_r()
//var_dump ($hari);
//echo "<br>";
//print_r($bulan);

// menampilkan 1 elemen pada array
//echo $arr1[0];
//echo "<br>";
//echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari [] = "Kamis";
$hari [] = "Jumat";
echo "<br>";
var_dump($hari);
?>