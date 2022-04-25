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
    <!-- <?php date_default_timezone_set('Asia/Taipei') ?>先設定時區 -->
    <?=date("Y/m/d") ;?>
    <hr>
    <?=date("n月j日 l") ;?>
    <hr>
    <!-- <?=date("Y-n-j G:") . (int)date("i") .":". (int)date("s");?>強制轉型為int，才能變為沒有前導零 -->
    <hr>
    <?=date("Y-n-j H:i:s") ;?>
    <hr>
    <?=date("今天是西元Y年m月d日 上班日") ;?>
    
</body>
</html>