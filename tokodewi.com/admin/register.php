<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
  <script src="/js/javascript.js" charset="utf-8"></script>
  <link rel="stylesheet" href="/css/master.css">
  <title>Daftar | Tokodewi</title>
</head>
<body>

  <?php
  if (isset($_POST['add'])) {
    // code...
    require 'conn.php';
    if (! $conn) {
      // code...

      die('Tidak Dapat Tersambung Ke Database: ' . $conn->connect_error);
    }

    if (! get_magic_quotes_gpc()) {
      // code...
      $username = addslashes($_POST['username']);
      $password = addslashes($_POST['password']);
    } else {
      // code...
      $username = $_POST['username'];
      $password = $_POST['password'];
    }

    date_default_timezone_set("Asia/Jakarta");
    $now = date("Y-m-d H:i:s");

    $sql = "INSERT INTO user" . "(username, password, waktu)"."VALUES"."('$username', '$password', '$now')";

    mysqli_select_db($conn, $sql);
    $retval = mysqli_query($conn, $sql);

    if (! $retval) {
      // code...

      die('Username ini Sudah Digunakan!!!: '. $conn->connect_error);
    }

    echo "<h1>Kamu Berhasil Mendaftar!</h1> Yuk <a href=\"/admin/login.php\">Masuk</a>";
    mysqli_close($conn);
  } else {
    // code...
    ?>

  <div class="w3-padding">
    <div class="w3-center w3-xxxlarge w3-text-green w3-tangerine">
      <a href="/">Tokodewi</a>
    </div>
    <div class="">
      <ul class="w3-ul w3-card-4">
        <li class="w3-display-container">Cukup masuk untuk dapat kode promo GRATISONGKIR, S&K berlaku.
          <span onclick="this.parentElement.style.display='none'" class="w3-button w3-transparent w3-display-right">&times;</span>
        </li>
      </ul>
    </div>
  </div>
  <div class="w3-row">
    <div class="w3-half w3-padding">
      <div style="width:450px" class="w3-padding w3-right">

        <img class="w3-right" src="/img/register_new.png" width="100%" alt="Register New User">
        <p><h3>Jual Beli Mudah Hanya di Tokodewi</h3>Gabung dan rasakan kemudahan bertransaksi di Tokodewi</p>
      </div>
    </div>

    <div class="w3-half w3-padding">
      <div style="width: 400px" class="w3-border w3-padding w3-round w3-center">
        <h2>Daftar Sekarang</h2>
        <p>Sudah punya akun Tokodewi? <a class="w3-text-green" href="/admin/login.php">Masuk</a></p>
        <button class="w3-button w3-margin-right w3-padding w3-round w3-border" type="submit" name="button"><a href="#"><i class="fab fa-facebook-f w3-text-blue w3-large w3-padding"></i> Facebook</a></button>
        <button class="w3-button w3-round w3-padding w3-border" type="submit" name="button"><a href="#"><i class="fab fa-google w3-text-blue w3-large w3-padding"></i> Google</a></button>
        <br>
        <p>atau daftar dengan</p>
        <form class="" action="<?php $PHP_SELF ?>" method="post">
          <p class="w3-left">Nomor Ponsel atau Email</p>
          <input class="w3-input w3-border w3-round" type="text" required placeholder="Nomor Ponsel Atau Email" name="username">
          <p class="w3-left">Katasandi</p>
          <input class="w3-input w3-border w3-round" type="password" required id="password" placeholder="Masukkan Katasandi" name="password">
          <p class="w3-left">Konfirmasi Katasandi</p>
          <input class="w3-input w3-border w3-round" type="password" required id="confirm_password" placeholder="Masukkan Ulang Katasandi">
          <br>
          <button style="width: 100%" type="submit" class="w3-button w3-green w3-round" name="add">Daftar</button>
        </form>
      <?php } ?>
        <p>Dengan mendaftar, saya menyetujui<br><a class="w3-text-green" href="/">Syarat dan Ketentuan</a> serta <a class="w3-text-green" href="/">Kebijakan Privasi</a>.</p>
      </div>
    </div>
  </div>

  <?php include 'footer.php'; ?>

  <script type="text/javascript">
    var password = document.getElementById("password")
    , confirm_password = document.getElementById("confirm_password");
    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
  </script>
</body>
</html>
