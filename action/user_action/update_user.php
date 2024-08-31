<?php 
// koneksi
include '../../connection/connection.php';

// data dari form
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// query
$sql = "UPDATE user SET nama = '$name', email = '$email', username = '$username', password = '$password' WHERE id = $id";

// jalankan query
//responnya apa dan kemana
if($conn->query($sql) === TRUE){
    session_start();
    $_SESSION['msg'] = 'Update User Success';
    header('Location:../../pages/user/index.php');
}else{
    session_start();
    $_SESSION['msg_err'] = 'Update User Failed';
    header('Location:../../pages/user/index.php');
}




?>