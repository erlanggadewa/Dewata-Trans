<?php
session_start();

$server = "localhost";
$username = "root";
$pass = "";
$dbname = "dewata_trans";
$conn = mysqli_connect($server, $username, $pass, $dbname);

// * AMBIL DATA
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

    $gambar_mobil = uploadGambar();

    $query = "INSERT INTO $tb_data_kendaraan VALUES('$nomor_polisi','$nama_merek','$nama_mobil','$warna_mobil','$jumlah_kursi','$tahun_beli',1,'$gambar_mobil')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// * EDIT DATA KENDARAAN 
function editDataKendaraan($data)
{
    global $conn;
    $tb_data_kendaraan = 'data_kendaraan';

    $nama_merek = htmlspecialchars($data["nama_merek"]);
    $nama_mobil = htmlspecialchars($data["nama_mobil"]);
    $warna_mobil = htmlspecialchars($data["warna_mobil"]);
    $jumlah_kursi = htmlspecialchars($data["jumlah_kursi"]);
    $nomor_polisi = htmlspecialchars($data["nomor_polisi"]);
    $tahun_beli = htmlspecialchars($data["tahun_beli"]);


    $gambar = uploadGambar();


    $query = "UPDATE $tb_data_kendaraan SET
        merek_mobil = '$nama_merek',
        nama_mobil = '$nama_mobil',
        warna_mobil= '$warna_mobil',
        jumlah_kursi = '$jumlah_kursi',
        tahun_beli = '$tahun_beli',
        gambar_mobil = '$gambar' 
        WHERE nomor_polisi = '$nomor_polisi'";

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
    $gambar_penyewa = uploadGambar();


    $query = "INSERT INTO $tb_data_customer VALUES(NULL,'$nama_penyewa','$no_hp','$gender','$alamat_penyewa','$gambar_penyewa')";
    mysqli_query($conn, $query);

    $last_id = mysqli_insert_id($conn);

    //  ! get data nomor polisi using regex betwen bracket ()
    preg_match('#\((.*?)\)#', $kendaraan, $nomor_polisi);
    $nomor_polisi = $nomor_polisi[1];

    $query = "INSERT INTO $tb_data_rental VALUES(NULL,'$last_id','$nomor_polisi','$tanggal_sewa','$tanggal_kembali','$kota_asal','$kota_tujuan','$nama_supir','$no_hp_supir','$kendaraan','$total_harga')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function editDataRental($data)
{
    global $conn;
    $tb_data_customer = 'customer';
    $tb_data_rental = 'rental';

    $id = htmlspecialchars($data["idTarget"]);
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
    $gambar_penyewa = uploadGambar();


    $query = "UPDATE $tb_data_customer SET
    nama_penyewa = '$nama_penyewa',
    no_hp = '$no_hp',
    jenis_kelamin = '$gender',
    alamat = '$alamat_penyewa',
    gambar_customer = '$gambar_penyewa' 
    WHERE id_customer = $id";
    mysqli_query($conn, $query);

    //  ! get data nomor polisi using regex betwen bracket ()
    preg_match('#\((.*?)\)#', $kendaraan, $nomor_polisi);
    $nomor_polisi = $nomor_polisi[1];

    $query = "UPDATE $tb_data_rental SET
    nomor_polisi = '$nomor_polisi',
    tanggal_sewa = '$tanggal_sewa',
    tanggal_kembali = '$tanggal_kembali',
    kota_asal = '$kota_asal',
    kota_tujuan = '$kota_tujuan',
    nama_supir = '$nama_supir',
    no_hp_supir = '$no_hp_supir',
    nama_mobil = '$kendaraan',
    total_harga_rental = '$total_harga'
    WHERE id_customer = $id";

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
    $gambar_penyewa = uploadGambar();


    $query = "INSERT INTO $tb_data_customer VALUES(NULL,'$nama_penyewa','$no_hp','$gender','$alamat_penyewa','$gambar_penyewa')";
    mysqli_query($conn, $query);

    $last_id = mysqli_insert_id($conn);

    //  ! get data nomor polisi using regex betwen bracket ()
    preg_match('#\((.*?)\)#', $kendaraan, $nomor_polisi);
    $nomor_polisi = $nomor_polisi[1];


    $id_paket = fetchData("SELECT id_paket FROM paket_wisata WHERE nama_paket='$nama_paket'");
    $id_paket = $id_paket[0]['id_paket'];

    $query = "INSERT INTO $tb_data_rental VALUES(NULL,'$last_id','$id_paket','$nomor_polisi','$tanggal_sewa','$tanggal_kembali','$kota_asal','$nama_paket','$nama_supir','$no_hp_supir','$kendaraan','$total_harga')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// * EDIT DATA WISATA
function editDataWisata($data)
{
    global $conn;
    $tb_data_customer = 'customer';
    $tb_data_rental = 'order_wisata';

    $id = htmlspecialchars($data["idTarget"]);
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
    $gambar_penyewa = uploadGambar();


    $query = "UPDATE $tb_data_customer SET
    nama_penyewa = '$nama_penyewa',
    no_hp = '$no_hp',
    jenis_kelamin = '$gender',
    alamat = '$alamat_penyewa',
    gambar_customer = '$gambar_penyewa' 
    WHERE id_customer = $id";
    mysqli_query($conn, $query);


    //  ! get data nomor polisi using regex betwen bracket ()
    preg_match('#\((.*?)\)#', $kendaraan, $nomor_polisi);
    $nomor_polisi = $nomor_polisi[1];


    $id_paket = fetchData("SELECT id_paket FROM paket_wisata WHERE nama_paket='$nama_paket'");
    $id_paket = $id_paket[0]['id_paket'];

    $query = "UPDATE $tb_data_rental SET
    id_paket = '$id_paket',
    nomor_polisi = '$nomor_polisi',
    tanggal_sewa = '$tanggal_sewa',
    tanggal_kembali = '$tanggal_kembali',
    kota_asal = '$kota_asal',
    nama_paket = '$nama_paket',
    nama_supir = '$nama_supir',
    no_hp_supir = '$no_hp_supir',
    nama_mobil = '$kendaraan',
    total_harga_wisata = '$total_harga' 
    WHERE id_customer = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// * INPUT DATA Paket Wisata
function inputListPaket($data)
{
    global $conn;
    $tb_data_paket = 'paket_wisata';

    $nama_paket = htmlspecialchars($data["nama-paket"]);
    $tempat_wisata = htmlspecialchars($data["tempat-wisata"]);
    $fasilitas = htmlspecialchars($data["fasilitas"]);

    $query = "INSERT INTO $tb_data_paket VALUES(NULL,'$nama_paket','$tempat_wisata','$fasilitas')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function editListPaket($data)
{
    global $conn;
    $tb_data_paket = 'paket_wisata';

    $nama_paket = htmlspecialchars($data["nama-paket"]);
    $tujuan = htmlspecialchars($data["tempat-wisata"]);
    $fasilitas = htmlspecialchars($data["fasilitas"]);
    $idTarget = $data['idTarget'];


    $query = "UPDATE $tb_data_paket SET
    nama_paket = '$nama_paket',
    tujuan = '$tujuan',
    fasilitas = '$fasilitas'
    WHERE id_paket = $idTarget";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// * CARI DATA KEENDARAAN DI DATABASE
function findDataPaket($keyword)
{
    $jenisQuery = "SELECT * FROM paket_wisata WHERE 
		nama_paket LIKE '%$keyword%' OR
		tujuan LIKE '%$keyword%'";

    return fetchData($jenisQuery);
}


// * UPLOAD GAMBAR 

function uploadGambar()
{
    // ! $_FILES = array assosiatif 2 dimensi
    $namaGambar = $_FILES["gambar"]["name"];
    $errorGambar = $_FILES["gambar"]["error"];
    $sizeGambar = $_FILES["gambar"]["size"];
    $tmpName = $_FILES["gambar"]["tmp_name"];
    $ektensiValid = ["jpg", "jpeg", "png"];

    // * Mengambil ektensi gambar
    $ektensiGambar = explode(".", $namaGambar);
    $ektensiGambar = strtolower(end($ektensiGambar));
    if ($errorGambar === 4) {
        return ("../../img/no_img.png");
    } else if ($sizeGambar > 10000000) {
        echo "<script>
				alert('Size Gambar Melebihi 10 mega byte');		
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
        $dirname = str_replace("\\", "/", dirname(dirname(getcwd())));
        move_uploaded_file($tmpName, $dirname . "/img/gambar_data/" . $namaGambarFinal);
        return ("../../img/gambar_data/" . $namaGambarFinal);
    }
}

// * CARI DATA KEENDARAAN DI DATABASE
function findDataKendaraan($keyword)
{
    $jenisQuery = "SELECT * FROM data_kendaraan WHERE 
		merek_mobil LIKE '%$keyword%' OR
		nama_mobil LIKE '%$keyword%'";

    return fetchData($jenisQuery);
}

// * CARI DATA DI DATABASE
function findDataRental($keyword)
{
    $jenisQuery = "SELECT customer.id_customer, customer.nama_penyewa, rental.kota_tujuan, rental.tanggal_sewa, rental.tanggal_kembali FROM customer 
    INNER JOIN rental ON customer.id_customer = rental.id_customer 
    WHERE customer.nama_penyewa LIKE '%$keyword%'OR 
    rental.kota_tujuan LIKE '%$keyword%' OR
    rental.tanggal_sewa LIKE '%$keyword%' OR
    rental.tanggal_kembali LIKE '%$keyword%'";

    return fetchData($jenisQuery);
}
// * CARI DATA DI DATABASE
function findDataWisata($keyword)
{
    $jenisQuery = "SELECT customer.id_customer, customer.nama_penyewa, order_wisata.nama_paket, order_wisata.tanggal_sewa, order_wisata.tanggal_kembali FROM customer 
    INNER JOIN order_wisata ON customer.id_customer = order_wisata.id_customer 
    WHERE customer.nama_penyewa LIKE '%$keyword%'OR 
    order_wisata.nama_paket LIKE '%$keyword%' OR
    order_wisata.tanggal_sewa LIKE '%$keyword%' OR
    order_wisata.tanggal_kembali LIKE '%$keyword%'";

    return fetchData($jenisQuery);
}

function rekapData($bulan, $tahun)
{
    $arrData = [];
    $rekap_rental = fetchData("SELECT rental.nama_mobil,
		rental.tanggal_sewa,
		SUM(rental.total_harga_rental) AS 'total_harga'
		FROM rental
		WHERE MONTH(rental.tanggal_sewa) = $bulan AND YEAR(rental.tanggal_sewa) = $tahun
		GROUP BY rental.nama_mobil;");
    $arrData[] = $rekap_rental;
    $rekap_wisata = fetchData("SELECT order_wisata.nama_mobil,
		order_wisata.tanggal_sewa,
		SUM(order_wisata.total_harga_wisata) AS 'total_harga'
		FROM order_wisata
		WHERE MONTH(order_wisata.tanggal_sewa) = $bulan AND YEAR(order_wisata.tanggal_sewa) = $tahun
		GROUP BY order_wisata.nama_mobil;");
    $arrData[] = $rekap_wisata;
    return $arrData;
}

function toMonthName($number)
{
    // PHP program to convert number to month name
    // Declare month number and initialize it
    $monthNum = $number;
    // Create date object to store the DateTime format
    $dateObj = DateTime::createFromFormat('!m', $monthNum);
    // Store the month name to variable
    return $monthName = $dateObj->format('F');
}



// * FUNCTION AKUN
function resetAkun($keyword)
{
    $keyword = hash('sha512', $keyword);
    $hash = hash('sha512', 'dewata707');
    if ($keyword === $hash) {
        $valid_status = hash('sha512', 'valid');
        $token = hash('sha512', 'dewata707');
        $_SESSION[$valid_status] = $token;
        echo "<script>
        alert('Token anda benar, silahkan input username dan password baru');
        location.href = 'reset-akun.php';
        </script>";
    } else echo "<script>alert('Token Salah')</script>";
}

function addAccount($data)
{
    global $conn;
    $userName = strtolower($data["username"]);
    $password = password_hash(mysqli_real_escape_string($conn, $data["password"]), PASSWORD_DEFAULT);

    $jenisQuery = "DELETE FROM data_akun WHERE '$userName' = username";
    mysqli_query($conn, $jenisQuery);

    $jenisQuery = "INSERT INTO data_akun VALUE (NULL,'$userName', '$password')";
    mysqli_query($conn, $jenisQuery);
    return mysqli_affected_rows($conn);
}

function loginAccount($jenisQuery, $data)
{
    global $conn;
    $result = mysqli_query($conn, $jenisQuery);
    $rowData = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) === 1) {
        if (password_verify($data["password"], $rowData["password"])) {
            $_SESSION["login"] = true;
            $_SESSION["id_akun"] = $rowData['id_akun'];
            if (isset($data["remember"])) {
                $id = hash('sha512', 'id');
                $value = hash('sha512', 'value');
                setcookie($id, $rowData['id_akun'], time() + 86400, '/'); // ! Setting cookie 1 hari
                setcookie($value, hash('sha512', $rowData['username']), time() + 86400, '/'); // ! Setting cookie 1 hari
            }
            header("Location: file/view/dashboard.php");
        }
    }
}
// * END FUNCTION AKUN
function cekLogin()
{
    if (!isset($_SESSION["login"]) || $_SESSION["login"] != true) {
        echo ("<script>
        alert('Harap login terlebih dahulu');
        location.href = '../../index.php';
        </script>");
    }
}
