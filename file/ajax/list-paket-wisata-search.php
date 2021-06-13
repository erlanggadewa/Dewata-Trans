<?php
include "../config/function.php";
cekLogin();
$keyword = $_GET['keyword'];
$data = findDataPaket($keyword);
?>

<?php if ($data) : ?>
  <table class="styled-table col-12">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama Paket</th>
        <th>Tujuan</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $nomor = 1; ?>
      <?php foreach ($data as $row) : ?>
        <tr>
          <td><?= $nomor++ ?></td>
          <td><?= $row['nama_paket'] ?></td>
          <td><?= $row['tujuan'] ?></td>
          <td>
            <form action="detail-list-paket-wisata.php" method="get">
              <?php $id_paket = $row['id_paket'] ?>
              <button name="detail_Id" value="<?= $id_paket ?>" style="border:none; background-color : transparent;"><i class=" fas fa-eye"></i>
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