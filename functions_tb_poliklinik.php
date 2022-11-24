<?php
$conn = mysqli_connect("localhost", "root", "", "relasitabeltest");

function tambah($data) {
    global $conn;

    $id_poli = $data["id_poli"];
    $nama_poli = $data["nama_poli"];
    $gedung = $data["gedung"];


    $query = "INSERT INTO tb_poliklinik VALUES ('', '$nama_poli', '$gedung');";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>