<?php
require 'admin/conn.php';

if (isset($_POST["upload"])) {
  $nama_barang = $_POST['nama_barang'];
  $jenis_barang = $_POST['jenis_barang'];
  $harga_barang = $_POST['harga_barang'];
  $jumlah = count($_FILES['foto']['name']);

  date_default_timezone_set("Asia/Jakarta");
  $now = date("Y-m-d H:i:s");

  if ($jumlah > 0) {
    $gambar = array();
    for ($i=0; $i < $jumlah; $i++) {
      $file_name = $_FILES['foto']['name'][$i];
      $tmp_name = $_FILES['foto']['tmp_name'][$i];
      move_uploaded_file($tmp_name, "asset/images/".date('His').$file_name);
      $gambar[$i] = date('His').$file_name;

    }
    $sql = "INSERT INTO daftar_barang" . "(nama_barang, jenis_barang, harga_barang, foto, waktu)"."VALUES"."('$nama_barang', NULLIF('$jenis_barang',''), NULLIF('$harga_barang',''), NULLIF('$gambar[0]',''), '$now')";
    mysqli_select_db($conn, $sql);
    $retval = mysqli_query($conn, $sql);

    if (! $retval) {
      // code...

      die('<script>
      if (confirm(\"Ada Data Yang Harus Diisi!!!!\")) {
        // code...
        location.replace(\"/index.php\")
      }</script> : '. $conn->connect_error);
    }
    echo "<script>
    if (confirm(\"Horeeee Berhasil!!!!\")) {
      // code...
      location.replace(\"/index.php\")
    }</script>";
    mysqli_close($conn);
  }
}
?>
