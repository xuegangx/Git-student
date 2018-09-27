<?php
	$bianhao = $_POST["email"];
	$name = $_POST["name"];
	
	$mima = $_POST["mima"];
	$daan = $_POST["daan"];

	$action = empty($_POST["action"])?"add":$_POST["action"];

	 if($action=="update" ){
		$str1 = "数据更新成功！";
		$str2 = "数据更新失败！";
		$url = "huiyuan-list.php";
		$kid = $_POST["kid"];
		$sql1 = "update user set email='{$email}',name='{$name}',password='{$mima}',answer='{$daan}' where id={$kid}";
		echo $sql1;
	}else{
		die("请选择操作方法");
	}

include("conn.php");

//执行SQL语句

$result = mysqli_query($con, $sql1);

//输出数据
//var_dump( $result );
if( $result ){
	echo "<script>alert('{$str1}');</script>";
	//Refresh: 暂停时间
	header("Refresh:1;url={$url}");
}else{
	echo $str2.mysqli_error($con);
}

//关闭数据连接
mysqli_close( $con );
?>