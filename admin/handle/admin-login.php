<?php
session_start();
require "../config.php";
$name = trim($_POST['name']);
$password = trim($_POST['password']);

$sql = "select *from admin where `name` = '{$name}'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result); 
if(empty($name) && empty($password) || (empty($name) || empty($password))){
    $arr["code"] = 0;
    $arr["fail"] = "失败";
    $arr["msg"] = "用户名或密码非空"; 
    exit(json_encode($arr));
}
if($row['name'] != $name){
   $arr["code"] = 0;
   $arr["fail"] = "失败";
   $arr["msg"] = "用户名错误";  
   exit(json_encode($arr));
}
if($row['password'] != $password){
   $arr["code"] = 0;
   $arr["fail"] = "失败";
   $arr["msg"] = "密码错误";  
   exit(json_encode($arr));
}

if(empty($_SESSION['name']) && empty($_SESSION['password'])){
   $_SESSION['name'] =  $row['name'];
   $_SESSION['password'] = $row['password'];
   setcookie('name',$_SESSION['name'],time()+3600,"/");
   setcookie('password',$_SESSION['password'],time()+3600,"/");
}

$arr["code"] = 1;
$arr["success"] = "成功";
$arr['addr'] = "http://www.yankaiblog.com/admin/public/index.php";   
echo json_encode($arr);


