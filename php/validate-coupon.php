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

if (isset($_POST['AddMoney']))
{
    require_once('../db/db-conn.php');

    $query ="UPDATE user_wallet SET amount=500 WHERE '".$_SESSION['username']."' IN (SELECT username FROM user_account); ;";
    
    if (mysqli_query($conn, $query))
    {
        header("Location: http://localhost/baked/resources/setting.php");
        exit;
    }
    else
    {
        echo "Error: ".$query."<br>".mysqli_error($conn);
    }
}