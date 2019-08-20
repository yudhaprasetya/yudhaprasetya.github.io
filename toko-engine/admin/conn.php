<?php
$servername = "remotemysql.com";
$username = "ueJmRpAbic";
$password = "WeLJqvKf1h";
$dbname = "ueJmRpAbic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (! $conn) {
    die("Connection failed: " . $conn->connect_error);
}
?>
