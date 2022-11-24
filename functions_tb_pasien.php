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

    $id_pasien = $data["id_pasien"];
    $nomor_identitas = $data["nomor_identitas"];
    $nama_pasien = $data["nama_pasien"];
    $jenis_kelamin = $data["jenis_kelamin"];
    $alamat = $data["alamat"];
    $no_telp = $data["no_telp"];

    $query = "INSERT INTO tb_pasien VALUES ('$id_pasien', '$nomor_identitas', '$nama_pasien', '$jenis_kelamin', '$alamat', '$no_telp');";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id_pasien = $data["id_pasien"];
    $nomor_identitas = $data["nomor_identitas"];
    $nama_pasien = $data["nama_pasien"];
    $jenis_kelamin = $data["jenis_kelamin"];
    $alamat = $data["alamat"];
    $no_telp = $data["no_telp"];

    $query = "UPDATE tb_pasien SET
    id_pasien = '$id_pasien',
    nomor_identitas = '$nomor_identitas',
    nama_pasien = '$nama_pasien',
    jenis_kelamin = '$jenis_kelamin',
    alamat = '$alamat',
    no_telp = '$no_telp'
    WHERE id_pasien = $id_pasien";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_pasien WHERE id_pasien = $id");
    return mysqli_affected_rows($conn);
}
?>