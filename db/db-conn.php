<?php
global $conn;
$conn = mysqli_connect('localhost','root','','baked');

if(!$conn)
{
    echo '[Attention] Unable to connect with database.';
    die();
}