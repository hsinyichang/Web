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
        <h3>字串分割</h3>
        <div>將”this,is,a,book”依”,”切割後成為陣列</div>
    </article>
    <?php
    $str="this,is,a,book";//先把字串打出來
    $array=explode(",",$str);//以第一個字串字元符號來分割字串，第二個是要分割的字串變數

    echo "<per>";
    print_r($array);
    echo "</pre>";
    
    echo "<br>";
    echo "[{$array[0]},{$array[1]},{$array[2]},{$array[3]}]";
    
    ?>
</body>
</html>