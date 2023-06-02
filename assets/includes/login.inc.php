<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

//echo "Debug 1"; // Add this line for debugging

if (isset($_POST["submit"])) {
  $username = $_POST["uidlogin"];
  $pwd = $_POST["pwdlogin"];

  if (emptyInputLogin($username, $pwd) !== false) {
    header("location: ../../index.php?error=emptyinput");
    exit();
  }

  //echo "Debug 2"; // Add this line for debugging

  loginUser($conn, $username, $pwd);
} else {
  header("location: ../../home.php");
  exit();
}
