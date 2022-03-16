<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname ="blog";
    
    $conn = new mysqli($servername, $username, $password,$dbname);
// 检测连接
if ($conn->connect_erro) {
    die("连接失败: " . $conn->connect_error);
} 