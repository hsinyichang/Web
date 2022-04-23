<style>
    table{
        color: blue;
        border: 1px solid black;
        border-collapse: collapse;/*邊框摺疊合併*/
    }
    td{ /*tr沒反應*/
        border: 1px solid gray;
        padding: 5px 10px;
    }
    .header{
        background-color: green;
    }
    /*td:nth-child(2n){
        background-color: lightyellow;
    }
    tr:nth-child(2n){
        background-color: lightpink;
    }*/
</style>

<h1>九九乘法表</h1>

<?php
echo"<table>";//要在程式裡建立html表格記得要開頭跟結尾
for($i=1;$i<=9;$i++){//橫列
    if($i%2==0){//偶數橫列為粉紅色
        echo"<tr 
        style='background:lightpink'>\n";// \n斷行
    }else{
        echo "</tr>\n";
    }
    for($j=1;$j<=9;$j++){
        $a=$i*$j;//變數可以統一放最外圈
        if($j%2==0){//偶數直行為黃色
            
            echo"<td style='background:lightyellow'>$i*$j=$a</td>";//**雙引號允許裡面放變數，單引號無法，變數也可用大括號包起來，文字要包在td才能顯示在表格裡
        }else{
            
            echo"<td>$i*$j=$a</td>";//變數對換呈現方式也會不一樣
        }
        
        /*
        echo"<td>$i*$j=";
        echo $i*$j ;
        echo"</td>";*/
        

    }
echo"</tr>";
}
echo "</table>";

?>
<hr>
<?php
echo"<table>";
for($i=1;$i<=9;$i++){
    echo"<tr>";
    for($j=1;$j<=$i;$j++){
        $a=$i*$j;
        if($i==$j){
            
            echo"<td style='background:yellow'>$i*$j=$a</td>";
        }else{
            
            echo"<td>$i*$j=$a</td>";
        }
        
        /*
        echo"<td>$i*$j=";
        echo $i*$j ;
        echo"</td>";
        */

    }
echo"</tr>";
}
echo "</table>";

?>
<hr>
<?php
echo"<table>";
for($i=0;$i<10;$i++){
   echo "<tr>";
    for($j=0;$j<10;$j++){
         if($i==0){
            echo "<td class='header'>$j</td>";
         }else if($j==0){
             echo "<td class='header'>$i</td>";
         }else{
            echo"<td>";
            echo $i*$j ;
            echo "</td>";
         }
    }
echo"</tr>";
}
echo "</table>";

?>