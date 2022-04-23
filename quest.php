<h1>閏年判斷</h1>

<?php
$year=100;
$year=($year<0)?"年份錯誤":$year;
echo $year;
if ($year%4!=0) {
    echo "這是平年";
}else{
    if($year%100!=0){
        echo"這是閏年";
    }else{
        if($year % 400!=0){
            echo"這是平年";
        }else{
            echo "這是閏年";
        }
    }
}


/* second
if ($year%4!=0 {
    echo "為平年";
}else if ($year%100!=0) {
    echo "為潤年";
}else if ($year%400!=0) {
   echo"為平年";
}else {
    echo "為閏年";
}
*/


/* third
         true         true            false    一樣的要放一起(把最正確的放前面)效率問題
if((($year%4==0)&&($year%100!=0))||($year%400==0)){
    echo "這是閏年"; 
}else{
    echo"這是平年";
}
*/
?>