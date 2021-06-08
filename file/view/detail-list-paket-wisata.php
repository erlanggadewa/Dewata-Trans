<?php
include "../_partials/head.php";

$detail_Id = $_GET['detail_Id'];
$data = fetchData("SELECT * FROM paket_wisata WHERE id_paket = '$detail_Id'");
?>

<link rel="stylesheet" href="../../css/detail-data-kendaraan.css">

<h1>Detail List Paket Wisata</h1>
<div class="container">
  <hr>
</div>
<div class="container-fluid wrapper-all">
  <div class="row">
    <div class="wrapper-header g-0">
      <h4 class="container-fluid header">Detail Kendaraan</h4>
      <div class="row">
        <div class="col-12 wrapper-data" style="margin-left:4vw;">
          <pre><span>
Nama Paket  : <?= $data[0]['nama_paket'] ?>

Tujuan           : <?= $data[0]['tujuan'] ?>

Fasilitas         :	
<?= $data[0]['fasilitas'] ?> </span></pre>
        </div>
        <div class="wrapper-button g-6">
          <form action="edit-list-paket-wisata.php" method="post" style="display: inline-block;">
            <button type="" class="button button-primary" name="idTarget" value="<?= $detail_Id ?>">Ubah</button>
          </form>
          <form action="../config/hapus.php" method="post" style="display: inline-block;">
            <input type="hidden" class="d-none" value="paket_wisata" name="tb_name">
            <input type="hidden" class="d-none" value="list-paket-wisata.php" name="src_page">
            <button name="idTarget" type="submit" value="<?= $detail_Id ?>" class=" button button-red" onclick="return confirm('YAKIN HAPUS ?');">Hapus</button>
          </form>
          <button type="" class=" button button-grey" onclick="location.href='list-paket-wisata.php'">Kembali</button>
        </div>
      </div>
    </div>
  </div>

  <?php include "../_partials/foot.php"; ?>