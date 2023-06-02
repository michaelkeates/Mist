<?php

//To show errors
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (isset($_POST["adminsubmit"])) {
  $id = $_POST['id'];
  $username = $_POST['username'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $pwd = $_POST['password'];
  $mobile = $_POST['mobile'];
  $address1 = $_POST['address1'];
  $address2 = $_POST['address2'];
  $postcode = $_POST['postcode'];
  $country = $_POST['country'];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if (emptyInputSignup($firstname, $lastname, $email, $username, $mobile, $address1, $address2, $postcode, $country)  !== false) {
    header("location: ../../profile.php?signup=emptyinput");
    exit();
  }
  if (invalidUid($username)  !== false) {
    header("location: ../../profile.php?signup=invaliduid");
    exit();
  }
  if (invalidEmail($email)  !== false) {
    header("location: ../../profile.php?signup=invalidemail");
    exit();
  }

  updateUser($conn, $id, $firstname, $lastname, $email, $username, $pwd, $mobile, $address1, $address2, $postcode, $country);
}
else {
  header("location: ../../home.php");
  exit();
}