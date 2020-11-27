<?php
if (isset($_POST['reg-submit-btn']))
{
    require_once('db-conn.php');
    global $conn;

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($email)  && !empty($password))
    {
    $query ="INSERT into user_account (username, email, password) VALUES ('$username', '$email','$password');";

    if (mysqli_query($conn, $query)) {
    echo "Congrats! Registration Successfull!";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    }
}