<?php
    require 'login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>删除文章</title>
    <link rel="icon" href="/static/images/11.png" type="image/x-icon">
    <link rel="stylesheet" href="/common/css/header.css">
    <link rel="stylesheet" href="/common/css/crud-left.css">
    <link rel="stylesheet" href="/common/css/article-delete.css">
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
                          <h3>删除文章</h3> 
                           <form action="/admin/public/article-delete.php" method="post">
                                <input type="text" id="delete" placeholder="删除的id" name="id"> <br>
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
require '../config.php';
$id = trim($_POST["id"]); 
$sql = "delete from article where `id` =  '{$id}'";
$result = mysqli_query($conn,$sql);
?>