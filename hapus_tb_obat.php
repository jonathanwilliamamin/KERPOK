<?php
require 'functions_tb_obat.php';

$id = $_GET["id"];

if (hapus($id)>0) {
    echo "
    <script>
    alert('berhasil dihapus');
    document.location.href='tb_obat.php';
    </script>";
} else {
    echo "
    <script>
    alert('gagal dihapus');
    document.location.href='tb_obat.php');
    </script>";
}

?>