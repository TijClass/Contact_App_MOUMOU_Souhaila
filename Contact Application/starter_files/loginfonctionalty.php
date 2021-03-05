<?php
require('./Connection.php');
// session_start();

$email= $_POST["email"];
$passwor = $_POST["password"];

if($email == "" || $passwor == ""){
    header("location: index.php");
}
else{
    // $sql = ;    <!-- /Session/Cookies to rremeber de login/ -->
    $sql = $conn->prepare("SELECT email,password FROM users WHERE email = :email");
    $sql->bindParam(':email',$email,PDO::PARAM_STR);
    if($sql->execute()){
        $data =  $sql->fetch(PDO::FETCH_ASSOC);
        if($data != false){
            if(count($data) > 0){
                if($data['password'] == $passwor){
                    session_start(); 
                    $_SESSION['login']=true;
                    if(isset($_POST['remember'])){
                        setcookie("login_email",$email, time() + (86400 * 30), "/");
                        setcookie("login_password",$passwor, time() + (86400 * 30), "/");


                    header('Location: ./logout.php');
                }else{
                    header("location: ./index.php?err=Wrong password!");
                }
            }else{
                header("location: ./index.php?err=Email not found!");
            }
        }else{
            header("location: ./index.php?err=Email not found!");
        }
    }

}

}
?>