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
    $month=4;
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
        <?php
        for($i=0;$i<6;$i++){//row
            echo '<tr>';//因要用迴圈跑出表格所以在php裡面要用echo的方式呼叫
            for($j=0;$j<7;$j++){//column
                echo "<td>";                
                echo $i*7+($j+1);//禮拜六直行的公式為7*i+7(j=6)，禮拜日直行的公式為7*i+1(j=0)，以此類推，因j=0，所以要再+1。
                echo "</td>";
            }
                echo '</tr>';
        }
        ?>
    </table>
</body>
</html>