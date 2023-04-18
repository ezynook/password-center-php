<?php
    session_start();
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
                header("location: table-search.php?menu=table-search");
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