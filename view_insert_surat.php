<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat</title>

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
    <nav>
        <div class="container">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">
                    <img src="assets/logoo.png" style="width: 45px;margin-top: 8px;" alt="Brand Logo">
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="home_surat.php">Data Surat</a></li>
                    <li><a href="login.php">Logout</a></li>
                    <!-- <li><a href="home_siswa_guru.php">Data Siswa</a></li> -->
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row" style="margin-top: 24px;">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Halaman Tambah Surat Ijin</span>
                        <hr>
                        <br>
                        <form action="proses_insert_surat.php" method="POST">
                            <div class="row">
                                <div class="input-field col s12" style="margin-top: 7px;">
                                    <!-- <i class="material-icons prefix">account_circle</i> -->
                                    <input id="icon_prefix" type="date" class="validate" name="tanggal_sakit" required>
                                    <label for="icon_prefix">Tanggal Sakit</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12" style="margin-top: 5px;margin-bottom: 2px;">
                                    <!-- <i class="material-icons prefix">key</i> -->
                                    <input id="icon_telephone" type="text" class="validate" name="alamat">
                                    <label for="icon_telephone">Alamat</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12" style="margin-top: 5px;margin-bottom: 2px;">
                                    <!-- <i class="material-icons prefix">key</i> -->
                                    <input id="icon_telephone" type="text" class="validate" name="keterangan" required>
                                    <label for="icon_telephone">Keterangan</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12" style="margin-top: 5px;margin-bottom: 2px;">
                                    <!-- <i class="material-icons prefix">key</i> -->
                                    <!-- <input id="icon_telephone" type="text" class="validate" name="status"> -->
                                    <input id="icon_telephone" type="hidden" class="validate" name="status" value="Diproses">
                                    <!-- <label for="icon_telephone">Status</label> -->
                                </div>
                            </div>
                            <div class="row" style="margin-top: 15px;">
                                <div class="col s8">
                                </div>
                                <div class="col s4">
                                    <a href="home_surat.php" class="waves-effect waves-light btn"><i class="material-icons left">arrow_back</i>Back</a>
                                    <a class="waves-effect waves-light btn" type="submit" name="action" style="background-color: #CD5C5C;"><i class="material-icons right">send</i>Submit</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>