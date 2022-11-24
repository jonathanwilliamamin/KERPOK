<?php
require 'functions_tb_obat.php';
$id = $_GET["id_obat"];

$tb = query("SELECT * FROM tb_obat WHERE id_obat = $id")[0];

if ( isset ($_POST["submit"])) {
    if ( ubah($_POST) > 0 ) {
        echo "<script>
        alert('data berhasil diubah!');
        document.location.href = 'tb_obat.php';
        </script>";
    } else {
        echo "<script>
        alert('data gagal diubah!');
        document.location.href = 'tb_obat.php';
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
    <input type="hidden" name="id_obat" value="<?= $tb["id_obat"]; ?> ">
        <li>
            <label for="nama_obat">Nama dokter: </label>
            <input type="nama_obat" name="nama_obat" id="nama_obat" required value="<?= $tb["nama_obat"]; ?> ">
        </li>
        <li>
            <label for="ket_obat">Keterangan obat: </label>
            <input type="ket_obat" name="ket_obat" id="ket_obat" required value="<?= $tb["ket_obat"]; ?>">
        </li>   
        <button type="submit" name="submit">Submit</button>
</body>
</html>