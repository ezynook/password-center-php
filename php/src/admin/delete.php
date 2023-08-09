<?php
    if (!isset($_SESSION)){
        session_start();
    }
    if ($_SESSION['rule'] != 0){
        header("location: ../table-search.php?menu=table-search");
        exit;
    }
    require '../include/db.php';
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM tbl_password WHERE id=".$id;
        $query = mysqli_query($conn, $sql);
        if ($query){
            header("location: index.php");
        }
    }
?>