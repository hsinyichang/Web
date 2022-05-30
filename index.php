<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP連線資料庫</title>
    <style>
        h1,h2,h3,h4{
            text-align: center;
        }
        table{
            border-collapse: collapse;
            border:3px solid blue;
            margin: auto;
        }
        table td{
            padding:0.5rem;
            border:1px solid #aaa;
        }
        table tr:nth-child(odd){
            background: lightgreen;
        }
        table tr:nth-child(even){
            background: lightcyan;
        }
        table tr:hover{
            background: lightcoral;
        }
    </style>
</head>
<body>
    <h1>PHP連線資料庫(MySQLi)-函式類型</h1>
    <?php
    // $conn=mysqli_connect('localhost','root','','school2');
    
    // $sql="SELECT `students`.*,`dept`.`code`,`dept`.`name` as '科系' 
    //       FROM `students`,`dept` 
    //       WHERE `dept`.`id`=`students`.`dept`";

    // $query=mysqli_query($conn,$sql);
    // $rows=mysqli_fetch_array($query,MYSQLI_BOTH);

    // echo var_dump($query);

    // echo "<pre>";
    // print_r($rows);
    // echo "</pre>";

    // 要取下一筆資料

    // $rows=mysqli_fetch_array($query,MYSQLI_BOTH);
    // echo "<pre>";
    // print_r($rows);
    // echo "</pre>";

    // echo $rows[0][3];
    // echo "<br>";
    // echo $rows[0]['birthday'];
    ?>
    <h1>php連線資料庫(MySQLi)-函式類型-迴圈撈資料</h1>  
    <?php
    // $conn=mysqli_connect('localhost','root','','school2');
    
    // $sql="SELECT `students`.*,`dept`.`code`,`dept`.`name` as '科系' FROM `students`,`dept` WHERE `dept`.`id`=`students`.`dept`";

    // $query=mysqli_query($conn,$sql);
    
    // $count=0;
    // while($row=mysqli_fetch_array($query,MYSQLI_BOTH)){
    //     if($row['name']=='王鳳如'){
    //         echo "<pre>";
    //         print_r($row);
    //         echo "</pre>";
    //     }
    //     $count++;
    // }
    // echo $count;
    ?>  
    
    <h1>使用foreach的方式撈資料</h1>
    <?php
        $dsn="mysql:host=localhost;charset=utf8;dbname=school2";
        $pdo=new PDO($dsn,'root','');
    
        $sql="SELECT * FROM `students`";
    
        $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        echo"<table>";
        foreach($rows as $key => $row){
            echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['school_num']}</td>";
                echo "<td>{$row['name']}</td>";
                echo "<td>{$row['dept']}</td>";
                echo "<td>{$row['parents']}</td>";
            echo "</tr>";
        }
        echo"</table>";
    ?>

</body>
</html>