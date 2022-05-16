<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI計算結果</title>
</head>
<body>
    <h1 style="font-size: 3rem;text-align:center">
    你的Bmi值為:<?=$_GET['bmi']?>
    </h1>
    <h2 style="text-align:center">
        判定結果為:<?=$_GET['result']?>
    </h2>
    <!-- <?php
        $bmi=$_GET['bmi'];
        echo "你的BMI值為:".$bmi;
        
    ?> 直接寫在上面的h1&h2-->
    
    <!--請根據BMI值，在畫面上秀出中文的BMI結果或建議-->
    <!-- <?php
    if($bmi<18.5){
        echo "體重過輕，要多攝取營養";
    }else if($bmi<24 && $bmi>=18.5){
        echo "體重在正常範圍值，繼續保持";
    }else{
        echo "體重過重，要開始健身囉";
    }
    ?> 直接寫去計算頁也可以-->
    <h3 style="text-align:center ;">
        輸入的身高為 &nbsp;<?=$_GET['height']?><br>
        輸入的體重為 &nbsp;&nbsp;&nbsp;<?=$_GET['weight']?>
    </h3>
    <br>
    <h3 style="text-align:center"><a href="bmi.html"><button>重新計算</button></a></h3> 
    
</body>
</html>