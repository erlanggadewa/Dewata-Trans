<?php
$total_kendaraan = fetchData('SELECT COUNT(*) FROM data_kendaraan')[0]["COUNT(*)"];
$total_penyewa = fetchData('SELECT COUNT(DISTINCT nama_penyewa) FROM customer')[0]["COUNT(DISTINCT nama_penyewa)"];

$total_data_pesanan = fetchData('SELECT COUNT(*) FROM rental')[0]['COUNT(*)'] + fetchData('SELECT COUNT(*) FROM order_wisata')[0]['COUNT(*)'];


?>

<link rel="stylesheet" href="../../css/dashboard.min.css">

<h1>Dashboard Aplikasi</h1>
<div class="container">
	<hr>
</div>
<div class="row wrapper-data">
	<div class="data1 mobil col-12 col-md-6 col-xl-4">
		<div class="data-mobil">
			<div class="info-data">
				<h3>Data Mobil</h3>
				<span><?= $total_kendaraan . " Kendaraan" ?></span>
			</div>
			<i class="fas fa-car"></i>
		</div>
	</div>
	<div class="data2 pemesan col-12 col-md-6 col-xl-4">
		<div class="data-pemesan">
			<div class="info-data">
				<h3>Data Pemesan</h3>
				<span><?= $total_penyewa . " Orang" ?></span>
			</div>
			<i class="fas fa-user-clock"></i>
		</div>
	</div>
	<div class="data3 pesanan col-12 col-md-6 col-xl-4">
		<div class="data-pesanan">
			<div class="info-data">
				<h3>Total Data Pesanan</h3>
				<span><?= $total_data_pesanan . " Pesanan" ?></span>
			</div>
			<i class="fas fa-server" style="margin-left:20px;"></i>
		</div>
	</div>
</div>
<div class="row wrapper-table" style="overflow-x:auto;">
	<table class="styled-table col-12">
		<thead>
			<tr>
				<th>No.</th>
				<th>Mobil</th>
				<th>Status</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Toyota</td>
				<td>Tersedia</td>
				<td><i class="fas fa-eye"></i></td>
			</tr>
			<tr>
				<td>1</td>
				<td>Toyota</td>
				<td>Tersedia</td>
				<td><i class="fas fa-eye"></i></td>
			</tr>
			<tr>
				<td>1</td>
				<td>Toyota</td>
				<td>Tersedia</td>
				<td><i class="fas fa-eye"></i></td>
			</tr>
			<tr class="active-row">
				<td>2</td>
				<td>Toyota</td>
				<td>Tersedia</td>
				<td><i class="fas fa-eye"></i></td>
			</tr>
		</tbody>
	</table>
</div>