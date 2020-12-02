<?php
session_start();
if ($_SESSION['username'] != '')
{
    //echo "LOGGED IN";
}
else
{
    //echo "Something went wrong!";
    header('location: http://localhost/baked/login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/login-inc-styles.css">
    </head>
    <body>
        <nav>
            <h4 class="logo font-weight">baked<strong>O</strong><sub id="two">2</sub></h4>
            <h4></h4>
            <h4 class="nav-account font-weight">Account</h4>
            <form action="../php/logout-user.php" method="POST">
                <input type="submit" value="logout" class="nav-account font-weight">
            </form>
        </nav>

        <div class="main-container">
            <div class="o2-box-1">

            </div>
        </div>
    </body>
</html>