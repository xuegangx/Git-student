<?php
	$kcName = $_POST["kcName"];
	$kcTime = $_POST["kcTime"];

	$action=empty($_POST['action'])?'add':$_POST['action'];
	if($action == "add"){
		$str1 = "数据添加成功！";
		$str2 = "数据添加失败！";
		$url = "kecheng-input.php";
		$sql1 = "insert into kecheng(课程名,时间) value('$kcName','$kcTime')";		
	}else if($action=="update" ){
		$str1 = "数据更新成功！";
		$str2 = "数据更新失败！";
		$url = "kecheng-list.php";
		$kid = $_POST["kid"];
		$sql1 = "update kecheng set 课程名='{$kcName}',时间='{$kcTime}' where 课程编号={$kid}";
		echo $sql1;
	}else{
		die("请选择操作方法");
	}
	include("conn.php");

//执行SQL语句
$result =mysqli_query($con,$sql1);

// var_dump($result);
if( $result ){
	echo "<script>alert('{$str1}');</script>";
	//Refresh: 暂停时间
	header("Refresh:1;url={$url}");
}else{
	echo $str2.mysqli_error($con);
}

mysqli_close( $con );
?>