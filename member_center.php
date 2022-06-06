<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
    <style>
        .remove{
            color:#eee;
        }
        .remove:hover{
            color:red;
        }
    </style>
</head>
<body>
<nav><a href="logout.php">登出</a></nav>
    <h1>會員中心</h1>
    <?php
    include "connect.php";//session_start()已寫在裡面了
    ?>

    歡迎<?=$_SESSION['user'];?>,祝你有美好的一天

    <?php
    $sql="SELECT * FROM `users` where acc='{$_SESSION['user']}'";
    $user=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    echo '<hr>';
    echo 'ID:'.$user['id'].'<br>';
    echo '帳號:'.$user['acc'].'<br>';
    echo '密碼:******<br>';
    echo '密碼提示:'.$user['passnote'].'<br>';
    echo '生日:'.$user['birthday'].'<br>';
    echo 'E-mail:'.$user['email'].'<br>';
    ?>
    <button><a href="edit.php?id=<?=$user['id'];?>">編輯</a></button>

    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <a class="remove" href='remove_acc.php?id=<?=$user['id'];?>'>移除個人資料</a>

    <!--
     
    <form action="edit.php" method="post">
    <input type="hidden" name="id" value="<?=$user['id'];?>">
    <input type="submit" value="編輯">
    </form>  第二種
    
    重新導向
    <button onclick="location.href='edit.php?id=<?=$user['id'];?>'">編輯</button>  第三種
    -->
</body>
</html>