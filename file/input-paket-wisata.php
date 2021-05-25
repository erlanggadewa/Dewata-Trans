<link rel="stylesheet" href="../css/input-paket-wisata.min.css">

<h1>Input Data Pemesan Paket Pariwisata</h1>
<div class="container">
	<hr>
</div>
<div class="container-fluid wrapper-all">
	<div class="row">
		<div class="wrapper-tambah g-0">
			<h4 class="container-fluid header">Tambah Data</h4>
			<form action="" class="">
				<div class="container g-3">
					<div class="row">
						<div class="col-12 form-group">
							<label for="nama-penyewa">Nama Penyewa</label>
							<input type="text" class="form-control" placeholder="Enter name" id="nama-penyewa">
						</div>
						<div class="col-6 form-group">
							<label for="no-hp">No. HP</label>
							<input type="text" class="form-control" placeholder="Enter phone number" id="no-hp">
						</div>
						<div class="col-6 form-group">
							<label for="gender">Jenis Kelamin</label>
							<select class="form-control" id="gender">
								<option>Pria</option>
								<option>Wanita</option>
							</select>
						</div>
						<div class="col-12 form-group">
							<label for="alamat-penyewa">Alamat</label>
							<textarea type="text" class="form-control" placeholder="Enter address" id="alamat-penyewa"></textarea>
						</div>
						<div class="col-6 form-group">
							<label for="tanggal-sewa">Tanggal Berangkat</label>
							<input type="date" class="form-control" id="tanggal-sewa">
						</div>
						<div class="col-6 form-group">
							<label for="tanggal-kembali">Tanggal Kembali</label>
							<input type="date" class="form-control" id="tanggal-kembali">
						</div>
						<div class="col-6 form-group">
							<label for="kota-asal">Kota Asal</label>
							<input type="text" class="form-control" placeholder="Enter origin" id="kota-asal">
						</div>
						<div class="col-6 form-group">
							<label for="pilih-paket">Pilih Paket Wisata</label>
							<select class="form-control" id="pilih-paket">Pilih Paket Wisata</option>
								<option>Tour de Bali</option>
								<option>Study Tour Bandung</option>
							</select>
						</div>
						<div class="col-6 form-group">
							<label for="pilih-kendaraan">Pilih Kendaraan</label>
							<select class="form-control" id="pilih-kendaraan">
								<option>Toyota</option>
								<option>Avanza</option>
							</select>
						</div>
						<div class="col-6 form-group">
							<label for="total-harga">Total Harga</label>
							<input type="number" class="form-control" placeholder="Enter price" id="total-harga">
						</div>
						<div class="form-group">
							<label for="gambar-mobil">Gambar Penyewa</label>
							<br>
							<input type="file" class="form-control-file" id="gambar-penyewa">
						</div>
						<div class="container wrapper-button">
							<button type="submit" class="button button-green">Submit</button>
							<button type="reset" class="button button-red">Reset</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>