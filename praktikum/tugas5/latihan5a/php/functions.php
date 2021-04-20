<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040035");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $img = htmlspecialchars($data['img']);
    $merk = htmlspecialchars($data['merk']);
    $tipe = htmlspecialchars($data['tipe']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO sepatu
    VALUES ('id', 'img', 'merk', 'tipe', 'harga')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>