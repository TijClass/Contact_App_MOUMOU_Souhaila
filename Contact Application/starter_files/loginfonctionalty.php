<?php
require('./Connection.php');
session_start();

$email= $_POST["email"];
$passwor = $_POST["password"];



if(isset($_POST['remember'])){
    setcookie("login_email",$email, time() + (86400 * 30), "/");
    setcookie("login_password",$passwor, time() + (86400 * 30), "/");
}

if($email == "" || $passwor == ""){
    header("location: index.php");
}
else{

    $sql = "SELECT COUNT(*) AS usr FROM users WHERE email ='".$email ."' AND password = '".$passwor."'";
    $stmt = mysqli_query($conn,$sql);
    
    if($stmt){
        $data = mysqli_fetch_array($stmt);
        if($data["usr"] == "1"){
            header('Location: ./logout.php');



        }else{
                header("location: ./index.php?err= Please verify your informations !");
        }
    }else{
            header("location: ./index.php?err= Please verify your informationss");
    }
}

?>