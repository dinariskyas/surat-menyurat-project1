<?php

// Koneksi
include "koneksi.php";

// Ambil variabel
$id_user    = $_POST['id_user'];
$nama       = $_POST['nama'];
$username   = $_POST['username'];
$password   = $_POST['password'];
$nis        = $_POST['nis'];
$telp_ortu  = $_POST['telp_ortu'];
$kelas      = $_POST['kelas'];
$status     = $_POST['status'];
$level      = $_POST['level'];

// Penulisan SQL (telah diuji di phpmyadmin)
$SQL = "UPDATE user SET nama = '$nama', username = '$username', password = '$password', nis = '$nis', telp_ortu = '$telp_ortu', kelas = '$kelas' , status = '$status' 
, level = '$level' WHERE id_user = $id_user";

// Eksekusi SQL query dengan fungsi PHP
mysqli_query($koneksi, $SQL);

// Header (redirect)
header('location: home_siswa_guru.php');
die();
