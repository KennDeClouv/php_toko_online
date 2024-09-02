<?php
include '../../connection/connection.php';

function insert($table, $title, $fields, $redirect_s, $redirect_er)
{
    global $conn;
    $values = implode("','", array_map(function ($field) {
        return $_POST[$field];
    }, $fields));

    $sql = "INSERT INTO $table VALUES (null,'$values')";

    if ($conn->query($sql) === TRUE) {
        session_start();
        $_SESSION['msg'] = "Add $title Success";
        header("Location:$redirect_s");
    } else {
        session_start();
        $_SESSION['msg_err'] = "Add $title Failed";
        header("Location: $redirect_er");
    }
}

function destroy($title, $table, $redirect_s, $redirect_er)
{
    global $conn;
    $id = $_GET['id'];
    // query delete
    $sql = "DELETE FROM $table WHERE id = $id";
    // responnya apa dan kemana
    if ($conn->query($sql) === TRUE) {
        session_start();
        $_SESSION['msg'] = "Delete $title Success";
        header("Location: $redirect_s");
    } else {
        session_start();
        $_SESSION['msg_err'] = "Delete $title Failed";
        header("Location: $redirect_er ");
    }
}

function show($table)
{
    global $conn;
    $sql = "SELECT * FROM $table";

    $result = $conn->query($sql);

    if ($result->num_rows < 0) {
        echo 'Data Tidak Ada';
    }
}

function showDetail($table)
{
    global $conn;
    $id = $_GET['id'];

    $sql = "SELECT * FROM $table WHERE id= $id";

    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
    }
}
