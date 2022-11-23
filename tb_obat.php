<?php
require "functions.php";

$obat = query("SELECT * FROM tb_obat");

$i = 1;
?>

<!DOCTYPE html>
<head>
    <title>TABEL OBAT</title>
</head>
<body>
<div class="container">
    <h1>Daftar Tabel Obat</h1>
    <a href="tambah.php">Tambah data</a>
    <br></br>

    

    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>ID Obat</th>
            <th>Aksi</th>
            <th>Nama Obat</th>
            <th>Keterangan Obat</th>
        </tr>
        <tr>
            <?php foreach ($obat as $o) { ?>
                <td> <?php echo $i; ?> </td>
                <td> <a href="ubah.php?id_obat=<?= $o["id_obat"] ?>"> ubah </a> | <a href="hapus.php?id_obat=<?= $o["id_obat"] ?>"> hapus </a> </td>
                <td> <?php echo $o["nama_obat"]; ?> </td>
                <td> <?php echo $o["ket_obat"]; ?> </td>
                <?php $i++; ?>  
        </tr>
            <?php } ?> 
        </tr>
    </table>
</div>
</body>
</html>