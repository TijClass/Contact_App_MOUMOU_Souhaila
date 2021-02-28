<?php
session_start();

$email= $_POST["email"];
$passwor = $_POST["password"];


if($email == "" || $passwor == ""){
    header("location: login.php");
}
else{
  header("location: logout.php");
  $_SESSION["Email"] = $email;
  $_SESSION["Password"] = $passwor;
}

    ?>
