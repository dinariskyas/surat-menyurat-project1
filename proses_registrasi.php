<?php

include 'koneksi.php';

$nama       = $_POST['nama'];
$username   = $_POST['username'];
$password   = $_POST['password'];
$nis        = $_POST['nis'];
$telp_ortu  = $_POST['telp_ortu'];
$kelas      = $_POST['kelas'];
$status     = $_POST['status'];
$level      = $_POST['level'];

$SQL = "INSERT INTO user VALUES ('', '$nama', '$username', '$password', '$nis', '$telp_ortu', '$kelas', '$status', '$level')";
mysqli_query($koneksi, $SQL);

header('Location: login.php');
