<?php
include "../_partials/head.php";


?>

<link rel="stylesheet" href="../../css/ongoing.css">

<h1>Data Kendaraan On Going</h1>
<hr>
<div class="container-fluid">
	<div class="row wrapper-table" style="overflow-x:auto;">
		<?php if ($data_mulai_ongoing) : ?>
			<table class="styled-table col-12">
				<thead>
					<tr>
						<th>No.</th>
						<th>Mobil</th>
						<th>Nama Pemesan</th>
						<th>Tanggal Berangkat</th>
						<th>Tanggal Kembali</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $nomor = 1; ?>
					<?php foreach ($data_mulai_ongoing as $row) : ?>
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
			<?php else : ?>
				<h1 style="text-align: center; margin: 50px 0">Data Kosong</h1>
			<?php endif; ?>
			</table>
	</div>
</div>

<?php include "../_partials/foot.php"; ?>