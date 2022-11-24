<?php
$conn = mysqli_connect("localhost", "root", "", "relasitabeltest");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
     
    while ($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

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

function ubah($data) {
    global $conn;

    $id_dokter = $data["id_dokter"];
    $nama_dokter = $data["nama_dokter"];
    $spesialis = $data["spesialis"];
    $alamat = $data["alamat"];
    $no_telp = $data["no_telp"];

    $query = "UPDATE tb_dokter SET
    id_dokter = '$id_dokter',
    nama_dokter = '$nama_dokter',
    spesialis = '$spesialis',
    alamat = '$alamat',
    no_telp = '$no_telp'
    WHERE id_dokter = $id_dokter";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_dokter WHERE id_dokter = $id");
    return mysqli_affected_rows($conn);
}
?>