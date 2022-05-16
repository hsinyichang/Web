<?php
session_start();//要用到session的地方都要加這行
unset($_SESSION['login']);
header("location:index.php");
?>