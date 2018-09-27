<?php
	//邮箱
	$cemail =$_POST['cemail'];
	//用户名
	$cname =$_POST['cname'];
	//密码
	$password =$_POST['password'];
	//验证码
	// $yanzhengma =$_POST['yanzhengma'];
	//密码问题	
	$cmimawenti =$_POST['cmimawenti'];
	//密码答案
	$cmimadaan =$_POST['cmimadaan'];
	
	$sql1 = "insert into user(email,name,password,question,answer) value('$cemail','$cname','$password','$cmimawenti','$cmimadaan')";	
	
	include("conn1.php");

//执行SQL语句
$result =mysqli_query($con,$sql1);

if ($sql1) {
	echo"验证通过";
	header("Refresh:1;url=login.php");
	
}
mysqli_close( $con );
?>