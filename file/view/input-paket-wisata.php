<?php
include "../_partials/head.php";

$dataPaket = fetchData("SELECT nama_paket FROM paket_wisata");
$statusKendaraan = fetchData("SELECT nama_mobil, nomor_polisi FROM data_kendaraan WHERE status=1");

if (isset($_POST['submit']))
	if (inputDataWisata($_POST))
		echo "<script>
		alert('Data Berhasil Ditambahkan');
		location.href = 'input-paket-wisata.php';
		</script>";

?>

<link rel="stylesheet" href="../../css/input-paket-wisata.min.css">

<h1>Input Data Pemesan Paket Pariwisata</h1>
<div class="container">
	<hr>
</div>
<div class="container-fluid wrapper-all">
	<div class="row">
		<div class="wrapper-tambah g-0">
			<h4 class="container-fluid header">Tambah Data</h4>
			<form action="" method="post" class="" id="form-data" enctype="multipart/form-data">
				<div class="container g-3">
					<div class="row">
						<div class="col-12 form-group">
							<label for="nama-penyewa">Nama Penyewa</label>
							<input type="text" class="form-control" placeholder="Masukan nama" id="nama-penyewa" name="nama_penyewa" required>
						</div>
						<div class="col-6 form-group">
							<label for="no-hp">No. HP</label>
							<input type="text" class="form-control" placeholder="Masukan No. HP" id="no-hp" name="no_hp" required>
						</div>
						<div class="col-6 form-group">
							<label for="gender">Jenis Kelamin</label>
							<select required class="form-select" id="gender" name="gender">
								<option disabled selected value="">Pilih Jenis Kelamin ...</option>
								<option value="Pria">Pria</option>
								<option value="Wanita">Wanita</option>
							</select>
						</div>
						<div class="col-12 form-group">
							<label for="alamat-penyewa">Alamat</label>
							<textarea type="text" class="form-control" placeholder="Masukan alamat" id="alamat-penyewa" name="alamat_penyewa" required></textarea>
						</div>
						<div class="col-6 form-group">
							<label for="tanggal-sewa">Tanggal Berangkat</label>
							<input type="date" class="form-control" id="tanggal-sewa" name="tanggal_sewa" required>
						</div>
						<div class="col-6 form-group">
							<label for="tanggal-kembali">Tanggal Kembali</label>
							<input type="date" class="form-control" id="tanggal-kembali" name="tanggal_kembali" required>
						</div>
						<div class="col-6 form-group">
							<label for="kota-asal">Kota Asal</label>
							<input type="text" class="form-control" placeholder="Masukan kota asal" id="kota-asal" name="kota_asal" required>
						</div>
						<div class="col-6 form-group">
							<label for="pilih-paket">Pilih Paket Wisata</label>
							<select required class="form-select" id="nama_paket" name="nama_paket">
								<option value="" disabled selected>Pilih Paket Wisata ...</option>
								<?php foreach ($dataPaket as $row) : ?>
									<option><?= $row['nama_paket'] ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="col-12">
							<div class="form-check form-switch ">
								<input class="form-check-input toggle-supir" type="checkbox" id="flexSwitchCheckDefault">
								<label class="form-check-label" for="flexSwitchCheckDefault">Menggunakan Supir</label>
							</div>
						</div>
						<div class="col-6 form-group group-supir d-none">
							<label for="nama-supir">Nama Supir</label>
							<input type="text" class="form-control" placeholder="Masukan nama supir" id="nama-supir" name="nama_supir">
						</div>
						<div class="col-6 form-group group-supir d-none">
							<label for="no-hp-supir">No. HP Supir</label>
							<input type="number" class="form-control" placeholder="Masukan No. HP" id="no-hp-supir" name="no_hp_supir">
						</div>
						<div class="col-6 form-group">
							<label for="pilih-kendaraan">Pilih Kendaraan</label>
							<select class="form-select" id="pilih-kendaraan" name="pilih_kendaraan">
								<option value="" disabled selected>Pilih Kendaraan ...</option>
								<?php foreach ($statusKendaraan as $row) : ?>
									<option><?= $row['nama_mobil'] ?> (<?= $row['nomor_polisi'] ?>)</option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="col-6 form-group">
							<label for="total-harga">Total Harga</label>
							<input type="number" class="form-control" placeholder="Masukan total harga" id="total-harga" name="total_harga">
						</div>
						<div class="form-group">
							<label for="gambar-mobil">Gambar Penyewa</label>
							<br>
							<input type="file" accept="image/*" class="form-control-file" id="gambar-penyewa" name="gambar">
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
</div>
<script src="../../js/function-supir.js"></script>
<?php include "../_partials/foot.php"; ?>