<?php
if (($_SERVER["HTTP_REFERER"] == "http://localhost/baked/resources/login.inc.php")
    || ($_SERVER["HTTP_REFERER"] == "http://localhost/baked/resources/setting.php")
    || ($_SERVER["HTTP_REFERER"] == "http://localhost/baked/resources/upload-media.php")
    || ($_SERVER["HTTP_REFERER"] == "http://localhost/baked/resources/compress-media.php")
    || ($_SERVER["HTTP_REFERER"] == "http://localhost/baked/resources/convert-media.php")
    || ($_SERVER["HTTP_REFERER"] == "http://localhost/baked/resources/download-media.php"))
    {
        session_start();
        unset($_SESSION["username"]);

        //echo 'You have cleaned session';
        header('location: http://localhost/baked/login.php');
        exit;
    }
else
{
    header("location: http://localhost/baked/login.php");
    exit;
}
?>