<?php
require_once("conn.php");
session_start();
if(isset($_SESSION['email'])) {
  header('location:/index.php');
}
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <style media="screen">
    <?php
    include '../css/master.css';
    ?>
  </style>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Toko Q . Com</title>
</head>
<body>

  <div class="w3-padding">
    <form enctype="multipart/form-data" class="w3-border w3-padding" action="proses-login.php" method="post">
      <table>
        <tr>
          <td class="w3-padding">Username</td>
          <td>:</td>
          <td class="w3-padding">
            <input type="text" placeholder="Email atau No. Hp" class="w3-border w3-input" name="email">
          </td>
        </tr>
        <tr>
          <td class="w3-padding">Password</td>
          <td>:</td>
          <td class="w3-padding">
            <input placeholder="Password Kamu" type="password" class="w3-border w3-input" id="password" name="password">
          </td>
        </tr>
      </table>

      <div class="w3-padding">
        <hr class="w3-border-black">
        <button class="w3-btn w3-blue" type="submit" name="login">Login</button>
        <a class="w3-btn w3-round w3-border" href="daftar.php">Daftar Sekarang</a>
      </form>
      </div>
  </div>
</body>
</html>
