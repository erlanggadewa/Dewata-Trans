<?php include "./_partials/head.php" ?>

<link rel="stylesheet" href="../css/index.min.css">

<body>
    <!-- <header>

    </header> -->
    <div class="container-fluid">
        <div class="row">
            <div class="relative col-12 col-sm-3 col-md-2 container-fluid g-0">
                <div class="sidebar col-8 col-sm-3 col-md-2 g-0">
                    <img src="../img/Group80.png" alt="" class="d-none d-sm-block g-0">
                    <div class="toggle">
                        <i class="fas fa-angle-left d-sm-none"></i>
                        <span class="d-sm-none">Menu</span>
                    </div>
                    <div class="navbar">
                        <div class="grup-nav dashboard">
                            <i class="fas fa-house-user">
                                <span>&nbsp;Dashboard</span>
                            </i>
                        </div>
                        <div class="grup-nav master-mobil">
                            <h6>Master Mobil</h6>
                            <hr>
                            <i class="fas fa-car">
                                <span>&nbsp;Data Kendaraan</span>
                            </i>
                        </div>
                        <div class="grup-nav status">
                            <h6>Status</h6>
                            <hr>
                            <i class="fas fa-envelope-open-text">
                                <span>&nbsp;Pending</span>
                            </i>
                            <i class="fas fa-route">
                                <span>&nbsp;On Going</span>
                            </i>
                        </div>
                        <div class="grup-nav rental-mobil">
                            <h6>Rental Mobil</h6>
                            <hr>
                            <i class="fas fa-folder-open">
                                <span>&nbsp;Input Pemesan</span>
                            </i>
                            <i class="fas fa-database">
                                <span>&nbsp;&nbsp;Data Pesanan</span>
                            </i>
                        </div>
                        <div class="grup-nav paket-pariwisata">
                            <h6>Paket Pariwisata</h6>
                            <hr>
                            <i class="fas fa-calendar-check">
                                <span>&nbsp;&nbsp;List Wisata</span>
                            </i>
                            <i class="fas fa-folder-open">
                                <span>&nbsp;Input Pemesan</span>
                            </i>
                            <i class="fas fa-database">
                                <span>&nbsp;&nbsp;Data Pesanan</span>
                            </i>
                        </div>
                        <div class="grup-nav">
                            <h6>Informasi Akun</h6>
                            <i class="fas fa-user-circle">
                                <span>&nbsp;&nbsp;<?= 'administrator' ?></span>
                            </i>
                        </div>
                    </div>
                </div>
                <!-- <div class="blur-background col-6 d-md-none"></div> -->
            </div>
            <div class="workspace col-12 col-sm-9 col-md-10">
                <!-- NANTI INClUDE KERJAAN KALIAN DISINI YA, YANG LAIN DI COMMENT BUAT NGETES -->
                <?php include "dashboard.php" ?>
            </div>
        </div>
    </div>

</body>

</html>