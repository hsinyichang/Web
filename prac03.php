<h1>畫星星</h1>
<h2>直角三角形</h2>
<style>
    *{
        font-family:'Courier New', Courier, monospace
    }
</style>
<?php
 
for($i=0;$i<5;$i++){//控制層數
    
    for($j=0;$j<=$i;$j++){//在內圈中，我們把外圈的變數$i當成內圈次數的限制
        
        echo "*";
        
    }
    echo"<br>";//等內圈跑完才會斷行跑
}
?>

<hr>
<h2>倒直角三角形</h2>
<?php
for($i=0;$i<5;$i++){//總共5列
    
    for($j=5;$j>$i;$j--){//i=0時第一行印5-0顆，i=1時第二行印5-1顆...
        
        echo "*";
        
    }
    echo"<br>";
}
?>

<hr>
<h2>正三角形</h2>
<?php
for($i=0;$i<5;$i++){//總共5行
    for($k=4;$k>$i;$k--){//i=0時，4>0，則印4顆空白,以此遞減
        echo "&nbsp;";
    }
    for($j=0;$j<($i*2+1);$j++){//i=0時，j<0*2+1=1，印1，以此遞增
        echo "*";//因每一排都差2，i從0開始，所以公式為2*i+1
    }
    echo "<br>";
}

?>

<hr>
<h2>倒正三角形</h2>
<?php
for($i=0;$i<5;$i++){//總共5行   
    for($k=0;$k<=$i;$k++){//i=0時，0<=0，則印0顆空白，以此遞增
        echo "&nbsp;";
    }
    for($j=9;$j>($i*2);$j--){//i=0時，9>0，則印9顆星星，以此遞減
        echo "*";
    }
    echo "<br>";
}

?>

<hr>
<h2>菱形</h2>
<?php
for($i=0;$i<11;$i++){

    if($i<6){//
        for($k=5;$k>$i;$k--){
            echo "&nbsp;";
        }
        for($j=0;$j<($i*2+1);$j++){
            echo "*";
        }
    }else{

        for($k=0;$k<($i-5);$k++){
            echo "&nbsp;";
        }
        for($j=((11-$i)*2-1);$j>0;$j--){
            echo "*";
        }
    }
    echo "<br>";
}
?>
<hr>
<h2>菱形另一種寫法</h2>
<?php
$size=11;
for($i=0;$i<$size;$i++){

    if($i<=(($size-1)/2)){
        //印空白
        for($k=0;$k<(($size-1)/2-$i);$k++){
            echo "&nbsp;";
        }

        //印星星
        for($j=0;$j<($i*2+1);$j++){
            echo "*";
        }
    }else{
        //印空白
        for($k=0;$k<($i-($size-1)/2);$k++){
            echo "&nbsp;";
        }

        //印星星
        for($j=0;$j<(($size-$i)*2-1);$j++){
            echo "*";
        }
    }
    echo "<br>";
}
?>
<hr>
<h2>菱形程式變化</h2>
<?php
$size=9;//總列數
if($size%2==0){//先判斷是否為奇數
    $size=$size+1;//輸入為偶數的話，直接強迫變奇數
    }
    {if($size<3){//判斷輸入的數是否為3以上
        $size=3;
}
}
for($i=0;$i<$size;$i++){

    if($i<=($size-1)/2){
       $space=($size-1)/2-$i;
       $star=$i*2+1;
        }else{
            $space=$i-($size-1)/2;
            $star=($size-$i)*2-1;
        }//印空白
        for($k=0;$k<$space;$k++){
            echo "&nbsp;";
        }
        for($j=0;$j<$star;$j++){
            echo"*";

        }
        echo "<br>";
    }
    
?>
<hr>
<h2>矩形</h2>
<?php
for($i=1 ; $i<=5 ; $i++){//有九列
    for( $j=1 ; $j<=5 ; $j++ ){//有九行,這裡以上會是一個全部5*5的星星      
      if($i==1 || $i==5 || $j==1 || $j==5){//但這裡指定外框為橫列第一列，第五列，直行第一行，第五行才要印*
        echo "*";        
      }     
      else{//最後其他沒指定的是空白     
        echo "&nbsp;";       
      }      
    }   
    echo "<br>";//記得打這行
  }
?>
<hr>
<h2>矩形對角線</h2>
<?php
for($i=1 ; $i<=5 ; $i++){//有五列
    for( $j=1 ; $j<=5 ; $j++ ){//有五行，印出5*5的星星  
      if($i==1 || $i==5 || $j==1 || $j==5 || $j==$i || $j==(6-$i)){//這裡是外框四邊+左斜線+右斜線位置才要印*(左>1,1。2,2.._右>1,5。2,4..)
        echo "*";//要自己找出座標相對關係
      }
      else{      
        echo "&nbsp;";     
      }
    }
    echo "<br>";
  }
?>
<hr>
<h2>矩形對角線程式變化</h2>
<?php
$size=15;
for($i=1 ; $i<=$size ; $i++){//有size列
    for( $j=1 ; $j<=$size ; $j++ ){//有size行，印出size*size的星星  
      if($i==1 || $i==$size || $j==1 || $j==$size || $j==$i || $j==($size+1-$i)){//這裡是外框四邊+左斜線+右斜線位置才要印*(左>1,1。2,2.._右>1,5。2,4..)
        echo "*";//要自己找出座標相對關係
      }
      else{      
        echo "&nbsp;";     
      }
    }
    echo "<br>";//第二圈這邊跑完記得斷行，在重新跑下一行
  }
?>