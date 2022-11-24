<?php
require 'functions_tb_pasien.php';
$id = $_GET["id_pasien"];

$tb = query("SELECT * FROM tb_pasien WHERE id_pasien = $id")[0];

if ( isset ($_POST["submit"])) {
    if ( ubah($_POST) > 0 ) {
        echo "<script>
        alert('data berhasil diubah!');
        document.location.href = 'tb_pasien.php';
        </script>";
    } else {
        echo "<script>
        alert('data gagal diubah!');
        document.location.href = 'tb_pasien.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data</title>
</head>
<body>
    <h1> ubah data</h1>

    <form action="" method="post"> 
    <ul>
    <input type="hidden" name="id_pasien" value="<?= $tb["id_pasien"]; ?> ">
        <li>
            <label for="nomor_identitas">Nomor identitas: </label>
            <input type="nomor_identitas" name="nomor_identitas" id="nomor_identitas" required value="<?= $tb["nomor_identitas"]; ?> ">
        </li>
        <li>
            <label for="nama_pasien">Nama pasien: </label>
            <input type="nama_pasien" name="nama_pasien" id="nama_pasien" required value="<?= $tb["nama_pasien"]; ?>">
        </li>  
        <li>
            <label for="jenis_kelamin">Jenis kelamin: </label>
            <input type="jenis_kelamin" name="jenis_kelamin" id="jenis_kelamin" required value="<?= $tb["jenis_kelamin"]; ?>">
        </li> 
        <li>
            <label for="alamat">Alamat: </label>
            <input type="alamat" name="alamat" id="alamat" required value="<?= $tb["alamat"]; ?>">
        </li>
        <li>
            <label for="no_telp">No telp: </label>
            <input type="no_telp" name="no_telp" id="no_telp" required value="<?= $tb["no_telp"]; ?>">
        </li>
        <button type="submit" name="submit">Submit</button>
</body>
</html>