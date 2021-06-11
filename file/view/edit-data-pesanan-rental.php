<?php
include "../_partials/head.php";

if (isset($_POST['submit'])) {

  editDataRental($_POST);
  echo "<script>
  alert('Data Berhasil Diedit');
  location.href = 'data-pesanan-rental.php';
  </script>";
}

$detail_Id = $_POST['idTarget'];
$data = fetchData(
  "SELECT * FROM rental LEFT JOIN customer ON customer.id_customer = rental.id_customer WHERE rental.id_customer = $detail_Id AND customer.id_customer = $detail_Id"
);

$statusKendaraan = fetchData("SELECT nama_mobil, nomor_polisi FROM data_kendaraan WHERE status=1");


?>

<link rel="stylesheet" href="../../css/input-rental-mobil.min.css">

<h1>Edit Data Pesanan Rental</h1>
<div class="container">
  <hr>
</div>
<div class="container-fluid wrapper-all">
  <div class="row">
    <div class="wrapper-tambah g-0">
      <h4 class="container-fluid header">Edit Data</h4>
      <form action="" class="" method="post" id="form-data" enctype="multipart/form-data">
        <div class="container g-3">
          <div class="row">
            <input type="hidden" name="idTarget" value="<?= $data[0]['id_customer'] ?>">
            <div class="col-12 form-group">
              <label for="nama-penyewa">Nama Penyewa</label>
              <input required type="text" class="form-control" placeholder="Enter name" id="nama-penyewa" name="nama_penyewa" value="<?= $data[0]['nama_penyewa'] ?>">
            </div>
            <div class="col-6 form-group">
              <label for="no-hp">No. HP</label>
              <input required type="number" class="form-control" placeholder="Enter phone number" id="no-hp" name="no_hp" value="<?= $data[0]['no_hp'] ?>">
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
              <textarea required type="text" class="form-control" placeholder="Enter address" id="alamat-penyewa" name="alamat_penyewa"><?= $data[0]['alamat'] ?></textarea>
            </div>
            <div class="col-6 form-group">
              <label for="tanggal-sewa">Tanggal Sewa</label>
              <input required type="date" class="form-control" id="tanggal-sewa" name="tanggal_sewa" value="<?= $data[0]['tanggal_sewa'] ?>">
            </div>
            <div class="col-6 form-group">
              <label for="tanggal-kembali">Tanggal Kembali</label>
              <input required type="date" class="form-control" id="tanggal-kembali" name="tanggal_kembali" value="<?= $data[0]['tanggal_kembali'] ?>">
            </div>
            <div class="col-6 form-group">
              <label for="kota-asal">Kota Asal</label>
              <input required type="text" class="form-control" placeholder="Enter origin" id="kota-asal" name="kota_asal" value="<?= $data[0]['kota_asal'] ?>">
            </div>
            <div class="col-6 form-group">
              <label for="kota-tujuan">Kota Tujuan</label>
              <input required type="text" class="form-control" placeholder="Enter destination" id="kota-tujuan" name="kota_tujuan" value="<?= $data[0]['kota_tujuan'] ?>">
            </div>
            <div class="col-12">
              <div class="form-check form-switch ">
                <input class="form-check-input toggle-supir" type="checkbox" checked id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">Menggunakan Supir</label>
              </div>
            </div>
            <div class="col-6 form-group group-supir ">
              <label for="nama-supir">Nama Supir</label>
              <input type="text" class="form-control" placeholder="Enter color" id="nama-supir" name="nama_supir" value="<?= $data[0]['nama_supir'] ?>">
            </div>
            <div class="col-6 form-group group-supir ">
              <label for="no-hp-supir">No. HP Supir</label>
              <input type="number" class="form-control" placeholder="Enter color" id="no-hp-supir" name="no_hp_supir" value="<?= $data[0]['no_hp_supir'] ?>">
            </div>
            <div class="col-6 form-group">
              <label for="pilih-kendaraan">Pilih Kendaraan</label>
              <select class="form-select" id="pilih-kendaraan" name="pilih_kendaraan" required>
                <option value="<?= $data[0]['nama_mobil'] ?>" selected><?= $data[0]['nama_mobil'] ?></option>
                <?php foreach ($statusKendaraan as $row) : ?>
                  <option><?= $row['nama_mobil'] ?> (<?= $row['nomor_polisi'] ?>)</option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="col-6 form-group">
              <label for="total-harga">Total Harga</label>
              <input required type="number" class="form-control" placeholder="Enter price" id="total-harga" name="total_harga" value="<?= $data[0]['total_harga_rental'] ?>">
            </div>
            <div class="form-group">
              <label for="gambar-mobil">Gambar Penyewa</label>
              <br>
              <input type="file" accept="image/*" class="form-control-file" id="gambar-penyewa" name="gambar" value="<?= $data[0]['gambar_customer'] ?>">
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