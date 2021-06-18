<?php
include "../config/function.php";
cekLogin();
include "../config/updatePending.php";
include "../config/updateOnGoing.php";
if (isset($_SESSION["id_akun"])) {
	$id = $_SESSION["id_akun"];
	$data = fetchData("SELECT * FROM `data_akun` WHERE id_akun=$id");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/responsive.min.css">
	<link rel="stylesheet" href="../../asset/font-awesome/css/all.min.css">
	<link rel="stylesheet" href="../../css/index.min.css">
	<title>Dewata Trans</title>
</head>

<body>
	<header class="d-sm-none">
		<i class="fas fa-align-left show-sidebar"></i>
		<img src="../../img/DewataTransMalang.png" alt="">
	</header>
	<div class="container-fluid wrapper-all">
		<div class="row">
			<div class="wrapper-sidebar  col-12 col-sm-3 col-md-2 container-fluid g-0 d-none d-sm-block">
				<div class="sidebar col-8 col-sm-3 col-md-2 g-0 ">
					<img src="../../img/Group80.png" alt="" class="d-none d-sm-block g-0">
					<div class="toggle">
						<i class="fas fa-angle-left d-sm-none close-sidebar"></i>
						<span class="d-sm-none">Menu</span>
					</div>
					<navbar class="navbar">
						<div class="grup-nav dashboard">
							<i class="fas fa-house-user" data-ref="dashboard.php" onclick="window.location='dashboard.php'">
								<span data-ref="dashboard.php">&nbsp;Dashboard</span>
							</i>
						</div>
						<div class="grup-nav master-mobil">
							<h6>Master Mobil</h6>
							<hr>
							<i class="fas fa-car" data-ref="data-kendaraan.php" onclick="window.location='data-kendaraan.php'">
								<span data-ref="data-kendaraan.php">&nbsp;Data Kendaraan</span>
							</i>
						</div>
						<div class="grup-nav status">
							<h6>Status</h6>
							<hr>
							<i class="fas fa-envelope-open-text" data-ref="pending.php" onclick="window.location='pending.php'">
								<span data-ref="pending.php">&nbsp;Pending</span>
							</i>
							<i class="fas fa-route" data-ref="ongoing.php" onclick="window.location='ongoing.php'">
								<span data-ref="ongoing.php">&nbsp;On Going</span>
							</i>
						</div>
						<div class="grup-nav rental-mobil">
							<h6>Rental Mobil</h6>
							<hr>
							<i class="fas fa-folder-open" data-ref="input-rental-mobil.php" onclick="window.location='input-rental-mobil.php'">
								<span data-ref="input-rental-mobil.php">&nbsp;Input Pemesan</span>
							</i>
							<i class="fas fa-database" data-ref="data-pesanan-rental.php" onclick="window.location='data-pesanan-rental.php'">
								<span data-ref="data-pesanan-rental.php">&nbsp;&nbsp;Data Pesanan</span>
							</i>
						</div>
						<div class="grup-nav paket-pariwisata">
							<h6>Paket Pariwisata</h6>
							<hr>
							<i class="fas fa-calendar-check" data-ref="list-paket-wisata.php" onclick="window.location='list-paket-wisata.php'">
								<span data-ref="list-paket-wisata.php">&nbsp;&nbsp;List Wisata</span>
							</i>
							<i class="fas fa-folder-open" data-ref="input-paket-wisata.php" onclick="window.location='input-paket-wisata.php'">
								<span data-ref="input-paket-wisata.php">&nbsp;Input Pemesan</span>
							</i>
							<i class="fas fa-database" data-ref="data-pesanan-wisata.php" onclick="window.location='data-pesanan-wisata.php'">
								<span data-ref="data-pesanan-wisata.php">&nbsp;&nbsp;Data Pesanan</span>
							</i>
						</div>
						<div class="grup-nav">
							<h6>Logout Akun</h6>
							<i class="fas fa-user-circle admin-icon" onclick="confirm('Yakin Ingin Logout ?') ? (window.location='../config/logout.php') : (false)">
								<span>&nbsp;&nbsp;<?= $data[0]['username'] ?></span>
							</i>

						</div>
					</navbar>
				</div>
			</div>
			<div class="workspace col-12 col-sm-9 col-md-10">