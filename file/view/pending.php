<?php
include "../_partials/head.php";

$data1 = fetchData("SELECT nama_mobil,
nama_penyewa,
tanggal_sewa,
tanggal_kembali
FROM customer
RIGHT JOIN rental ON customer.id_customer = rental.id_customer WHERE tanggal_sewa > NOW();");

$data2 = fetchData("SELECT nama_mobil,
nama_penyewa,
tanggal_sewa,
tanggal_kembali
FROM customer
RIGHT JOIN order_wisata ON customer.id_customer = order_wisata.id_customer WHERE tanggal_sewa > NOW();");


$data = array_merge($data1, $data2);

usort($data, function ($a, $b) {
  return $b['tanggal_sewa'] <=> $a['tanggal_sewa'];
});
?>


<link rel="stylesheet" href="../../css/pending.css">

<h1>Data Kendaraan Pending</h1>
<hr>
<div class="container-fluid">
  <div class="row wrapper-table" style="overflow-x:auto;">
    <?php if ($data) : ?>
      <table class="styled-table col-12">
        <thead>
          <tr>
            <th>No.</th>
            <th>kendaraan</th>
            <th>Nama Pemesan</th>
            <th>Tanggal Berangkat</th>
            <th>Tanggal Kembali</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $nomor = 1; ?>
          <?php foreach ($data as $row) : ?>
            <tr>
              <td><?= $nomor++ ?></td>
              <td><?= $row['nama_mobil'] ?></td>
              <td><?= $row['nama_penyewa'] ?></td>
              <td><?= $row['tanggal_sewa'] ?></td>
              <td><?= $row['tanggal_kembali'] ?></td>
              <td><i class="fas fa-eye"></i></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else : ?>
      <h1 style="text-align: center; margin: 50px 0">Data Kosong</h1>
    <?php endif; ?>
  </div>
</div>

<?php include "../_partials/foot.php"; ?>