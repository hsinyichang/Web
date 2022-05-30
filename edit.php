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
echo "要編輯的是id為".$id."的資料";
?>
    <form action="update.php" method="post">
        <label for="uni_id">學號:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="uni_id" id=""></label>
        <label for="seat_num">班級座號:<input type="text" name="seat_num" id=""></label>
        <label for="name">姓名:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" id=""></label>
        <label for="birthday">生日:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="birthday" id=""></label>
        <label for="national_id">身分證碼:<input type="text" name="national_id" id=""></label>
        <label for="address">住址:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="address" id=""></label>
        <label for="parent">家長:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="parent" id=""></label>
        <label for="telphone">電話:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="telphone" id=""></label>
        <label for="major">科別:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="major" id=""></label>
        <label for="secondary">畢業國中:<input type="text" name="secondary" id=""></label><br>
        <input type="hidden" name="id" value="<?=$id;?>">
        <input type="submit" value="更新">
        <input type="reset" value="重置">
    </form>
</body>
</html>