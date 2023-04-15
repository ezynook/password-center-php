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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"> </script>
    <script src="vendor/prettify.js"></script>
    <link rel="stylesheet" href="vendor/animation.css">
    <style>
    code {
        font-family: Consolas, "courier new";
        color: crimson;
        background-color: #f1f1f1;
        padding: 2px;
        font-size: 25px;
        font-weight: bold;
    }
    </style>
</head>
<code>
    <?php require 'include/login.inc.php'; ?>
</code>

<body>
    <div class="topbar">
        <div class="fill">
            <div class="container">
                <h3><a href="#">Login</a></h3>
            </div>
        </div>
    </div>
    <div class="container fade" style="margin-top: 50px;" align="center">
        <form action="" method="post" id="form1">
            <div class="well" style="padding: 19px 19px;">
                <label for="Passcode"></label>
                <br>
                <div class="clearfix info">
                    <div class="input">
                        <input class="xlarge success" id="txtpass" name="passcode" size="30" type="password"
                            placeholder="XXXXXX">
                        <span class="help-inline">ใช้รหัสเดียวกับ Engineer App</span>
                    </div>
                    <input type="hidden" name="btnsave" value="1">
                </div>
            </div>
        </form>
    </div>
</body>
<script>
$("#txtpass").keypress(function() {
    var key = $(this).val();
    if (key.length == 6) {
        $("#form1").submit();
    }
});
</script>

</html>