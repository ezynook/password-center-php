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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <style>
    code {
        font-family: Consolas, "courier new";
        color: crimson;
        background-color: #f1f1f1;
        padding: 2px;
        font-size: 25px;
        font-weight: bold;
    }

    * {
        font-family: 'Noto Sans Thai', sans-serif;
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
                <h3><a href="#"><i class="fas fa-key" style="font-size: 30px;"></i> Password Manager Login</a></h3>
            </div>
        </div>
    </div>
    <div class="container fade" style="margin-top: 50px;">
        <?php if (isset($msg)){ echo $msg; } ?>
        <div class="page-header">
            <h1>Login to Password Manager <br><small>( ใช้รหัสผ่านเดียวกับ Web Engineer )</small></h1>
        </div>
        <form action="" method="post" id="form1">
            <div class="clearfix">
                <label for="prependedInput">Passcode</label>
                <div class="input">
                    <div class="input-prepend">
                        <span class="add-on">6 Digit</span>
                        <input class="xlarge success" id="txtpass" name="passcode" size="30" type="password"
                            placeholder="XXXXXX">
                        <input type="hidden" name="btnsave" value="1">
                    </div>
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