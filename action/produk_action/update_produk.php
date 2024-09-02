<?php 
// koneksi
include '../../connection/connection.php';

// data dari form
$id = $_POST['id'];
$name = $_POST['name'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$foto = $_POST['foto'];
$deskripsi = $_POST['deskripsi'];
$stok = $_POST['stok'];

// query
$sql = "UPDATE produk SET nama = '$name', category = '$kategori', harga = '$harga', foto = '$foto', deskripsi = '$deskripsi', stok = '$stok' WHERE id = $id";

// jalankan query
//responnya apa dan kemana
if($conn->query($sql) === TRUE){
    session_start();
    $_SESSION['msg'] = 'Update Produk Success';
    header('Location:../../pages/produk/produk.php');
}else{
    session_start();
    $_SESSION['msg_err'] = 'Update Produk Failed';
    header('Location:../../pages/produk/index.php');
}
