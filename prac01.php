<h1>使用for迴圈來產生以下的數列</h1>

<h2>1,3,5,7,9……n</h2>
<?php
$n=100;
    for($i=1;$i<$n;$i=$i+2){
    echo $i."，";
    }
?>
<hr>

<h2>10,20,30,40,50,60……n</h2>
<?php
$n=10;
    for($i=1;$i<$n;$i=$i+1){
    echo $i*10 . "，";
    }
?>

<h2>1-100的質數=>3,5,7,11,13,17……97</h2>
<?php
    /*$n=100;
    $sqrt=ceil(sqrt($n));//取平方根的最大整數(無條件進位)
    $test=false;
    for($i=2;$i<=$sqrt;$i++){
        if($n%$i==0){
            $test=true;
        }
    }
    if($test==true){
        echo $n.'不是一個質數';
    }else{
        echo $n .'是一個質數';
    }*/
    /*------------第一種----------------*/ 
    /*$n=11;
    $sqrt=ceil(sqrt($n));//取平方根的最大整數(無條件進位)
    $test=true;
    for($i=2;$i<=$sqrt;$i++){
        if($n%$i==0){
            $test=false;
            break;
        }   
    }
    echo $n;
    echo ($test==true)?'是一個質數':'不是一個質數';//三元運算子
    */
    /*-------------第二種--------------*/
    $n=100;
    for($j=3;$j<=$n;$j++){ //質數最小為3開始
        $test=true; //設個true/false變數，假設剛開始跑出來的所有數都是質數，以方便後面可以直接判斷
        $sqrt=ceil(sqrt($j)); //先取平方根的最大整數(無條件進位)，取平方根可以節省跑迴圈的次數
        //第一個for迴圈出來的數在往下一個迴圈作測試
        
        for($i=2;$i<=$sqrt;$i++){ //任何數除1都會整除所以要從2。例如19的平方根為最大整數為5，則為2,3,4,5
            if($j%$i==0){ //只要該數與取出的平方根數列餘數為0(被整除)，就不是質數
            $test=false;
            break; //只要一被整除後面就不用再執行了
            }   
        }
        if($test==true){ //全部都有餘數的話就是質數
            echo $j.'，';
        
        }
    }
/*-----------第三種直接列出------------*/

?>