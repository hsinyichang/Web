<h1>迴圈</h1>
<?php
/*
for($i=0;$i<10;$i=$i+1){
    echo ($i*10)."<br>";//字串要加括號
    //echo 'i='.$i.'===>i*10='.($i*10)."<br>;
}
echo "<hr>";

for($i=1;$i<=100;$i++){
    if($i%2==1){//用餘數求奇數
    echo $i."　";
}
}
echo'<hr>';

for($i=1;$i<50;$i=$i+2){//直接+2求奇數
    echo $i."　";
}
echo'<hr>';
for($i=1;$i<50;$i=$i+2){
    echo ($i+1)."　";//上面是奇數迴圈，回傳出來再+1就是偶數
}
*/
?>


<h1>while/do...while</h1>
<hr>
<?php
    $i=50;
    while($i<100){//若變數已超過100的話，這個迴圈會直接不執行。
        echo $i;
        $i=$i+1;
    }
    echo "<hr>";
    
    $i=200;
    do{
    echo $i;//這裡不管i值為何，都會先執行一遍
    $i=$i+1;

    }while($i<100);//再來看這迴圈有無符合才執行
?>