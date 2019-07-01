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
  <title>Toko Dewi</title>
</head>
<body>
<?php include 'admin/topnav.php'; ?>

  <div class="w3-row w3-container">
    <div class="w3-border w3-round-large w3-quarter">
      <div class="">
        <table>
          <tr>
            <td>
              <img class="w3-round" src="/img/bg-web-dewi.png" width="50px" height="50px" alt="Image Profile">
            </td>
            <td>Profile Pemilik</td>
            <td></td>
          </tr>
          <tr>
            <td>
              <img class="w3-round" src="/img/bg-web-dewi.png" width="50px" height="50px" alt="Image Profile">
            </td>
            <td>Saldo</td>
            <td>Rp 0</td>
          </tr>
        </table>
      </div>

      <div class="w3-bar-block w3-text-green">
        KOTAKMASUK
        <a href="#" class="w3-bar-item w3-button">Chat</a>
        <a href="#" class="w3-bar-item w3-button">Diskusi Produk</a>
        <a href="#" class="w3-bar-item w3-button">Ulasan</a>
        <a href="#" class="w3-bar-item w3-button">Pusat Bantuan</a>
        <a href="#" class="w3-bar-item w3-button">Komplain Pesanan</a>
        <a href="#" class="w3-bar-item w3-button">Update</a>
        PEMBELIAN
        <a href="#" class="w3-bar-item w3-button">Menunggu Pembayaran</a>
        <a href="#" class="w3-bar-item w3-button">Daftar Transaksi</a>
        PROFIL SAYA
        <a href="#" class="w3-bar-item w3-button">Wishlist</a>
        <a href="#" class="w3-bar-item w3-button">Toko Favorit</a>
        <a href="#" class="w3-bar-item w3-button">Pengaturan</a>
      </div>
    </div>

    <div class="w3-threequarter w3-container">
      <div class="w3-content w3-section" style="max-width:500px">
        <img class="mySlides w3-round-xxlarge w3-animate-right" src="/img/bg-web-dewi.png" style="width:100%; height: 200px;">
        <img class="mySlides w3-round-xxlarge w3-animate-right" src="/img/bg-web-dewi.png" style="width:100%; height: 200px;">
        <img class="mySlides w3-round-xxlarge w3-animate-right" src="/img/bg-web-dewi.png" style="width:100%; height: 200px;">
        <img class="mySlides w3-round-xxlarge w3-animate-right" src="/img/bg-web-dewi.png" style="width:100%; height: 200px;">
      </div>

      <table class="w3-table">
        <tr>
          <td><h3>Kategori Pilihan</h3></td>
          <td><h3>Top-up & Tagihan  </h3><a class="w3-right" href="#">Lihat Semua</a></td>
        </tr>
        <tr>
          <td>
            <div style="max-height: 150px; overflow: auto;" class="">

              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </div>
          </td>
          <td>
            <table class="w3-table w3-round w3-border">
              <tr>
                <td class="w3-border">Pulsa</td>
                <td>Paket Data</td>
                <td class="w3-border">Listrik PLN</td>
              </tr>

              <tr>
                <td>Tiket Pesawat</td>
                <td class="w3-border">Voucher</td>
                <td>Lainnya</td>
              </tr>
            </table>
          </td>
        </tr>
      </table>

      <div class="w3-bar">
        <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'London')">Terakhir Dilihat</button>
        <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Paris')">Wishlist</button>
        <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Tokyo')">Toko Favorit</button>
      </div>

      <div id="London" class="w3-container city">
        <table class="w3-table">
          <tr>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
          </tr>
        </table>
      </div>

      <div id="Paris" class="w3-container city" style="display:none">
        <table class="w3-table">
          <tr>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
          </tr>            <tr>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
          </tr>
        </table>
      </div>

      <div id="Tokyo" class="w3-container city" style="display:none">
        <table class="w3-table">
          <tr>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
            <td>
              <div class="w3-card">
                <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
                <div class="w3-container">
                  <b>Handphone</b>
                </div>
              </div>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>

<hr>

<div class="w3-row-padding">
  <div class="w3-twothird">
    <div class="w3-half">
      <table class="w3-table">
        <tr>
          <td>
            <a href="#">Karir</a><br>
            <a href="#">Blog</a><br>
            <a href="#">Official Store</a><br>
            <a href="#">Tagihan & Top Up</a>
          </td>
          <td>
            <a href="#">Tiket Kereta</a><br>
            <a href="#">Pusat Penjual</a><br>
            <a href="#">Hotlist</a><br>
            <a href="#">Keuangan</a>
          </td>
        </tr>
      </table>
    </div>
    <div class="w3-half">
      <table class="w3-table">
        <tr>
          <td>
            <a href="#">Bantuan Toko</a><br>
            <a href="#">Aplikasi</a><br>
            <a href="#">Mitra Toko</a><br>
            <a href="#">Daftar Official Store</a>
          </td>
          <td>
            <a href="#">Kategori</a><br>
            <a href="#">Kamus Toko</a><br>
            <a href="#">Deals Toko</a><br>
            <a href="#">Tiket Pesawat</a>
          </td>
        </tr>
      </table>
    </div>

  </div>

  <div class="w3-third">
    <table class="w3-table">
      <tr>
        <td><h2>Kemananan</h2></td>
        <td><h2>Dapatkan Aplikasi</h2></td>
      </tr>
    </table>
  </div>
</div>

<hr>

<div class="w3-container">

<table>
  <tr>
    <td>
      <img class="w3-round-large" src="/img/bg-web-dewi.png" width="100px" height="100px" alt="">
    </td>
    <td>C 2009-2019 Tokodewi <br> Server Process time </td>
  </tr>
</table>

</div>


<script>
  var myIndex = 0;
  carousel();

  function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 10000);
  }
</script>

<script>
  function openCity(evt, cityName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " w3-text-green";
  }
</script>

</body>
</html>
