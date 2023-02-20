<?php

// Koneksi
include 'koneksi.php';

//mengaktifkan session
session_start();

// Ambil variabel
$username   = $_POST['username'];
$password   = $_POST['password'];

// Penulisan SQL (telah diuji di phpmyadmin)
$SQL = "SELECT * FROM user WHERE username = '$username' and password ='$password'";

// Eksekusi SQL query dengan fungsi PHP
$query = mysqli_query($koneksi, $SQL);

//menghitung jumlah data
$cek = mysqli_num_rows($query);

if ($cek > 0) {

    $data = mysqli_fetch_assoc($query);
    //jika user adalah siswa
    if ($data['level'] == 'siswa') {
        //buat session username dan levelnya
        $_SESSION['username'] = $username;
        $_SESSION['level'] = 'siswa';
        //arahkan user admin ke halaman admin
        header('location:home_surat.php');

        //jika user adalah ketua
    } elseif ($data['level'] == 'guru') {
        //buat session username dan levelnya
        $_SESSION['username'] = $username;
        $_SESSION['level'] = 'guru';
        //arahkan user ketua ke halaman ketua
        header('location:index_guru.php');
    } else {
        //jika user tidak ditemukan
        echo "Maaf akun tidak ditemukan";
        header('location:login.php');
    }
} else {
    echo "Maaf akun tidak ditemukan";
    header('location:login.php');
}

// $var_email      = "";
// $var_password   = "";

// while ($kolom = mysqli_fetch_array($query)) {
//     $var_email      = $kolom['email'];
//     $var_password   = $kolom['password'];
// }

// if ($var_email == $email) {
//     if ($var_password == $password) {
//         // echo "Login Berhasil";
//         header('Location: home.php');
//         die();
//     } else {
//         // echo "Password Salah";
//         header('Location: login.php');
//         die();
//     }
// } else {
//     echo "Akun tidak ditemukan";
// }
