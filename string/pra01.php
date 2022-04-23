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
    <h3>字串取代</h1>
    <div>將”aaddw1123”改成”*********”</div>
</article>
<?php
$password="abcdefg";
//$password=str_replace("aa","**",$password);//(取代字串)將第一個項目改為第二個項目顯示，第三個是該變數名稱
//$password=str_repeat("*",9);//(重複特定字元)第一個為要重複的字元第二個為重複次數
//$password=str_repeat("*",mb_strlen($password));
$strlen=mb_strlen($password);//變數password字串的長度
$password=str_repeat("*",$strlen);//strlen長度為7，則重複7次的*
echo $password;
?>
</body>
</html>