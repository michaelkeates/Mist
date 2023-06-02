<?php

if (isset($_POST["adminsubmit"])) {

  $adminusername = $_POST["adminuidlogin"];
  $adminpwd = $_POST["adminpwdlogin"];


require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (emptyAdminInputLogin($adminusername, $adminpwd)  !== false) {
  header("location: ../../index.php?error=adminemptyinput");
    exit();
}

loginAdmin($conn, $adminusername, $adminpwd);
}
else {
  //header("location: ../../home.php");
  //exit();
}
