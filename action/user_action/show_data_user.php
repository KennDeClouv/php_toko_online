<?php
include '../../connection/connection.php';

    $sql = 'SELECT * FROM user';

    $result = $conn->query($sql);

    if ($result->num_rows < 0) {
        echo 'Data Tidak Ada';
    }
?>