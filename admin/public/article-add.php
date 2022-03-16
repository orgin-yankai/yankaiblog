<?php
    require 'login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>添加文章</title>
    <script src="/static/js/admin/index.js"></script>
    <link rel="icon" href="/static/images/11.png" type="image/x-icon">
    <link rel="stylesheet" href="/common/css/header.css">
    <link rel="stylesheet" href="/common/css/crud-left.css">
    <link rel="stylesheet" href="/common/css/article-add.css">
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
                            <h3>添加文章</h3> 
                            <form action="/admin/public/article-add.php" method="post">
                                <input type="text" id="fenclass" placeholder="请输入分类"  name="fenclass">  
                                <input type="text" id="add" placeholder="添加标题" name="add">  
                                <p id="centent">添加内容</p>
                            <p>                         
                                <textarea  id="textarea" cols="100" rows="22" autofocus name="content" maxlength="-1">

                                </textarea>
                            </p>
                                <input type="submit" id="submit"  id="submit" value="提交"> 
                                <input type="reset" id="reset" id="reset" value="取消"> 
                            </form>
                        </div>
            </div>
                
        </div>
       

        
        <div class="footer">
            <div>
                <span>
                 Copyright © 2021-.... 嚴个人博客 All Rights ReservedPowered
                </span>
            </div>
        </div>  
    </div>

</body>
</html>


<?php

require '../config.php';
$fenclass = trim($_POST['fenclass']);
$title = trim($_POST['add']);
$content =trim( $_POST['content']);
$time = time();
$arr = array();
// if(empty($fenclass)){
//     $arr['fenclass'] = '请输入分类';
//     var_dump($arr);
//     exit;
// }
// if(empty($title)){
//     $arr['title'] = '请输入标题';
//     var_dump($arr);
//     exit;
// }
// if(empty($content)){
//     $arr['content'] = '请输入内容';
//     var_dump($arr);
//     exit;
// }

$sql = "insert into article ( `title`,`content`,`fenclass`,`time`)      values('{$title}','{$content}','{$fenclass}','{$time}')";
mysqli_query($conn,$sql);

?>