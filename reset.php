<?php
    require_once 'db.php';
    mysqli_query($conn, "TRUNCATE tbl_password");
    echo "
        <div>
            <h4>Empty Database Successfully</h4>
            <a href='encode.php'>Return to Home</a>
        </div>
    ";