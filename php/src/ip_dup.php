<?php
require_once 'db.php';
if (isset($_POST['ip'])){
    $ip = $_POST['ip'];
    $sql = "SELECT * FROM tbl_password WHERE ip = '{$ip}'";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) == 0){
        echo json_encode(array('type'=>'success', 'msg'=>'update success'));
    }else{
        echo json_encode(array('type'=>'error', 'msg'=>'update failed'));
    }
}