<h1>購物車</h1>
<?php
// setcookie('產品',"CPU",time()+3600);
// setcookie('產品',"主機板",time()+3600);
// setcookie('產品',"RAM",time()+3600);
// setcookie('產品',"螢幕",time()+3600);

setcookie("產品",serialize(['CPU'=>2,'RAM'=>4,'螢幕'=>5]),time()+3600);
$cart=unserialize($_COOKIE["產品"]);
foreach($cart as $prod =>$qt){
    echo $prod.'--'.$qt.'<br>';
}
?>