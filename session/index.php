<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
    <nav>
        <ul>
            <li>回首頁</li>
            <li>產品目錄</li>
            <?php
            session_start();//要用到session的地方都要加這行
            if(empty($_SESSION['login'])){
            ?>
            <li><a href="login.php">登入</a> </li>
           
            <?php
            }else{
            ?>
            <li><a href="memcenter.php">會員中心</a> </li>
            <li><a href="logout.php">登出</a></li>
            <?php
            }
            ?>
        </ul>
    </table>
</header>
</body>
</html>