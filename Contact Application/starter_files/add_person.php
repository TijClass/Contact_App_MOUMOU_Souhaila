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
        $conn = new PDO('mysql:host=localhost;dbname=contact_app',"root", "");
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO `users`(`firstname`, `lastname`, `Email`, `Adress`, `Phone`, `groupu`)  
        VALUES ('". $Firstname."', '". $Lastname."' , '".$Email ."', '". $Adress."', '". $Phone ."', '". $checkbox ."' )";
        // use exec() because no results are returned
        $conn->exec($sql);

        echo "New record created successfully";
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }

?>