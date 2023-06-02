<?php

if (isset($_POST["register"])) {

  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];
  $pwdrepeat = $_POST["pwdrepeat"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if (emptyInputSignup($firstname, $lastname, $email, $username, $pwd, $pwdrepeat)  !== false) {
    header("location: ../../index.php?signup=emptyinput");
    exit();
  }
  if (invalidUid($username)  !== false) {
    header("location: ../../index.php?signup=invaliduid");
    exit();
  }
  if (invalidEmail($email)  !== false) {
    header("location: ../../index.php?signup=invalidemail");
    exit();
  }
  if (pwdMatch($pwd, $pwdrepeat)  !== false) {
    header("location: ../../index.php?signup=passwordsdontmatch");
    exit();
  }
  if (uidExists($conn, $username, $email)  !== false) {
    header("location: ../../index.php?signup=usernametaken");
    exit();
  }

  createUser($conn, $firstname, $lastname, $email, $username, $pwd);
  
}
else {
  header("location: ../../home.php");
  exit();
}
