<?php
session_start();
include("../db/db-conn.php");

$query = "DELETE FROM user_account WHERE username ='".($_SESSION["username"])."'";
if (mysqli_query($conn, $query))
    {
        unset($_SESSION["username"]);
        header("Location: http://localhost/baked/login.php");
        exit;
    }
else
    {
        echo "Error: ".$query."<br>".mysqli_error($conn);
    }
?>