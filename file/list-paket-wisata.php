<link rel="stylesheet" href="../css/list-paket-wisata.css">

<h1>List Paket Wisata</h1>
<div class="container">
    <hr>
</div>
<div class="container-fluid wrapper-all">
    <div class="row" style="margin-top:10px">
        <div class="input-kendaraan col-lg-5">
            <div class="wrapper-tambah">
                <h4 class="container-fluid header">Tambah Data</h4>
                <form action="" class="">
                    <div class="container g-3">
                        <div class="row">
                            <div class="col-12 form-group">
                                <label for="nama-paket">Nama Paket Wisata</label>
                                <input type="text" class="form-control" placeholder="Input nama paket" id="nama-paket">
                            </div>
                            <div class="col-12 form-group">
                                <label for="tempat-wisata">Tempat Wisata</label>
                                <input type="text" class="form-control" placeholder="Input tujuan" id="tempat-wisata">
                            </div>
                            <div class="col-6 form-group">
                                <label for="pilih-kendaraan">Pilih Kendaraan</label>
                                <select class="form-control" id="pilih-kendaraan">
                                    <option>Toyota</option>
                                    <option>Avanza</option>
                                </select>
                            </div>
                            <div class="col-6 form-group">
                                <label for="harga">Harga</label>
                                <input type="number" class="form-control" placeholder="exp : 1000000" id="harga">
                            </div>
                            <div class="col-12 form-group">
                                <label for="tahun-beli">Fasilitas</label>
                                <textarea type="text" class="form-control" placeholder="Masukan fasilitas paket" id="tahun-beli"></textarea>
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
        <div class="col-lg-7 data-kendaraan">
            <div class="wrapper-daftar">
                <h4 class="container-fluid">Daftar Paket Wisata</h4>
                <div class="container-fluid">
                    <div class="col-8 form-group ">
                        <input type="text" class="form-control" id="search" placeholder="Masukan keyword ...">
                    </div>
                    <div class="row wrapper-table" style="overflow-x:auto;">
                        <table class="styled-table col-12">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Paket</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Tour de Bali</td>
                                    <td>Rp. <?= 3000000 ?></td>
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
</div>