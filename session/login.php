<?php
session_start();//要用到session的地方都要加這行
if(isset($_SESSION['login'])){
    header("location:memcenter.php");
}
// 如果cookie的值還有的話就導到會員中心頁面
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
</head>
<body>
    <h1 style="text-align:center ;">會員登入</h1>
    <?php
    if (!empty($_GET['error'])){
        echo "<h3 style='color:red'>{$_GET['error']}</h3>";
    }
    
    
    ?>
    <form action="chklogin.php" method="post">
    <table >
        <tr>
            <td>帳號:</td>
            <td><input type="text" name="acc" id=""></td>
        </tr>
        <tr>
            <td>密碼:</td>
            <td><input type="password" name="pw" id=""></td>
        </tr>
    </table>
    <div>
        <input type="submit" value="登入">
        <input type="reset" value="重置">
    </div>
    </form>
</body>
</html>