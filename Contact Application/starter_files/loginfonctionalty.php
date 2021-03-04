<?php
require('./Connection.php');
// session_start();

$email= $_POST["email"];
$passwor = $_POST["password"];


if($email == "" || $passwor == ""){
    header("location: index.php");
}
else{


    $sql = "SELECT COUNT(ID) FROM Admin WHERE email = '". $email."' AND pwd = '". $passwr."'";
    $stmt = $Pdo->prepare($sql);

    $data =  $stmt->fetchAll();


    var_dump($data);

// //   header("location: logout.php");
//   $_SESSION["Email"] = $email;
//   $_SESSION["Password"] = $passwor;
}

 ?>

    <!-- /Session/Cookies to rremeber de login/ -->

<?php
require('./connection.php');
if(isset($_POST)){
    // get from data base
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($result);
          $logEmail = $row["email"];
          $logPassword = $row["password"];
      }else{
          echo "error";
      }
      

    //
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email != "" && $password != "" ){
        if ($email == $logEmail){
                if ($password == $logPassword){
                    session_start(); 
                    $_SESSION['login']=true;
                    if(isset($_POST['remember'])){
                        setcookie("login_email",$email, time() + (86400 * 30), "/");
                        setcookie("login_password",$password, time() + (86400 * 30), "/");
                    }
                    header('Location: ./index.php');
                }
            }else{
                echo "wrong email";
            }
    }
}else{
    header('location: ./login.php');
}