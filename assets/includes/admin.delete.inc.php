<?php

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "DELETE FROM users WHERE usersId=$id";
    $result = mysqli_query($conn,$sql);

    if($result){
      header("location: ../../admin.php?userdeletedsuccessfully");
    }
    else {
        header("location: ../../Home.php");
      die(mysqli_error($conn));
    }

}