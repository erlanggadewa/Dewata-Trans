<?php
include "../_partials/head.php";
$data = fetchData("SELECT order_wisata.id_customer, customer.nama_penyewa, order_wisata.nama_paket, order_wisata.tanggal_sewa, order_wisata.tanggal_kembali FROM customer INNER JOIN order_wisata ON customer.id_customer = order_wisata.id_customer");
?>

<link rel="stylesheet" href="../../css/data-pesanan-wisata.min.css">

<div id="data-pesanan-wisata">
	<h1>Data Pesanan</h1>
	<div class="container">
		<hr>
	</div>
	<div class="container-fluid">
		<div class="col-lg-12 data-kendaraan">
			<div class="wrapper-daftar">
				<h4 class="container-fluid">Data Pesanan</h4>
				<div class="container-fluid">
					<div class="col-8 form-group ">
						<input type="text" class="form-control" id="search" placeholder="Masukan keyword pencarian ...">
					</div>
					<div class="row wrapper-table" style="overflow-x:auto;" id="wrapper-search">
						<?php if ($data) : ?>
							<table class="styled-table col-12">
								<thead>
									<tr>
										<th>No.</th>
										<th>Nama Pemesan</th>
										<th>Tujuan</th>
										<th>Tanggal Sewa</th>
										<th>Tanggal Kembali</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $nomor = 1; ?>
									<?php foreach ($data as $row) : ?>
										<tr>
											<td><?= $nomor++ ?></td>
											<td><?= $row['nama_penyewa'] ?></td>
											<td><?= $row['nama_paket'] ?></td>
											<td><?= $row['tanggal_sewa'] ?></td>
											<td><?= $row['tanggal_kembali'] ?></td>
											<td>
												<form action="detail-data-pesanan-wisata.php" method="get">
													<?php $id_detail = $row['id_customer'] ?>
													<button name="detail_Id" value="<?= $id_detail ?>" style="border:none; background-color : transparent;"><i class=" fas fa-eye"></i>
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
<script src="../../js/ajax-data-pesanan-wisata.js"></script>
<?php include "../_partials/foot.php"; ?>