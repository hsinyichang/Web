<?php
//計算頁

$height=$_GET['height'];//取出身高值
$weight=$_GET['weight'];//取出體重值

$bmi=round($weight/(($height/100)*($height/100)),1);//取小數點後一位

header("location:result.php?bmi=$bmi");//把值傳遞給結果頁(要用雙引號才能顯示變數)
?>