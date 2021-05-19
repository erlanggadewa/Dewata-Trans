<?php include "./_partials/head.php" ?>
<link rel="stylesheet" href="../css/input-pemesan-rental.css" />

<body>
  <?php include "navbar.php" ?>
  <?php include "header.php" ?>

  <div class="konten">
    <div class="dataPesanan">
      <h2>Input Data Pemesan</h2>

      <div class="detailPesanan">
        <h3>Input Data Pemesan</h3>

        <div class="detail">
          <div class="foto">
            <label for="nama">Nama Penyewa</label>
            <input
            class="input"
              type="text"
              name="nama"
              id="nama"
            />
            <div class="nohpKelamin">
                <div class="nohp">
                    <label for="nohp">No HP</label>
                    <input
                    class="input"
                    type="text"
                    name="nohp"
                    id="nohp"
                    />
                </div>
                <div class="kelamin">
                    <label for="kelamin">Jenis Kelamin</label>
                    <input
                    class="input"
                    type="text"
                    name="kelamin"
                    id="kelamin"
                    />
                </div>
            </div>
            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat"></textarea>

            <div class="nohpKelamin">
                <div class="nohp">
                    <label for="tglSewa">Tanggal Sewa</label>
                    <input
                    class="input"
                    type="text"
                    name="tglSewa"
                    id="tglSewa"
                    />
                </div>
                <div class="kelamin">
                    <label for="tglKembali">Tanggal Kembali</label>
                    <input
                    class="input"
                    type="text"
                    name="tglKembali"
                    id="tglKembali"
                    />
                </div>
            </div>
            <form method="post" action="" enctype="">
                <label for="foto">Foto Penyewa</label>
                <input
                    type="file"
                    name="foto"
                    id="foto"
                />
            </form>
          </div>

          <div class="data">
            <label for="kotaAsal">Kota Asal</label>
            <input
            class="input"
              type="text"
              name="kotaAsal"
              id="kotaAsal"
            />

            <label for="kotaTujuan">Kota Tujuan</label>
            <input
            class="input"
              type="text"
              name="kotaTujuan"
              id="kotaTujuan"
            />

            <label for="pilihMobil">Pilih Mobil</label>
            <select name="hobi" id="pilihMobil">
                <option value="">--Pilih Mobil--</option>
                <option value="1">1. Komputer</option>
                <option value="2" selected>2. Otomotif</option>
                <option value="3">3. Memasak</option>
                <option value="4">4. Melukis</option>
                <option value="5">5. Bernyanyi</option>
            </select>

            <label for="harga">Harga</label>
            <input
            class="input"
              type="text"
              name="harga"
              id="harga"
            />
          </div>
        </div>

        <div class="buttons">
          <button class="button submit">Submit</button>
          <button class="button cancel">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</body>
<?php include "./_partials/bottom.php" ?>
