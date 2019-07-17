<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" media="screen, print" href="/css/master.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
  <title>Toko Q . Com</title>
</head>
<body>

  <!--Navigasi Atas-->
  <?php include 'asset/top-nav.php'; ?>

  <div class="w3-padding">
    <button class="w3-btn w3-blue" style="width: 150px;" name="button">Mulai Belanja</button>
  </div>
  <div class="w3-padding">
    <a href="jualan.php" class="w3-btn w3-blue" style="width: 150px;">Mulai Berjualan</a>
  </div>
  <div class="w3-padding">
    <a href="jualan.php" class="w3-btn w3-blue" style="width: 150px;">History Belanja</a>
  </div>

  <?php

  require 'admin/conn.php';

  $sql = "SELECT nama_bahan, jenis_barang, harga_barang, foto FROM daftar_barang";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "
      <div class=\"w3-card\" style=\"width:25%\">
      <img src=\"/asset/images/".$row["foto"]."\" alt=".$row["nama_bahan"]." style=\"width:100%\">
      <div class=\"w3-container\">
      <h4><b>".$row["nama_bahan"]."</b></h4>
      <p>".$row["jenis_barang"]."</p>
      <h4><b>".$row["harga_barang"]."</b></h4>
      </div>
      ";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
  ?>


</body>
</html>
