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
        `jumlah_kursi` INT(10) NOT NULL,
        `tahun_beli` INT(10) NOT NULL,
        `status` INT(1) NOT NULL,
        `gambar_mobil` VARCHAR(200),
        PRIMARY KEY (`nomor_polisi`)
    );",
    "CREATE TABLE `customer` (
        `id_customer` INT(100) NOT NULL AUTO_INCREMENT,
        `nama_penyewa` VARCHAR(200) NOT NULL,
        `no_hp` VARCHAR(20) NOT NULL,
        `jenis_kelamin` VARCHAR(20) NOT NULL,
        `alamat` VARCHAR(200) NOT NULL,
        `gambar_customer` VARCHAR(200),
        PRIMARY KEY (`id_customer`)
    );",
    "CREATE TABLE `rental` (
        `id_transaksi` INT(100) NOT NULL AUTO_INCREMENT,
        `id_customer` INT(100) NOT NULL,
        `nomor_polisi` VARCHAR(20) NOT NULL,
        `tanggal_sewa` DATE NOT NULL,
        `tanggal_kembali` DATE NOT NULL,
        `kota_asal` VARCHAR(200) NOT NULL,
        `kota_tujuan` VARCHAR(200) NOT NULL,
        `nama_supir` VARCHAR(200),
        `no_hp_supir` VARCHAR(20),
        `nama_mobil` VARCHAR(200) NOT NULL,
        `total_harga_rental` VARCHAR(50) NOT NULL,
        FOREIGN KEY (`nomor_polisi`) REFERENCES data_kendaraan(`nomor_polisi`) ON DELETE CASCADE,
        FOREIGN KEY (`id_customer`) REFERENCES customer(`id_customer`) ON DELETE CASCADE,
        PRIMARY KEY (`id_transaksi`)
    );",
    "CREATE TABLE `paket_wisata` (
        `id_paket` INT(100) NOT NULL AUTO_INCREMENT,
        `nama_paket` VARCHAR(200) NOT NULL,
        `tujuan` VARCHAR(200) NOT NULL,
        `fasilitas` VARCHAR(1000) NOT NULL,
        PRIMARY KEY (`id_paket`)
    );",
    "CREATE TABLE `order_wisata` (
        `id_transaksi` INT(100) NOT NULL AUTO_INCREMENT,
        `id_customer` INT(100) NOT NULL,
        `id_paket` INT(100) NOT NULL,
        `nomor_polisi` VARCHAR(20) NOT NULL,
        `tanggal_sewa` DATE NOT NULL,
        `tanggal_kembali` DATE NOT NULL,
        `kota_asal` VARCHAR(200) NOT NULL,
        `nama_paket` VARCHAR(200) NOT NULL,
        `nama_supir` VARCHAR(200) DEFAULT NULL,
        `no_hp_supir` VARCHAR(20) DEFAULT NULL,
        `nama_mobil` VARCHAR(200) NOT NULL,
        `total_harga_wisata` VARCHAR(50) NOT NULL,
        FOREIGN KEY (`nomor_polisi`) REFERENCES data_kendaraan(`nomor_polisi`) ON DELETE CASCADE,
        FOREIGN KEY (`id_customer`) REFERENCES customer(`id_customer`) ON DELETE CASCADE,
        PRIMARY KEY (`id_transaksi`)
    );",
    "CREATE TABLE `data_akun` (
        `id_akun` INT(100) NOT NULL AUTO_INCREMENT,
        `username` VARCHAR(200) NOT NULL,
        `password` VARCHAR(1000) NOT NULL,
        PRIMARY KEY (`id_akun`)
    );"
];

global $conn;
foreach ($sql as $data) mysqli_query($conn, $data);
