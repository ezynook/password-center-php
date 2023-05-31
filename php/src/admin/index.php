<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gen Password Admin Zone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
</head>
<code>
    <?php
        if (!isset($_SESSION)){
            session_start();
        }
        if ($_SESSION['rule'] != 0){
            header("location: ../table-search.php?menu=table-search");
            exit;
        }
        require '../include/db.php';
        date_default_timezone_set("Asia/Bangkok");
        $sql = "SELECT * FROM tbl_password";
        $query = mysqli_query($conn, $sql);
    ?>
</code>
<body>
    <!-- As a link -->
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Password Center (Admin)</a>
  </div>
</nav>
    <div class="container mt-5">
        <table class="table table-sm table-stripped table-hover table-bordered" id="myTable">
            <thead>
                <tr>
                    <td>Device Name</td>
                    <td>Customer</td>
                    <td>Site</td>
                    <td>IP Address</td>
                    <td>Remark</td>
                    <td>Password</td>
                    <td>Option</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($query as $row){ ?>
                    <tr>
                        <td><?=$row['device_name']?></td>
                        <td><?=$row['customer']?></td>
                        <td><?=$row['site']?></td>
                        <td><?=$row['ip']?></td>
                        <td><?=$row['remark']?></td>
                        <td><?=$row['pass1']?></td>
                        <td>
                            <a href="edit.php?id=<?=$row['id']?>" class="btn btn-success btn-sm">แก้ไข</a>
                            <a href="delete.php?id=<?=$row['id']?>" 
                                onclick="return confirm('ต้องการลบรหัสนี้ กรุณายืนยัน')"
                                class="btn btn-danger btn-sm">ลบ</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>
</html>