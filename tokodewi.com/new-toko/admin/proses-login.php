<?php
session_start();
   require_once("conn.php");
   $email = $_POST['email'];
   $pass = $_POST['password'];
   $sql = "SELECT * FROM users WHERE email = '$email'";
   $query = $conn->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<div align='center'>Gagal Masuk! <a href='login.php'>Coba Lagi</a></div>";
   } else {
     if($pass <> $hasil['password']) {
       echo "<div align='center'>Password salah! <a href='login.php'>Coba Lagi</a></div>";
     } else {
       $_SESSION['email'] = $hasil['nama_lkp'];
       header('location:/index.php');
     }
   }
?>
