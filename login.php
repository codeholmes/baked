<?php

if ($_SERVER["HTTP_REFERER"] == "http://localhost/baked/login.php")
    {
        echo "<script> alert('Invalid username or password. Try again.') </script>";
    }

else if ($_SERVER["HTTP_REFERER"] == "http://localhost/baked/signup.html")
    {
        echo "<script> alert('Signup Successful. Login to continue.') </script>";
    }

else if ($_SERVER["HTTP_REFERER"] == "http://localhost/baked/resources/login.inc.php")
    {
        echo "<script> alert('Logout Successful!') </script>";
    }

else if ($_SERVER["HTTP_REFERER"] == "http://localhost/baked/resources/setting.php")
    {
        echo "<script> alert('Action Successful') </script>";
    } 

else if ($_SERVER["HTTP_REFERER"] == "http://localhost/baked/resources/upload-media.php")
    {
        echo "<script> alert('Logout Successful') </script>";
    } 
else if ($_SERVER["HTTP_REFERER"] == "http://localhost/baked/resources/compress-media.php")
    {
        echo "<script> alert('Logout Successful') </script>";
    }
else if ($_SERVER["HTTP_REFERER"] == "http://localhost/baked/resources/convert-media.php")
    {
        echo "<script> alert('Logout Successful') </script>";
    } 
else if ($_SERVER["HTTP_REFERER"] == "http://localhost/baked/resources/download-media.php")
    {
        echo "<script> alert('Logout Successful') </script>";
    } 
else {}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sign in | baked.</title>
        <link rel="icon" href="img/favicon.ico" type="image/ico">
        <link rel="stylesheet" href="css/login-styles.css">
        <script src="js/jquery/jquery-3.5.1.js"></script>
        <script src="js/jquery/login-register-jquery.js"></script>
        <script src="js/login-validate"></script>
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
                    <strong>Hello <span>&#128075;</span> <br> Welcome Back.</strong><br>
                    <div class="getStarted">
                        Login to get started
                    </div>
                </div>
                <div>
                    <form name="LoginForm" action="php/login-user.php" onsubmit="return ValidateLogin();" method="POST">
                        <input type="text" id="UserName" name="username" placeholder ="Username" required> <br>
                        <input type="password"  id="PassWord" name="password" placeholder="Password" required> <br>
                        <div class="password-reset">
                            I forget my password.
                        </div>
                        <button class="LoginBtnColor" type="submit" name = "login-submit-btn"> Login </button>
                        <div>
                            <hr>
                        </div>
                    </form>
                </div>
                <div>
                    <p class="Create-Account-1"> Don't have an account? <strong class="Create-Account-2"> Create one. </strong> </p>
                </div>
            </div>
        </div>
    </body>
</html>

