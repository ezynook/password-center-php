<?php
    require_once 'include/db.php';
    if (isset($_GET['delete'])){
        $isGet = $_GET['delete'];
        if ($isGet == '2909' || $isGet == '1234'){
            mysqli_query($conn, "TRUNCATE tbl_password");
            echo "
                <div>
                    <h4>Empty Database Successfully</h4>
                    <a href='encode.php'>Return to Home</a>
                </div>
            ";
        }else{
            echo "Access Denied (คุณไม่มีสิทธิเข้าถึง)";
        }
    }
    