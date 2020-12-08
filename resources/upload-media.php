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
        <link rel="stylesheet" href="../css/upload-media-styles.css">
        <script src="../js/jquery/jquery-3.5.1.js"></script>
        <script src="../js/jquery/upload-media.js"></script>
    </head>
    <body>
        <div class="upload-msg"> Upload media to compress or convert! </div>

        <div class="upload-container">
            <label class="uploadButton">
            <input type="file"/>
            Browse
            </label>
        </div>
    </body>
</html>