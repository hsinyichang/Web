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
        <h3>字串組合</h3>
        <div>將上例陣列(pra02)重新組合成“this is a book”</div>
    </article>
    <?php
    $str="this,is,a,book";//先把字串打出來
    $array=explode(",",$str);//以第一個字串字元符號來分割字串，第二個是要分割的字串變數

    echo "<per>";
    print_r($array);//分割完的陣列
    echo "</pre><br>";
    
    $newstr=implode(" ",$array);//將字串用空白重新組成新的陣列(合併字串)
    //$newstr=join(" ",$array);也可以用這個
    echo $newstr;//呼叫新的陣列
    
    ?>
</body>
</html>