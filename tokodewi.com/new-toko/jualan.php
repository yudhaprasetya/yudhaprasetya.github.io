<?php
session_start();
if(!isset($_SESSION['email'])) {
  header('location:/admin/login.php');
} else {
  $email = $_SESSION['email'];
}
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <style media="screen">
    <?php
    include 'css/master.css';
    include 'css/font-awesome.css';
    include 'css/w3-css.css';
    ?>
  </style>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
-->  <title>Toko Q . Com</title>
</head>
<body>

  <!--Navigasi Atas-->
  <?php include 'asset/top-nav.php'; ?>

  <h1 class="w3-center">Mulai Berjualan</h1>

  <div class="w3-padding">
    <?php include 'proses-upload.php'; ?>
    <form enctype="multipart/form-data" class="w3-border w3-padding" action="proses-upload.php" method="post">
      <table>
        <tr>
          <td class="w3-padding">Nama Barang</td>
          <td class="w3-padding"><input type="text" class="w3-border w3-input" name="nama_barang"></td>
        </tr>
        <tr>
          <td class="w3-padding">Jenis Barang</td>
          <td class="w3-padding"><input type="text" class="w3-border w3-input" name="jenis_barang"></td>
        </tr>
        <tr>
          <td class="w3-padding">Harga Barang</td>
          <td class="w3-padding"><input type="number" placeholder="Rp" class="w3-border w3-input" name="harga_barang"><td>
          </tr>
          <tr>
            <td class="w3-padding">Upload Foto</td>
            <td class="w3-padding"><input type="file" class="w3-border w3-input" name="foto[]"></td>
          </tr>
        </table>

        <div class="w3-padding">
          <hr class="w3-border-black">

          <button class="w3-btn w3-blue" type="submit" name="upload">Simpan</button>
          <button class="w3-btn w3-blue" type="reset">Reset form</button>

        </div>
      </form>
    </div>


  </body>
  </html>
