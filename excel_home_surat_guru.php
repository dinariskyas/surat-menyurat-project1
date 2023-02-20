<?php
// fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");

// membuat nama file ekspor "export-to-excel.xls"
header("Content-Disposition: attachment; filename=data-surat.xls");
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Guru</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>

<body>
    <table border="2">
        <tr bgcolor="#e5e5e5">
            <th>No</th>
            <th>Keterangan</th>
            <th>Alamat</th>
            <th>Keterangan</th>
            <th>Status</th>
        </tr>

        <?php
        $SQL = "SELECT * FROM surat";
        $query = mysqli_query($koneksi, $SQL);
        $No = 1;
        while ($kolom = mysqli_fetch_array($query)) { ?>
            <tr>
                <td><?php echo $No++; ?></td>
                <td><?php echo $kolom["tanggal_sakit"] ?></td>
                <td><?php echo $kolom["alamat"] ?></td>
                <td><?php echo $kolom["keterangan"] ?></td>
                <td><?php echo $kolom["status"] ?></td>
            </tr>
        <?php } ?>
    </table>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>