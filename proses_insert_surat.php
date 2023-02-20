<?php

// Koneksi
include "koneksi.php";

// Ambil variabel
$tanggal_sakit  = $_POST['tanggal_sakit'];
$alamat         = $_POST['alamat'];
$keterangan     = $_POST['keterangan'];
$status         = $_POST['status'];

// Penulisan SQL (telah diuji di phpmyadmin)
$SQL = "INSERT INTO surat VALUES ('', '$tanggal_sakit', '$alamat', '$keterangan', '$status')";

// Eksekusi SQL query dengan fungsi PHP
mysqli_query($koneksi, $SQL);

// Header (redirect)
header('Location: home_surat.php');
