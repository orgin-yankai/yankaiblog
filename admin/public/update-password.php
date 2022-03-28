<?php
require 'login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>修改密码</title>
    <script src="/static/js/admin/index.js"></script>
    <link rel="icon" href="/static/images/11.png" type="image/x-icon">
    <link rel="stylesheet" href="/common/css/header.css">
    <link rel="stylesheet" href="/common/css/crud-left.css">
    <link rel="stylesheet" href="/common/css/update-password.css">
    <link rel="stylesheet" href="/common/css/crud-footer.css">
</head>
<body id="body">
    <div id="all">
        <div class="header">
                <div class="header-ul">
                    <ul>
                        <li><a href="#">嚴998个人博客&nbsp;|&nbsp;个人技术博客管理系统</a></li>
                    </ul>
            </div>
        </div>
        <div class="content">
            <div class="left">
                    <div>
                           <ul>
                               <li><a href="/admin/public/index.php">后台首页</a></li>
                               <li><a href="/admin/public/article-add.php">添加文章</a></li>
                               <li><a href="/admin/public/article-delete.php">删除文章</a></li>
                               <li><a href="/admin/public/article-update.php">修改文章</a></li>
                              <li><a href="/admin/public/update-password.php">修改密码</a>
                              <li><a href="/admin/public/exit.php">退出系统</a></li>
                           </ul>
                    </div>
            </div>
            <div class="right">
                        <div>
                            <h3>修改密码</h3> 
                           
                            <form action="./update-password.php" method="post">
                                <input type="text" id="password-1" placeholder="请输入密码" name="password-1"><br>
                                <input type="text" id="password-2" placeholder="请确认密码" name="password-2"> <br>
                                <input type="submit" id="submit"  id="submit" value="提交"> 
                                <input type="reset" id="reset" id="reset" value="取消"> 
                           </form> 
                        </div>
            </div>
                
        </div>
       

        
        <div class="footer">
            <div>
                <span>
                    Copyright © 2019-<?php echo date('Y');?> 嚴个人博客 All Rights ReservedPowered
                </span>
            </div>
        </div>  
    </div>

</body>
</html>

<?php 
session_start();
require '../config.php';
$pwd_1 = trim($_POST['password-1']);
$pwd_2 = trim($_POST['password-2']);
$name = $_SESSION['name'];
$time = time();
$sql = "update admin set `password`= '{$pwd_2}' where `name` = '{$name}'";
$result = mysqli_query($conn,$sql);
?>