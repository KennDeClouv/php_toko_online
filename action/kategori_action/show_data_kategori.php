<?php

include '../../connection/connection.php';

$sql = 'SELECT * FROM kategori_produk';

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // echo 'Data Tidak Ada';

}else{
    echo "Data Tidak Ada";
}

?>