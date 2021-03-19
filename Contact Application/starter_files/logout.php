<?php
include'connection.php';

    if(isset($_POST['submit'])){
        if(!empty($_POST['Fname']) && !empty($_POST['Lname']) && !empty($_POST['Adress']) && !empty($_POST['Phone']) && !empty($_POST['Mail']) && !empty($_POST['checkbox']) && !empty($_POST['Notes']) && !empty($_POST['Action'])) {
                $first_name = $_POST['Fname'];
                $last_name = $_POST['Lname'];
                $address1 = $_POST['Adress'];
                $phone = $_POST['Phone'];
                $email = $_POST['Mail'];
                $group = $_POST['checkbox'];
                $notes = $_POST['Notes'];
                $action = $_POST['Action'];
                $sql = "INSERT INTO contacts (`first_name`,`last_name`,`address1`,`phone`, `email`,`group`,`notes`,`action`)
                VALUES ('".$first_name."','". $last_name."','". $address1."','". $phone."','". $email."','". $group."','". $notes."','". $action."')";
                if(mysqli_query($conn,$sql))
                {
                // echo "form is succesefully";
                header("reflech:2,url=contact.php");
              } 
                else {
                echo "form not submitted: ". mysqli_error($conn);;
              }
        }
                else{
                die('test');
                }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

                <title>Contact Application</title>
    </head>

    <body>
   
        <section id="Contacts List" >
                <div class="add">
                        <h1>Contacts List</h1>
                </div>

                    <form class="example">
                        <div class="input-group rounded"></div>
                        <div class="search">
                            <input type="text" name="search" class="form-control" placeholder="Search :" value="">
                            <button class="btn btn-lg cherche">Search</button>

                            <button type="button" class="btn btn-lg cherche" data-toggle="modal" data-target="#myModal">Add Person</button>
                            
                            <a href="index.php"><button class="btn btn-lg cherche"><span>Logout </span></button></a>
                        </div>
                    </form>
        
            
        <div class="container">
            <!-- Trigger the modal with a button -->
            
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                
                    <!-- Modal content-->
                    <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">ADD PERSON</h4>
                            </div>
                            <div class="modal-body">
                            </div>
                            <form method="POST" action="./logout.php" >
                                <div class="input-row">
                                    <div class="input-group">
                                        <label>First Name :</label>
                                        <input type="text" name="Fname">
                                    </div>
                                    <div class="input-group">
                                        <label>Last Name :</label>
                                        <input type="text" name="Lname">
                                    </div>
                                    <div class="input-group">
                                        <label>Email :</label>
                                        <input type="mail" name="Mail" require>
                                    </div>
                                    <div class="input-group">
                                        <label>Phone :</label>
                                        <input type="text" name="Phone" require>
                                    </div>
                                    <div class="input-group">
                                        <label>Adress :</label>
                                        <input type="text" name="Adress">
                                    </div>
                                    <div class="input-group">
                                        <input type="radio" name="checkbox" id="F"  value="Friend" checked> <label for="F">Friend</label>
                                        <input type="radio" name="checkbox" id="Fam" value="Family"> <label for="Fam">Family</label>
                                        <input type="radio" name="checkbox" id="B" value="Business"> <label for="B">Business</label>
                                    </div>
                                        <label>Notes :</label>
                                        <textarea rows="10" name="Notes"></textarea>
                                </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="submit" class="btn btn-default" >SUBMIT</button>
                                    </div>
                            </form>
                    </div>
                </div>
                                </div>
                                
                                </div>
                            </div>
                        <table id="contacts">
                            <tr class="line1">
                                <th>Id</th>
                                <th>FirstName</th>
                                <th>LastName</th>
                                <th>Email</th>
                                <th>Adress</th>
                                <th>Phone</th>
                                <th>Groupe</th>
                                <th>Notes</th>
                                <th>Actions</th>
                                </tr>

                            <?php 
                                $sql = "SELECT * FROM contacts";
                                $result = mysqli_query($conn,$sql);

                                    while($row = mysqli_fetch_assoc($result)){
                                ?>
                                    <tr class="line1">
                                        <td><?=$row["id"]?></td>
                                        <td><?=$row["first_name"]?></td>
                                        <td><?=$row["last_name"]?></td>
                                        <td><?=$row["email"]?></td>
                                        <td><?=$row["address1"]?></td>
                                        <td><?=$row["phone"]?></td>
                                        <td><?=$row["group"]?></td>
                                        <td><?=$row["notes"]?></td>
                                        <td><span>Edit</span>|<span>Delete</span></td>
                                    </tr>
                            <?php 
                                    }
                                    ?>

                            </table>



        <script src="./assets/js/script.js"></script>
    </body>


</html>