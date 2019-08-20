<?php
   session_start();
   require_once("conn.php");
   $username = $_POST['username'];
   $password = $_POST['password'];
   $sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $conn->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<div align='center'>Username Dan Password Tidak Cocok <br> Silahkan <a href='login.php'>Coba Lagi</a>!!!</div>";
   } else {
     if($password <> $hasil['password']) {
       echo "<div align='center'>Password salah! <a href='login.php'>Coba Lagi</a></div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:/');
     }
   }
?>
