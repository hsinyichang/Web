<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
</head>
<body>
<nav><a href="logout.php">登出</a></nav>
    <h1>會員中心</h1>
    <?php session_start();//有session的地方都要加這行
    ?>

    歡迎<?=$_SESSION['user'];?>,祝你有美好的一天

    <?php
    include "connect.php";
    $sql="SELECT * FROM `users` where acc='{$_SESSION['user']}'";
    $user=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    echo 'ID:'.$user['id'].'<br>';
    echo '帳號:'.$user['acc'].'<br>';
    echo '密碼:'.$user['pw'].'<br>';
    echo '密碼提示:'.$user['passnote'].'<br>';
    echo '生日:'.$user['birthday'].'<br>';
    echo 'E-mail:'.$user['email'].'<br>';
    ?>
</body>
</html>