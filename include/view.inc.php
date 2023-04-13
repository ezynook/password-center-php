<?php
    if (!isset($_SESSION)){ session_start(); }
    require_once 'db.php';
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM tbl_password WHERE id = ".$id;
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($query);
    }
$conn->close();
?>