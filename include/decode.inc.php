<?php
  if (!isset($_SESSION)){ session_start(); }
  require_once 'db.php';
  if (isset($_POST['btnsave'])){
    $strPass = trim($_POST['strpassword']);
    $zip_check = substr($strPass, 0, 8);
    $sql = "SELECT * FROM tbl_password WHERE `raw` = '$zip_check'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    if (mysqli_num_rows($query) > 0){
        $unzip = base64_decode(substr($row['pass2'], 0, -2));
    }else{
        $unzip = "ไม่มีรหัสผ่านในระบบ";
    }
    
  }
?>