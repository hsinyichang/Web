<?php
//檢查帳密是否正確

include "connect.php";
$acc=$_POST['acc'];
$pw=$_POST['pw'];

$sql="SELECT count(*) FROM `users` WHERE `acc`='$acc' && `pw`='$pw'";

//$user=$pdo->query($sql)->fetch();
$chk=$pdo->query($sql)->fetchColumn();

//if($acc==$user['acc'] && $pw==$user['pw']){
if($chk){
    header("location:member_center.php");
}else{
    header("location:login.php?error=帳號或密碼錯誤");
}
?>