<h1>使用session模擬購物車</h1>
<?php
session_start();
$_SESSION['cart']['CPU']=3;
$_SESSION['cart']['RAM']=5;
$_SESSION['cart']['螢幕']=1;

foreach($_SESSION['cart'] as $prod =>$qt){
    echo $prod.'--'.$qt.'<br>';
}


?>