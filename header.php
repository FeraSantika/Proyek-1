<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="regist.css">
    <title>School Profile</title>
</head>

<body>
    <!--topbar-->
    <div class="topbar">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-md-9">
                    <ul>
                        <li><a href=""><i class="fa-solid fa-phone"></i>0838-2117-7545</a></li>
                        <li><a href=""><i class="fa-solid fa-envelope"></i>Fatwah@gmail.com</a></li>
                        <li><a href=""><i class="fa-solid fa-bullhorn"></i>PPDB TA 2022/2023</a></li>
                    </ul>
                    </div>
                <div class="col-md-3">
                    <ul>
                        <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--container-->

    <!--header-->
    <div class="container">
        <header>
            <div class="logo">
                <img src="assets/images/SMK 1 WIDASARI.png" alt="logo smk">
            </div>
            <div class="caption">
                <h2>smk negeri 1 widasari</h2>
                <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h3>
            </div>
        </header>
    </div>
    <!--container-->

    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg">
        <div class="container-fluid">
            <button class="navbar-toggler ms-2 " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="sejarah_singkat.php">Sejarah Singkat</a></li>
                            <li><a class="dropdown-item" href="visimisi.php">Visi & Misi</a></li>
                            <li><a class="dropdown-item" href="#">Sarana & Prasarana</a></li>
                            <li><a class="dropdown-item" href="#">Guru & Staff</a></li>
                            <li><a class="dropdown-item" href="#">Hubungan Industri</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Kesiswaan
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Prestasi</a></li>
                            <li><a class="dropdown-item" href="#">Ekstrakurikuler</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Kompetensi Keahlian
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Teknik Kendaraan Ringan Otomotif</a></li>
                            <li><a class="dropdown-item" href="#">Teknik Bisnis Sepeda Motor</a></li>
                            <li><a class="dropdown-item" href="#">Teknik Komputer dan Jaringan</a></li>
                            <li><a class="dropdown-item" href="#">Perbankan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            PPDB
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="PPDB.php">Daftar PPDB</a></li>
                            <li><a class="dropdown-item" href="#">Cetak Kartu</a></li>
                            <li><a class="dropdown-item" href="#">Cek Hasil Seleksi</a></li>
                            <?php if ( !isset($_SESSION["login"]) ) :?>
                            <li><a class="dropdown-item" href="login.php">Log In</a></li>
                            <?php endif;?>
                            <?php if ( isset($_SESSION["login"]) ) :?>
                            <li><a class="dropdown-item dropdown" href="logout.php"><?= "<span>(Log Out)</span> ".$_COOKIE["username"]?></a></li>
                            <?php endif;?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--nav close-->