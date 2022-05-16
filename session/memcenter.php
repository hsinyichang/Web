<?php
session_start();//要用到session的地方都要加這行
if(!isset($_SESSION['login'])){
    header("location:login.php");
}//如果login沒有值則回到登入頁面
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
</head>
<body>
    <h1>歡迎<?=$_SESSION['login'];?></h1>
    <!-- 前面的cookie是設定login所以這裡也要同步 -->
    <li><a href="logout.php">登出</a></li>
</body>
</html>