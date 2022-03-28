<?php
//echo $_SERVER['HTTP_HOST'].'<br>';
//echo $_SERVER['SERVER_ADDR'].'<br>';
//echo $_SERVER['SERVER_PORT'].'<br>';
//echo $_SERVER['SERVER_NAME'].'<br>';
//echo $_SERVER['REMOTE_ADDR'].'<br>';
//var_dump($_SERVER['REMOTE_HOST']) .'<br>';
//echo $_SERVER['REMOTE_PORT'].'<br>';
//
//echo $_SERVER['SCRIPT_URL'].'<br>';
//echo $_SERVER['SERVER_ADMIN'].'<br>';
//echo $_SERVER['HTTP_X_FORWARDED_FOR'].'<br>';
//echo $_SERVER['REQUEST_URI'].'<br>';
//echo $_SERVER['SCRIPT_NAME'].'<br>';
//echo $_SERVER['HTTP_CLIENT_IP'],'<br>';
//echo $_SERVER['HTTP_VIA'].'<br>';
//exit;

require './admin/config.php';
$sql = "select * from article   order by `time` desc  limit 3";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_all($result);


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
    <link rel="stylesheet"  href="/static/css/index.css">
    <title> 嚴998个人博客</title>
    <script src="/static/js/index.js"></script>
</head>
<body id="body">
    <div id="all">
        <div class="header">
           <div class="header-ul">
                 <ul>
                    <li><a href="#">嚴998个人博客&nbsp;|&nbsp;个人技术博客</a></li>
                    <li><a href="/index.php">首页</a></li>
                    <li><a href="/public/self.php">关于</a></li>
                </ul>
           </div>
        </div>
        <div class="content">
            <div class="right">
                <?php
                    for($i=0;$i<3;$i++){
                   
                ?>
                    <div>
                        <a href="/public/article-see.php?id=<?php echo  $row[$i][0];?>"><?php echo $row[$i][1];?></a><br>
                        <p class="p1"><span class="content-span">
                            <?php
                                echo $row[$i][2];
                            ?>
                        </span></p>
                        <p><span class="content-span-footer">
                        发布于<?php echo date("Y-m-d H:i:s",$row[$i][4])?> |  浏览：<?php echo $row[$i][5]?> | Tags：<?php echo $row[$i][3]=='qita'?'其他':$row[$i][3]?>
                         </span></p>
                    </div>
                <?php
                     }
                ?>
            </div>
            <div class="left">
                <div>
                    <p><span>》》》随机标签<span></p>
                   <ul class="left-ul">
                        <li><a href="/public/article.php?tag=javascript&page=1">javascript</a></li>
                       <li><a href="/public/article.php?tag=php&page=1">php</a></li>
                       <li><a href="/public/article.php?tag=mysql&page=1">mysql</a></li>
                       <li><a href="/public/article.php?tag=css&page=1">css</a></li>
                       <li><a href="/public/article.php?tag=html&page=1">html</a></li>
                       <li><a href="/public/article.php?tag=qita&page=1">其他</a></li>
                   </ul>
                </div>
                <div class="left-div2">
                    <p><span>》》》阅读排行榜<span></p>
                    <ul class="left-div2-ul">
                        <?php
                            for($i=0;$i<7;$i++){

                            
                        ?>
                       <li><a href="/public/article-see.php?id=<?php echo $readR[$i][0];?>" class="ziti"><?php echo $readR[$i][1];?></a></li>
                       <?php
                            }
                       ?>
                   </ul>
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
