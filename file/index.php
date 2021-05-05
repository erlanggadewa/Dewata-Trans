<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/index.css" />
    <title>Dashboard</title>
  </head>
  <body>
    <?php include "navbar.php" ?>

    <div class="konten">
    <?php include "header.php" ?>
    
      <div class="dashboard">
        <h2>Dashboard Aplikasi Rental Mobil</h2>
        <div class="wrapper">
          <div class="wrapperData">
            <div style="border-left: 7px solid #2c445a;">
              <img src="../img/ikon/data-mobil-dashboard.png" alt="">
              <h3>Data Mobil</h3>
              <br>
              <p>2 Mobil</p>
            </div>
          </div>
          <div class="wrapperData">
            <div style="border-left: 7px solid #53CD6E;">
              <img src="../img/ikon/data-pemesan-dashboard.png" alt="">
              <h3>Data Pemesan</h3>
              <br>
              <p>3 Pemesan</p>
            </div>
          </div>
          <div class="wrapperData">
            <div style="border-left: 7px solid #53A1CD;">
              <img src="../img/ikon/data-pesanan-dashboard.png" alt="">
              <h3>Data Pesanan</h3>
              <br>
              <p>1 Pesanan</p>
            </div>
          </div>
        </div>
        <table cellspacing="0">
          <tr>
            <th style="border-right: 1px solid #ededed;">No</th>
            <th style="border-right: 1px solid #ededed;">Mobil</th>
            <th style="border-right: 1px solid #ededed;">Status</th>
            <th>Aksi</th>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </table>
      </div>
    </div>
  </body>
</html>
