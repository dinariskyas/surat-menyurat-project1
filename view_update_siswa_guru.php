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
    $id_user = $_GET['id_user'];

    // query SQL
    $SQL = "SELECT * FROM user WHERE id_user = $id_user";

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
                            <span class="card-title">Halaman Pengajuan Data Siswa</span>
                            <hr>
                            <br>
                            <form action="proses_update_siswa_guru.php" method="POST">
                                <input type="text" name="id_user" placeholder="" value="<?php echo $id_user; ?>">
                                <div class="row">
                                    <div class="input-field col s12" style="margin-top: 7px;">
                                        <!-- <i class="material-icons prefix">account_circle</i> -->
                                        <input id="icon_prefix" type="text" class="validate" name="nama" value="<?php echo $kolom['nama']; ?>">
                                        <label for="icon_prefix">Nama</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <!-- <i class="material-icons prefix">email</i> -->
                                        <input id="icon_prefix" type="email" class="validate" name="username" value="<?php echo $kolom['username']; ?>">
                                        <label for="icon_prefix">Email Address</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12" style="margin-top: 5px;margin-bottom: 2px;">
                                        <!-- <i class="material-icons prefix">key</i> -->
                                        <input id="icon_telephone" type="password" class="validate" name="password" value="<?php echo $kolom['password']; ?>">
                                        <label for="icon_telephone">Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <!-- <i class="material-icons prefix">confirmation_number</i> -->
                                        <input id="icon_prefix" type="number" class="validate" name="nis" value="<?php echo $kolom['nis']; ?>">
                                        <label for="icon_prefix">NIS</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <!-- <i class="material-icons prefix">phone</i> -->
                                        <input id="icon_prefix" type="number" class="validate" name="telp_ortu" value="<?php echo $kolom['telp_ortu']; ?>">
                                        <label for="icon_prefix">No. Telepon Orang Tua</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <!-- <i class="material-icons prefix">class</i> -->
                                        <input id="icon_prefix" type="text" class="validate" name="kelas" value="<?php echo $kolom['kelas']; ?>">
                                        <label for="icon_prefix">Kelas</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <!-- <i class="material-icons prefix">supervisor_account</i> -->
                                        <input id="icon_prefix" type="text" class="validate" name="level" value="<?php echo $kolom['level']; ?>">
                                        <label for="icon_prefix">Level</label>
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
                                        <a href="home_siswa_guru.php" class="waves-effect waves-light btn"><i class="material-icons left">arrow_back</i>Back</a>
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