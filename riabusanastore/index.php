<?php
// menghubungkan dengan file php lainnya
require "php/functions.php";

// melakukan query
$pakaian = query("SELECT * FROM pakaian");

// searching
if(isset($_GET["cari"])) {
    $keyword = $_GET["keyword"];
    $pakaian = query("SELECT * FROM pakaian WHERE
                        nama LIKE '%$keyword%' OR
                        ukuran LIKE '%$keyword%' OR
                        harga LIKE '%$keyword%' ");
}else{
    $pakaian = query("SELECT * FROM pakaian");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!-- css -->
        <link rel="stylesheet" href="css/style.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Home</title>
    </head>

    <body>

    <!-- navbar -->
        <div class="navbar-fixed">
            <nav class="teal darken-1">
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="index.php" class="brand-logo">RIA BUSANA</a>
                        <ul class="right hide-on-med-and-down">
                            <li>
                                <a href="php/login.php">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    <!-- slider -->
        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="assets/slider/1.jpg">
                    <div class="caption center-align">
                        <h3>Selamat Datang</h3>
                        <h5 class="light grey-text text-lighten-3">Temukan gayamu.</h5>
                    </div>
                </li>

                <li>
                    <img src="assets/slider/2.jpg">
                    <div class="caption center-align">
                        <h3>Selamat Datang</h3>
                        <h5 class="light grey-text text-lighten-3">Temukan gayamu.</h5>
                    </div>
                </li>

                <li>
                    <img src="assets/slider/3.jpg">
                    <div class="caption center-align">
                        <h3>Selamat Datang</h3>
                        <h5 class="light grey-text text-lighten-3">Temukan gayamu.</h5>
                    </div>
                </li>
            </ul>
        </div>

    <br>

    <!-- about -->
        <section id="about" class="about">
            <div class="container">
                <h6 class="center light grey-text text-darken-3">Ria Busana Official Shop adalah akun resmi dari Ria Busana Store di Platform website. Ria Busana adalah salah satu brand fashion asal Indonesia yang mengedepankan kualitas dan desain produknya yang cocok baik untuk kegiatan sehari-hari maupun traveling.</h6>
            </div>
        </section>

    <br>

    <!-- login -->
        <section id="login" class="login">
            <div class="container">
                <p class="center-align">Ayo Daftar Registrasi & Login <a href="php/login.php">Disini</a></p>
            </div>
        </section>

    <br>

    <!-- Cari -->
        <section id="cari" class="cari">
            <div class="container">
                <div class="center-align">
                    <form action="" method="GET">
                        <input type="text" name="keyword" placeholder="Cari di toko ini" autocomplete="off" autofocus>
                        <button class="waves-effect waves-light btn-small" type="submit" name="cari">Cari</button>
                    </form>
                </div>
            </div>
        </section>

    <br>

    <!-- img -->
        <section id="img" class="img">
            <div class="container">

                <h4 class="light center grey-text text-darken-3">Produk</h4><br><br>

            <?php foreach( $pakaian as $row ) : ?>
                <div class="row">

                    <div class="col m6">
                        <img src="assets/img/<?= $row["img"]; ?>">
                    </div>

                    <div class="col m6">
                        <a href="php/detail.php?id=<?= $row["id"] ?>"><?= $row["nama"] ?></a><br>
                        <p>Size:  <?= $row["ukuran"]; ?></p>
                        <p>Harga:  Rp <?= $row["harga"]; ?></p>
                    </div>

                </div>
            <?php endforeach;?>
            </div>
        </section>

    <br>

    <!-- contact -->
        <section id="contact" class="contact">
            <div class="container">

                <h5 class="light center grey-text text-darken-3">Contact Us</h5><br>

                <div class="row">

                    <div class="col m3">
                        <h6>Adress</h6>
                        <p>Bandung Jawa Barat</p>
                    </div>

                    <div class="col m3">
                        <h6>Instagram</h6>
                        <p>riabusanaofficial</p>
                    </div>

                    <div class="col m3">
                        <h6>Email</h6>
                        <p>mochammadnizar10@gmail.com</p>
                    </div>

                    <div class="col m3">
                        <h6>Telephone</h6>
                        <p>088223320904</p>
                    </div>

                </div>
            </div>
        </section>

    <!-- footer -->
        <footer class="teal darken-1 white-text center">
            <p class="flow-text">Mochammad nizar albaehaqi. Copyright 2021.</p>
        </footer>

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>

        <script>
            const slider = document.querySelectorAll(".slider");
            M.Slider.init(slider, {
                indicators: false,
                height: 500,
                transition: 600,
                interval: 3000
            });
        </script>
    </body>
</html>