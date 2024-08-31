<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "toko_online";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}else{
    echo "<script>console.log('Connection Success');</script>";
}


?>