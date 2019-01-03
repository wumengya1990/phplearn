<?php
header("Content-Type: text/html;charset=utf-8");

$servername = "localhost";
$username = "wmy";
$password = "123456789";
$ku = "wmylearn";
// 创建连接
// $conn = mysqli_connect($servername, $username, $password, $ku);
$conn = new mysqli($servername, $username, $password, $ku);
// 检测连接
if ($conn->connect_error) {
    die( "连接MySQL失败：". mysqli_connect_error()); 
} else{
    echo '数据已用过'."<br />";  
}

?>