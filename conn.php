<?php 
// 创建连接
$con =mysqli_connect("localhost","root","");
// if ($con) {
//    echo "连接成功";
// }else{
//    die("连接失败!".mysqLi_connect_error() );
// }
// 选择要操作的数据库
mysqli_select_db($con,"student");

mysqli_query($con,"set names utf8");


?>