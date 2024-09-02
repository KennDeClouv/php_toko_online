<?php 
// koneksi
include '../../connection/connection.php';

// data dari form
$id = $_POST['id'];
$name = $_POST['name'];

// query
$sql = "UPDATE category SET nama = '$name' WHERE id = $id";

// jalankan query
//responnya apa dan kemana
if($conn->query($sql) === TRUE){
    session_start();
    $_SESSION['msg'] = 'Update User Success';
    header('Location:../../pages/kategori/index.php');
}else{
    session_start();
    $_SESSION['msg_err'] = 'Update User Failed';
    header('Location:../../pages/kategori/index.php');
}




?>