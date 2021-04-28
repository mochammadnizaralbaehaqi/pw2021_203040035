<?php
/*
Mochammad Nizar Albaehaqi
203040035
https://github.com/mochammadnizaralbaehaqi/pw2021_203040035
Pertemuan 10 - 28 April 2021
Mempelajari Koneksi DB dan Insert Data
*/

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "");

// memilih database
mysqli_select_db($conn, "phpdasar");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}
?>