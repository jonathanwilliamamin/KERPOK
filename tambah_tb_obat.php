<?php
require 'functions_tb_obat.php';

if (isset($_POST["submit"])) {
    if ( tambah($_POST) > 0 ) {
        echo "<script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'tb_obat.php';
        </script>";
    } else {
        echo "<script>
        alert('data gagal ditambahkan!');
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
    <title>Tambah data</title>
</head>
<body>
    <form action="" method="post"> 
    <ul>
        <li>
            <label for="nama_obat">Nama obat: </label>
            <input type="nama_obat" name="nama_obat" id="nama_obat">
        </li>
        <li>
            <label for="ket_obat">Keterangan obat: </label>
            <input type="ket_obat" name="ket_obat" id="ket_obat">
        </li>
        <button type="submit" name="submit">Submit</button>
</body>
</html>