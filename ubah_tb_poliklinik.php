<?php
require 'functions_tb_poliklinik.php';
$id = $_GET["id_poli"];

$tb = query("SELECT * FROM tb_poliklinik WHERE id_poli = $id")[0];

if ( isset ($_POST["submit"])) {
    if ( ubah($_POST) > 0 ) {
        echo "<script>
        alert('data berhasil diubah!');
        document.location.href = 'tb_poliklinik.php';
        </script>";
    } else {
        echo "<script>
        alert('data gagal diubah!');
        document.location.href = 'tb_poliklinik.php';
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
    <input type="hidden" name="id_poli" value="<?= $tb["id_poli"]; ?> ">
        <li>
            <label for="nama_poli">Nama poli: </label>
            <input type="nama_poli" name="nama_poli" id="nama_poli" required value="<?= $tb["nama_poli"]; ?> ">
        </li>
        <li>
            <label for="gedung">Gedung: </label>
            <input type="gedung" name="gedung" id="gedung" required value="<?= $tb["gedung"]; ?>">
        </li>  
        <button type="submit" name="submit">Submit</button>
</body>
</html>