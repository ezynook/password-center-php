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
    <?php require 'include/view.inc.php'; ?>
</code>
<body>
    <div class="container" style="margin-top: 20px;">
        <div class="alert-message warning">
            <a class="close" href="#">×</a>
            <p><strong>Message</strong> ดูรายละเอียดอุปกรณ์</p>
        </div>
        <table>
            <tr>
                <td>
                    <h3>ชื่ออุปกรณ์: <b><?=$row['device_name']?></b></h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>ลูกค้า: <b><?=$row['customer']?></b></h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>สาขา: <b><?=$row['site']?></b></h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>ไอพี: <b><?=$row['ip']?></b></h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>รายละเอียดอื่นๆ: <b><?=$row['remark']?></b></h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>รหัสผ่าน: <b><i><code><?=$row['pass1']?></code></i></b></h3>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>