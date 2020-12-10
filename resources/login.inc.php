<?php
session_start();
if ($_SESSION['username'] != '')
{
    //echo "LOGGED IN";
}
else
{
    //echo "Something went wrong! Login again.";
    header('location: http://localhost/baked/login.php');
    exit;
}
include('../pages/header.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home | baked.</title>
        <link rel="icon" href="../img/favicon.ico" type="image/ico">
        <link rel="stylesheet" href="../css/login-inc-styles.css">
        <script src="../js/jquery/jquery-3.5.1.js"></script>
        <script src="../js/jquery/login-inc.js"></script>
    </head>
    <body>
        <div class="login-msg">
            Heyo <?php echo ($_SESSION['username']) ?>, <br>
            Try our newly launched <br>
            media-compressor <span class="color-tag"> O<sub id ="two">2</sub> </span>
        </div>
        <div class="subs-now"> <strong id="subsNow" > Try now</strong></div>
    </body>
</html>