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

    <?php

    include "koneksi.php";

    // variabel id
    $id_surat = $_GET['id_surat'];

    // query SQL
    $SQL = "SELECT * FROM surat WHERE id_surat = $id_surat";

    // eksekusi
    $query = mysqli_query($koneksi, $SQL);

    // perulangan
    while ($kolom = mysqli_fetch_array($query)) :

    ?>

        <!-- navbar -->
        <nav>
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo">
                        <img src="assets/logoo.png" style="width: 45px;margin-top: 8px;" alt="Brand Logo">
                    </a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="home_surat_guru.php">Data Surat</a></li>
                        <li><a href="home_siswa_guru.php">Data Siswa</a></li>
                        <li><a href="login.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end navbar -->

        <!-- content -->
        <div class="container">
            <div class="row" style="margin-top: 24px;">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Halaman Pengajuan Surat Ijin</span>
                            <hr>
                            <br>
                            <form action="proses_update_surat_guru.php" method="POST">
                                <input type="text" name="id_surat" placeholder="" value="<?php echo $id_surat; ?>">
                                <div class="row">
                                    <div class="input-field col s12" style="margin-top: 7px;">
                                        <!-- <i class="material-icons prefix">account_circle</i> -->
                                        <input id="icon_prefix" type="date" class="validate" name="tanggal_sakit" value="<?php echo $kolom['tanggal_sakit']; ?>">
                                        <label for="icon_prefix">Tanggal Sakit</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12" style="margin-top: 5px;margin-bottom: 2px;">
                                        <!-- <i class="material-icons prefix">key</i> -->
                                        <input id="icon_telephone" type="text" class="validate" name="alamat" value="<?php echo $kolom['alamat']; ?>">
                                        <label for="icon_telephone">Alamat</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12" style="margin-top: 5px;margin-bottom: 2px;">
                                        <!-- <i class="material-icons prefix">key</i> -->
                                        <input id="icon_telephone" type="text" class="validate" name="keterangan" value="<?php echo $kolom['keterangan']; ?>">
                                        <label for="icon_telephone">Keterangan</label>
                                    </div>
                                </div>
                                <td>
                                    <label>Cek Status</label>
                                    <select class="browser-default" name="status">
                                        <option value="" disabled selected>Pilih salah satu</option>
                                        <option value="Disetujui">Disetujui</option>
                                        <option value="Ditolak">Ditolak</option>
                                    </select>
                                </td>
                                <div class="row" style="margin-top: 15px;">
                                    <div class="col s8">
                                    </div>
                                    <div class="col s4">
                                        <a href="home_surat_guru.php" class="waves-effect waves-light btn"><i class="material-icons left">arrow_back</i>Back</a>
                                        <button class="waves-effect waves-light btn" type="submit" name="action" style="background-color: #CD5C5C;"><i class="material-icons right">send</i>Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end content -->

    <?php
    // sebagai akhiran while (perulangan)
    endwhile; ?>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>