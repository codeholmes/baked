<?php
if ($_SERVER["HTTP_REFERER"] != "http://localhost/baked/adminlogin.php")
    {
        header("location: http://localhost/baked/adminlogin.php");
        exit;
    }
    if (isset($_POST['login-submit-btn']) && !empty($_POST['username']) && !empty($_POST['password']))
    {
        include("../db/db-conn.php");
        $username = $_POST['username'];
        $password = $_POST['password'];

    $getUsername = mysqli_fetch_assoc(mysqli_query($conn, "SELECT username FROM admin_account WHERE username='".$username."'"));
        if ($getUsername['username'])
        {
            $getPassword = mysqli_fetch_assoc(mysqli_query($conn, "SELECT password FROM admin_account WHERE username='".$username."'"));
            if ($getPassword['password'] == $password)
            {
                //echo "Authentication successfull";
                session_start();
                $_SESSION['username'] = $getUsername['username'];
                if(isset($_SESSION['username']) && $_SESSION['username']!='')
                {
                    header('location: http://localhost/baked/resources/admin-login.inc.php');
                    exit;
                }
            }
            else
            {
                //echo "Wrong Password";
                header('location: http://localhost/baked/adminlogin.php');
                exit;
            }
        }
        else
        {
            //echo "User not found";
            header('location: http://localhost/baked/adminlogin.php');
            exit;
        }
    }