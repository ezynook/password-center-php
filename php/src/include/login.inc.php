<?php
    error_reporting(0);
    if (!isset($_SESSION)){
        session_start();
    }
    if (isset($_SESSION['username']) && isset($_SESSION['rule'])){
        header("location: menu.php#");
        exit;
    }
    require 'db.php';
    $msg = '';
    if (isset($_POST['btnsave'])){
        $sql = "
                SELECT
                        *
                FROM
                        users
                WHERE
                       passcode = '".base64_encode($_POST['passcode'])."'
        ";
        $query = mysqli_query($conn2, $sql);
        if ($query){
            $count = mysqli_num_rows($query);
            if ($count > 0){
                $row = mysqli_fetch_assoc($query);
                $_SESSION['username'] = $row['username'];
                $_SESSION['rule'] = $row['rule'];
                header("location: menu.php#");
            }else{
                $msg = '
                    <div class="alert-message error">
                        <p><strong>Error!</strong> ชื่อผู้ใช้หรือรหัสผ่านผิดพลาด</p>
                    </div>
                ';
            }
        }
    }
?>