<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <style media="screen, print">
  <?php include 'css/master.css'; ?>
  </style>
  <meta charset="utf-8" />
  <title>Toko Dewi</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
  <script src="js/javascript.js" charset="utf-8"></script>
  <title>Situs Jual Beli Online Terlengkap Dan Termurah</title>
</head>
<body>

  <!--Navigasi Atas-->
  <?php include 'admin/topnav.php'; ?>

  <!--Banner Promo Bulan Ini-->
  <div class="w3-padding">
    <?php include 'promo/index.php'; ?>
  </div>

  <!--Navigasi Atas-->
  <div class="w3-row">
    <!--Kategori Pilihan-->
    <div class="w3-half w3-padding">
      <h2>Kategori Pilihan</h2>
      <?php include 'kategori-pilihan.php'; ?>
    </div>

    <!--Top-Up & Tagihan-->
    <div class="w3-half w3-padding">
      <h2>Top-Up & Tagihan</h2>
      <?php include 'admin/topup.php'; ?>
    </div>
  </div>

  <!--Footer-->
  <?php include 'admin/footer.php'; ?>

  <script>
  var myIndex = 0;
  carousel();
  </script>

  <script type="text/javascript">
  openCity(evt, cityName);
  </script>

</body>
</html>
