<?php
    $os = PHP_OS;
    if ($os == 'Linux'){
        $HOST = 'mydatabase';
        $PASSWD = '2909';
    }else{
        $HOST = 'localhost';
        $PASSWD = '';
    }
    $conn = mysqli_connect($HOST, 'root', $PASSWD, 'genpassword');
    mysqli_query($conn,"SET NAMES 'UTF8'");
?>