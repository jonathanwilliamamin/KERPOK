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

    $id_poli = $data["id_poli"];
    $nama_poli = $data["nama_poli"];
    $gedung = $data["gedung"];


    $query = "INSERT INTO tb_poliklinik VALUES ('$id_poli', '$nama_poli', '$gedung');";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id_poli = $data["id_poli"];
    $nama_poli = $data["nama_poli"];
    $gedung = $data["gedung"];

    $query = "UPDATE tb_poliklinik SET
    id_poli = '$id_poli',
    nama_poli = '$nama_poli',
    gedung = '$gedung'
    WHERE id_poli = $id_poli";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_poliklinik WHERE id_poli = $id");
    return mysqli_affected_rows($conn);
}
?>