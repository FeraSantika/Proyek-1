<?php
    session_start();

    if ( !isset($_SESSION["login"]) ){
        header("Location: login.php");
        exit;
    }
?>

<h1 style="font-size: 100px">Blom buat banh cape</h1>

<a href="logout.php">Logout</a>
<a href="index.php">Beranda</a>