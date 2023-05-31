<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Gen Password</title>
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
        if (isset($_GET['id'])){
            $id = $_GET['id'];
        }else{
            header("location: index.php");
        }
        $sql = "SELECT * FROM tbl_password WHERE id=".$id;
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($query);
        
        if (isset($_POST['btnsave'])){
            $sql = "
                UPDATE
                    tbl_password
                SET
                    device_name = '".$_POST['device']."',
                    customer = '".$_POST['customer']."',
                    site = '".$_POST['site']."',
                    ip = '".$_POST['ip']."',
                    remark = '".$_POST['remark']."'
                WHERE
                    id = '$id'
            ";
            if (mysqli_query($conn, $sql)){
                header("location: index.php");
            }
        }
    ?>
</code>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Password Center (Admin)</a>
        </div>
    </nav>
    <div class="container mt-5">
        <form action="" method="post">
            Device Name: <input type="text" name="device" class="form-control" value="<?=$row['device_name']?>">
            Customer: <input type="text" name="customer" class="form-control" value="<?=$row['customer']?>">
            Site: <input type="text" name="site" class="form-control" value="<?=$row['site']?>">
            IP Address: <input type="text" name="ip" class="form-control" value="<?=$row['ip']?>">
            Remark: <input type="text" name="remark" class="form-control" value="<?=$row['remark']?>">
            Password: <input type="text" name="pass1" class="form-control" value="<?=$row['pass1']?>" readonly disabled>
            <br>
            <input type="submit" value="Save" name="btnsave" class="btn btn-success">
            <a href="index.php" class="btn btn-danger">ยกเลิก</a>
        </form>
    </div>
</body>
</html>