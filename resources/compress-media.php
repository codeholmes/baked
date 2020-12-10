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
        <title>Compress Media</title>
        <link rel="icon" href="../img/favicon.ico" type="image/ico">
        <link rel="stylesheet" href="../css/compress-media-styles.css">
        <script src="../js/jquery/jquery-3.5.1.js"></script>
        <script src="../js/jquery/compress-media.js"></script>
    </head>
    <body>
        <div class="main-container">
        <?php
            require_once('../db/db-conn.php');
            $getData = mysqli_fetch_assoc(mysqli_query($conn, "SELECT raw_data FROM user_data WHERE username='".($_SESSION['username'])."'"));
            ?>
            
            <?php
            if (($getData['raw_data']) != '')
                {
                    $Message = "Media has been successfully compressed!";
                    $DataName = "File Name: '".$getData['raw_data']."'";
                }
            else
                {
                    $Message = "Oops! No media available to compress.";
                    $DataName = 'File name: [No file selected]';
                }
            ?>
            <div class="upload-msg"> <?php echo $Message;?></div>
            <div class="upload-msg2"> <?php echo $DataName ?></div>

            <div class="upload-container">
                <form name="UploadForm" action="../php/compression.inc.php" method="POST">
                    <button class="compressButton" type="submit" name = "compressButton" value="submit"> Download</button>
                </form>
            </div>
        </div>
    </body>
</html>