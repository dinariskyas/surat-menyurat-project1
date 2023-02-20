<?php

include "koneksi.php";

$id_surat = $_GET['id_surat'];

$SQL = "DELETE FROM surat WHERE id_surat = $id_surat";
mysqli_query($koneksi, $SQL);

header('location: home_surat.php');
