<h2>建立學生成績陣列</h2>
<?php

$subject=['國文','英文','數學','地理','歷史'];
$name=['judy','amo','john','peter','hebe'];
$score_r1=[95,64,70,90,84];
$score_r2=[88,78,54,81,71];
$score_r3=[45,60,68,70,62];
$score_r4=[59,32,77,54,42];
$score_r5=[71,62,80,62,64];
echo $name[0],$subject[0],$score_r1[0];
?>

<hr>
<h2>利用程式來產生陣列-九九乘法表</h2>
<?php
for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $nine[]="$i x $j =".($i*$j);
    }
   
}
/*echo '<pre>';
print_r($nine);
echo '</pre>';*/

for($i=0;$i<count($nine);$i++){//count用來計次數
    echo $nine[$i]."　";
    if ($i%9==8){
        echo '<br>';
}
}
?>

<hr>
<h2>利用程式來產生陣列-九九乘法表2</h2>
<?php

$nine=[];
for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){//先打出乘法表迴圈
        $nine["{$i}x{$j}"]=$i*$j;
    }
}
/*echo '<pre>';
print_r($nine);
echo '</pre>';*/
$i=5;
$j=8;
echo"$i x $j =";//印出5*8=
echo $nine["{$i}x{$j}"];//印出上述陣列內容
?>

<hr>
<h2>威力彩號</h2>
<?php
echo '<h3>第一區</h3>';
$lotto=[];//先設一個陣列
while(count($lotto)<6){//當陣列次數小於6。c(0)=lotto(1)..(c5)=lotto(6)
    $num=rand(1,38); //先跑一次隨機號碼
if(!in_array($num,$lotto)){//檢查號碼沒有在lotto裡面
$lotto[]=$num;//若沒有就放進去陣列裡
}
}
echo"開出順序:";
for($i=0;$i<count($lotto);$i++){//
echo $lotto[$i].',';
}
echo"<br>大小順序:";
sort($lotto);
for($i=0;$i<count($lotto);$i++){
    echo $lotto[$i].',';
}

/*echo "<pre>";
print_r($lotto);
echo "</pre>";*/
echo "<h3>第二區</h3>";
echo rand(1,8);

/*echo rand(1,38).',';//產生一個亂數
echo rand(1,38).',';
echo rand(1,38).',';
echo rand(1,38).',';
echo rand(1,38).',';
echo rand(1,38);*/


?>
<hr>
<h2>找出五百年內的閏年</h2>
<?php
$leapYear=[];
$start=2022;
$end=$start+500;
for($year=$start;$year<=$end;$year++){
if((($year%4==0)&&($year%100!=0))||($year%400==0)){
   $leapYear[]=$year; 
}

}
for($i=0;$i<count($leapYear);$i++){
    echo $leapYear[$i].',';
}
$leap=2100;
if(in_array($leap,$leapYear)){
    echo $leap.'年是閏年';
}else{
    echo $leap.'年 不是閏年';
}
?>

<hr>
<h2>求天干地支年</h2>
<pre>
天干：甲乙丙丁戊己庚辛壬癸
地支：子丑寅卯辰巳午未申酉戌亥
天干地支配對：甲子、乙丑、丙寅….甲戌、乙亥、丙子….
</pre>
<?php
$sky=['甲','乙','丙','丁','戊','己','庚','辛','壬','癸'];/*【0-9總共10次】*/
$land=['子','丑','寅','卯','辰','巳','午','未','申','酉','戌','亥'];

$skyland=[];
for($i=0;$i<count($sky);$i++){/* count從0【索引】開始*/
    for($j=0;$j<count($land);$j++){
        $skyland[]=$sky[$i].$land[$j];
    }

}
/*echo "<pre>";
print_r($skyland);
echo "</pre>";*/


$skyland2=[];
$year=(2022-1024);

echo $sky[$year%10] . $land[$year%12];

for($i=1024;$i<=2048;$i++){
    $year=$i-1024;
    $skyland2[$i]=$sky[$year%10] . $land[$year%12];
}

/*echo "<pre>";
print_r($skyland2);
echo "</pre>";*/


echo "西元2022年是 [".$skyland2[2022]."] 年";
?>

<hr>
<h2>陣列反轉</h2>
<pre>
例：  $a=[2,4,6,1,8]    
反轉後  $a=[8,1,6,4,2]
</pre>

<?php
$a=[2,4,6,1,8];

for($i=0;$i<ceil(count($a)/2);$i++){//因為只要跑出反轉的結果就好，所以跑一半是要的結果，若是奇數個則要取一半的最大值
    $t=$a[$i];
    $a[$i]=$a[count($a)-1-$i];
    $a[count($a)-1-$i]=$t;
    
    echo "$i => [{$a[0]},{$a[1]},{$a[2]},{$a[3]},{$a[4]}] <br>";//迴圈跑出來的結果
    
}
echo "<br>反轉後=> [{$a[0]},{$a[1]},{$a[2]},{$a[3]},{$a[4]}] <br>";

//---------------------------------------
$b=[1,2,3,4,5];
print_r(array_reverse($b));//列出陣列反轉後的對應位置
echo "<br>";
echo "陣列數量=>".count($b);
echo "<br>";
//----------------------------------
$array = array(1, 2, 3, 4);//網路找的範例
  $size = sizeof($array);//sizeof是計算數組中的數目，是count()的別名。

  for($i=$size-1; $i>=0; $i--){
      echo $array[$i];
  }
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>