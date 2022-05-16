<?php
if(isset($_COOKIE['login'])){   //真正可以讓cookie刪除
setcookie("login","",time()-1);
}
header("location:index.php");
?>