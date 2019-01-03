<?php
 header("Content-Type: text/html; charset=utf8");
 if(!isset($_POST["submit"])){
      exit("错误执行");
  }//检测是否有submit操作 

//   $servername = "localhost";
//   $username = "wmy";
//   $password = "123456789";
//   $ku = "wmylearn";
//   // 创建连接
//   $conn = mysqli_connect($servername, $username, $password, $ku);
   
//   // 检测连接
//   if (!$conn) {
//       die( "连接MySQL失败：" . mysqli_connect_error()); 
//   } else{
//       echo '数据已用过'."<br />";  
//   }

include 'conn.php';

$name = $_POST["xingming"];
$password = $_POST["pwd"];

if( $name && $password){
      $sql = "select * from user where xingming = '$name' and pwd = '$password'";
      $result = $conn->query($sql);
      $jieguo = mysqli_fetch_assoc($result);
      $rows = mysqli_num_rows($result);
      if($rows){//0 false 1 true
            header("refresh:0;url=welcome.html");//如果成功跳转至welcome.html页面
            exit;
      }else{
            echo "用户名或密码错误";
            header("refresh:3;url=login.html");
      }

}else{
      echo "表单填写不完整";
      header("refresh:3;url=login.html");//如果成功跳转至welcome.html页面
}
 //mysqli_close($conn);//关闭数据库
 $conn->close();
?>