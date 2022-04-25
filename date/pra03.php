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
    <h3>計算距離自己下一次生日還有幾天</h3>
    <?php
        $birthday="06-15";//先設定年不用寫，才能每年拿來用
        //$now=strtotime('now');現在目前的時間
        $today=strtotime(date("Y-m-d"));//今天的日期
        $mybirth=strtotime(date("Y-").$birthday);//今年的年份加上日期(月，日)的總秒數
        //生日是一整天24小時
        $diff=0;
        $result="";
        if($mybirth-$today>0){//如果今年生日-今天是大於0則就是算今年還有幾天
            $diff=($mybirth-$today)/(24*60*60);//算相差幾天就是頭尾相減/秒數就能變成天數
            $result="距離妳的生日還有<span style='color:red'>". $diff . "</span>天";
        
        }else if($mybirth-$today<0){//反之要算到明年，則日期要加1年，因為生日已過
                $mybirth=strtotime("+1 year",$mybirth);
                $diff=($mybirth-$today)/(24*60*60); 
                $result="距離妳的生日還有<span style='color:red'>". $diff . "</span>天";
        
        }else{
            $result="今天是你的生日，祝你生日快樂";//相減等於0就是今天生日
        }
        
        echo $result;
    ?>
</body>
</html>