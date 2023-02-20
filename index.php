<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Siswa</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <style>
        body {
            background-color: rosybrown;
        }
    </style>
</head>

<body>

    <!-- navbar -->
    <nav>
        <div class="container">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">
                    <img src="assets/logoo.png" style="width: 45px;margin-top: 8px;" alt="Brand Logo">
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="login.php">Login</a></li>
                    <li><a href="registrasi.php">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- content -->
    <div class="container">
        <marquee style="font-family: Book Antiqua;" behavior="alternate">
            <b>
                <p style="text-align: center;padding-top: 28px;font-size: 40px;font-style: italic;;">Selamat Datang Di Aplikasi Surat Menyurat</p>
            </b>
        </marquee>
        <center>
            <img src="assets/img1.png" style="height: 250px;margin-top: 10px;">
        </center>
    </div>
    <!-- end content -->

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>