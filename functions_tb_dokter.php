<?php
$conn = mysqli_connect("localhost", "root", "", "relasitabeltest");

function tambah($data) {
    global $conn;

    $nama_dokter = $data["nama_dokter"];
    $spesialis = $data["spesialis"];
    $alamat = $data["alamat"];
    $no_telp = $data["no_telp"];

    $query = "INSERT INTO tb_dokter VALUES ('', '$nama_dokter', '$spesialis', '$alamat', '$no_telp');";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>