<?php
	$xuehaoc = $_POST["xuehaoc"];
	$bianhao = $_POST["bianhao"];
	$chengji = $_POST["chengji"];

	$action = empty($_POST["action"])?"add":$_POST["action"];

	if($action == "add"){
		$str1 = "数据添加成功！";
		$str2 = "数据添加失败！";
		$url = "chengji-input.php";
		$sql1 = "insert into xuanxui(学号,课程编号,成绩) value('$xuehaoc','$bianhao','$chengji')";	
		echo $sql1;	
	}else if($action=="update" ){
		$str1 = "数据更新成功！";
		$str2 = "数据更新失败！";
		$url = "chengji-list.php";
		$kid = $_POST["kid"];
		$sql1 = "update xuanxui set 学号='{$xuehaoc}',课程编号='{$bianhao}',成绩='{$chengji}' where id={$kid}";
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