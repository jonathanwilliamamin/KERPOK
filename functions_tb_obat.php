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

    $id_obat = $data["id_obat"];
    $nama_obat = $data["nama_obat"];
    $ket_obat = $data["ket_obat"];

    $query = "INSERT INTO tb_obat VALUES ('$id_obat', '$nama_obat', '$ket_obat');";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id_obat = $data["id_obat"];
    $nama_obat = $data["nama_obat"];
    $ket_obat = $data["ket_obat"];

    $query = "UPDATE tb_obat SET
    id_obat = '$id_obat',
    nama_obat = '$nama_obat',
    ket_obat = '$ket_obat'
    WHERE id_obat = $id_obat";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_obat WHERE id_obat = $id");
    return mysqli_affected_rows($conn);
}
?>