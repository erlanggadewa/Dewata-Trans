<?php
include "../_partials/head.php";

if (isset($_POST['submit_edit'])) {
	if (editDataKendaraan($_POST) >= 1)
		echo "<script>
            alert('Data Berhasil Diubah');
            location.href = 'data-kendaraan.php';
        </script>";
	else
		echo "<script>
            alert('Data Gagal Diubah');
            location.href = 'data-kendaraan.php';
        </script>";
}
$id = $_POST['nomor_polisi'];
$data = fetchData("SELECT * FROM data_kendaraan WHERE nomor_polisi='$id'");

$listKendaraan = fetchData("SELECT * FROM data_kendaraan");

?>

<link rel="stylesheet" href="../../css/data-kendaraan.min.css">

<h1>Edit Data Kendaraan</h1>
<hr>
<div class="container-fluid wrapper-all">
	<div class="row" style="margin-top:10px">
		<div class="input-kendaraan col-lg-5">
			<div class="wrapper-tambah">
				<h4 class="container-fluid header">Edit Data</h4>
				<form action="" class="" method="post" id="form-data" enctype="multipart/form-data">
					<div class="container g-3">
						<div class="row">
							<div class="col-12 form-group">
								<label for="name-merk">Nama Merk</label>
								<input type="text" class="form-control" placeholder="Enter merk" id="name-merk" name="nama_merek" value="<?= $data[0]['merek_mobil'] ?>" autocomplete="off">
							</div>
							<div class="col-12 form-group">
								<label for="nama-mobil">Nama Mobil</label>
								<input type="text" class="form-control" placeholder="Enter name" id="nama-mobil" name="nama_mobil" value="<?= $data[0]['nama_mobil'] ?>" autocomplete="off">
							</div>
							<div class="col-6 form-group">
								<label for="warna-mobil">Warna Mobil</label>
								<input type="text" class="form-control" placeholder="Enter color" id="warna-mobil" name="warna_mobil" value="<?= $data[0]['warna_mobil'] ?>" autocomplete="off">
							</div>
							<div class="col-6 form-group">
								<label for="jumlah-kursi">Jumlah Kursi</label>
								<input type="number" class="form-control" placeholder="Enter number" id="jumlah-kursi" name="jumlah_kursi" value="<?= $data[0]['jumlah_kursi'] ?>" autocomplete="off">
							</div>
							<div class="col-6 form-group">
								<label for="nomor-polisi">Nomor Polisi</label>
								<input type="text" class="form-control" placeholder="Enter color" id="nomor-polisi" name="nomor_polisi" value="<?= $data[0]['nomor_polisi'] ?>" readonly autocomplete="off">
							</div>
							<div class="col-6 form-group">
								<label for="tahun-beli">Tahun Beli</label>
								<input type="number" class="form-control" placeholder="Enter number" id="tahun-beli" name="tahun_beli" value="<?= $data[0]['tahun_beli'] ?>" autocomplete="off">
							</div>
							<div class="form-group">
								<label for="gambar-mobil">Gambar Mobil</label>
								<br>
								<img src="<?= $data[0]['gambar_mobil'] ?>" alt="" width="200px">
								<br>
								<br>
								<input autocomplete="off" type="hidden" class="form-control-file" id="gambar-mobil" name="gambar_lama" value="<?= $data[0]['gambar_mobil'] ?>">
								<input autocomplete="off" type="file" accept="image/*" class="form-control-file" id="gambar-mobil" name="gambar" value="<?= $data[0]['gambar_mobil'] ?>">
							</div>
							<div class="container wrapper-button">
								<button type="submit" class="button button-green" name="submit_edit" form="form-data">Edit</button>
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
						<input type="text" class="form-control" id="search" placeholder="Masukan keyword ...">
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
									<?php foreach ($listKendaraan as $row) : ?>
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
					<!-- <div class="wrapper-pagination">
						<p>showing <?= 1 ?> to <?= 7 ?> of <?= 10 ?> entries</p>
						<div class="pagination">
							<i class="fas fa-caret-square-left"></i>
							<h6><?= 1 ?></h6>
							<i class="fas fa-caret-square-right"></i>
						</div> -->
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<script src="../../js/ajax-data-kendaraan.js"></script>
<?php include "../_partials/foot.php"; ?>