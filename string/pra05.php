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
        <h3>尋找字串與HTML、css整合應用</h3>
        <div>
        <pre>
給定一個句子，將指定的關鍵字放大
“學會PHP網頁程式設計，薪水會加倍，工作會好找”
請將上句中的 “程式設計” 放大字型或變色.
        </pre>
        </div>
    </article>
    
    <?php
        $str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
        echo $str;
        echo "<br>";
        $search="程式設計";//指定的字元
        $pos=mb_strpos($str,$search);//從$str字串中找到文字$search第一次出現的位置，為array[7]的位置
        $head=mb_substr($str,0,$pos);//取出$str字串從array[0]位置取到($pos)7個。
        //$tail_len=mb_strlen($str)-mb_strlen(mb_substr($str,0,$pos))-mb_strlen($search);
        $tail=mb_substr($str,$pos+mb_strlen($search));//
        $str=$head      //取出前7個字
             . "<span style='font-size:2rem;color:red'>"
             . $search  //要找的字
             . "</span>" 
             . $tail;   //最後尾巴的字
        echo $str.'<br>';//就是合併出來原句子(要找的字就能加上css)
        
    ?>

</body>
</html>