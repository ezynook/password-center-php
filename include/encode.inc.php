<?php
  if (!isset($_SESSION)){ session_start(); }
  require_once 'db.php';
  $msg = "";
  $zip1 = null;
  $strPass = null;
  $zip2 = null;
  $strPass = null;
  $strCustomer = null;
  $strSite = null;
  $strRemark = null;
  $strIp = null;
  $username = null;
  if (isset($_SESSION['Username'])){
    $username = $_SESSION['Username'].' at: '.date('Y-m-d H:i:s');
  }else{
    $username = 'Guest'.' at: '.date('Y-m-d H:i:s');
  }
  if (isset($_POST['btnsave'])){
    $strPass = trim($_POST['strpassword']);
    $zip1 = base64_encode($strPass).'!#';
    $sql = "SELECT * FROM tbl_password WHERE `raw` = '".substr(base64_encode($strPass), 0, 8)."'";
    $query = mysqli_query($conn, $sql);
    $count =  mysqli_num_rows($query);
    $row = mysqli_fetch_assoc($query);
    if ($count == 0){
      $zip2 = substr(base64_encode($strPass), 0, 8).'!#';
      $strCustomer = trim($_POST['customer']);
      $strSite = trim($_POST['site']);
      $strRemark = trim($_POST['remark']);
      $strRemark = preg_replace("#-(.*?\/)-#", "$1", trim($_POST['remark']));
      $strIp = trim($_POST['ip']);
      $sql = "
            INSERT INTO
                tbl_password
            SET
                device_name = '".$_POST['device_name']."',
                customer = '".$strCustomer."',
                site = '".$strSite."',
                ip = '".$strIp."',
                remark = '".$strRemark."',
                pass1 = '$zip2',
                pass2 = '$zip1',
                `raw` = '".substr(base64_encode($strPass), 0, 8)."',
                gen_by = '".$username."'
      ";
      $query = mysqli_query($conn, $sql);
      if (!$query){
        echo "Insert Data failure";
      }
    }else{
      $msg = "รหัสผ่านนี้ซ้ำกับที่เคยออกไปแล้ว";
      $zip2 = $row['pass1'];
    }
  }
  $conn->close();
?>