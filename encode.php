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
<code>
  <?php require 'include/encode.inc.php'; ?>
</code>
<body>
    <?php include 'menu.php'; ?>
    <div class="container fade" style="margin-top: 50px;">
        <form action="" method="POST" autocomplete="off">
            <div class="input">
                <p> <i style="color: red;">*</i> Mac Address <b style="color: red;">เช่น 062696DABAED</b></p>
                <input class="xlarge txtpass" name="strpassword" type="text" style="width: 400px;"
                    placeholder="กรุณาระบุและเช็คให้ถูกต้อง">
                <br>
                <p>Device Name</p>
                <input class="xlarge device_name" name="device_name" type="text" style="width: 400px;"
                    placeholder="กรุณาระบุชื่ออุปกรณ์">
                <br>
                <p>Customer</p>
                <input class="xlarge customer" name="customer" type="text" style="width: 400px;"
                    placeholder="กรุณาระบุลูกค้า">
                <br>
                <p>Site</p>
                <input class="xlarge site" name="site" type="text" style="width: 400px;"
                    placeholder="กรุณาระบุสาขา">
                <br>
                <p>IP Address</p>
                <input class="xlarge txtip" name="ip" type="text" style="width: 400px;"
                    placeholder="กรุณาระบุไอพี">
                <p style="color: red;" id="msg"></p>
                <br>
                <p>Description</p>
                <textarea class="xxlarge" id="textarea" name="remark" placeholder="กรุณาระบุรายละเอียดเพิ่มเติม" style="width: 400px;" rows="7"></textarea>
                <br><br>
                <button type="submit" class="btn primary" name="btnsave">เข้ารหัส</button>
                <button type="button" class="btn default" onclick="RefreshPage();">รีเฟรช</button>
            </div>
        </form>
        <hr>
        <div align="center">
          <code><?php if(!empty($msg)){echo $msg;} ?></code> <br><br>
          <code id="p1"><?php if (isset($zip2)){echo $zip2;}; ?></code>
          <button class="btncopy btn success <?php if (empty($zip2)){echo 'disabled';}; ?>" onclick="copyToClipboard('#p1')">คัดลอกรหัส</button>
        </div>
    </div>
    <br>
    <hr>
    <div class="container fade">
      <div class="alert-message block-message warning">
        <p><strong>วิธีการใช้งาน</strong> เมนูเข้ารหัส</p>
        <div class="alert-actions">
            <p><li>รหัสผ่านต้องนำ MAC Address หรือ รหัสประจำอุปกรณ์ (ที่ไม่ซ้ำกัน) เท่านั้น</li></p>
            <p><li>กรอกได้เฉพาะตัวอักษรและตัวเลขเท่านั้น (A-Z, a-z, 0-9) ได้ทั้งตัวเล็กและตัวใหญ่ เช่น 06:26:96:DA:BA:ED ให้ใส่เป็น 062696DABAED</li></p>
        </div>
      </div>
    </div>
</body>
<script>
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  alert("คัดลอกรหัส: "+ $(element).text());
  $('.btncopy').attr('disabled', true);
  $temp.remove();
}
function RefreshPage(){
  window.location.href='encode.php?menu=encode';
}
</script>
<script>
  $('.txtpass').change(function(){
    $(".txtpass").each(function(){
        this.value=this.value.replace(/[\*\^\':,\!]/g, "");
    }).on('keyup', function(){
        this.value=this.value.replace(/[\*\^\':,\!]/g, "");
    });
  });
</script>
<script>
  $(".txtip").change(function(e) {
        e.preventDefault();
        var params = {ip: $(this).val()}
        $.ajax({
            url: "./ip_dup.php",
            type: "POST",
            data: params,
            dataType: 'JSON',
            success: function(data) {
              if (data.type == 'error') {
                $(".txtip").val("");
                $('#msg').text("Ip Address ซ้ำกับฐานข้อมูลก่อนหน้านี้");
                $(".txtip").css("background-color","#EC7063");
              }else{
                $('#msg').text("");
                $(".txtip").css("background-color","#FFF");
              }
            }  
        });
    });
</script>
</html>