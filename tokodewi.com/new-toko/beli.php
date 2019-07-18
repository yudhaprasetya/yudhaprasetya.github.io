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

  <h1 class="w3-center">Jumlah Pembelian</h1>

  <?php
  if (!empty($_REQUEST['id'])) {
    date_default_timezone_set("Asia/Jakarta");
    $id = addslashes($_REQUEST['id']);
    require 'admin/conn.php';

    $sql = "SELECT id, nama_barang, jenis_barang, harga_barang, foto FROM daftar_barang WHERE id = '$id'";
    $result = $conn->query($sql);
    echo "
    <div class=\"w3-padding\">
    ";

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $rp_harga = number_format(floatval($row["harga_barang"]));
        echo "

        <div class=\"w3-card beli w3-margin w3-center w3-border\">
        <img src=\"/asset/images/".$row["foto"]."\" alt=".$row["nama_barang"]." style=\"width: 100%\">
        <div class=\"w3-container\">
          <p>".$row["jenis_barang"]."</p>
        </div>
      </div>

      <div class=\"w3-padding\">
      <form action=\"proses-beli.php?id=".$row['id']."\" method=\"post\">
      <table>
      <tr>
      <td class=\"w3-padding\">Nama Barang</td>
      <td class=\"w3-padding\"><b>".$row["nama_barang"]."</b></td>
      </tr>
      <tr>
      <td class=\"w3-padding\">Harga Barang</td>
      <td class=\"w3-padding\"><b>Rp ".$rp_harga."</b></td>
      </tr>
      <tr>
      <td class=\"w3-padding\">Jumlah</td>
      <td class=\"w3-padding\">
      <input type=\"number\" class=\"w3-border w3-input\" name=\"jumlah_beli\">
      </td>
      </tr>
      </table>
      <div class=\"w3-padding\">
      <button class=\"w3-btn w3-blue\" type=\"submit\" name=\"beli\">Beli Sekarang</button>
      <a href=\"/index.php\" class=\"w3-btn w3-blue\">Batal Beli</a>
      </div>
      </form>
      </div>
      ";
    }
  } else {
    echo "0 results";
  }
  echo "
</div>
";
}
$conn->close();
?>
</body>
</html>
