<?php
require 'functions_tb_pasien.php';

if (isset($_POST["submit"])) {
    if ( tambah($_POST) > 0 ) {
        echo "<script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'tb_pasien.php';
        </script>";
    } else {
        echo "<script>
        alert('data gagal ditambahkan!');
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
    <title>Tambah data</title>
</head>
<body>
    <form action="" method="post"> 
    <ul>
        <li>
            <label for="id_pasien">ID pasien: </label>
            <input type="id_pasien" name="id_pasien" id="id_pasien">
        </li>
        <li>
            <label for="nomor_identitas">Nomor identitas: </label>
            <input type="nomor_identitas" name="nomor_identitas" id="nomor_identitas">
        </li>
        <li>
            <label for="nama_pasien">Nama Pasien: </label>
            <input type="nama_pasien" name="nama_pasien" id="nama_pasien">
        </li>
        <li>
            <label for="jenis_kelamin">Jenis Kelamin (L/P): </label>
            <input type="jenis_kelamin" name="jenis_kelamin" id="jenis_kelamin">
        </li>
        <li>
            <label for="alamat">Alamat: </label>
            <input type="alamat" name="alamat" id="alamat">
        </li>
        <li>
            <label for="no_telp">No. Telp: </label>
            <input type="no_telp" name="no_telp" id="no_telp">
        </li>
        <button type="submit" name="submit">Submit</button>
</body>
</html>