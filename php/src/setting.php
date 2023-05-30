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
    <?php
        $URL = $_SERVER['SERVER_NAME'];
        if (!isset($_SESSION)){ session_start(); }
        require 'include/db.php';
        $msg = '';
        if (isset($_POST['btnsave'])){
            $res = editRule($_POST['rule']);
            if ($res == 'success'){
                $msg = '
                    <div class="alert-message success">
                        <a class="close" href="#">×</a>
                        <p><strong>Success!</strong> Save Changes</p>
                    </div>
                ';
            }
        }
    ?>
</code>

<body>
    <?php include 'menu.php'; ?>
    <div class="container fade" style="margin-top: 50px;">
        <?php if (isset($msg)){echo $msg;} ?>
        <form action="" method="post">
            <label for="xlInput">จำนวนหลักการเข้ารหัส</label>
            <div class="input">
                <input class="xlarge" name="rule" size="30" type="text" value="<?=getRule()?>">
                <button type="submit" class="btn primary" name="btnsave"><i class="fas fa-save"></i> Save Changes</button>
                <a href="http://<?=$URL?>/adminer.php?server=mydatabase&username=nam&db=genpassword&select=tbl_password"
                    target="_blank" class="btn danger">จัดการข้อมูล</a>
            </div>
    </div>
    </form>
    <br>
</body>

</html>