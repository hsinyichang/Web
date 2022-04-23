<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>字串函式整合應用</h1>
    <article>
        <h3>子字串取用</h3>
        <div>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</div>
    </article>
    <?php
    $str="The reason why a great man is great is that he resolves to be a great man";
    $newstr=substr($str,0,10);//(從字串中取出部分字串)第一個要取的變數，第二個從陣列0的位置開始取，第三個取10個出來(空白也算一個字元)
    
    echo $newstr."...";//直接後面加上...就可以了
    //echo $newstr.str_repeat(".",3); >也可以加上重複特定字元
    //有中文字元的要用mb_substr()
    ?>
</body>
</html>