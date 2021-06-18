<?php
include "../_partials/head.php";
$detail_Id = $_GET['detail_Id'];
$data = fetchData("SELECT * FROM data_kendaraan WHERE nomor_polisi = '$detail_Id'");
?>

<link rel="stylesheet" href="../../css/detail-data-kendaraan.css">

<h1>Detail Data Kendaraan</h1>
<div class="container">
	<hr>
</div>
<div class="container-fluid wrapper-all">
	<div class="row">
		<div class="wrapper-header g-0">
			<h4 class="container-fluid header">Detail Kendaraan</h4>
			<div class="row">
				<div class="col-12 col-md-4 g-6">
					<img src="<?= $data[0]['gambar_mobil'] ?>" alt="" width="100%">
				</div>
				<div class="col-12 col-md-8 wrapper-data">
					<pre><span>
Nama			:	<?= $data[0]['nama_mobil'] ?> 
Merk			:	<?= $data[0]['merek_mobil'] ?> 
Nomor Polisi 	:	<?= $data[0]['nomor_polisi'] ?> 
Jumlah Kursi	 	:	<?= $data[0]['jumlah_kursi'] ?> 
Warna Mobil	 	:	<?= $data[0]['warna_mobil'] ?> 
Tahun Beli		:	<?= $data[0]['tahun_beli'] ?></span></pre>
				</div>
				<div class="wrapper-button g-6">
					<form action="edit-data-kendaraan.php" method="post" style="display: inline-block;">
						<input type="text" class="d-none" value="data_kendaraan" name="tb_name">
						<input type="text" class="d-none" value="data-kendaraan.php" name="src_page">
						<button type="" class="button button-primary" name="nomor_polisi" value="<?= $data[0]['nomor_polisi'] ?>">Ubah</button>
					</form>
					<form action="../config/hapus.php" method="post" style="display: inline-block;">
						<input type="text" class="d-none" value="data_kendaraan" name="tb_name">
						<input type="text" class="d-none" value="data-kendaraan.php" name="src_page">
						<button name="idTarget" type="submit" value="<?= $data[0]['nomor_polisi'] ?>" class=" button button-red" onclick="return confirm('YAKIN HAPUS ?');">Hapus</button>
					</form>
					<button type="" class=" button button-grey" onclick="location.href='data-kendaraan.php'">Kembali</button>
				</div>
			</div>
		</div>
	</div>

	<?php include "../_partials/foot.php"; ?>