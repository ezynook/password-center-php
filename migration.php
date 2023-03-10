<?php
    require_once 'db.php';
    mysqli_query($conn, "START TRANSACTION;");
    mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS genpassword");
    mysqli_query($conn, "USE genpassword");
    mysqli_query($conn, "
        CREATE TABLE `tbl_password` (
            `id` int(11) NOT NULL,
            `pass1` varchar(10) NOT NULL,
            `pass2` varchar(100) NOT NULL,
            `raw` varchar(100) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci
    ");
    mysqli_query($conn, "ALTER TABLE `tbl_password` ADD PRIMARY KEY (`id`)");
    mysqli_query($conn, "ALTER TABLE `tbl_password` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1");
    mysqli_query($conn, "COMMIT");
    $conn->close();
    header("Location: encode.php?menu=encode");
?>