<?php
$data1 = fetchData("SELECT
nomor_polisi,
nama_mobil,
nama_penyewa,
tanggal_sewa,
tanggal_kembali
FROM customer
RIGHT JOIN rental ON customer.id_customer = rental.id_customer WHERE tanggal_sewa <= NOW() AND NOW() <= tanggal_kembali");

$data2 = fetchData("SELECT nomor_polisi,
nama_mobil,
nama_penyewa,
tanggal_sewa,
tanggal_kembali
FROM customer
RIGHT JOIN order_wisata ON customer.id_customer = order_wisata.id_customer WHERE tanggal_sewa <= NOW() AND NOW() <= tanggal_kembali");

$data_mulai_ongoing = array_merge($data1, $data2);

// ! Function sorting date desscending
usort($data_mulai_ongoing, function ($a, $b) {
    return $b['tanggal_sewa'] <=> $a['tanggal_sewa'];
});

// ! Set status 0 (sedang terpakai)
for ($i = 0; $i < count($data_mulai_ongoing); $i++) {
    $nomor_polisi = $data_mulai_ongoing[$i]['nomor_polisi'];
    mysqli_query($conn, "UPDATE data_kendaraan SET status=0 WHERE data_kendaraan.nomor_polisi = '$nomor_polisi'");
}

$data3 = fetchData("SELECT
nomor_polisi,
nama_mobil,
nama_penyewa,
tanggal_sewa,
tanggal_kembali
FROM customer
RIGHT JOIN rental ON customer.id_customer = rental.id_customer WHERE NOW() > tanggal_kembali");

$data4 = fetchData("SELECT nomor_polisi,
nama_mobil,
nama_penyewa,
tanggal_sewa,
tanggal_kembali
FROM customer
RIGHT JOIN order_wisata ON customer.id_customer = order_wisata.id_customer WHERE  NOW() > tanggal_kembali");

$data_selesai_ongoing = array_merge($data3, $data4);
// ! Set status 1 (sudah selesai)
for ($i = 0; $i < count($data_selesai_ongoing); $i++) {
    $nomor_polisi = $data_selesai_ongoing[$i]['nomor_polisi'];
    mysqli_query($conn, "UPDATE data_kendaraan SET status=1 WHERE data_kendaraan.nomor_polisi = '$nomor_polisi'");
}
