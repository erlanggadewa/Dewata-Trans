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
setcookie('login', '', time() - 3600, '/');

header("Location: ../../index.php");
