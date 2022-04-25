<h1>使用程式來控制時間</h1>
<?php
$today=date("Y-m-d l");
echo $today.'<br>';

$todaytime=strtotime(date("Y-m-d"));
// $nextweek=strtotime("+1 week",$todaytime);
// echo date("Y-m-d l",$nextweek);


$n=10;
for($i=1;$i<=$n;$i++){
    $nextweek=strtotime("+$i week",$todaytime);
    echo date("Y-m-d l",$nextweek)."<br>";
}
?>