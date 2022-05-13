<?php
print_r($_GET);
echo '<br>';

$height=$_GET['height'];//取出身高值
$weight=$_GET['weight'];//取出體重值

echo "身高為:".$height;
echo '<br>';
echo "體重為:".$weight;
echo '<br>';

$bmi=round($weight/(($height/100)*($height/100)),1);
echo "BMI值為:".$bmi;
?>