<?php
$servername = "remotemysql.com";
$username = "JJ9qGZS147";
$password = "QyNzSfyuqZ";
$dbname = "JJ9qGZS147";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (! $conn) {
    die("Connection failed: " . $conn->connect_error);
}
?>
