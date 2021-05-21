<?php include "./_partials/head.php" ?>

<link rel="stylesheet" href="../css/index.min.css">

<body>
    <!-- <header>

    </header> -->
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar col-2">
                <img src="../img/Group80.png" alt="">
                <div class="navbar">
                    <i class="fas fa-house-user">
                        <span>Dashboard</span>
                    </i>
                    <div class="grup-nav master-mobil">
                        <h6>Master Mobil</h6>
                        <i class="fas fa-car">
                            <span>Data Kendaraan</span>
                        </i>
                    </div>
                    <div class="grup-nav status">
                        <h6>Status</h6>
                        <i class="fas fa-envelope-open-text">
                            <span>Pending</span>
                        </i>
                        <i class="fas fa-route">
                            <span>On Going</span>
                        </i>
                    </div>
                    <div class="grup-nav rental-mobil">
                        <h6>Rental Mobil</h6>
                        <i class="fas fa-folder-open">
                            <span>Input Pemesan</span>
                        </i>
                        <i class="fas fa-database">
                            <span>Data Pesanan</span>
                        </i>
                    </div>
                    <div class="grup-nav paket-pariwisata">
                        <h6>Paket Pariwisata</h6>
                        <i class="fas fa-user-friends">
                            <span>List Wisata</span>
                        </i>
                        <i class="fas fa-folder-open">
                            <span>Input Pemesan</span>
                        </i>
                        <i class="fas fa-database">
                            <span>Data Pesanan</span>
                        </i>
                    </div>
                </div>
            </div>
            <div class="workspace col-10">
                <!-- NANTI INClUDE KERJAAN KALIAN DISINI YA, YANG LAIN DI COMMENT BUAT NGETES -->
                <?php include "dashboard.php" ?>
            </div>
        </div>
    </div>

</body>

</html>