<?php

if(!isset($_COOKIE['name']) && !isset($_COOKIE['password'])){
  echo "<script>alert('请先登陆！');location.href='http://www.yankaiblog.com/admin/index.php';</script>";
  exit;
}
