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
    <div class="container" >
        <div class="main-box">
            <div class="box-left">
                <h1>WELCOME</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                <button onclick="myFunction()" id="myBtn">Read More</button>
            </div>

            <div class="box-right">
                <h1>LOGIN</h1>
                <form method="POST" action="loginfonctionalty.php">
                    <div class="input-row">
                        <label for="email">Email</label>
                        <input name="email" type="email" id="email">
                        <label for="pass">Password</label>
                        <input name="password" type="password">
                    </div>
                        <input type="checkbox" value="lsRememberMe" id="rememberMe"> <label for="rememberMe">Remember me</label>
                        <button type="submit" class="button"><span>Login </span></button>
                </form>
            </div>
        </div>
</div>



        <script src="./assets/js/script.js"></script>
    </body>

</html>