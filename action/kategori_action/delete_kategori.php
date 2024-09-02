<?php 
// // include connection.php
// include '../../connection/connection.php';
// // nangkap data ID

// $id = $_GET['id'];
// // query delete
// $sql = "DELETE FROM category WHERE id = $id";
// // responnya apa dan kemana
// if($conn->query($sql) === TRUE){
//     session_start();
//     $_SESSION['msg'] = 'Delete kategori Success';
//     header('Location:../../pages/kategori/index.php');
// }else{
//     session_start();
//     $_SESSION['msg_err'] = 'Delete kategori Failed';
//     header('Location:../../pages/kategori/index.php');
// }

include '../function.php';
destroy("Kategori","category","../../pages/kategori/","../../pages/kategori/");