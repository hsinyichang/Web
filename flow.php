<h1>流程結構</h1>
<h3>if...else</h3>
<?php

$score=84;
echo'成績='.$score;
echo '<br>';
if ($score>=60) {
    if ($score>=85) {
        echo '及格,很棒';
    }else{
        echo '及格,再加油';
    }
}else {
    echo '不及格';
}//迴圈包迴圈較為複雜


//有多選判斷時裡面可改為多個else if()的迴圈,最後結束為else(),但要有順序的排列
// if(){
// }else if(){

// }else if(){

// }else(){

// }
echo '<hr>';
?>


<h3>switch case</h3>
<?php

$score=110;

if($score>100||$score<0){//判斷成績是否正常。||為或者意思
    $level=5;
}else{
    $level=floor($score/25);//floor(地板函數)取商數最小值。如floor(3.5)=3
}
/*  也可使用該語法
$level=($score>100||$score<0)?5:floor($score/25);
該變數=(條件式)?真:假;
*/ 

echo'成績為'.$level;
echo "<br>";
switch($level){
    case "4"://100
    case "3"://75-99。4和3可以為同一等級，因中間無break
      echo "超棒";
    break;
    case "2"://50-74
      echo "加油";
    break;
    case "1";//25-49
      echo "再加強";
    break;
    case "0";//0-24
      echo "再加強";
    default;
      echo "成績是否輸入錯誤?";
}
?>