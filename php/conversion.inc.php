<?php
session_start();
if ($_SESSION['username'] != '')
{
    require_once('../db/db-conn.php');
    $getImage = mysqli_fetch_assoc(mysqli_query($conn, "SELECT raw_data FROM user_data WHERE username='".($_SESSION['username'])."'"));
    $Image = $getImage['raw_data'];
    header("Content-Disposition: attachment; filename=$Image");
}
else
{
    //echo "Something went wrong! Login again.";
    header('location: http://localhost/baked/login.php');
    exit;
}