<?php
session_start();
if ($_SESSION['username'] != '')
{
    //echo "LOGGED IN";
    if (isset($_POST['AddMoney']))
    {
        require_once('../db/db-conn.php');

        $query ="UPDATE user_wallet SET amount=500 WHERE (user_wallet.user_id IN (SELECT user_id from user_account WHERE (username = '".($_SESSION['username'])."')))";
        
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
}

else
{
    //echo "Something went wrong! Login again.";
    header('location: http://localhost/baked/login.php');
    exit;
}