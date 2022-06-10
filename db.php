<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>自訂函式練習</title>
    <style>
        *{
            font-family: 'Courier New', Courier, monospace;
        }
        h1{
            text-align: center;
        }
        .quiz{
            width:100%;
            padding:0.6rem 1rem;
            border:blue;
            background:lightblue;
            box-shadow: 1px 1px 10px #ccc;
            margin:0.5rem;
        }
        div{
            padding:0.4rem 1rem;
        }
    </style>
</head>
<body>
 <h1>自訂函式練習</h1>
 <div class="quiz">
 給定一個正整數的數值後，會印出對應行數的正三角形星星(依此類推可以設計印菱形，方形的函式)
 </div>
 <div>
<?php
$size=isset($_GET['size'])?$_GET['size']:3;
$shap=isset($_GET['shap'])?$_GET['shap']:'正三角形';

?>
     <form action="db.php">
        大小<input type="number" value="3" name="size">  <!--size是下面function的lines-->
        形狀<select name="shape">  <!--shape是下面function的type-->
             <option value="正三角形">正三角形</option>
             <option value="菱形">菱形</option>
        </select>
         <input type="submit" value="繪製">
     </form>
<?php
$size=$_GET['size'];
$shape=$_GET['shape'];

starts($size,$shape);//呼叫function(變數為使用者輸入的資料↑)
?>
 <!-- ---------------------------------------- -->
 </div>
 <div class="quiz">
 all()-給定資料表名後，會回傳整個資料表的資料
 </div>
 <div class="quiz">
 find()-會回傳資料表指定id的資料
 </div>
 <div class="quiz">
 update()-給定資料表的條件後，會去更新相應的資料。
 </div>
 <div class="quiz">
 insert()-給定資料內容後，會去新增資料到資料表
 </div>
 <div class="quiz">
 del()-給定條件後，會去刪除指定的資料
 </div>
 

</body>
</html>
<?php
//給定一個正整數的數值後，會印出對應行數的正三角形星星(依此類推可以設計印菱形，方形的函式)
function starts($lines,$type){  //可自行輸入星星行數(數字)，型態
    switch($type){
        case '正三角形':
        for($i=0;$i<$lines;$i++){//總共$lines行
        for($k=$lines-1;$k>$i;$k--){//i=0時，$lines-1>0，則印$lines-1顆空白,以此遞減
            echo "&nbsp;";
        }
        for($j=0;$j<($i*2+1);$j++){//i=0時，j<0*2+1=1，印1，以此遞增
            echo "*";//因每一排都差2，i從0開始，所以公式為2*i+1
        }
        echo "<br>";
    }
    break;
    case "菱形":
        diamond($lines);
    break;
}
}
function diamond($lines){
    $size=$lines;

    //先判斷是否為奇數
    if($size%2==0){
        $size=$size+1;
    }
    if($size<3){
        $size=3;
    }
    
    for($i=0;$i<$size;$i++){
    
        if($i<=(($size-1)/2)){
            $space=($size-1)/2-$i;
            $stars=$i*2+1; 
        }else{
            $space=$i-($size-1)/2;
            $stars=($size-$i)*2-1; 
        }
    
        //印空白
        for($k=0;$k<$space;$k++){
            echo "&nbsp;";
        }
    
        //印星星
        for($j=0;$j<$stars;$j++){
            echo "*";
        }
        echo "<br>";
    }

}
//all()-給定資料表名後，會回傳整個資料表的資料
function all(){

}


//find()-會回傳資料表指定id的資料
function find(){

}


//update()-給定資料表的條件後，會去更新相應的資料。
function update(){

}


//insert()-給定資料內容後，會去新增資料到資料表
function insert(){

}


//del()-給定條件後，會去刪除指定的資料
function del(){

}

?>