<?php
//make create user to database
session_start();
include '../connection/connection.php';

//get data from formnya 
$username = $_POST['username'];
$password = $_POST['password'];

// action for insert data to database

$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);

    if ($password === $row["password"]) {
        $_SESSION['username'] = $row['username'];
        $_SESSION['name'] = $row['nama'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['msg'] = 'login success';
        header("Location: ../pages/layout/layout.php");
    } else {
        $_SESSION["message"] = "user atau password salah";
        // header("Refresh: 1; URL=../pages/login_view.php");
        header("Location: ../pages/login_view.php");
    }
} else {
    $_SESSION["message"] = "username tidak ditemukan";
    header("Location: ../pages/login_view.php");
};
