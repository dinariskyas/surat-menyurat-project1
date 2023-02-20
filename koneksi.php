<?php

// pendeklarasian database
$nama_server    = "localhost";
$username       = "root";
$password       = "";
$database       = "surat_menyurat";

try {
    $koneksi = mysqli_connect($nama_server, $username, $password, $database);
} catch (Exception $e) {
    echo "Database gagal dikoneksikan karena";
    // echo $e;
    die();
}
