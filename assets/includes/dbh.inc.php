<?php

$serverName = "localhost";
$dbUsername = "";
$dbPassword = "";
$dbName = "mist";


$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
