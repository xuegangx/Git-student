<?php include("head.php") ?>
<?php
      // 执行SQL语句
	$xingming=empty($_POST['xingming'])?null:$_POST['xingming'];
	$xuehao=empty($_POST['xuehao'])?null:$_POST['xuehao'];
	$kechengming=empty($_POST['kechengming'])?null:$_POST['kechengming'];

	include("conn.php");

$sql="SELECT * FROM student INNER JOIN xuanxui ON student.学号=xuanxui.学号 WHERE student.学号='{$xuehao}' and xuanxui.课程编号='{$kechengming}' or student.姓名='{$xingming}' and xuanxui.课程编号='{$kechengming}';";
$result = mysqli_query($con,$sql);
// 关闭数据库
  
      //关闭数据库
      mysqli_close($con);
?>

	<div class="sui-layout">
  		<div class="sidebar">
			<?php include("caidan.php"); ?>
  		</div>
 		 <div class="content">
                                        <p class="sui-text-xxlarge myBlue my-padd">学生列表</p>
                                        <table class="sui-table table-primary">
                                        <tr>
                                             	<th>姓名</th>			
				<th>课程编号</th>
				<th>成绩</th>
                                        </tr>
                                        <?php 
                                           // 输出数据
                                         if(mysqli_num_rows($result) > 0){
					// mysqli_fetch_assco()从结果集中取得一行作为关联数组,如果结果集中没有更多行则返回null
					while ($row=mysqli_fetch_assoc($result)) {
						echo "<tr><td>{$row['学号']}</td><td>{$row['姓名']}</td><td>{$row['课程编号']}</td><td>{$row['成绩']}</td></tr>";
					}	
				}else{
					echo "没有记录";
				}
				if($result){
					echo "<script>console.log('操作成功!')</script>";
				}else{
					echo "操作失败!"; 
				} 
                                        ?>
    </table>

  </div>
		</div>
	</div>

</body>
</html>
<?php include("foot.php") ?>


