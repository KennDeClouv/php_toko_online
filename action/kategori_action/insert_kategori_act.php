<?php

// include '../../connection/connection.php';

// $name = $_POST['name'];

// $sql = "INSERT INTO category VALUES(null, '$name')" ;

// if($conn->query($sql) == true){
//     session_start();
//     $_SESSION['msg'] = 'Add Kategori Success';
//     header('location:../../pages/kategori/index.php');
// }else{
//     session_start();
//     $_SESSION['msg_error'] = 'Add Kategori Failed';
//     header('location:../../pages/kategori/index.php');
// }

include '../function.php';
insert("category","Kategori","name","../../pages/kategori/","../../pages/kategori/");