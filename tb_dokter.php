<?php
require "functions.php";

$dokter = query("SELECT * FROM tb_dokter");

$i = 1;
?>

<!DOCTYPE html>
<head>
    <title>TABEL DOKTER</title>
</head>
<body>
<div class="container">
    <h1>Daftar Tabel Dokter</h1>
    <a href="tambah.php">Tambah data</a>
    <br></br>

    

    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>ID Dokter</th>
            <th>Aksi</th>
            <th>Nama Dokter</th>
            <th>Spesialis</th>
            <th>Alamat</th>
            <th>No Telp</th>
        </tr>
        <tr>
            <?php foreach ($dokter as $d) { ?>
                <td> <?php echo $i; ?> </td>
                <td> <a href="ubah.php?id_dokter=<?= $d["id_dokter"] ?>"> ubah </a> | <a href="hapus.php?id=<?= $d["id_dokter"] ?>"> hapus </a> </td>
                <td> <?php echo $d["nama_dokter"]; ?> </td>
                <td> <?php echo $d["spesialis"]; ?> </td>
                <td> <?php echo $d["alamat"]; ?> </td>
                <td> <?php echo $d["no_telp"]; ?> </td>
                <?php $i++; ?>  
        </tr>
            <?php } ?> 
        </tr>
    </table>
</div>
</body>
</html>