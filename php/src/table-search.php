<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Password Generater</title>
    <link href="vendor/bootstrap-1.1.1.css" rel="stylesheet">
    <link href="vendor/docs.css" rel="stylesheet">
    <link href="vendor/prettify.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/jquery.dataTables.min.css">
    <script src="vendor/prettify.js"></script>
    <link rel="stylesheet" href="vendor/animation.css">
    <link rel="stylesheet" href="vendor/table/jquery.dataTables.min.css">
    <link rel="stylesheet" href="vendor/table/rowGroup.dataTables.min.css">
    <style>
    body {
        color: black;
    }
    .badge {
          background-color: #CCC;
          font-weight: bold;
          color: black;
          padding: 4px 8px;
          text-align: center;
          border-radius: 5px;
        }
    </style>
</head>
<code>
    <?php require 'include/table-search.inc.php'; ?>
</code>

<body>
    <div class="container fade" style="margin-top: 50px;">
        <?php if(isset($alert)){echo $alert;} ?>
        <div class="alert-message warning">
            <p><strong>รายการด้านล่างนี้เป็นรหัสผ่านและแมคแอดเดรสที่เคยถูก Generate และบันทึกไว้แล้วในฐานข้อมูล</strong>
            </p>
            <p>
                <li>สามารถค้นหาข้อมูลได้ทั้ง MAC Address และ Password</li>
            </p>
        </div>
        <table class="zebra-striped tablesorter" style="margin-top: 50px;" id="tbl_data">
            <thead>
                <tr>
                    <td class="blue header">Device Name</td>
                    <td class="blue header">Customer</td>
                    <td class="blue header">Site</td>
                    <td class="blue header">IP Address</td>
                    <td class="blue header">Description</td>
                    <td class="blue header">Mac Address</td>
                    <td class="yellow header">Password</td>
                    <td>#</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($query as $row){
                        $macaddr = base64_decode(substr($row['pass2'],0,-2));
                ?>
                <tr>
                    <td><?=$row['device_name']?></strong></td>
                    <td><?=$row['customer']?></strong></td>
                    <td><?=$row['site']?></strong></td>
                    <td><?=$row['ip']?></strong></td>
                    <td><?=$row['remark']?></strong></td>
                    <td><?=$macaddr?></strong></td>
                    <td>
                        <span class="badge"><?=$row['pass1']?></span>
                    </td>

                    <td>
                        <a href="view.php?id=<?=$row['id']?>" target="popup" class="btn primary btn sm"
                            onclick="window.open('view.php?id=<?=$row['id']?>','popup','width=600,height=600'); return false;">
                            <i class="fas fa-eye"></i> View
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <p></p>
        <hr>
    </div>
</body>
<script src="vendor/jquery-3.5.1.js"></script>
<script src="vendor/table/jquery.dataTables.min.js"></script>
<script src="vendor/table/dataTables.rowGroup.min.js"></script>
<script>
$(document).ready(function() {
    $('#tbl_data').DataTable({
        order: [
            [1, 'asc']
        ],
        rowGroup: {
            dataSrc: function(row) {
                return "ลูกค้า: " + row[1]
            }
        }
    });
});
</script>

</html>