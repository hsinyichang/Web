<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP連線資料庫</title>
</head>
<body>
    <h1>PHP連線資料庫</h1>
    <?php
        $dsn="mysql:host=localhost;charset=utf8;dbname=school2";
        $pdo=new PDO($dsn,'root');

        $sql="SELECT * FROM `students`,`dept` WHERE `dept`.`id` = `students`.`dept`";

        // $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_NUM);
                                        //抓取NUM索引的部分
        
        $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        echo "<pre>";
        print_r($rows);
        echo "</pre>";


    ?>




</body>
</html>