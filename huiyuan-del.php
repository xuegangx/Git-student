<?php 
	$con =mysqli_connect("localhost","root","");
	include("conn1.php");
	
	//执行SQL语句
	$sql="delete from user where id={$_GET['kid']}";
	$result=mysqli_query($con,$sql);
	// 输出数据
	if ($result) {
		echo "<script>alert('数据删除成功')</script>";
		header("Refresh:1;url=huiyuan-list.php");
	}else{
		echo "数据删除失败".mysqli_error($con);
	}
	//关闭数据连接
	mysqli_close($con);
?>  