<?php

// koneksi
include "koneksi.php";

// Ambil variabel
$id_surat = $_GET['id_surat'];

// Penulisan SQL (telah diuji di phpmyadmin)
$SQL = "DELETE FROM surat WHERE id_surat = $id_surat";

// Eksekusi SQL query dengan fungsi PHP
$result = mysqli_query($koneksi, $SQL);

// Header (redirect)
header('location: home_surat.php');
