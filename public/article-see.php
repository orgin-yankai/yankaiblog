<?php   
    require "../common/config/config.php";
    require '../admin/config.php';
    $id = trim($_GET['id']);
    $sql = "select * from article   where `id` = '{$id}'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $sql = "update article set `browse`=`browse`+1 where `id` = '{$id}'";
    mysqli_query($conn,$sql);

    $sql = "select `id`,`title` from article   order by `browse` desc  limit 7";
    $read = mysqli_query($conn,$sql);
    $readR = mysqli_fetch_all($read);
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/static/images/11.png" type="image/x-icon">
    <link rel="stylesheet" href="/static/css/article-see.css">
    <link rel="stylesheet" href="/common/css/right.css">
    <link rel="stylesheet" href="/common/css/footer.css">
    <script src="/static/js/article-see.js"></script>
    <title> 嚴998个人博客</title>
</head>
<body >
    <div id="all">
        <?php
                include BLOG."/common/html/header.php"; 
        ?>
           <div class="content">
                <div class="right">
                         <div>
                               <div>
                                    <h3><?php echo $row['title'];?></h3>
                                    <p class="ziti">
                                        <?php
                                            echo $row['content'];
                                        ?>
                                    </p>
                                    
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