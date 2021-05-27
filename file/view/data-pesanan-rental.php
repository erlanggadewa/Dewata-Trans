<link rel="stylesheet" href="../../css/data-pesanan-rental.min.css">

<h1>Data Pesanan Rental Mobil</h1>
<div class="container">
    <hr>
</div>
<div class="container-fluid">
    <div class="col-lg-12 data-kendaraan">
        <div class="wrapper-daftar">
            <h4 class="container-fluid">Data Pesanan</h4>
            <div class="container-fluid">
                <div class="col-8 form-group ">
                    <input type="text" class="form-control" id="search" placeholder="Masukan keyword pencarian ...">
                </div>
                <div class="row wrapper-table" style="overflow-x:auto;">
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
                            <tr>
                                <td>1</td>
                                <td>Ismi Nuraeni Januarita</td>
                                <td>Bandung</td>
                                <td>12-12-2000</td>
                                <td>15-12-2000</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr class="active-row">
                                <td>1</td>
                                <td>Ismi Nuraeni Januarita</td>
                                <td>Bandung</td>
                                <td>12-12-2000</td>
                                <td>15-12-2000</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="wrapper-pagination">
                    <p>showing <?= 1 ?> to <?= 7 ?> of <?= 10 ?> entries</p>
                    <div class="pagination">
                        <i class="fas fa-caret-square-left"></i>
                        <h6><?= 1 ?></h6>
                        <i class="fas fa-caret-square-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>