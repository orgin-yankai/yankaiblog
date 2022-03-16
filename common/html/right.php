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