<?php
    require("Connection.php");

    $Firstname = $_POST["Fname"];
    $Lastname = $_POST["Lname"];
    $Email = $_POST["Mail"];
    $Adress = $_POST["Adress"];
    $Phone = $_POST["Phone"];
    $checkbox = $_POST["checkbox"];
    $Notes = $_POST["Notes"];


    try {
        $sql = "INSERT INTO `contacts`(first_name, last_name, email, address1, phone, `group`,notes)  
        VALUES ('". $Firstname."', '". $Lastname."' , '".$Email ."', '". $Adress."', '". $Phone ."', '". $checkbox ."','".$Notes."' )";
        // use exec() because no results are returned
        if(mysqli_query($conn,$sql)){
          header("location: logout.php");
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }

?>