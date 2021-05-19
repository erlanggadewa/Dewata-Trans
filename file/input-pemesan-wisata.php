<?php include "./_partials/head.php" ?>
<link rel="stylesheet" href="../css/input-pemesan-wisata.css" />

<body>
  <?php include "navbar.php" ?>
  <?php include "header.php" ?>

  <div class="konten">
    <div class="inputPemesan">
      <h2>Input Data Pemesan</h2>

      <div class="inputDataPemesan">
        <h3>Input Data Pemesan</h3>

        <div class="detail">
          <div class="col1">
            <label for="nama">Nama Pemesan</label>
            <input
            class="input"
              type="text"
              name="nama"
              id="nama"
            />

            <label for="nohp">No HP</label>
            <input
            class="input"
            type="text"
            name="nohp"
            id="nohp"
            />

            <div class="nohpKelamin">
                <div class="nohp">
                    <label for="tglSewa">Tanggal Berangkat</label>
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

            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat"></textarea>
          </div>

          <div class="col2">
            <label for="kotaTujuan">Tujuan</label>
            <input
            class="input"
              type="text"
              name="kotaTujuan"
              id="kotaTujuan"
            />

            <label for="pilihPaketWisata">Pilih Paket Wisata</label>
            <select name="pilihPaketWisata" id="pilihPaketWisata">
                <option value="">--Pilih Paket Wisata--</option>
                <option value="1">1. aaa</option>
                <option value="2" selected>2. iii</option>
                <option value="3">3. uuu</option>
                <option value="4">4. eee</option>
                <option value="5">5. ooo</option>
            </select>

            <label for="pilihMobil">Pilih Mobil</label>
            <select name="pilihMobil" id="pilihMobil">
                <option value="">--Pilih Mobil--</option>
                <option value="1">1. aaa</option>
                <option value="2" selected>2. iii</option>
                <option value="3">3. uuu</option>
                <option value="4">4. eee</option>
                <option value="5">5. ooo</option>
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