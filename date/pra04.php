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
    <h3>時間格式練習</h3>
    <hr>
     <?php date_default_timezone_set('Asia/Taipei') ?><!--先設定時區 -->
    <?=date("Y/m/d") ;?>
    <hr>
    <?=date("n月j日 l") ;?>
    <hr>
    <?=date("Y-n-j G:") . (int)date("i") .":". (int)date("s");?><!-- 強制轉型為int，才能變為沒有前導零 -->
    <hr>
    <?=date("Y-n-j H:i:s") ;?>
    <hr>
    
    <?php 
    $workday="";
    $w=date("w");//星期中的第幾天，0是星期日，6是星期六
    if($w==0||$w==6){
        $workday="假日";
    }else{
        $workday="上班日";
    }
    echo date("今天是西元Y年n月j日". $workday) ;
    ?>
</body>
</html>