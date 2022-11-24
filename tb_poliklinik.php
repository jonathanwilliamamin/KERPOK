<?php
require "functions.php";

$poliklinik = query("SELECT * FROM tb_poliklinik");

$i = 1;
?>

<!DOCTYPE html>
<head>
    <title>TABEL POLIKLINIK</title>
</head>
<body>
<div class="container">
    <h1>Daftar Tabel Poliklinik</h1>
    <a href="tambah_tb_poliklinik.php">Tambah data</a>
    <br></br>

    

    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>ID Poli</th>
            <th>Aksi</th>
            <th>Nama Poli</th>
            <th>Gedung</th>
        </tr>
        <tr>
            <?php foreach ($poliklinik as $p) { ?>
                <td> <?php echo $i; ?> </td>
                <td> <a href="ubah.php?id_poli=<?= $p["id_poli"] ?>"> ubah </a> | <a href="hapus.php?id_poli=<?= $p["id_poli"] ?>"> hapus </a> </td>
                <td> <?php echo $p["nama_poli"]; ?> </td>
                <td> <?php echo $p["gedung"]; ?> </td>
                <?php $i++; ?>  
        </tr>
            <?php } ?> 
        </tr>
    </table>
</div>
</body>
</html>