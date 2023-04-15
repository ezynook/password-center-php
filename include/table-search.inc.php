<?php
    if (!isset($_SESSION)){ session_start(); }
    echo $_SESSION['username'];
    if (!isset($_SESSION['username'])){
        $alert =  '
            <div class="alert-message block-message error">
                <a class="close" href="#">×</a>
                <p><strong>คุณยังไม่ได้ Login เข้าสู่ระบบ Engineer</p>
                <div class="alert-actions">
                <a class="btn small" href="../Auth.php">กลับไปยังหน้า Login</a>
                </div>
            </div>
        ';
    }
    require_once 'db.php';
    $sql = "SELECT * FROM tbl_password ORDER BY id ASC";
    $query = mysqli_query($conn, $sql);
?>