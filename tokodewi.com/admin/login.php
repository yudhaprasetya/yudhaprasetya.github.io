<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
  <link rel="stylesheet" href="/css/master.css">
  <title>Masuk | Tokodewi</title>
</head>
<body>
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
  <div style="background-image: url('/img/register_new.png'); background-size: 100%" class="w3-row w3-padding">
    <div class="w3-third">
      <hr>
    </div>
    <div class="w3-third w3-white">
      <div class="w3-border w3-padding w3-round">
        <table class="w3-table">
          <tr>
            <td><h3>Masuk</h3></td>
            <td><a class="w3-text-green w3-right" href="/admin/register.php">Daftar</a></td>
          </tr>
        </table>

        <br>
        <form class="" action="proses_login.php" method="post">
          <p class="w3-left">Nomor Ponsel atau Email</p>
          <input class="w3-input w3-border w3-round" type="text" placeholder="Nomor Ponsel Atau Email" name="username" value="">
          <p class="w3-left">Katasandi</p>
          <input class="w3-input w3-border w3-round" placeholder="Masukkan Katasandi" type="password" name="password" value="">
          <br>
          <p>
            <input class="w3-check" type="checkbox" name="" value=""> Ingat Saya
            <a class="w3-text-green w3-right" href="forgot.php">Lupa Katasandi?</a>
          </p>
          <button style="width: 100%" type="submit" class="w3-button w3-green w3-round-large" name="button">Masuk</button>
        </form>
        <p class="w3-center">atau masuk dengan</p>
        <p>
          <button style="width: 100%" class="w3-button w3-padding w3-round w3-border" type="submit" name="button"><a href="#"><i class="fab fa-google w3-text-blue w3-large w3-left"></i> Google</a></button>
          <br>
          <br>
          <button style="width: 100%" class="w3-button w3-padding w3-round w3-border" type="submit" name="button"><a href="#"><i class="fab fa-facebook-f w3-text-blue w3-large w3-left"></i> Facebook</a></button>
        </p>
      </div>
    </div>
    <div class="w3-third">
      <hr>
    </div>

  </div>

  <?php include 'footer.php'; ?>

</body>
</html>
