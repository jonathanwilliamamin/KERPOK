<?php
require 'functions_tb_dokter.php';

$id = $_GET["id"];

if (hapus($id)>0) {
    echo "
    <script>
    alert('berhasil dihapus');
    document.location.href='tb_dokter.php';
    </script>";
} else {
    echo "
    <script>
    alert('gagal dihapus');
    document.location.href='tb_dokter.php');
    </script>";
}

?>