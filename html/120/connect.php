<?php
    $server="10.10.10.1";
    $db_username="root";
    $db_password="123456";
    $dbname="test";
    $conn = new mysqli($server,$db_username,$db_password,$dbname);
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    }
?>
