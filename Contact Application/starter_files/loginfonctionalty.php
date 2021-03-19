<?php
require('./Connection.php');
// session_start();

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
    // $sql = ;    <!-- /Session/Cookies to rremeber de login/ -->
    // $sql = $conn->prepare("SELECT email,password FROM users WHERE email = :email");
    // $sql->bindParam(':email',$email,PDO::PARAM_STR);
    $sql = "SELECT COUNT(*) AS usr FROM users WHERE email ='".$email ."' AND password = '".$passwor."'";
    $stmt = mysqli_query($conn,$sql);
    
    if($stmt){
        $data = mysqli_fetch_array($stmt);
        if($data["usr"] == "1"){
            header('Location: ./logout.php');
            // if(count($data) > 0){
            //     session_start(); 
            //     $_SESSION['login']=true;

            //     if(isset($_POST['remember'])){
            //         setcookie("login_email",$email, time() + (86400 * 30), "/");
            //         setcookie("login_password",$passwor, time() + (86400 * 30), "/");


        }else{
                header("location: ./index.php?err= Please verify your informations !");
        }
    }else{
            header("location: ./index.php?err= Please verify your informationss");
    }
}

?>