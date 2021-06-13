<?php
include "../config/function.php";
cekLogin();


$keyword = $_GET['keyword'];
$data = findDataKendaraan($keyword);



?>



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