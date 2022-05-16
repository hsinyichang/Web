<h1>使用cookie模擬購物車</h1>
<?php
// setcookie('產品',"CPU",time()+3600);
// setcookie('產品',"主機板",time()+3600);
// setcookie('產品',"RAM",time()+3600);
// setcookie('產品',"螢幕",time()+3600);

setcookie("產品",serialize(['CPU'=>2,'RAM'=>4,'螢幕'=>5]),time()+3600);//裡面不能用陣列，需用serialize序列化
$cart=unserialize($_COOKIE["產品"]);//還原序列化，使其為陣列
foreach($cart as $prod =>$qt){
    echo $prod.'--'.$qt.'<br>';
}
?>