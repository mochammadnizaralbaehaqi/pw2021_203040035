<?php
/*
Mochammad Nizar Albaehaqi
203040035
https://github.com/mochammadnizaralbaehaqi/pw2021_203040035
Pertemuan 12 - 14 Mei 2021
Mempelajari Login & Registrasi
*/

// koneksi ke database
function koneksi()
{
$conn = mysqli_connect("localhost", "root", "");

mysqli_select_db($conn, "phpdasar");

return $conn;
}

function query($query){
    $conn = koneksi();
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = htmlspecialchars($data["id"]);
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $img = htmlspecialchars($data["img"]);

    $query = "UPDATE mahasiswa
            SET
            nama = '$nama',
            nrp = '$nrp',
            email = '$email',
            jurusan = '$jurusan',
            img = '$img'
            WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM mahasiswa
                WHERE nama LIKE '%keyword%' OR
                nrp LIKE '%keyword%'
            ";

    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

//fungsi login
function login($data)
{
    $conn = koneksi();

    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);

    //cek dulu username
    if($user = query("SELECT * FROM user WHERE username = '$username' ")) {
        //cek password
        if(password_verify($password, $user["password"])){
        // set session
        $_SESSION['login'] = true;

        header("Location: index.php");
        exit;
        }
        
    }
        return [
            'error' => true,
            'pesan' => 'Username / Password Salah!'
        ];
}

// fungsi registrasi
function registrasi($data)
{
    $conn = koneksi();
    $username = htmlspecialchars(strtolower($data["username"]));
    $password1 = mysqli_real_escape_string($conn, $data["password1"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //jika username/ password kosong
    if(empty($username) || empty($password1) || empty($password2)){
        echo "<script>
                alert('username / password tidak boleh kosong!');
                document.location.href = 'registrasi.php';
        </script>";
    return false;
    }

    //jika username sudah ada
    if(query("SELECT * FROM user WHERE username = '$username' ")) {
        echo "<script>
                alert('username sudah terdaftar');
                document.location.href = 'registrasi.php';
        </script>";
    return false;
    }

    //jika konfirmasi password tidak sesuai
    if($password1 !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai');
                document.location.href = 'registrasi.php';
        </script>";
    return false;
    }

    //jika password < 5 digit
    if(strlen($password1) < 5) {
        echo "<script>
                alert('password terlalu pendek');
                document.location.href = 'registrasi.php';
        </script>";
    return false;
    }

    //enkripsi password
    $password_baru = password_hash($password1, PASSWORD_DEFAULT);

    //tambah user baru
    $query = "INSERT INTO user VALUES('', '$username', '$password_baru')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
?>