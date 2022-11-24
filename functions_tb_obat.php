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
?>