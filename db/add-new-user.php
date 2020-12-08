<?php
if (isset($_POST['reg-submit-btn']))
{
    require_once('db-conn.php');
    global $conn;

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    
    $newUser = $_SERVER["HTTP_REFERER"];

    if(!empty($username) && !empty($email)  && !empty($password1) && !empty($password2))
    {
    $query ="INSERT into user_account (username, email, password) VALUES ('$username', '$email','$password2');";
    
    if (mysqli_query($conn, $query)) {
    header("Location: http://localhost/baked/login.php");
    exit;
    } else {
    echo "Error: ".$query."<br>".mysqli_error($conn);
    }
    }
}