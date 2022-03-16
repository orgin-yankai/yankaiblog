<?php
require '../admin/config.php';
//$tag = $_GET['tag'];
//  $sql = "select * from article where `fenclass` = '{$tag}' order by `browse` desc limit 3";
// // $sql = "select * from article where `fenclass` = 'html' order by `time` desc limit 3";
// $result = mysqli_query($conn,$sql);
// $row = mysqli_fetch_all($result);

$sql = "select `id`,`title` from article   order by `browse` desc  limit 7";
$read = mysqli_query($conn,$sql);
$readR = mysqli_fetch_all($read);





//翻页

$pageSize = 3;  //每页显示的数据
$tag = trim($_GET['tag']);
$pg = trim($_GET['page']);

$page = ($pg-1)*$pageSize;  //当前页

$sql2 = "select count(*)  from article";
$result = mysqli_query($conn,$sql2);  
$row1 =mysqli_fetch_row($result);
$pageNum = ceil($row1[0]/3);     //总页


$sql1 = "select * from article where `fenclass` = '{$tag}' order by `browse` desc limit $page,$pageSize";
$result1 = mysqli_query($conn,$sql1);
$row = mysqli_fetch_all($result1);
//print_r($row1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/static/images/11.png" type="image/x-icon">
    <link rel="stylesheet" href="/static/css/article.css">
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
                        <a href="/public/article-see.php?id=<?php echo $row[$i][0];?>"><?php echo $row[$i][1];?></a><br>
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
               <p>
                    <a href="?tag=<?php echo $tag;?>&page=<?php echo $pg == 1?$pg:$pg-1;?>"><button><</button></a>
                    <a href="?tag=<?php echo $tag;?>&page=1"><button>1</button></a>
                    <a href="?tag=<?php echo $tag;?>&page=2">  <button>2</button></a>
                    <a href="?tag=<?php echo $tag;?>&page=3"> <button>3</button></a>
                    <a href="?tag=<?php echo $tag;?>&page=<?php echo $pg==$pageNum?$pageNum:$pg+1;?>"><button>></button></a>                  
               </p>
              
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

