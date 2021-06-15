<?php
include "file/config/config.php";
include "file/config/function.php";


// * CEK SESSION & COOKIE LOGIN
if (isset($_COOKIE["login"])) {
  if ($_COOKIE["login"] == 'true') {
    $_SESSION["login"] = true;
  }
}


if (isset($_SESSION["login"])) {
  if ($_SESSION["login"]) {
    header("Location: file/view/dashboard.php");
    exit();
  }
}

if (isset($_POST["submit"])) {
  $username = $_POST["username"];
  $jenisQuery = "SELECT * FROM data_akun WHERE username = '$username'";
  if (!loginAccount($jenisQuery, $_POST)) echo "<script>alert('Username / Password anda tidak ditemukan')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/login.css" />
  <title>Log In</title>
</head>

<body>
  <section class="row">
    <div class="outer">
      <div class="login">
        <img src="img/Logo Dewata.png" alt="" />

        <form action="" method="post">
          <input type="text" name="username" id="username" placeholder="Username" style="margin-bottom: 15px" autocomplete="off" />
          <input type="password" name="password" id="password" placeholder="Password" autocomplete="off" />
          <br />
          <div class="form-check">
            <input class="form-check-input" name="remember" type="checkbox" id="flexCheckDefault" style="display:inline-block">
            <label class="form-check-label" for="flexCheckDefault">
              Remember me
            </label>
          </div>
          <br />
          <button type="submit" name="submit">Log In</button>
        </form>

        <p>Forget Password? <a href="file/view/token.php"> Click here </a></p>
      </div>

      <p>– &copy; Dewata Programmers –</p>
    </div>

    <div class="dewataTrans">
      <h1>Dewata Trans Malang</h1>
      <p>
        Kemudahan dan kenyamanan dalam mendapatkan informasi mengenai rental
        mobil Dewata Trans Malang.
      </p>
      <img src="img/mobil_cover.png" alt="" />
    </div>
  </section>
</body>

</html>