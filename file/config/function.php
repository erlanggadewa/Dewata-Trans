<?php
$server = "localhost";
$username = "root";
$pass = "";
$dbname = "dewata_trans";
$conn = mysqli_connect($server, $username, $pass, $dbname);

// AMBIL DATA
function fetchData($query)
{
    global $conn;
    $fetch = mysqli_query($conn, $query);
    $rows = [];
    while ($data = mysqli_fetch_assoc($fetch)) {
        $rows[] = $data;
    }

    return $rows;
}

// * INPUT DATA KENDARAAN
function inputDataKendaraan($data)
{
    global $conn;
    $tb_data_kendaraan = 'data_kendaraan';

    $nama_merek = htmlspecialchars($data["nama_merek"]);
    $nama_mobil = htmlspecialchars($data["nama_mobil"]);
    $warna_mobil = htmlspecialchars($data["warna_mobil"]);
    $jumlah_kursi = htmlspecialchars($data["jumlah_kursi"]);
    $nomor_polisi = htmlspecialchars($data["nomor_polisi"]);
    $tahun_beli = htmlspecialchars($data["tahun_beli"]);
    $gambar_mobil = htmlspecialchars($data["gambar_mobil"]);

    $query = "INSERT INTO $tb_data_kendaraan VALUES('$nomor_polisi','$nama_merek','$nama_mobil','$warna_mobil','$jumlah_kursi','$tahun_beli',1,'$gambar_mobil')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//  * INPUT DATA RENTAL
function inputDataRental($data)
{
    global $conn;
    $tb_data_customer = 'customer';
    $tb_data_rental = 'rental';

    $nama_penyewa = htmlspecialchars($data["nama_penyewa"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $gender = htmlspecialchars($data["gender"]);
    $alamat_penyewa = htmlspecialchars($data["alamat_penyewa"]);
    $tanggal_sewa = htmlspecialchars($data["tanggal_sewa"]);
    $tanggal_kembali = htmlspecialchars($data["tanggal_kembali"]);
    $kota_asal = htmlspecialchars($data["kota_asal"]);
    $kota_tujuan = htmlspecialchars($data["kota_tujuan"]);

    $nama_supir = htmlspecialchars($data["nama_supir"]);
    if (!$nama_supir) $nama_supir = "Tidak memakai supir";

    $no_hp_supir = htmlspecialchars($data["no_hp_supir"]);
    if (!$no_hp_supir) $no_hp_supir = "-";

    $kendaraan = htmlspecialchars($data["pilih_kendaraan"]);
    $total_harga = htmlspecialchars($data["total_harga"]);
    $gambar_penyewa = htmlspecialchars($data["gambar_penyewa"]);


    $query = "INSERT INTO $tb_data_customer VALUES(default,'$nama_penyewa','$no_hp','$gender','$alamat_penyewa','$gambar_penyewa')";
    mysqli_query($conn, $query);

    $last_id = mysqli_insert_id($conn);

    //  ! get data nomor polisi using regex betwen bracket ()
    preg_match('#\((.*?)\)#', $kendaraan, $nomor_polisi);
    $nomor_polisi = $nomor_polisi[1];

    $query = "INSERT INTO $tb_data_rental VALUES(default,'$last_id','$nomor_polisi','$tanggal_sewa','$tanggal_kembali','$kota_asal','$kota_tujuan','$nama_supir','$no_hp_supir','$kendaraan','$total_harga')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// * INPUT DATA WISATA
function inputDataWisata($data)
{
    global $conn;
    $tb_data_customer = 'customer';
    $tb_data_rental = 'order_wisata';

    $nama_penyewa = htmlspecialchars($data["nama_penyewa"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $gender = htmlspecialchars($data["gender"]);
    $alamat_penyewa = htmlspecialchars($data["alamat_penyewa"]);
    $tanggal_sewa = htmlspecialchars($data["tanggal_sewa"]);
    $tanggal_kembali = htmlspecialchars($data["tanggal_kembali"]);
    $kota_asal = htmlspecialchars($data["kota_asal"]);
    $nama_paket = htmlspecialchars($data["nama_paket"]);

    $nama_supir = htmlspecialchars($data["nama_supir"]);
    if (!$nama_supir) $nama_supir = "Tidak memakai supir";

    $no_hp_supir = htmlspecialchars($data["no_hp_supir"]);
    if (!$no_hp_supir) $no_hp_supir = "-";

    $kendaraan = htmlspecialchars($data["pilih_kendaraan"]);
    $total_harga = htmlspecialchars($data["total_harga"]);
    $gambar_penyewa = htmlspecialchars($data["gambar_penyewa"]);


    $query = "INSERT INTO $tb_data_customer VALUES(default,'$nama_penyewa','$no_hp','$gender','$alamat_penyewa','$gambar_penyewa')";
    mysqli_query($conn, $query);

    $last_id = mysqli_insert_id($conn);

    //  ! get data nomor polisi using regex betwen bracket ()
    preg_match('#\((.*?)\)#', $kendaraan, $nomor_polisi);
    var_dump($nomor_polisi);
    $nomor_polisi = $nomor_polisi[1];
    var_dump($nomor_polisi);


    $id_paket = fetchData("SELECT id_paket FROM paket_wisata WHERE nama_paket='$nama_paket'");
    $id_paket = $id_paket[0]['id_paket'];

    $query = "INSERT INTO $tb_data_rental VALUES(default,'$last_id','$id_paket','$nomor_polisi','$tanggal_sewa','$tanggal_kembali','$kota_asal','$nama_paket','$nama_supir','$no_hp_supir','$kendaraan','$total_harga')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// INPUT DATA Paket Wisata
function inputListPaket($data)
{
    global $conn;
    $tb_data_paket = 'paket_wisata';

    $nama_paket = htmlspecialchars($data["nama-paket"]);
    $tempat_wisata = htmlspecialchars($data["tempat-wisata"]);
    $fasilitas = htmlspecialchars($data["fasilitas"]);

    $query = "INSERT INTO $tb_data_paket VALUES(default,'$nama_paket','$tempat_wisata','$fasilitas')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//  DELETE DATA
function deleteData($data)
{
    global $conn, $nim_tbbuku;
    $query = "DELETE FROM $nim_tbbuku WHERE id_buku = $data";
    mysqli_query($conn, $query);
}

// EDIT DATA
function editBook($data)
{
    $id_buku = htmlspecialchars($data["id_buku"]);
    $judul_buku = htmlspecialchars($data["judul_buku"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $pengarang = htmlspecialchars($data["pengarang"]);

    global $conn, $nim_tbbuku;

    $sql = "UPDATE $nim_tbbuku SET
		judul_buku = '$judul_buku',
		penerbit = '$penerbit',
		pengarang = '$pengarang'
		WHERE id_buku = $id_buku";
    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}

// CARI BUKU
function findBook($keyword)
{
    global $nim_tbbuku;
    $jenisQuery = "SELECT * FROM $nim_tbbuku WHERE 
		id_buku LIKE '%$keyword%' OR
		judul_buku LIKE '%$keyword%' OR
		pengarang LIKE '%$keyword%' OR
		penerbit LIKE '%$keyword%'";

    return fetchData($jenisQuery);
}

// * UPLOAD GAMBAR 

function uploadGambar()
{
    // ! $_FILES = array assosiatif 2 dimensi
    $namaGambar = $_FILES["Profil_Gambar"]["name"];
    $errorGambar = $_FILES["Profil_Gambar"]["error"];
    $sizeGambar = $_FILES["Profil_Gambar"]["size"];
    $tmpName = $_FILES["Profil_Gambar"]["tmp_name"];
    $ektensiValid = ["jpg", "jpeg", "png"];

    // * Mengambil ektensi gambar
    $ektensiGambar = explode(".", $namaGambar);
    $ektensiGambar = strtolower(end($ektensiGambar));

    if ($errorGambar === 4) {
        echo "<script>
				alert('Pilih Gambar Terlebih Dahulu');		
				</script>";
        return false;
    } else if ($sizeGambar > 5000000) {
        echo "<script>
				alert('Size Gambar Melebihi 5 mega byte');		
				</script>";
        return false;
    } else if ((!in_array($ektensiGambar, $ektensiValid))) {
        echo "<script>
				alert('Harap masukan gambar dengan type (jpg, jpeg, png)');		
				</script>";
        return false;
    } else { // ! STEP INI BERARTI SUKSES DAN SIAP UNTUK DI UPLOAD
        $namaGambarAcak = uniqid(uniqid());
        // ! memnindahkan gambar ke folder yang posisinya relatif terhadap file ini
        $namaGambarFinal = $namaGambarAcak . "." . $ektensiGambar;
        move_uploaded_file($tmpName, "img/" . $namaGambarFinal);
        return ("img/" . $namaGambarFinal);
    }
}
