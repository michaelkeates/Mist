<?php

//To show errors
ini_set('display_errors', 1);
error_reporting(E_ALL);

function emptyInputSignup($name, $email, $username, $pwd, $pwdrepeat)
{
  $result = null;
  if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdrepeat)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function invalidUid($username)
{
  $result = null;
  if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function invalidEmail($email)
{
  $result = null;
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function pwdMatch($pwd, $pwdrepeat)
{
  $result = null;
  if ($pwd !== $pwdrepeat) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function uidExists($conn, $username, $email)
{
  $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
  $stmt = mysqli_stmt_init($conn); //statement
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../../home.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $username, $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  } else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}

function adminuidExists($conn, $username, $email)
{
  $sql = "SELECT * FROM admins WHERE adminUid = ?;";
  $stmt = mysqli_stmt_init($conn); //statement
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../../home.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $username);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  } else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}

function createUser($conn, $firstname, $lastname, $email, $username, $pwd)
{
  $mobile = 'default';
  $address1 = 'default';
  $address2 = 'default';
  $postcode = 'earth';
  $country = 'galaxy';
  $sql = "INSERT INTO users (usersFirstname, usersLastname, usersEmail, usersUid, usersPwd, usersMobile, usersAddress1, usersAddress2, usersPostcode, usersCountry) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn); //stmt is statement
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../../index.php?error=stmtfailed");
    exit();
  }

  $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT); //better security hashing passwords

  mysqli_stmt_bind_param($stmt, "ssssssssss", $firstname, $lastname, $email, $username, $hashedPwd, $mobile, $address1, $address2, $postcode, $country);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../../index.php?creatednewusersuccess");
  exit();
}

function emptyInputLogin($username, $pwd)
{
  //$result;
  if (empty($username) || empty($pwd)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function emptyAdminInputLogin($adminusername, $adminpwd)
{
  //$result;
  if (empty($adminusername) || empty($adminpwd)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function loginUser($conn, $username, $pwd)
{
  $uidExists = uidExists($conn, $username, $pwd);

  if ($uidExists === false) {
    header("location: ../../index.php?error=wronglogin");
    exit();
  }

  $id = $uidExists["usersId"];
  $pwdHashed = $uidExists["usersPwd"];
  $checkPwd = password_verify($pwd, $pwdHashed);

  if ($checkPwd === false) {
    header("location: ../../index.php?error=wronglogin");
    exit();
  } else {
    session_start();
    $_SESSION["useruid"] = $uidExists["usersUid"];
    $_SESSION["userfirstname"] = $uidExists["usersFirstname"];
    $_SESSION["userlastname"] = $uidExists["usersLastname"];
    $_SESSION["userpwd"] = $uidExists["usersPwd"];
    $_SESSION["useremail"] = $uidExists["usersEmail"];
    $_SESSION["usermobile"] = $uidExists["usersMobile"];
    $_SESSION["useraddress1"] = $uidExists["usersAddress1"];
    $_SESSION["useraddress2"] = $uidExists["usersAddress2"];
    $_SESSION["userpostcode"] = $uidExists["usersPostcode"];
    $_SESSION["usercountry"] = $uidExists["usersCountry"];
    $_SESSION["wtf"] = $id;

    if ($_SESSION["wtf"] == $uidExists["usersId"] && $_SESSION["useruid"] == $uidExists["usersUid"]) {
      header("location: ../../home.php");
    } else {
      header("location: ../../index.php?error=wronglogin");
    }
    exit();
  }
}

function loginAdmin($conn, $username, $pwd)
{
  $uidExistsAdmin = adminuidExists($conn, $username, $username);

  if ($uidExistsAdmin === false) {
    header("location: ../Admin.php?error=wronglogin");
    exit();
  } else { //Admin logs in correctly and creates a 'session'
    session_start();
    $_SESSION["adminid"] = $uidExistsAdmin["adminID"];
    $_SESSION["adminuid"] = $uidExistsAdmin["adminUid"];
    if ($_SESSION["adminid"] = $uidExistsAdmin["adminID"] || $_SESSION["adminuid"] = $uidExistsAdmin["adminUid"]) {
      header("location: ../../home.php"); //Sending user to the home page after they login
    }
    exit();
  }
}

function updateUser($conn, $id, $firstname, $lastname, $email, $username, $pwd, $mobile, $address1, $address2, $postcode, $country)
{
  $sql = "UPDATE users SET usersId = '$id', usersFirstname = '$firstname', usersLastname = '$lastname', usersEmail = '$email', usersUid = '$username', usersPwd = '$pwd', usersMobile = '$mobile', usersAddress1 = '$address1', usersAddress2 = '$address2', usersPostcode = '$postcode', usersCountry = '$country' WHERE usersId = $id";

  $result = mysqli_query($conn, $sql);
  if ($result) {
    //echo "updated successfully";
    header("location: ../../home.php"); //Sending user to the home page after they login
  } else {
    die(mysqli_error($conn));
  }

  //$stmt = mysqli_stmt_init($conn); //prepared statement - security
  //if (!mysqli_stmt_prepare($stmt, $sql)) {
  //  header("location: ../../index.php?error=stmtfailed");
  //  exit();
  //}
}
