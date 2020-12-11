<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login | baked.</title>
        <link rel="icon" href="img/favicon.ico" type="image/ico">
        <link rel="stylesheet" href="css/admin-login-styles.css">
        <script src="js/jquery/jquery-3.5.1.js"></script>
        <script src="js/jquery/login-register-jquery.js"></script>
        <script src="js/admin-login-validate.js"></script>
    </head>
    <body>
        <div>
        </div>

        <div class="main-container">
            <div class="brand-name">
                <strong class="brand-pointer">baked.</strong>
            </div>
            <div class="login-box ">

                <div class="welcome-text">
                    <strong>Admin Login</strong>
                    <div class="getStarted">
                        Login to get started
                    </div>
                </div>
                <div>
                    <form name="LoginForm" action="php/admin-login.php" onsubmit="return ValidateAdmin();" method="POST">
                        <input id="userN" type="text" name="username" placeholder ="Username: admin" required> <br>
                        <input id="Key" type="text" name="password" placeholder="Password: baked" required> <br>
                        <button class="LoginBtnColor" type="submit" name = "login-submit-btn"> Login </button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>