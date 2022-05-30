<?php
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";   有呼叫成功

$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'root','');
                //帳號密碼
                $sql="UPDATE `students` SET 
                `uni_id`='{$_POST['uni_id']}',
                `seat_num`='{$_POST['seat_num']}',
                `name`='{$_POST['name']}',
                `birthday`='{$_POST['birthday']}',
                `national_id`='{$_POST['national_id']}',
                `address`='{$_POST['address']}',
                `parent`='{$_POST['parent']}',
                `telphone`='{$_POST['telphone']}',
                `major`='{$_POST['major']}',
                `secondary`='{$_POST['secondary']}'
         WHERE `id`='{$_POST['id']}'";
   
         echo $sql;
   
//$pdo->query($sql);
$pdo->exec($sql);
//將資料更新回資料庫
header("location:index.php");
?>