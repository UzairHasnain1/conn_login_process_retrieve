<?php
include_once 'conn.php';
if(isset($_POST['save']))
{
    $username = $_POST['name'];
    $password = $_POST['password'];
    $sql = "INSERT INTO record (username, password)
    VALUES ('$username','$password')";
    if(mysqli_query($conn,$sql))  {
        // echo "New record created  successfully !";
header('location:show.php');

    }

}




?>