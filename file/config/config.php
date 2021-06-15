<?php
$server = "localhost";
$username = "root";
$pass = "";
$dbname = "dewata_trans";

// * Create DB
$connMariaDB = mysqli_connect($server, $username, $pass);
mysqli_query($connMariaDB, "CREATE DATABASE IF NOT EXISTS $dbname");
$conn = mysqli_connect($server, $username, $pass, $dbname);

$sql = [
    "CREATE TABLE `data_kendaraan` (
        `nomor_polisi` VARCHAR(20) NOT NULL,
        `merek_mobil` VARCHAR(200) NOT NULL,
        `nama_mobil` VARCHAR(200) NOT NULL,
        `warna_mobil` VARCHAR(20) NOT NULL,
        `jumlah_kursi` INT(5) NOT NULL,
        `tahun_beli` INT(5) NOT NULL,
        `status` INT(1) NOT NULL,
        `gambar_mobil` VARCHAR(200),
        PRIMARY KEY (`nomor_polisi`)
    );",
    "CREATE TABLE `customer` (
        `id_customer` INT(10) NOT NULL AUTO_INCREMENT,
        `nama_penyewa` VARCHAR(200) NOT NULL,
        `no_hp` INT(13) NOT NULL,
        `jenis_kelamin` VARCHAR(10) NOT NULL,
        `alamat` VARCHAR(200) NOT NULL,
        `gambar_customer` VARCHAR(200),
        PRIMARY KEY (`id_customer`)
    );",
    "CREATE TABLE `rental` (
        `id_transaksi` INT(10) NOT NULL AUTO_INCREMENT,
        `id_customer` INT(10) NOT NULL,
        `nomor_polisi` VARCHAR(20) NOT NULL,
        `tanggal_sewa` DATE NOT NULL,
        `tanggal_kembali` DATE NOT NULL,
        `kota_asal` VARCHAR(100) NOT NULL,
        `kota_tujuan` VARCHAR(100) NOT NULL,
        `nama_supir` VARCHAR(200),
        `no_hp_supir` VARCHAR(13),
        `nama_mobil` VARCHAR(200) NOT NULL,
        `total_harga_rental` INT NOT NULL,
        FOREIGN KEY (`nomor_polisi`) REFERENCES data_kendaraan(`nomor_polisi`) ON DELETE CASCADE,
        FOREIGN KEY (`id_customer`) REFERENCES customer(`id_customer`) ON DELETE CASCADE,
        PRIMARY KEY (`id_transaksi`)
    );",
    "CREATE TABLE `paket_wisata` (
        `id_paket` INT(10) NOT NULL AUTO_INCREMENT,
        `nama_paket` VARCHAR(200) NOT NULL,
        `tujuan` VARCHAR(200) NOT NULL,
        `fasilitas` VARCHAR(1000) NOT NULL,
        PRIMARY KEY (`id_paket`)
    );",
    "CREATE TABLE `order_wisata` (
        `id_transaksi` int(10) NOT NULL AUTO_INCREMENT,
        `id_customer` int(10) NOT NULL,
        `id_paket` int(10) NOT NULL,
        `nomor_polisi` varchar(20) NOT NULL,
        `tanggal_sewa` date NOT NULL,
        `tanggal_kembali` date NOT NULL,
        `kota_asal` varchar(100) NOT NULL,
        `nama_paket` varchar(200) NOT NULL,
        `nama_supir` varchar(200) DEFAULT NULL,
        `no_hp_supir` varchar(13) DEFAULT NULL,
        `nama_mobil` varchar(200) NOT NULL,
        `total_harga_wisata` int(11) NOT NULL,
        FOREIGN KEY (`nomor_polisi`) REFERENCES data_kendaraan(`nomor_polisi`) ON DELETE CASCADE,
        FOREIGN KEY (`id_customer`) REFERENCES customer(`id_customer`) ON DELETE CASCADE,
        PRIMARY KEY (`id_transaksi`)
    );",
    "CREATE TABLE `data_akun` (
        `id_akun` INT(10) NOT NULL AUTO_INCREMENT,
        `username` VARCHAR(200) NOT NULL,
        `password` VARCHAR(1000) NOT NULL,
        PRIMARY KEY (`id_akun`)
    );"
];

global $conn;
foreach ($sql as $data) mysqli_query($conn, $data);
