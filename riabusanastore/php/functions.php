<?php
// fungsi untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");

    mysqli_select_db($conn, "pw_tubess_203040035");

    return $conn;
}

// function untuk melakukan query dan memasukkannya ke dalam array
function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

// fungsi upload
function upload()
{
    $nama_file = $_FILES['img']['name'];
    $tipe_file = $_FILES['img']['type'];
    $ukuran_file = $_FILES['img']['size'];
    $error = $_FILES['img']['error'];
    $tmp_file = $_FILES['img']['tmp_name'];

    // ketika tidak ada gambar yang dipilih
    if($error == 4) {
        echo "<script>
                alert('pilih gambar terlebih dahulu!');
        </script>";
    return false;
    }

    // cek ekstensi file
    $daftar_img = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));

    if(!in_array($ekstensi_file, $daftar_img)) {
        echo "<script>
                alert('yang anda pilih bukan gambar');
        </script>";
    return false;
    }

    // cek type file
    if($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
                alert('yang anda pilih bukan gambar');
        </script>";
    return false;
    }

    // cek ukuran file
    // maksimal 5mb == 5000000
    if($ukuran_file > 5000000) {
        echo "<script>
                alert('ukuran terlalu besar!');
        </script>";
    return false;
    }

    // lolos pengecekan
    // siap upload file
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, 'assets/img/' . $nama_file_baru);

    return $nama_file_baru;
}

// fungsi untuk menambahkan data didalam database
function tambah($data)
{
    $conn = koneksi();

    $nama = htmlspecialchars ($data["nama"]);
    $ukuran = htmlspecialchars ($data["ukuran"]);
    $harga = htmlspecialchars ($data["harga"]);
    // $img = htmlspecialchars ($data["img"]);

    // upload img
    $img = upload();
    if (!$img) {
        return false;
    }

    $query = "INSERT INTO
                pakaian
            VALUES
                (null, '$nama', '$ukuran', '$harga', '$img');
            ";

    mysqli_query($conn, $query);

    echo mysqli_error($conn);

    return mysqli_affected_rows($conn);
}

// fungsi menghapus data
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM pakaian WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

// fungsi mengubah data
function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $nama = htmlspecialchars ($data["nama"]);
    $ukuran = htmlspecialchars ($data["ukuran"]);
    $harga = htmlspecialchars ($data["harga"]);
    $img = htmlspecialchars ($data["img"]);

    $query = "UPDATE pakaian
                SET
                nama = '$nama',
                ukuran = '$ukuran',
                harga = '$harga',
                img = '$img'
            WHERE id = $id";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

// fungsi registrasi
function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if(mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('username sudah digunakan');
            </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
?>