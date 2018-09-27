<?php include("head.php") ?>
<?php 
      include("conn.php");

      $xingming=empty($_POST['xingming'])?null:$_POST['xingming'];
      $xuehao=empty($_POST['xuehao'])?null:$_POST['xuehao'];
      // 执行SQL语句
      $sql="SELECT * FROM student INNER JOIN banjibiao ON student.班号=banjibiao.班号 INNER JOIN xuanxui ON student.学号=xuanxui.学号 WHERE student.学号='{$xuehao}' or student.姓名='{$xingming}';";
      $result = mysqli_query($con,$sql);
  
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
                                                <th>学号</th>
                                                <th>班号</th>
                                                <th>姓名</th>
                                                <th>性别</th>
                                                <th>出生日期</th>
                                                <th>电话</th>
                                                <th>课程编号</th>
                                                <th>成绩</th>
                                                <th>班长</th>
                                                <th>班主任</th>
                                        </tr>
                                        <?php 
                                           // 输出数据
                                            if(mysqli_num_rows($result) > 0){
                                                    while ($row=mysqli_fetch_assoc($result)) {
                                                            $sex = $row["性别"]==0?"女": "男"; 
                                                            echo "<tr><td>{$row['学号']}</td><td>{$row['班号']}</td><td>{$row['姓名']}</td><td>".$sex."</td><td>{$row['出生日期']}</td><td>{$row['电话']}</td><td>{$row['课程编号']}</td><td>{$row['成绩']}</td><td>{$row['班长']}</td><td>{$row['班主任']}</td>";
                                                    }
                                            }else{
                                                    echo "<tr>没有记录!</tr>";
                                            }
                                    /*    if(mysqli_num_rows($result) > 0){
                                             while ($row=mysqli_fetch_assoc($result)) {
                                               $sex = $row["性别"]==0?"女": "男"; 
                                               echo "<tr><td>{$row['学号']}</td><td>{$row['班号']}</td><td>{$row['姓名']}</td><td>".$sex."</td><td>{$row['出生日期']}</td><td>{$row['电话']}</td><td>{$row['课程编号']}</td><td>{$row['成绩']}</td><td>{$row['班长']}</td><td>{$row['班主任']}</td>";
                                             } 
                                           }else{
                                             echo "<tr>没有记录!</tr>";
                                           }*/

                                           if($result){
                                             echo "操作成功!";
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


