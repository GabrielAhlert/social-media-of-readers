<?php
$servername = "localhost";
$username = "root";
$password = "";
$defDataBase = "test";

// Create connection
$db = new mysqli($servername, $username, $password,$defDataBase);

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
/*$query = $conn -> query('SELECT * FROM users');
$user = $query->fetch_assoc();

print_r ($user);*/
?>