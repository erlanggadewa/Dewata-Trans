<?php
include "../config/function.php";
if (isset($_POST['submit'])) {
  resetAkun($_POST['token']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../../css/login.css" />
  <title>Log In</title>
</head>

<body>
  <section class="row">
    <div class="outer">
      <div class="login">
        <img src="../../img/Logo Dewata.png" alt="" />

        <form action="" method="post">
          <input type="text" name="token" id="token" placeholder="Input token reset ..." />
          <br />
          <button type="submit" name="submit">Reset</button>
        </form>
      </div>

      <p>– &copy; Dewata Programmers –</p>
    </div>

    <div class="dewataTrans">
      <h1>Dewata Trans Malang</h1>
      <p>
        Kemudahan dan kenyamanan dalam mendapatkan informasi mengenai rental
        mobil Dewata Trans Malang.
      </p>
      <img src="../../img/mobil_cover.png" alt="" />
    </div>
  </section>
</body>

</html>