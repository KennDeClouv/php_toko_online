<?php 
// include connection.php
include '../../connection/connection.php';
// nangkap data ID

$id = $_GET['id'];
// query delete
$sql = "DELETE FROM user WHERE id = $id";
// responnya apa dan kemana
if($conn->query($sql) === TRUE){
    session_start();
    $_SESSION['msg'] = 'Delete User Success';
    header('Location:../../pages/user/index.php');
}else{
    session_start();
    $_SESSION['msg_err'] = 'Delete User Failed';
    header('Location:../../pages/user/index.php');
}


?>