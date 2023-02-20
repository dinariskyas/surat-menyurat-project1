<?php

// Koneksi
include 'koneksi.php';

// Ambil variabel
$nama       = $_POST['nama'];
$username   = $_POST['username'];
$password   = $_POST['password'];
$nis        = $_POST['nis'];
$telp_ortu  = $_POST['telp_ortu'];
$kelas      = $_POST['kelas'];
$status     = $_POST['status'];
$level      = $_POST['level'];

// Penulisan SQL (telah diuji di phpmyadmin)

$SQL = "INSERT INTO user VALUES ('', '$nama', '$username', '$password', '$nis', '$telp_ortu', '$kelas', '$status', '$level')";

// Eksekusi SQL query dengan fungsi PHP
mysqli_query($koneksi, $SQL);

// Header (redirect)
header('Location: login.php');
