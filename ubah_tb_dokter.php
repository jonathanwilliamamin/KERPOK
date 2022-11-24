<?php
require 'functions_tb_dokter.php';
$id = $_GET["id_dokter"];

$tb = query("SELECT * FROM tb_dokter WHERE id_dokter = $id")[0];

if ( isset ($_POST["submit"])) {
    if ( ubah($_POST) > 0 ) {
        echo "<script>
        alert('data berhasil diubah!');
        document.location.href = 'tb_dokter.php';
        </script>";
    } else {
        echo "<script>
        alert('data gagal diubah!');
        document.location.href = 'tb_dokter.php';
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
    <input type="hidden" name="id_dokter" value="<?= $tb["id_dokter"]; ?> ">
        <li>
            <label for="nama_dokter">Nama dokter: </label>
            <input type="nama_dokter" name="nama_dokter" id="nama_dokter" required value="<?= $tb["nama_dokter"]; ?> ">
        </li>
        <li>
            <label for="spesialis">Spesialis: </label>
            <input type="spesialis" name="spesialis" id="spesialis" required value="<?= $tb["spesialis"]; ?>">
        </li>   
        <li>
            <label for="alamat">Alamat: </label>
            <input type="alamat" name="alamat" id="alamat" required value="<?= $tb["alamat"]; ?>">
        </li>
        <li>
            <label for="no_telp">Price: </label>
            <input type="no_telp" name="no_telp" id="no_telp" required value="<?= $tb["no_telp"]; ?>">
        </li>
        <button type="submit" name="submit">Submit</button>
</body>
</html>