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
    $conn2 = mysqli_connect($HOST, 'root', $PASSWD, 'da_db');
    mysqli_query($conn,"SET NAMES 'UTF8'");

    function getRule(){
        $db = $GLOBALS['conn'];
        $sql = "SELECT * FROM tbl_config WHERE id = 1";
        $query = mysqli_query($db, $sql);
        if ($query) {
            $row = mysqli_fetch_assoc($query);
            return $row['length'];
        }
    }
    function editRule($rule){
        $db = $GLOBALS['conn'];
        $sql = "UPDATE tbl_config SET length = '$rule' WHERE id = 1";
        $query = mysqli_query($db, $sql);
        if ($query) {
            return 'success';
        }else{
            return 'fail';
        }
    }
?>