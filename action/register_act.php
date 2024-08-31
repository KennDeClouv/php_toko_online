<?php 
//make create user to database
include '../connection/connection.php';

//get data from formnya 
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// action for insert data to database
$sql = "INSERT INTO user VALUES (null,'$name', '$username', '$email', '$password')";

if ($conn->query($sql) == TRUE) {
    echo "<script>alert('Register Success');</script>";
    echo "<script>location.href='../pages/login_view.php';</script>";
} else {
    echo "<script>alert('Register Failed');</script>";
    echo "<script>location.href='../pages/register_view.php';</script>";
}

?>