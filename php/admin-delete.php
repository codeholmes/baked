<?php

require_once('db/db-conn.php');

$id = $_POST['user_id'];

if(empty($id))
{
die();
}
//$query = $con->prepare("DELETE FROM userinfo where id=?");

// sql to delete a record
$sql = "DELETE FROM user_id WHERE user_id=".$id;

if (mysqli_query($conn, $sql))
{
  echo "User deleted from database.";
} else
{
  echo "Error deleting user: " . mysqli_error($conn);
}

mysqli_close($conn);