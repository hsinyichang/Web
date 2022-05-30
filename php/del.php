<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'root','');
        //(區域名稱,帳號,密碼)


$sql="DELETE FROM `students` WHERE `id`='$id'";
$pdo->query($sql);
//將資料新增回schoo的資料庫

header("location:index.php");
//導回首頁
?>