<?php include "./_partials/head.php" ?>

<link rel="stylesheet" href="../css/index.min.css">

<body>
    <header class="d-sm-none">
        <i class="fas fa-align-left show-sidebar"></i>
        <img src="../img/DewataTransMalang.png" alt="">
    </header>
    <div class="container-fluid wrapper-all">
        <div class="row">
            <div class="wrapper-sidebar  col-12 col-sm-3 col-md-2 container-fluid g-0 d-none d-sm-block">
                <div class="sidebar col-8 col-sm-3 col-md-2 g-0 ">
                    <img src="../img/Group80.png" alt="" class="d-none d-sm-block g-0">
                    <div class="toggle">
                        <i class="fas fa-angle-left d-sm-none close-sidebar"></i>
                        <span class="d-sm-none">Menu</span>
                    </div>
                    <navbar class="navbar">
                        <div class="grup-nav dashboard">
                            <i class="fas fa-house-user" data-ref="dashboard.php">
                                <span data-ref="dashboard.php">&nbsp;Dashboard</span>
                            </i>
                        </div>
                        <div class="grup-nav master-mobil">
                            <h6>Master Mobil</h6>
                            <hr>
                            <i class="fas fa-car" data-ref="data-kendaraan.php">
                                <span data-ref="data-kendaraan.php">&nbsp;Data Kendaraan</span>
                            </i>
                        </div>
                        <div class="grup-nav status">
                            <h6>Status</h6>
                            <hr>
                            <i class="fas fa-envelope-open-text" data-ref="pending.php">
                                <span data-ref="pending.php">&nbsp;Pending</span>
                            </i>
                            <i class="fas fa-route" data-ref="ongoing.php">
                                <span data-ref="ongoing.php">&nbsp;On Going</span>
                            </i>
                        </div>
                        <div class="grup-nav rental-mobil">
                            <h6>Rental Mobil</h6>
                            <hr>
                            <i class="fas fa-folder-open" data-ref="input-rental-mobil.php">
                                <span data-ref="input-rental-mobil.php">&nbsp;Input Pemesan</span>
                            </i>
                            <i class="fas fa-database" data-ref="data-pesanan-rental.php">
                                <span data-ref="data-pesanan-rental.php">&nbsp;&nbsp;Data Pesanan</span>
                            </i>
                        </div>
                        <div class="grup-nav paket-pariwisata">
                            <h6>Paket Pariwisata</h6>
                            <hr>
                            <i class="fas fa-calendar-check" data-ref="list-paket-wisata.php">
                                <span data-ref="list-paket-wisata.php">&nbsp;&nbsp;List Wisata</span>
                            </i>
                            <i class="fas fa-folder-open" data-ref="input-paket-wisata.php">
                                <span data-ref="input-paket-wisata.php">&nbsp;Input Pemesan</span>
                            </i>
                            <i class="fas fa-database" data-ref="data-pesanan-wisata.php">
                                <span data-ref="data-pesanan-wisata.php">&nbsp;&nbsp;Data Pesanan</span>
                            </i>
                        </div>
                        <div class="grup-nav">
                            <h6>Informasi Akun</h6>
                            <i class="fas fa-user-circle">
                                <span>&nbsp;&nbsp;<?= 'administrator' ?></span>
                            </i>
                        </div>
                    </navbar>
                </div>
            </div>
            <div class="workspace col-12 col-sm-9 col-md-10">
                <?php
                include "dashboard.php"
                // include "detail-pesanan-rental"

                ?>
            </div>
        </div>
    </div>
    <script src="../js/index.js"></script>
</body>

</html>