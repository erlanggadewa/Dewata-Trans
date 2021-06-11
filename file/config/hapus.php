<?php
include "function.php";
cekLogin();

// * HAPUS DATA DI DATABASE
$tb = $_POST['tb_name'];
$id = $_POST['idTarget'];
$src_page = $_POST['src_page'];


if ($tb == 'data_kendaraan') {
    mysqli_query($conn, "DELETE FROM $tb WHERE nomor_polisi='$id'");
    if (mysqli_affected_rows($conn) >= 1)
        echo "<script>
            alert('Data Berhasil Dihapus');
            location.href = '../view/$src_page';
        </script>";
    else echo "<script>
                    alert('Data Gagal Dihapus');
                    location.href = '../view/$src_page';
                </script>";
} else if ($tb == 'paket_wisata') {
    mysqli_query($conn, "DELETE FROM $tb WHERE id_paket=$id");
    if (mysqli_affected_rows($conn) >= 1)
        echo "<script>
            alert('Data Berhasil Dihapus');
            location.href = '../view/$src_page';
        </script>";
    else echo "<script>
                    alert('Data Gagal Dihapus');
                    location.href = '../view/$src_page';
                </script>";
} else if ($tb == 'rental' || $tb == 'order_wisata') {
    mysqli_query($conn, "DELETE FROM customer WHERE id_customer=$id");
    if (mysqli_affected_rows($conn) >= 1)
        echo "<script>
                alert('Data Berhasil Dihapus');
                location.href = '../view/$src_page';
            </script>";
    else echo "<script>
                    alert('Data Gagal Dihapus');
                    location.href = '../view/$src_page';
                </script>";
}
