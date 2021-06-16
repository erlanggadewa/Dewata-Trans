<?php
include "../_partials/head.php";

if (isset($_POST['submit']))
	if (inputListPaket($_POST))
		echo "<script>  
		alert('Data Berhasil Ditambahkan');
		location.href = 'list-paket-wisata.php';
		</script>";

$data = fetchData("SELECT id_paket, nama_paket, tujuan FROM paket_wisata");
?>

<link rel="stylesheet" href="../../css/list-paket-wisata.css">

<h1>List Paket Wisata</h1>
<div class="container">
	<hr>
</div>
<div class="container-fluid wrapper-all">
	<div class="row" style="margin-top:10px">
		<div class="input-kendaraan col-lg-5">
			<div class="wrapper-tambah">
				<h4 class="container-fluid header">Tambah Data</h4>
				<form action="" class="" method="post" id="form-data">
					<div class="container g-3">
						<div class="row">
							<div class="col-12 form-group">
								<label for="nama-paket">Nama Paket Wisata</label>
								<input autocomplete="off" type="text" class="form-control" placeholder="Input nama paket" id="nama-paket" name="nama-paket" required>
							</div>
							<div class="col-12 form-group">
								<label for="tempat-wisata">Tempat Wisata</label>
								<input autocomplete="off" type="text" class="form-control" placeholder="Input tujuan" id="tempat-wisata" name="tempat-wisata" required>
							</div>
							<div class="col-12 form-group">
								<label for="fasilitas">Fasilitas</label>
								<textarea type="text" class="form-control" placeholder="Masukan fasilitas paket" id="fasilitas" name="fasilitas" required rows="10"></textarea>
							</div>
							<div class="container wrapper-button">
								<button type="submit" class="button button-green" form="form-data" name="submit">Submit</button>
								<button type="reset" class="button button-red">Reset</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="col-lg-7 data-kendaraan">
			<div class="wrapper-daftar">
				<h4 class="container-fluid">Daftar Paket Wisata</h4>
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
										<th>Nama Paket</th>
										<th>Tujuan</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $nomor = 1; ?>
									<?php foreach ($data as $row) : ?>
										<tr>
											<td><?= $nomor++ ?></td>
											<td><?= $row['nama_paket'] ?></td>
											<td><?= $row['tujuan'] ?></td>
											<td>
												<form action="detail-list-paket-wisata.php" method="get">
													<?php $id_paket = $row['id_paket'] ?>
													<button name="detail_Id" value="<?= $id_paket ?>" style="border:none; background-color : transparent;"><i class=" fas fa-eye"></i>
													</button>
												</form>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						<?php else : ?>
							<h3 style="text-align: center; margin: 50px 0">Data Kosong</h3>
						<?php endif; ?>
					</div>
					<!-- <div class="wrapper-pagination">
						<p>showing <?= 1 ?> to <?= 7 ?> of <?= 10 ?> entries</p>
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
<script src="../../js/ajax-list-paket-wisata.js"></script>
<?php include "../_partials/foot.php"; ?>