<?php
include "../config/function.php";
cekLogin();


$keyword = $_GET['keyword'];
$data = findDataRental($keyword);



?>

<?php if ($data) : ?>
  <table class="styled-table col-12">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama Pemesan</th>
        <th>Tujuan</th>
        <th>Tanggal Sewa</th>
        <th>Tanggal Kembali</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $nomor = 1; ?>
      <?php foreach ($data as $row) : ?>
        <tr>
          <td><?= $nomor++ ?></td>
          <td><?= $row['nama_penyewa'] ?></td>
          <td><?= $row['kota_tujuan'] ?></td>
          <td><?= $row['tanggal_sewa'] ?></td>
          <td><?= $row['tanggal_kembali'] ?></td>
          <td>
            <form action="detail-data-pesanan-rental.php" method="get">
              <?php $id_detail = $row['id_customer'] ?>
              <button name="detail_Id" value="<?= $id_detail ?>" style="border:none; background-color : transparent;"><i class=" fas fa-eye"></i>
              </button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else : ?>
  <h3 style="text-align: center; margin: 50px 0">Data Kosong</h3>
<?php endif; ?>