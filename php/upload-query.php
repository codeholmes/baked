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

if (isset($_POST['CompressMedia']))
{
    require_once('../db/db-conn.php');

    $media = $_POST['UploadMedia'];

/*
    $media = $_FILES['UploadMedia'];
    list($width, $height)=getimagesize($media);
    $nwidth = 200;
    $nheight = 100;
    $processed ="imagecreatetruecolor($nwidth, $nheight)";
    $source = imagecreatefromjpeg($media);
    $imagecopyresize($processed, 0,0,0,0, $nwidth, $nheight, $width, $height);
    $new_name= "processed_image.jpeg";

    $processed_image = imagejpeg($processed, $new_name);
*/

    if(($media) != '')
    {
        $query ="INSERT into user_data (username, raw_data) VALUES ('".$_SESSION['username']."', '".$media."')";
        
        if (mysqli_query($conn, $query))
        {
            header("Location: http://localhost/baked/resources/compress-media.php");
            exit;
        }
        else
        {
            echo "Error: ".$query."<br>".mysqli_error($conn);
        }
    }
    else
    {
        header("Location: http://localhost/baked/resources/upload-media.php");
            exit;
    }
}
elseif (isset($_POST['ConvertMedia']))
{
    require_once('../db/db-conn.php');

    $media = $_POST['UploadMedia'];

    if(($media) != '')
    {
        $query ="INSERT into user_data (username, raw_data) VALUES ('".$_SESSION['username']."', '".$media."')";
        
        if (mysqli_query($conn, $query))
        {
            header("Location: http://localhost/baked/resources/convert-media.php");
            exit;
        }
        else
        {
            echo "Error: ".$query."<br>".mysqli_error($conn);
        }
    }
    else
    {
        header("Location: http://localhost/baked/resources/upload-media.php");
            exit;
    }
}