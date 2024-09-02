<?php 
// include '../../connection/connection.php';

// $name = $_POST['name'];
// $kategori = $_POST['kategori'];
// $harga = $_POST['harga'];
// $foto = $_POST['foto'];
// $deskripsi = $_POST['deskripsi'];
// $stok = $_POST['stok'];

// $sql = "INSERT INTO produk VALUES ( NULL, '$name', '$kategori', '$harga', '$foto', '$deskripsi', '$stok')";

// if($conn->query($sql) == true){
//     session_start();
//     $_SESSION['msg'] = 'Add Produk Success';
//     header('Location:../../pages/produk/produk.php');
// }else{
//     session_start();
//     $_SESSION['msg_err'] = 'Add Produk Failed';
//     header('Location:../../pages/produk/add_user.php');
// }

include '../function.php';
insert("produk","Produk",["name",'kategori','harga','foto','deskripsi','stok'],"../../pages/produk/produk.php","../../pages/add_produk.php");