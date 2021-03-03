   
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

                <title>Contact Application</title>
    </head>

    <body>
   
        <section id="Contacts List" >
                <div class="add">
                        <h1>Contacts List</h1>
                </div>
                <div>
                    <form class="example">
                        <input type="text" name="search" placeholder="Search..">
                    </form>
        <div class="container">
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Person</button>

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
                            <form method ="POST" action="add_person.php" >
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
                                        <label>Adress :</label>
                                        <input type="text" name="Adress">
                                    </div>
                                    <div class="input-group">
                                        <label>Phone :</label>
                                        <input type="text" name="Phone" require>

                                        <input type="checkbox" name="checkbox" id="F"> <label for="F">Friend</label>
                                        <input type="checkbox" name="checkbox" id="Fam"> <label for="Fam">Family</label>
                                        <input type="checkbox" name="checkbox" id="B"> <label for="B">Business</label>
                                    </div>

                                        <label>Notes :</label>
                                        <textarea rows="10" name="Notes"></textarea>
                                        <button type="submit" class="button"><span>SUBMIT</span></button>
                            </form>
                    </div>
                </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                                </div>
                                
                                </div>
                            </div>
                        <table id="contacts">
                            <tr>
                                <th>ID</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                                <th>Adress</th>
                                <th>Phone</th>
                                <th>Groupe</th>
                                <th>Actions</th>
                            </tr>
                            <tr>
                                <td>58011</td>
                                <td>Abby</td>
                                <td>Adams</td>
                                <th>Abby@anywhere.com</th>
                                <th>Adress1</th>
                                <th>Phone1</th>
                                <th>Family</th>
                                <th>Edit</th>
                            </tr>
                            <tr>
                                <td>58012</td>
                                <td>Barbara</td>
                                <td>Bardely</td>
                                <th>Barbara@anywhere.com</th>
                                <th>Adress2</th>
                                <th>Phone2</th>
                                <th>Family</th>
                                <th>Edit</th>
                            </tr>
                            <tr>
                                <td>58013</td>
                                <td>Casier</td>
                                <td>Cohen</td>
                                <th>Casier@anywhere.com</th>
                                <th>Adress3</th>
                                <th>Phone3</th>
                                <th>Friend</th>
                                <th>Edit</th>
                            </tr>
                            <tr>
                                <td>58014</td>
                                <td>Dana</td>
                                <td>Donnely</td>
                                <th>Dana@anywhere.com</th>
                                <th>Adress4</th>
                                <th>Phone4</th>
                                <th>Business</th>
                                <th>Edit</th>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </table>
                        <a href="index.php"><button class="btn btn-info btn-lg" ><span>Logout </span></button></a>
                        
                    </div>

        <script src="./assets/js/script.js"></script>
    </body>


</html>