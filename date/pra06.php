<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>

    <style>
        table,tr,td{
            border-collapse: collapse;/*讓框線合併*/
            border: 1px solid lightgray;
            text-align: center;
            padding: 5px;
        }
        
    </style>

</head>
<body>
    <?php
    $month=6;
    ?>
    <table>
        
    <tr>
        <td>日</td>
        <td>一</td>
        <td>二</td>
        <td>三</td>
        <td>四</td>
        <td>五</td>
        <td>六</td>
    </tr>
        <!-- <?php
        $firstDay=date("Y-").$month."-1";//當月第一天
        $monthDays=date("t",strtotime($firstDay));//當月天數
        $lastDay=date("Y-").$month."-".$monthDays;//當月最後一天

        for($i=0;$i<6;$i++){//row
            echo '<tr>';//因要用迴圈跑出表格所以在php裡面要用echo的方式呼叫
            for($j=0;$j<7;$j++){//column
                echo "<td>";              
                echo $i*7+($j+1);//禮拜六直行的公式為7*i+7(j=6)，禮拜日直行的公式為7*i+1(j=0)，以此類推，因j=0，所以要再+1。
                echo "</td>";
            }
                echo '</tr>';
        }
        ?> -->

<?php

$firstDay=date("Y-").$month."-1";
$firstWeekday=date("w",strtotime($firstDay));
$monthDays=date("t",strtotime($firstDay));
$lastDay=date("Y-").$month."-".$monthDays;
$today=date("Y-m-d");
echo "月份".$month;
echo "<br>";
echo "第一天是".$firstDay;
echo "<br>";
echo "第一天是星期".$firstWeekday;
echo "<br>";
echo "最後一天是".$lastDay;
echo "<br>";
echo "當月天數共".$monthDays;
echo "<br>";
for($i=0;$i<6;$i++){
    echo "<tr>";
    
    for($j=0;$j<7;$j++){
        $d=$i*7+($j+1)-$firstWeekday-1;
        
        if($d>=0 && $d<$monthDays){
            $fs=strtotime($firstDay);
            $shiftd=strtotime("+$d days",$fs);
            $date=date("d",$shiftd);
            $w=date("w",$shiftd);
            $chktoday="";
            if(date("Y-m-d",$shiftd)==$today){
                $chktoday='today';
            }
            //$date=date("Y-m-d",strtotime("+$d days",strtotime($firstDay)));
            if($w==0 || $w==6){
                echo "<td class='weekend $chktoday' >";
            }else{
                echo "<td class='workday $chktoday'>";
            }
            echo $date;
            echo "</td>";
        }else{
            echo "<td></td>";
        }
            

    }

    echo "</tr>";
}



?>
    </table>
</body>
</html>