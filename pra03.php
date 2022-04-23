<style>
    *{
        font-family:'Courier New', Courier, monospace
    }
</style>
<h1>畫星星</h1>
<h2>直角三角形</h2>
<?php
for($i=0;$i<5;$i++){

    for($j=0;$j<=$i;$j++){

        echo "*";

    }


    echo "<br>";

}

?>
<h2>倒直角三角形</h2>
<?php
for($i=0;$i<5;$i++){

    for($j=5;$j>$i;$j--){

        echo "*";

    }

    echo "<br>";

}

?>
<h2>正三角形</h2>
<?php
for($i=0;$i<6;$i++){
   
    for($k=5;$k>$i;$k--){

        echo "&nbsp;";

    }
    for($j=0;$j<($i*2+1);$j++){

        echo "*";

    }

    echo "<br>";
}

?>
<h2>倒正三角形</h2>
<?php
//上面
for($i=0;$i<6;$i++){
   
    for($k=5;$k>$i;$k--){

        echo "&nbsp;";

    }
    for($j=0;$j<($i*2+1);$j++){

        echo "*";

    }

    echo "<br>";
}

//下面
for($i=0;$i<6;$i++){
   
    for($k=0;$k<=$i;$k++){

        echo "&nbsp;";

    }
    for($j=9;$j>($i*2);$j--){

        echo "*";

    }

    echo "<br>";
}

?>
<h2>菱形</h2>
<?php
//上面
for($i=0;$i<11;$i++){

    if($i<6){
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