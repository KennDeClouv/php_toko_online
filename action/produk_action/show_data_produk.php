<?php
include '../../connection/connection.php';

$sql = 'SELECT * FROM produk';

$result = $conn->query($sql);

if ($result->num_rows < 0) {
    echo 'Data Tidak Ada';
}

// include '../../action/function.php';
// show("produk");