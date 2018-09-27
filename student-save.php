<?php
	$sNumber = $_POST["sNumber"];
	$bjNumber = $_POST["bjNumber"];
	$sName = $_POST["sName"];
	$sSex = $_POST["sSex"];
	$sBrithday = $_POST["sBrithday"];
	$sPhone = $_POST["sPhone"];
	//如果是录入页面提交，那么$action等于add
	$action = empty($_POST["action"])?"add":$_POST["action"];

	if($action == "add"){
		$str1 = "数据添加成功！";
		$str2 = "数据添加失败！";
		$url = "student-input.php";
		$sql1 = "insert into student(学号,班号,姓名,性别,出生日期,电话) value('$sNumber','$bjNumber','$sName','$sSex','$sBrithday','$sPhone')";	
		// echo $sql1;	
	}else if($action=="update" ){
		$str1 = "数据更新成功！";
		$str2 = "数据更新失败！";
		$url = "student-list.php";
		$kid = $_POST["kid"];
		$sql1 = "update student set 学号='{$sNumber}',班号='{$bjNumber}',姓名='{$sName}',性别='{$sSex}',出生日期='{$sBrithday}',电话='{$sPhone}' where id={$kid}";
		// echo $sql1;
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