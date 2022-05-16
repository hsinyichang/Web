<?php
//計算頁

$height=$_GET['height'];//取出身高值
$weight=$_GET['weight'];//取出體重值

$bmi=round($weight/(($height/100)*($height/100)),1);//取小數點後一位
$result='';//先設個空值給它，再下去跑迴圈
if($bmi<18.5){
    $result="體重過輕，要多攝取營養";
}else if($bmi<24 && $bmi>=18.5){
    $result="體重在正常範圍值，繼續保持";
}else{
    $result="體重過重，要開始健身囉";
}

header("location:result.php?bmi=$bmi&result=$result&weight=$weight&height=$height");//把值傳遞給結果頁(要用雙引號才能顯示變數)
//這邊計算完要傳到result.php頁面
?>