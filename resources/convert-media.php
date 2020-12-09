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
        <title>Convert Media</title>
        <link rel="icon" href="../img/favicon.ico" type="image/ico">
        <link rel="stylesheet" href="../css/convert-media-styles.css">
        <script src="../js/jquery/jquery-3.5.1.js"></script>
        <script src="../js/jquery/upload-media.js"></script>
    </head>
    <body>
        <div class="upload-msg"> Upload media to start Conversion! </div>

        <div class="upload-container">
            <form name="UploadForm" action="" method="POST">
                <label class="browseButton">
                <input name="UploadMedia" type="file"/>
                Browse
                </label>
                <br>
                <button class="convertButton" type="submit" name = "convertButton" value="submit"> Convert</button>
            </form>
        </div>
    </body>
</html>