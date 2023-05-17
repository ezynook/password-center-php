<?php
    $conn = mysqli_connect('mydb', 'genpassword', 'genpassword', 'genpassword');
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