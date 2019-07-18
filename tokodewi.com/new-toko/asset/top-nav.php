<div class="w3-top">
  <div class="w3-bar w3-padding w3-dark-grey">
    <a href="/" class="w3-bar-item w3-btn"><i class="fas fa-home	w3-large"></i> Home</a>
    <a class="w3-right w3-bar-item w3-btn" onclick="profil()">Halo <?php echo "$email"; ?></a>
    <a href="/" class="w3-bar-item w3-btn w3-right"><i class="fas fa-shopping-cart"></i></a>
  </div>
</div>
<div class="w3-bar w3-padding">
  <a href="/" class="w3-bar-item w3-button"><i class="fas fa-home	w3-large"></i> Home</a>
</div>

<div id="show-log" style="right:0" class="w3-dropdown-content">
  <a class="w3-btn w3-right w3-blue w3-center w3-margin-top w3-margin-right w3-round" href="/jualan.php">Jual Barang</a><br>
  <a class="w3-btn w3-right w3-blue w3-center w3-margin-top w3-margin-right w3-round" href="/admin/logout.php">Logout</a>
</div>

<script>
function profil() {
  var x = document.getElementById("show-log");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
