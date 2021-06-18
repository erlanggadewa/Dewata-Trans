<?php
include "../_partials/head.php";



if (isset($_POST['submit'])) {
	if (editDataWisata($_POST) >= 1) {
		echo "<script>
		alert('Data Berhasil Diedit');
		location.href = 'data-pesanan-wisata.php';
		</script>";
	} else {
		echo "<script>
		alert('Data Gagal Diedit');
		location.href = 'data-pesanan-wisata.php';
		</script>";
	}
}

$detail_Id = $_POST['idTarget'];
$data = fetchData(
	"SELECT * FROM order_wisata LEFT JOIN customer ON customer.id_customer = order_wisata.id_customer WHERE order_wisata.id_customer = $detail_Id AND customer.id_customer = $detail_Id"
);

$nama_paket = $data[0]['nama_paket'];
$dataPaket = fetchData("SELECT nama_paket FROM paket_wisata WHERE nama_paket != '$nama_paket'");
$statusKendaraan = fetchData("SELECT nama_mobil, nomor_polisi FROM data_kendaraan WHERE status=1");

?>

<link rel="stylesheet" href="../../css/input-paket-wisata.min.css">

<h1>Edit Data Pemesan Paket Pariwisata</h1>
<div class="container">
	<hr>
</div>
<div class="container-fluid wrapper-all">
	<div class="row">
		<div class="wrapper-tambah g-0">
			<h4 class="container-fluid header">Edit Data</h4>
			<form action="" method="post" class="" id="form-data" enctype="multipart/form-data">
				<div class="container g-3">
					<div class="row">
						<div class="col-12 form-group">
							<label for="nama-penyewa">Nama Penyewa</label>
							<input autocomplete="off" type="text" class="form-control" placeholder="Enter name" id="nama-penyewa" name="nama_penyewa" required value="<?= $data[0]['nama_penyewa'] ?>">
						</div>
						<div class="col-6 form-group">
							<label for="no-hp">No. HP</label>
							<input autocomplete="off" type="text" class="form-control" placeholder="Enter phone number" id="no-hp" name="no_hp" required value="<?= $data[0]['no_hp'] ?>">
						</div>
						<div class="col-6 form-group">
							<label for="gender">Jenis Kelamin</label>
							<select required class="form-select" id="gender" name="gender">
								<?php if ($data[0]['jenis_kelamin'] == 'Pria') : ?>
									<option selected value="Pria">Pria</option>
									<option value="Wanita">Wanita</option>
								<?php else : ?>
									<option selected value="Wanita">Wanita</option>
									<option value="Pria">Pria</option>
								<?php endif; ?>
							</select>
						</div>
						<div class="col-12 form-group">
							<label for="alamat-penyewa">Alamat</label>
							<textarea type="text" class="form-control" placeholder="Enter address" id="alamat-penyewa" name="alamat_penyewa" required><?= $data[0]['alamat'] ?></textarea>
						</div>
						<div class="col-6 form-group">
							<label for="tanggal-sewa">Tanggal Berangkat</label>
							<input autocomplete="off" type="date" class="form-control" id="tanggal-sewa" name="tanggal_sewa" required value="<?= $data[0]['tanggal_sewa'] ?>">
						</div>
						<div class="col-6 form-group">
							<label for="tanggal-kembali">Tanggal Kembali</label>
							<input autocomplete="off" type="date" class="form-control" id="tanggal-kembali" name="tanggal_kembali" required value="<?= $data[0]['tanggal_kembali'] ?>">
						</div>
						<div class="col-6 form-group">
							<label for="kota-asal">Kota Asal</label>
							<input autocomplete="off" type="text" class="form-control" placeholder="Enter origin" id="kota-asal" name="kota_asal" required value="<?= $data[0]['kota_asal'] ?>">
						</div>
						<div class="col-6 form-group">
							<label for="pilih-paket">Pilih Paket Wisata</label>
							<select required class="form-select" id="nama_paket" name="nama_paket">
								<option value="<?= $data[0]['nama_paket'] ?>" selected><?= $data[0]['nama_paket'] ?></option>
								<?php foreach ($dataPaket as $row) : ?>
									<option><?= $row['nama_paket'] ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="col-6 form-group group-supir">
							<label for="nama-supir">Nama Supir</label>
							<input autocomplete="off" type="text" class="form-control" placeholder="Enter color" id="nama-supir" name="nama_supir" value="<?= $data[0]['nama_supir'] ?>">
						</div>
						<div class="col-6 form-group group-supir">
							<label for="no-hp-supir">No. HP Supir</label>
							<input autocomplete="off" type="number" class="form-control" placeholder="Ketik ..." id="no-hp-supir" name="no_hp_supir" value="<?= $data[0]['no_hp_supir'] ?>">
						</div>
						<div class="col-6 form-group">
							<label for="pilih-kendaraan">Pilih Kendaraan</label>
							<select class="form-select" id="pilih-kendaraan" name="pilih_kendaraan">
								<option value="<?= $data[0]['nama_mobil'] ?>" selected><?= $data[0]['nama_mobil'] ?></option>
								<?php foreach ($statusKendaraan as $row) : ?>
									<option><?= $row['nama_mobil'] ?> (<?= $row['nomor_polisi'] ?>)</option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="col-6 form-group">
							<label for="total-harga">Total Harga</label>
							<input autocomplete="off" type="number" class="form-control" placeholder="Enter price" id="total-harga" name="total_harga" value="<?= $data[0]['total_harga_wisata'] ?>">
						</div>
						<div class="form-group">
							<label for="gambar-mobil">Gambar Penyewa</label>
							<br>
							<input autocomplete="off" type="file" accept="image/*" class="form-control-file" id="gambar-penyewa" name="gambar">
						</div>
						<div class="container wrapper-button">
							<input autocomplete="off" type="hidden" value="<?= $_POST['idTarget'] ?>" name="idTarget">
							<button type="submit" class="button button-green" form="form-data" name="submit">Edit</button>
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