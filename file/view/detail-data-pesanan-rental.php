<?php
include "../_partials/head.php";

$detail_Id = $_GET['detail_Id'];
$data = fetchData(
  "SELECT * FROM rental LEFT JOIN customer ON customer.id_customer = rental.id_customer WHERE rental.id_customer = $detail_Id AND customer.id_customer = $detail_Id"
);
?>

<link rel="stylesheet" href="../../css/detail-data-kendaraan.css">

<h1>Detail Data Pesanan Rental</h1>
<div class="container">
  <hr>
</div>
<div class="container-fluid wrapper-all">
  <div class="row">
    <div class="wrapper-header g-0">
      <h4 class="container-fluid header">Detail Pesanan</h4>
      <div class="row">
        <div class="col-12 col-md-4 g-6">
          <img src="<?= $data[0]['gambar_customer'] ?>" alt="" width="100%">
        </div>
        <div class="col-12 col-md-8 wrapper-data">
          <pre><span>
Nama Penyewa      :	<?= $data[0]['nama_penyewa'] ?>

No HP			  :	<?= $data[0]['no_hp_supir'] ?>

Jenis Kelamin 	  :	<?= $data[0]['jenis_kelamin'] ?>

Alamat Penyewa	  :	<?= $data[0]['alamat'] ?>

Tanggal Sewa          :     <?= $data[0]['tanggal_sewa'] ?>

Tanggal Kembali     :     <?= $data[0]['tanggal_kembali'] ?>

Kota Asal                 :      <?= $data[0]['kota_asal'] ?>

Kota Tujuan             :     <?= $data[0]['kota_tujuan'] ?>

Mobil                       :     <?= $data[0]['nama_mobil'] ?>

Nama Supir             :     <?= $data[0]['nama_supir'] ?>

No HP Supir            :     <?= $data[0]['no_hp_supir'] ?>

Harga                       :     <?= $data[0]['total_harga_rental'] ?></span></pre>
        </div>
        <div class="wrapper-button g-6">

          <form action="edit-data-pesanan-rental.php" method="post" style="display: inline-block;">
            <input type="text" class="d-none" value="rental" name="tb_name">
            <input type="text" class="d-none" value="input-rental-mobil.php" name="src_page">
            <button type="" class="button button-primary" name="idTarget" value="<?= $data[0]['id_customer'] ?>">Ubah</button>
          </form>

          <form action="invoice-rental.php" method="post" style="display: inline-block;">
            <input type="text" class="d-none" value="rental" name="tb_name">
            <button type="" class="button button-green" name="idTarget" value="<?= $data[0]['id_customer'] ?>">Cetak</button>
          </form>

          <form action="../config/hapus.php" method="post" style="display: inline-block;">
            <input type="text" class="d-none" value="rental" name="tb_name">
            <input type="text" class="d-none" value="data-pesanan-rental.php" name="src_page">
            <button name="idTarget" type="submit" value="<?= $data[0]['id_customer'] ?>" class=" button button-red" onclick="return confirm('YAKIN HAPUS ?');">Hapus</button>
          </form>

          <button type="" class=" button button-grey" onclick="location.href='data-pesanan-rental.php'">Kembali</button>
        </div>
      </div>
    </div>
  </div>

  <?php include "../_partials/foot.php"; ?>