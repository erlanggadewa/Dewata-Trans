<?php
include "function.php";

// * HAPUS DATA DI DATABASE
$tb = $_POST['tb_name'];
$id = $_POST['idTarget'];
$src_page = $_POST['src_page'];

if ($tb == 'data_kendaraan') {
    mysqli_query($conn, "DELETE FROM $tb WHERE nomor_polisi='$id'");
    if (mysqli_affected_rows($conn) >= 1)
        header("Location: ../view/$src_page");
    else echo "<script>
                    alert('Data Gagal Dihapus');
                    location.href = '../view/$src_page';
                </script>";
}