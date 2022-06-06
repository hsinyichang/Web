<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            width: 900px;
            margin: auto;
        }
        nav{
            text-align: right;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <nav>
        <?php
        include_once "connect.php";/*放到程式開頭，因裡面有session start */
        if(isset($_SESSION['user'])){
        ?>
    <a href="login.php">登出</a>
        <?php
        }else{
        ?>
    <a href="login.php">登入</a>
        <?php    
        }
        ?>
    </nav>
    <h1>問券調查</h1>


    <?php 


$sql="select * from `users` ";

$users=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

foreach($users as $user){
    echo $user['acc']."<br>";
}

?>
</body>
</html>