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
    <h3>給定兩個日期，計算中間間隔天數</h3>
    <?php
    $day1="2022-4-10";
    $day2="2022-4-20";
    echo "日期一=>".$day1.'<br>';
    echo "日期二=>".$day2.'<br>';

    $time1=strtotime($day1);//算出第一天的秒數
    $time2=strtotime($day2);//算出第二天的秒數
    $gap=($time2-$time1-(24*60*60));//後面的天數的0時0分-前面的天數-1天的秒數
    $gap=$gap/(60*60*24);//要轉換成天數
    
    $duration=($time2-$time1+(24*60*60));
    $duration=$duration/(60*60*24);

    $diff=$time2-$time1;
    $diff=$diff/(60*60*24);
    echo "中間間隔".$gap."天".'<br>';//頭尾扣掉再扣一天(11號到19號)
    echo "經過了".$duration."天".'<br>';//頭尾相減+一天(全部10號到20號)
    echo "相差了".$diff."天".'<br>';//頭尾相減
    ?>
</body>
</html>