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

// INPUT DATA
function inputDataKendaraan($data)
{
    global $conn, $nim_tbbuku;
    $judul_buku = htmlspecialchars($data["judul_buku"]);
    $pengarang = htmlspecialchars($data["pengarang"]);
    $penerbit = htmlspecialchars($data["penerbit"]);

    $query = "INSERT INTO $nim_tbbuku VALUES(default,'$judul_buku','$pengarang','$penerbit')";
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
