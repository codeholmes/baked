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
        <title>Upload Media</title>
        <link rel="icon" href="../img/favicon.ico" type="image/ico">
        <link rel="stylesheet" href="../css/upload-media-styles.css">
        <script src="../js/jquery/jquery-3.5.1.js"></script>
        <script src="../js/jquery/upload-media.js"></script>
    </head>
    <body>
        <div class="main-container">
            <div class="upload-msg"> Upload media to compress or convert! </div>

            <div class="upload-container">
                <form name="UploadForm" action="../php/upload-query.php" method="POST"">
                    <label class="browseButton">
                    <input name="UploadMedia" type="file">
                    Browse
                    </label>
                    <br>
                    <button class="uploadButton" type="submit" name = "CompressMedia" value="submit"> Compress</button>
                    <button class="uploadButton2" type="submit" name = "ConvertMedia" value="submit"> Convert</button>
                </form>
            </div>
        </div>
    </body>
</html>