<?php
require 'conn.php';

if (isset($_POST["daftar"])) {
  $nama_lkp = $_POST['nama_lkp'];
  $email = $_POST['email'];
  $nohp = $_POST['nohp'];
  $password = $_POST['password'];
  $alamat = $_POST['alamat'];

  date_default_timezone_set("Asia/Jakarta");
  $now = date("Y-m-d H:i:s");

  $sql = "INSERT INTO users" . "(nama_lkp, email, nohp, password, alamat, waktu)"."VALUES"."('$nama_lkp', '$email', '$nohp', '$password', '$alamat', '$now')";
  mysqli_select_db($conn, $sql);
  $retval = mysqli_query($conn, $sql);

  if (! $retval) {
    // code...

    die('<script>
    if (confirm(\"Ada Data Yang Harus Diisi!!!!\")) {
      // code...
      location.replace(\"daftar.php\")
    }</script> : '. $conn->connect_error);
  }
  echo "<script>
  if (confirm(\"Horeeee Berhasil!!!!\")) {
    // code...
    location.replace(\"login.php\")
  }</script>";
  mysqli_close($conn);
}
?>
