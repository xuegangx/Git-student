<?php
	$kcbanhao = $_POST["banhao"];
	$kcbanz = $_POST["banzhang"];
	$kcjs = $_POST["jiaoshi"];
	$kcbzr = $_POST["banzhuren"];
	//如果是录入页面提交，那么$action等于add
	$action = empty($_POST["action"])?"add":$_POST["action"];

	if($action == "add"){
		$str1 = "数据添加成功！";
		$str2 = "数据添加失败！";
		$url = "banji-input.php";
		$sql1 = "insert into banjibiao(班号,班长,教室,班主任) value('$kcbanhao','$kcbanz','$kcjs','$kcbzr')";	
		echo $sql1;	
	}else if($action=="update" ){
		$str1 = "数据更新成功！";
		$str2 = "数据更新失败！";
		$url = "banji-list.php";
		$kid = $_POST["kid"];
		$sql1 = "update banjibiao set 班号='{$kcbanhao}',班长='{$kcbanz}',教室='{$kcjs}',班主任='{$kcbzr}' where id={$kid}";
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