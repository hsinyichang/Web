<?php

$default_user='gina';//自己預設帳號密碼
$default_pw='0000';

$acc=$_POST['acc'];//取使用者輸入的資料
$pw=$_POST['pw'];

$error='';

if($acc!=$default_user || $pw!=$default_pw){
    $error='帳號或密碼錯誤';
    header("location:login.php?error=$error");
}else{
    session_start();//要用到session的地方都要加這行
    $_SESSION['login']=$acc;
    header("location:memcenter.php?user=$acc");
}

?>