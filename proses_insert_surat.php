<?php

include "koneksi.php";

$tanggal_sakit  = $_POST['tanggal_sakit'];
$alamat         = $_POST['alamat'];
$keterangan     = $_POST['keterangan'];
$status         = $_POST['status'];

$SQL = "INSERT INTO surat VALUES ('', '$tanggal_sakit', '$alamat', '$keterangan', '$status')";
mysqli_query($koneksi, $SQL);

header('Location: home_surat.php');
