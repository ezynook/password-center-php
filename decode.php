<?php
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
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Password Generater</title>
    <link href="vendor/bootstrap-1.1.1.css" rel="stylesheet">
    <link href="vendor/docs.css" rel="stylesheet">
    <link href="vendor/prettify.css" rel="stylesheet">
    <script src="vendor/jquery-1.5.2.min.js"></script>
    <script src="vendor/jquery.tablesorter.min.js"></script>
    <script src="vendor/prettify.js"></script>
    <link rel="stylesheet" href="vendor/animation.css">
    <style>
      code {
        font-family: Consolas,"courier new";
        color: crimson;
        background-color: #f1f1f1;
        padding: 2px;
        font-size: 25px;
        font-weight: bold;
      }
  </style>
</head>

<body>
    <?php include 'menu.php'; ?>
    <div class="container fade" style="margin-top: 50px;">
        <form action="" method="POST" autocomplete="off">
            <div class="input">
                <p>รหัสผ่าน <b style="color: red;">( 10 หลัก )</b></p>
                <input class="xlarge" name="strpassword" type="text" style="width: 400px;"
                    placeholder="กรุณาระบุและเช็คให้ถูกต้อง">
                <br><br>
                <button type="submit" class="btn success" name="btnsave">ถอดรหัส</button>
                <button type="button" class="btn default" onclick="RefreshPage();">รีเฟรช</button>
            </div>
        </form>
        <hr>
        <div align="center">
          <code id="p1"><?php if (isset($unzip)){echo $unzip;}; ?></code>
          <button class="btncopy btn info <?php if (empty($unzip)){echo 'disabled';}; ?>" onclick="copyToClipboard('#p1')">คัดลอกรหัส</button>
        </div>
    </div>
    <br>
    <hr>
    <div class="container fade">
      <div class="alert-message block-message warning">
        <p><strong>วิธีการใช้งาน</strong> ถอดรหัส</p>
        <div class="alert-actions">
            <p><li>นำรหัสผ่าน 10 หลักมาวางในช่องกรอกข้อมูลแล้วกด "ถอดรหัส" กดปุ่มคัดลอกเพื่อนำไปใช้งานต่อ</li></p>
        </div>
      </div>
    </div>
</body>
<script>
function RefreshPage(){
  window.location.href='decode.php?menu=decode';
}
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  alert("คัดลอกรหัส: "+ $(element).text());
  $('.btncopy').attr('disabled', true);
  $temp.remove();
}
</script>
</html>