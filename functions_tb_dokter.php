<?php
$conn = mysqli_connect("localhost", "root", "", "relasitabeltest");

function tambah($data) {
    global $conn;

    $id_dokter = $data["id_dokter"];
    $nama_dokter = $data["nama_dokter"];
    $spesialis = $data["spesialis"];
    $alamat = $data["alamat"];
    $no_telp = $data["no_telp"];

    $query = "INSERT INTO tb_dokter VALUES ('$id_dokter', '$nama_dokter', '$spesialis', '$alamat', '$no_telp');";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

?>