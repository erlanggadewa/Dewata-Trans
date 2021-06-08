<?php
// * Set semua ke 1
mysqli_query($conn, "UPDATE data_kendaraan SET status=1");

$data1 = fetchData("SELECT
nomor_polisi,
nama_mobil,
nama_penyewa,
tanggal_sewa,
tanggal_kembali
FROM customer
RIGHT JOIN rental ON customer.id_customer = rental.id_customer WHERE tanggal_sewa > NOW() AND NOW() < tanggal_kembali");

$data2 = fetchData("SELECT nomor_polisi,
nama_mobil,
nama_penyewa,
tanggal_sewa,
tanggal_kembali
FROM customer
RIGHT JOIN order_wisata ON customer.id_customer = order_wisata.id_customer WHERE tanggal_sewa > NOW() AND NOW() < tanggal_kembali");

$data_pending = array_merge($data1, $data2);
// ! Set status 1 (sudah selesai)
for ($i = 0; $i < count($data_pending); $i++) {
  $nomor_polisi = $data_pending[$i]['nomor_polisi'];
  mysqli_query($conn, "UPDATE data_kendaraan SET status=1 WHERE data_kendaraan.nomor_polisi = '$nomor_polisi'");
}
