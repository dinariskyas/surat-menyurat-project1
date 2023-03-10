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

    $SQL = "SELECT * FROM surat";
    $query = mysqli_query($koneksi, $SQL);

    ?>

    <!-- navbar -->
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
    <!-- end navbar -->

    <!-- content -->
    <div class="container">
        <div class="row" style="margin-top: 24px;">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">
                            <h4>Data Surat</h4>
                        </span>
                        <hr>
                        <br>
                        <a href="view_insert_surat.php" type="button" class="btn waves-effect waves-light" type="submit" name="action" style="background-color: blue;">Tambah
                            <i class="material-icons left">add</i>
                        </a>

                        <table class="highlight">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Surat</th>
                                    <th>Alamat</th>
                                    <th>Keterangan</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $No = 1;
                                while ($kolom = mysqli_fetch_array($query)) { ?>
                                    <tr>
                                        <td><?php echo $No++; ?></td>
                                        <td><?php echo $kolom["tanggal_sakit"] ?></td>
                                        <td><?php echo $kolom["alamat"] ?></td>
                                        <td><?php echo $kolom["keterangan"] ?></td>
                                        <td>
                                            <a href="view_update_surat.php?id_surat=<?php echo $kolom["id_surat"] ?>" type="button" class="btn waves-effect waves-light" type="submit" name="action">Update
                                                <i class="material-icons left">edit</i>
                                            </a>
                                            <a href="proses_hapus_surat.php?id_surat=<?php echo $kolom["id_surat"] ?>" type="button" class="btn waves-effect waves-light" type="submit" name="action" style="background-color: red;">Hapus
                                                <i class="material-icons left">delete</i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end content -->

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>