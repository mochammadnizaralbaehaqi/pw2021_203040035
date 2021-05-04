<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubess_203040035");

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

    $nama = htmlspecialchars($data["nama"]);
    $ukuran = htmlspecialchars($data["ukuran"]);
    $harga = htmlspecialchars($data["harga"]);
    $img = htmlspecialchars($data["img"]);

    $query = "INSERT INTO pakaian
                    VALUES
                    ('', '$nama', '$ukuran', '$harga', '$img')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>