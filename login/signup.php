<?php
header("Content-Type: text/html; charset=utf8");

if(!isset($_POST["submit"])){
    exit("错误执行");
}//检测是否有submit操作 

$servername = "localhost";
$username = "wmy";
$password = "123456789";
$ku = "wmylearn";
// 创建连接
$conn = mysqli_connect($servername, $username, $password, $ku);
 
// 检测连接
if (!$conn) {
    die( "连接MySQL失败：". mysqli_connect_error()); 
} else{
    echo '数据已用过'."<br />";  
}

// include 'conn.php';

$name = $_POST["username"];
$password = $_POST["password"];
$shouji = $_POST["phone"];
$youxiang = $_POST["email"];
$beizhu = $_POST["shuoming"];

$sql = "INSERT INTO user(xingming,pwd,email,phone,shuoming) VALUES ('$name','$password','$youxiang','$shouji','$beizhu')";
$result = mysqli_query("set names 'utf8'",$conn,$sql);

if($result==true){
    echo"已经存入数据库";
}else{
    echo"未能存入";
}
mysqli_close($conn);
?>