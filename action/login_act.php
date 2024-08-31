<?php
//make create user to database
include '../connection/connection.php';

//get data from formnya 
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// action for insert data to database
$sql = "SELECT FROM user 
        WHERE username = '$username' AND password = '$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<script>alert('Login Success');</script>";
    echo "<script>location.href='../pages/dashboard_view.php';</script>";
} else {
    session_start();
    $_SESSION['message'] = "Username and Password is wrong";

    return header('location: ../pages/login_view.php');
}





?>