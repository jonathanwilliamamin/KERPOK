<?php
require 'functions_tb_dokter.php';

if (isset($_POST["submit"])) {
    if ( tambah($_POST) > 0 ) {
        echo "<script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'tb_dokter.php';
        </script>";
    } else {
        echo "<script>
        alert('data gagal ditambahkan!');
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
    <title>Tambah data</title>
</head>
<body>
    <form action="" method="post"> 
    <ul>
        <li>
            <label for="nama_dokter">Nama dokter: </label>
            <input type="nama_dokter" name="nama_dokter" id="nama_dokter">
        </li>
        <li>
            <label for="spesialis">Spesialis: </label>
            <input type="spesialis" name="spesialis" id="spesialis">
        </li>
        <li>
            <label for="alamat">Alamat: </label>
            <input type="alamat" name="alamat" id="alamat">
        </li>   
        <li>
            <label for="no_telp">No telp: </label>
            <input type="no_telp" name="no_telp" id="no_telp">
        </li>
        <button type="submit" name="submit">Submit</button>
</body>
</html>