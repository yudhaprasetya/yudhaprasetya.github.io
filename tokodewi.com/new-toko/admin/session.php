<?php
session_start();
if(!isset($_SESSION['username'])) {
  header('location:/admin/login.php');
} else {
  $username = $_SESSION['username'];
}
?>
