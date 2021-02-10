<?php 
/*
Mochammad Nizar Albaehaqi
203040035
https://github.com/mochammadnizaralbaehaqi/pw2021_203040035
Pertemuan 2 - 10 Februari 2021
Mempelajari sintaks dasar php
*/
?>

<?php
// Pertemuan 2
// Sintaks PHP

// Standar Output
// echo, print,
// print_r
// var_dump

// Penulisan Sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// Tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama1 = "Mochammad nizar albaehaqi";
// echo "Halo, nama saya $nama1";

// Operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// Penggabung string / concatenation / concat
// . 
// $nama_depan = "Mochammad";
// $nama_belakang = "Nizar";
// echo $nama_depan . " " . $nama_belakang;

//assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Mochammad";
// $nama .= " ";
// $nama .= "Nizar  ";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1")

// identitas
// ===, !===
// var_dump(1 === "1")

// Logika
// &&, ||, !
$x = 30;
var_dump($x <20 || $x % 2 == 0);
?>