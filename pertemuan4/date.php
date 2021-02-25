<?php 
/*
Mochammad Nizar Albaehaqi
203040035
https://github.com/mochammadnizaralbaehaqi/pw2021_203040035
Pertemuan 4 - 25 Februari 2021
Mempelajari Function
*/
?>

<?php 
    //Date
    //Untuk menampilkan tanggal dengan format tertentu
    //echo date("l, d-M-Y");

    //time
    //Unix Timestamp / EPOCH time
    //detik yang sudah berlalu sejak 1 Januari 1970
    //echo time();
    //echo date ("d M Y", time() - 60*60*24*100);

    //mktime
    //membuat sendiri detik
    //mktime (0,0,0,0,0,0)
    //jam, menit, detik, bulan, tanggal, tahun
    //echo date("l", mktime (0,0,0,6,04,2002));

    //strtotime
    echo date("l", strtotime("06 April 2002"));
?>