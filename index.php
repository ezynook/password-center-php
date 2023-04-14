<?php
    if (!isset($_SESSION)){
        session_start();
    }
    $check_auth = $_COOKIE['Username'];

    if (isset($check_auth)){
        $_SESSION['Username'] = $check_auth;
        header("location: table-search.php?menu=table-search");
    }else{
        header('location: ../Auth.php');
    }
?>