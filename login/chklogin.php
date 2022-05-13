<?php

$default_user='gina';//自己預設帳號密碼
$default_pw='0000';

$acc=$_POST['acc'];//取使用者輸入的資料
$pw=$_POST['pw'];

if($acc==$default_user && $pw==$default_pw){
    echo "登入正確~歡迎光臨<br>";
}else{
    echo "帳號密碼錯誤，請回登入頁重新登入<br>";
    echo "<a href='login.php'>回登入首頁</a>";
}

?>