<?php
include "../_partials/head.php";
cekLogin();
$total_kendaraan = fetchData('SELECT COUNT(*) FROM data_kendaraan')[0]["COUNT(*)"];
$total_penyewa = fetchData('SELECT COUNT(DISTINCT nama_penyewa) FROM customer')[0]["COUNT(DISTINCT nama_penyewa)"];

$total_data_pesanan = fetchData('SELECT COUNT(*) FROM rental')[0]['COUNT(*)'] + fetchData('SELECT COUNT(*) FROM order_wisata')[0]['COUNT(*)'];


// var_dump($_POST);
if (isset($_POST['submit'])) {
	$bulan = $_POST['bulan'];
	$tahun = $_POST['tahun'];
	$rekap = rekapData($bulan, $tahun);
} else {
	$bulan = date("m");
	$tahun = date('Y');
	$rekap = rekapData($bulan, $tahun);
}
$nameMonth = toMonthName($bulan);
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
<div class="container">
	<hr>
</div>
<div class="container">
	<form action="" id="form-rekap" method="post" style="margin-top:20px; padding: 20px 0;">
		<div class="form-group">
			<select name="bulan" class="form-select" style="width:auto; display:inline;">
				<option value="<?= $bulan ?>" selected><?= $nameMonth ?></option>
				<option value="01">January</option>
				<option value="02">February</option>
				<option value="03">March</option>
				<option value="04">April</option>
				<option value="05">Mey</option>
				<option value="06">June</option>
				<option value="07">July</option>
				<option value="08">Agustus</option>
				<option value="09">September</option>
				<option value="10">October</option>
				<option value="12">November</option>
				<option value="12">Desember</option>
			</select>
			<select name="tahun" class="form-select" style="width:auto; display:inline;">
				<?php
				$mulai = date('Y') - 10;
				for ($i = $mulai; $i <= date('Y'); $i++) {
					$sel = $i == date('Y') ? ' selected="selected"' : '';
					echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
				}
				?>
			</select>
			<button type="submit" class="button button-green" form="form-rekap" name="submit">Cari</button>
	</form>
</div>
<div class="row">


	<div class="col-lg-6">
		<div class="wrapper-daftar">
			<h4 class="container-fluid">Rekap Rental</h4>
			<div class="container-fluid">
				<div class="row wrapper-table" style="overflow-x:auto; ">
					<?php if ($rekap[0]) : ?>
						<table class="styled-table col-12">
							<thead>
								<tr>
									<th>No.</th>
									<th>Kendaraan</th>
									<th>Penghasilan</th>
							<tbody>
								<?php $nomor = 1; ?>
								<?php foreach ($rekap[0] as $row) : ?>
									<tr>
										<td><?= $nomor++ ?></td>
										<td><?= $row['nama_mobil'] ?></td>
										<td><?= $row['total_harga'] ?></td>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					<?php else : ?>
						<h3 style=" text-align: center; margin: 50px 0">Data Kosong</h3>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="wrapper-daftar">
			<h4 class="container-fluid">Rekap Wisata</h4>
			<div class="container-fluid">
				<div class="row wrapper-table" style="overflow-x:auto; ">
					<?php if ($rekap[1]) : ?>
						<table class="styled-table col-12">
							<thead>
								<tr>
									<th>No.</th>
									<th>Kendaraan</th>
									<th>Penghasilan</th>
							<tbody>
								<?php $nomor = 1; ?>
								<?php foreach ($rekap[1] as $row) : ?>
									<tr>
										<td><?= $nomor++ ?></td>
										<td><?= $row['nama_mobil'] ?></td>
										<td><?= $row['total_harga'] ?></td>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						<?php else : ?>
							<h3 style=" text-align: center; margin: 50px 0">Data Kosong</h3>
						</table>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<?php include "../_partials/foot.php"; ?>