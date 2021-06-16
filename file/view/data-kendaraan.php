<?php
include "../_partials/head.php";
if (isset($_POST['submit'])) {
	if (inputDataKendaraan($_POST))
		echo "<script>
            alert('Data Berhasil Ditambahkan');
            location.href = 'data-kendaraan.php';
        </script>";
}
$data = fetchData("SELECT nomor_polisi, nama_mobil, merek_mobil, status FROM data_kendaraan");



?>

<link rel="stylesheet" href="../../css/data-kendaraan.min.css">

<h1>Data Kendaraan</h1>
<hr>
<div class="container-fluid wrapper-all">
	<div class="row" style="margin-top:10px">
		<div class="input-kendaraan col-lg-5">
			<div class="wrapper-tambah">
				<h4 class="container-fluid header">Tambah Data</h4>
				<form action="" class="" method="post" id="form-data" enctype="multipart/form-data">
					<div class="container g-3">
						<div class="row">
							<div class="col-12 form-group">
								<label for="name-merk">Nama Merk</label>
								<input autocomplete="off" type="text" class="form-control" placeholder="Masukan merek" id="name-merk" name="nama_merek">
							</div>
							<div class="col-12 form-group">
								<label for="nama-mobil">Nama Mobil</label>
								<input autocomplete="off" type="text" class="form-control" placeholder="Masukan nama mobil" id="nama-mobil" name="nama_mobil">
							</div>
							<div class="col-6 form-group">
								<label for="warna-mobil">Warna Mobil</label>
								<input autocomplete="off" type="text" class="form-control" placeholder="Masukan warna mobil" id="warna-mobil" name="warna_mobil">
							</div>
							<div class="col-6 form-group">
								<label for="jumlah-kursi">Jumlah Kursi</label>
								<input autocomplete="off" type="number" class="form-control" placeholder="Masukan jumlah kursi" id="jumlah-kursi" name="jumlah_kursi">
							</div>
							<div class="col-6 form-group">
								<label for="nomor-polisi">Nomor Polisi</label>
								<input autocomplete="off" type="text" class="form-control" placeholder="Masukan nomor polisi" id="nomor-polisi" name="nomor_polisi">
							</div>
							<div class="col-6 form-group">
								<label for="tahun-beli">Tahun Beli</label>
								<input autocomplete="off" type="number" class="form-control" placeholder="Masukan tahun beli" id="tahun-beli" name="tahun_beli">
							</div>
							<div class="form-group">
								<label for="gambar-mobil">Gambar Mobil</label>
								<br>
								<input autocomplete="off" type="file" class="form-control-file" id="gambar-mobil" name="gambar" accept="image/*">
							</div>
							<div class="container wrapper-button">
								<button type="submit" class="button button-green" name="submit" form="form-data">Submit</button>
								<button type="reset" class="button button-red">Reset</button>

							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="col-lg-7 data-kendaraan">
			<div class="wrapper-daftar">
				<h4 class="container-fluid">Data Kendaraan</h4>
				<div class="container-fluid">
					<div class="col-8 form-group ">
						<input autocomplete="off" type="text" class="form-control" id="search" placeholder="Masukan keyword ...">
					</div>
					<div class="row wrapper-table" style="overflow-x:auto;" id="wrapper-search">

						<?php if ($data) : ?>
							<table class="styled-table col-12">
								<thead>
									<tr>
										<th>No.</th>
										<th>Mobil</th>
										<th>Merk</th>
										<th>Status</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $nomor = 1; ?>
									<?php foreach ($data as $row) : ?>
										<tr>
											<td><?= $nomor++ ?></td>
											<td><?= $row['nama_mobil'] ?></td>
											<td><?= $row['merek_mobil'] ?></td>
											<?php if ($row['status'] == 1) : ?>
												<td><i class="fas fa-check"></i></td>
											<?php else : ?>
												<td><i class="fas fa-times"></i></td>
											<?php endif; ?>

											<td>
												<form action="detail-data-kendaraan.php" method="get">
													<?php $id_delete = $row['nomor_polisi'] ?>
													<button name="detail_Id" value="<?= $id_delete ?>" style="border:none; background-color : transparent;"><i class=" fas fa-eye"></i>
													</button>
												</form>
											</td>

										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						<?php else : ?>
							<h3 style=" text-align: center; margin: 50px 0">Data Kosong</h3>
						<?php endif; ?>
					</div>
					<!-- <div class="wrapper-pagination"> -->
					<!-- <p>showing <?= 1 ?> to <?= 7 ?> of <?= 10 ?> entries</p>
						<div class="pagination">
							<i class="fas fa-caret-square-left"></i>
							<h6><?= 1 ?></h6>
							<i class="fas fa-caret-square-right"></i>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</div>
<script src="../../js/ajax-data-kendaraan.js"></script>
<?php include "../_partials/foot.php"; ?>