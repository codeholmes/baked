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

if (isset($_POST['UpdateName']))
{
    $NewName = $_POST['NewName'];
    require_once('../db/db-conn.php');
    $query = "UPDATE user_account SET name ='".$NewName."' WHERE username ='".$_SESSION['username']."' ";
    if (mysqli_query($conn, $query))
    {
        header("location: http://localhost/baked/resources/setting.php");
        exit;
    }
    else
    {
        echo "Error: ".$query."<br>".mysqli_error($conn);
    }
}

if (isset($_POST['UpdateEmail']))
{
    $NewEmail = $_POST['NewEmail'];
    require_once('../db/db-conn.php');
    $query = "UPDATE user_account SET email ='".$NewEmail."' WHERE username ='".$_SESSION['username']."' ";
    if (mysqli_query($conn, $query))
    {
        header("location: http://localhost/baked/resources/setting.php");
        exit;
    }
    else
    {
        echo "Error: ".$query."<br>".mysqli_error($conn);
    }
}

