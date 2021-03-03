<?php
    require("Connection.php");
    $Firstname = $_POST["Fname"];
    $Lastname = $_POST["Lname"];
    $Email = $_POST["Mail"];
    $Adress = $_POST["Adress"];
    $Phone = $_POST["Phone"];
    $checkbox = $_POST["checkbox"];
    $Notes = $_POST["Notes"];

    if ($Firstname == "" || $Lastname == "" || $Email == "" || $Adress == "" || $Phone == "" || $Notes == ""){
        header ("location: add_person.php");
    }
    else{
        header ("location: logout.php");
    }
    

    
?>