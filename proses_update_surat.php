<?php

// Koneksi
include "koneksi.php";

// Ambil variabel
$id_surat       = $_POST['id_surat'];
$tanggal_sakit  = $_POST['tanggal_sakit'];
$alamat         = $_POST['alamat'];
$keterangan     = $_POST['keterangan'];

// Penulisan SQL (telah diuji di phpmyadmin)
$SQL = "UPDATE surat SET tanggal_sakit = '$tanggal_sakit', alamat = '$alamat', keterangan = '$keterangan' WHERE id_surat = $id_surat";

// Eksekusi SQL query dengan fungsi PHP
mysqli_query($koneksi, $SQL);

// Header (redirect)
header('location: home_surat.php');
die();
