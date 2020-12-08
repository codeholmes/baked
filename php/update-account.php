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
echo "hi";
if (isset($_POST['UpdateUsername']))
{
    echo "hello";
    $NewUsername = $_POST['NewUsername'];
    require_once('../db/db-conn.php');
    echo "bye";
    $query = "UPDATE user_account SET username ='".$NewUsername."' WHERE username ='".$_SESSION['username']."' ";
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