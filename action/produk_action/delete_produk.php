<?php 
// // include connection.php
// include '../../connection/connection.php';
// // nangkap data ID

// $id = $_GET['id'];
// // query delete
// $sql = "DELETE FROM produk WHERE id = $id";
// // responnya apa dan kemana
// if($conn->query($sql) === TRUE){
//     session_start();
//     $_SESSION['msg'] = 'Delete User Success';
//     header('Location:../../pages/produk/produk.php');
// }else{
//     session_start();
//     $_SESSION['msg_err'] = 'Delete User Failed';
//     header('Location:../../pages/produk/index.php');
// }

include '../function.php';
destroy("produk","produk","../../pages/produk/produk.php","../../pages/produk/produk.php");