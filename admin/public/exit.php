<?php
session_start();
session_unset();
session_destroy();
setcookie('name','',time()-3600);
setcookie('password','',time()-3600);
echo "<script>alert('退出系统成功！');location.href='/admin/index.php'</script>";