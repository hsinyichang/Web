<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <style>
        body{
            background: #43C6AC;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #F8FFAE, #43C6AC);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #F8FFAE, #43C6AC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
        div{
            margin-top: 30%;
        }
        table{
            background-color:rgb(250 240 158 / 50%);
            margin:auto;
            width:380px;
            height: 300px;
            border-radius: 24px;
            box-shadow: 2px 2px 10px rgb(0 0 0 / 50%), inset 1px 1px 2px rgb(255 255 255 / 50%);
            font-size: 23px;
            
        }
        input{
            width: 180px;
            height: 25px;
            border: 1px solid gray;
        }
        table td{
            padding:1rem;
            
        }
        .td1{
            width: 30%;
            text-align: right;
        }
        .td3{
            text-align: center;
            font-size: 20px;
        }
        
        .btns{
            margin-top: 20px;
            text-align: center;
            
        }
        button{
            font-size: 20px;
            background-color: #faf09e;
            border: 1px solid lightgray;
            border-radius: 24%;
        }
    </style>
</head>
<body>
    <div>
    <?php

if(isset($_GET['error'])) {
    echo "<h2 style='color:red;text-align:center'>{$_GET['error']}</h2>";
}
    ?>
    <form action="chk_login.php" method="post">
        <table>
            <tr>
                <td class="td1">帳號</td>
                <td class="td2"><input type="text" name="acc" id="">
                </td>
            </tr>
            <tr>
                <td class="td1">密碼</td>
                <td class="td2">
                    <input type="password" name="pw" id="">
                </td>
            </tr>
            <tr>
                <td colspan="2" class="td3"><a href="register.php">尚未註冊</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="forgot.php">忘記密碼</a></td>
                
            </tr>
        </table>
        <div class='btns'>
            <button type="submit"> 登入</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="reset"> 重置</button>
        </div>
    </form>
</div>
</body>
</html>