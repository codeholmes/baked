<?php
if ($_SERVER["HTTP_REFERER"] != "http://localhost/baked/login.php")
    {
        header("location: http://localhost/baked/login.php");
        exit;
    }
    if (isset($_POST['login-submit-btn']) && !empty($_POST['username']) && !empty($_POST['password']))
    {
        include("../db/db-conn.php");
        $username = $_POST['username'];
        $password = $_POST['password'];

    $getUsername = mysqli_fetch_assoc(mysqli_query($conn, "SELECT username FROM user_account WHERE username='".$username."'"));
        if ($getUsername['username'])
        {
            $getPassword = mysqli_fetch_assoc(mysqli_query($conn, "SELECT password FROM user_account WHERE username='".$username."'"));
            if ($getPassword['password'] == $password)
            {
                //echo "Authentication successfull";
                session_start();
                $_SESSION['username'] = $getUsername['username'];
                if(isset($_SESSION['username']) && $_SESSION['username']!='')
                {
                    header('location: http://localhost/baked/resources/login.inc.php');
                    exit;
                }
            }
            else
            {
                //echo "Wrong Password";
                header('location: http://localhost/baked/login.php');
                exit;
            }
        }
        else
        {
            //echo "User not found";
            header('location: http://localhost/baked/login.php');
            exit;
        }
    }
?>