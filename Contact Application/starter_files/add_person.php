   
   
   
   <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Contact Application</title>
    </head>

    <body>
   
   
    <section id="add_person">
        <div class="add">
                <h1>ADD NEW PERSON</h1>
        </div>

        <div>
            <form>
                <div class="input-row">
                    <div class="input-group">
                        <label>First Name :</label>
                        <input type="text">
                    </div>
                    <div class="input-group">
                        <label>Last Name :</label>
                        <input type="text">
                    </div>
                    <div class="input-group">
                        <label>Email :</label>
                        <input type="mail"require>
                    </div>
                    <div class="input-group">
                        <label>Adress :</label>
                        <input type="text">
                    </div>
                    <div class="input-group">
                        <label>Phone :</label>
                        <input type="number" require>

                        <input type="checkbox"> <label for="checking">Friend</label>
                        <input type="checkbox"> <label for="checking">Family</label>
                        <input type="checkbox"> <label for="checking">Business</label>
                    </div>

                    <label>Notes :</label>
                    <textarea rows="10"></textarea>

                </div>
            </form>
            <button class="button"><span>SUBMIT </span></button>
        </div>



        

        <script src="./js/script.js"></script>
    </body>

</html>