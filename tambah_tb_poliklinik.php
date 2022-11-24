<?php
require 'functions_tb_poliklinik.php';

if (isset($_POST["submit"])) {
    if ( tambah($_POST) > 0 ) {
        echo "<script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'tb_poliklinik.php';
        </script>";
    } else {
        echo "<script>
        alert('data gagal ditambahkan!');
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
    <title>Tambah data</title>
</head>
<body>
    <form action="" method="post"> 
    <ul>
        <li>
            <label for="id_poli">ID poli: </label>
            <input type="id_poli" name="id_poli" id="id_poli">
        </li>
        <li>
            <label for="nama_poli">Nama poli: </label>
            <input type="nama_poli" name="nama_poli" id="nama_poli">
        </li>
        <li>
            <label for="gedung">Gedung: </label>
            <input type="gedung" name="gedung" id="gedung">
        </li>
        <button type="submit" name="submit">Submit</button>
</body>
</html>