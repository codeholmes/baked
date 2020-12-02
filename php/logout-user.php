<?php
if ($_SERVER["HTTP_REFERER"] != "http://localhost/baked/resources/login.inc.php")
    {
        header("location: http://localhost/baked/login.php");
        exit;
    }

if ($_SERVER["HTTP_REFERER"] == "http://localhost/baked/resources/login.inc.php")
    {
        session_start();
        unset($_SESSION["username"]);

        echo 'You have cleaned session';
        header('location: http://localhost/baked/login.php');
        exit;
    }
?>