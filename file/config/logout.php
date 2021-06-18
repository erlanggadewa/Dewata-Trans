<?php
include "function.php";
cekLogin();


// * CEK SESSION LOGIN
if (!$_SESSION["login"]) {
    header("Location: index.php");
}


// * DELETE SESSION
$_SESSION = [];
session_unset();

session_destroy();
session_write_close();

// * DELETE COOKIE
$id = hash('sha512', 'id');
$value = hash('sha512', 'value');
setcookie($id, '', time() - 86400, '/'); // ! Setting cookie 1 hari
setcookie($value, '', time() - 86400, '/'); // ! Setting cookie 1 hari
header("Location: ../../index.php");
