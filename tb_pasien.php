<?php
require "functions.php";

$pasien = query("SELECT * FROM tb_pasien");

$i = 1;
?>

<!DOCTYPE html>
<head>
    <title>TABEL PASIEN</title>
</head>
<body>
<div class="container">
    <h1>Daftar Tabel Pasien</h1>
    <a href="tambah_tb_pasien.php">Tambah data</a>
    <br></br>

    

    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>ID Pasien</th>
            <th>Aksi</th>
            <th>Nomor Identitas</th>
            <th>Nama Pasien</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No Telp</th>
        </tr>
        <tr>
            <?php foreach ($pasien as $p) { ?>
                <td> <?php echo $i; ?> </td>
                <td> <a href="ubah.php?id_pasien=<?= $p["id_pasien"] ?>"> ubah </a> | <a href="hapus.php?id_pasien=<?= $p["id_pasien"] ?>"> hapus </a> </td>
                <td> <?php echo $p["nomor_identitas"]; ?> </td>
                <td> <?php echo $p["nama_pasien"]; ?> </td>
                <td> <?php echo $p["jenis_kelamin"]; ?> </td>
                <td> <?php echo $p["alamat"]; ?> </td>
                <td> <?php echo $p["no_telp"]; ?> </td>
                <?php $i++; ?>  
        </tr>
            <?php } ?> 
        </tr>
    </table>
</div>
</body>
</html>