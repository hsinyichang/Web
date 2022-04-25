<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>日期/時間的練習</h1>
    <h3>未設定時區</h3>
    <?php
    echo date("Y-m-d H:i:s");//裡面的format(Y是4個完整的年份)(m是有前導零的月份)(d是有前導零的第幾天)
    ?>                      <!--(H為有前導零的小時)(i有前導零的分鐘數)(s有前導零的秒數)-->
                            <!-- 除了裡面的字符外，其他的字元都會算成字串 -->
    <hr>

    <h3>有設定時區</h3>
    <?php
    date_default_timezone_set("Asia/Taipei");//要初始化時區為亞洲台北
    echo date("Y-m-d H:i:s");
    ?>
    <hr>
    <h2>strtotime()</h2> <!--字串轉成時間 -->
    <?php
    //時間日期字串格式 yyyy-mm-dd hh:mm:ss
    $time="2021-10-01 10:12:30";
    $second=strtotime($time);//將日期時間轉成秒數
    echo $time.'<br>';
    echo $second.'<br>';//輸出變成秒數
    echo date("西元Y年m月d日l",$second);//再將秒數轉換成日期，裡面的字符可自行選擇要的
    
    $splus=strtotime("+2 days",$second);//前面為要算的年月日數字，要空一格(day複數要加s)，若要往前推就是用(-1，-2等等)
    echo'<br>';
    echo date("西元Y年m月d日l",$splus);
    ?>

</body>
</html>