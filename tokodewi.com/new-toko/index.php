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
    <?php include 'css/master.css'; ?>
  </style>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
  <title>Toko Q . Com</title>
</head>
<body>

  <!--Navigasi Atas-->
  <?php include 'asset/top-nav.php'; ?>

  <div class="w3-padding w3-center">
    <h1>Produk Yang Di Jual</h1>
  </div>

  <?php

  require 'admin/conn.php';

  $sql = "SELECT nama_barang, jenis_barang, harga_barang, foto FROM daftar_barang";
  $result = $conn->query($sql);
  echo "
  <div class=\"w3-padding\">
  ";

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $rp_harga = number_format(floatval($row["harga_barang"]));
      echo "

      <div class=\"w3-card produk w3-margin w3-center w3-border\">
      <img src=\"/asset/images/".$row["foto"]."\" alt=".$row["nama_barang"]." style=\"width: 100%\">
      <div class=\"w3-container\">
      <h4><b>".$row["nama_barang"]."</b></h4>
      <p>".$row["jenis_barang"]."</p>
      <h4><b>Rp ".$rp_harga."</b></h4>
      </div>
      </div>
      ";
    }
  } else {
    echo "0 results";
  }
  echo "
  </div>
  ";
  $conn->close();
  ?>

</body>
</html>
