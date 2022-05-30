<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family: '標楷體';
            text-align: center;
            color: darkblue;
            font-weight: bold;
        }
        h1{
            color: purple;
            text-shadow: 1px 3px 2px lightgray;
        }
        label{
            display: block;
            padding: 4px;

        }
        label input{
            padding: 3px;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
<h1>編輯學生資料</h1>
<?php
$id=$_GET['id'];
$dsn="mysql:localhost;charcterset=utf8;dbname=school";
$pdo=new PDO($dsn,'root','');
$sql="SELECT * FROM `students` WHERE `id`='{$id}'";
$students=$pdo->query($sql)->fetch();
                        //fetch()只要一筆資料
// echo "<pre>";
// print_r($students);
// echo "</pre>";

//把要編輯的資料叫出來
?>


    <form action="update.php" method="post">
        <!-- 以下  value用php呼叫資料 -->
        <label for="uni_id">學號:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="uni_id" value="<?=$students['uni_id'];?>"></label>
        <label for="seat_num">班級座號:<input type="text" name="seat_num" value="<?=$students['seat_num'];?>"></label>
        <label for="name">姓名:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" value="<?=$students['name'];?>"></label>
        <label for="birthday">生日:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="birthday" value="<?=$students['birthday'];?>"></label>
        <label for="national_id">身分證碼:<input type="text" name="national_id" value="<?=$students['national_id'];?>"></label>
        <label for="address">住址:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="address" value="<?=$students['address'];?>"></label>
        <label for="parent">家長:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="parent" value="<?=$students['parent'];?>"></label>
        <label for="telphone">電話:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="telphone" value="<?=$students['telphone'];?>"></label>
        <label for="major">科別:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="major" value="<?=$students['major'];?>"></label>
        <label for="secondary">畢業國中:<input type="text" name="secondary" value="<?=$students['secondary'];?>"></label><br>
        <input type="hidden" name="id" value="<?=$id;?>">
        <!--讓id不可顯示被更改-->
        <input type="submit" value="更新">
        <input type="reset" value="重置">
    </form>
</body>
</html>