<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <style media="screen">
    <?php
    include '../css/master.css';
    include '../css/font-awesome.css';
    include '../css/w3-css.css';
    ?>
  </style>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
-->  <title>Toko Q . Com</title>
</head>
<body>

  <div class="w3-padding">
    <?php include 'proses-daftar.php'; ?>
    <form enctype="multipart/form-data" class="w3-border w3-padding" action="proses-daftar.php" method="post">
      <table>
        <tr>
          <td class="w3-padding">Nama Lengkap</td>
          <td>:</td>
          <td class="w3-padding"><input placeholder="Nama Lengkap Kamu" required type="text" class="w3-border w3-input" name="nama_lkp"></td>
        </tr>
        <tr>
          <td class="w3-padding">Alamat e-mail</td>
          <td>:</td>
          <td class="w3-padding"><input placeholder="Alamat E-mail Kamu" required type="text" class="w3-border w3-input" name="email"></td>
        </tr>
        <tr>
          <td class="w3-padding">Nomor HP</td>
          <td>:</td>
          <td class="w3-padding"><input type="number" placeholder="Nomor Handphone Kamu" required class="w3-border w3-input" name="nohp"></td>
        </tr>
        <tr>
          <td class="w3-padding">Password</td>
          <td>:</td>
          <td class="w3-padding"><input type="password" placeholder="Katasandi Kamu" required class="w3-border w3-input" name="password"></td>
        </tr>
        <tr>
          <td class="w3-padding">Alamat Lengkap</td>
          <td>:</td>
          <td class="w3-padding"><input type="text" placeholder="Masukkan Alamat Lengkap Kamu" required class="w3-border w3-input" name="alamat"></td>
        </tr>
      </table>

      <div class="w3-padding">
        <hr class="w3-border-black">

        <button class="w3-btn w3-blue" type="submit" name="daftar">Daftar</button>
        <a class="w3-btn w3-border w3-round" href="login.php">Login</a>
      </form>
    </div>
  </div>
</body>
</html>
