<?php
  require "../common/config/config.php";
  require '../admin/config.php';
  $sql2 = "select `id`,`title` from article   order by `browse` desc  limit 7";
  $read = mysqli_query($conn,$sql2);
  $readR = mysqli_fetch_all($read);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/static/images/11.png" type="image/x-icon">
    <link rel="stylesheet" href="/common/css/header.css">
    <link rel="stylesheet" href="/static/css/self.css">
    <link rel="stylesheet" href="/common/css/right.css">
    <link rel="stylesheet" href="/common/css/footer.css">
    <script src="/static/js/index.js"></script>
    <title> 嚴998个人博客</title>
</head>
<body id="body">
    <div id="all">
        <?php
                include BLOG."/common/html/header.php"; 
        ?>
           <div class="content">
                <div class="right">
                         <div>
                               <div>
                               <h3>关于我</h2>
                                <p>博主嚴凯，现居重庆市彭水县，是98后。</p>
                                <ul>
                                    <li><a href="">2017-2020年大学毕业</a></li>
                                    <li><a href="">从19年开始喜欢上php并自学</a></li>
                                    <li><a href="">总喜欢干点什么的野生程序员</a></li>
                                    <li><a href="">2年PHP开发，技术一般</a></li>
                                    <li><a href="">PHP是世界上最好的语言</a></li>
                                </ul>
                               </div>
                               <div>
                               <h3>关于博客</h2>
                                <p>从2020-至今</p>
                                <ul>
                                    <li><a href="">每天一更新文章</a></li>
                                    <li><a href="">后面添加....</a></li>
                                    <li><a href="">后面添加....</a></li>
                                    <li><a href="">后面添加....</a></li>
                                </ul>
                               </div>
                            </div>
                        
                </div>
               <?php
                  
                    include BLOG."/common/html/right.php";
               ?>
           </div>
           <div class="footer">
                <?php
                     include BLOG."/common/html/footer.php";
                ?>
            </div>
          
    <div>
</body>
</html>