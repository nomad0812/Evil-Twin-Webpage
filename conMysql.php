<?php

$servername = 'localhost';
$username = 'ghost';
$pass = 'node47';
$dbname = 'wifi_reauth';

//create conn
$conn = new mysqli($servername, $username, $pass, $dbname);

//check conn
if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}

?>
