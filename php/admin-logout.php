<?php
if (($_SERVER["HTTP_REFERER"] == "http://localhost/baked/resources/admin-login.inc.php"))
    {
        session_start();
        unset($_SESSION["username"]);

        //echo 'You have cleaned session';
        header('location: http://localhost/baked/adminlogin.php');
        exit;
    }
else
{
    header("location: http://localhost/baked/adminlogin.php");
    exit;
}
?>