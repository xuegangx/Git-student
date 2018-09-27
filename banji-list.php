<?php include("head.php") ?>
<?php 
     include("conn.php");
      // 执行SQL语句
     $sql = "select id,班号,班长,教室,班主任 from banjibiao";
      $result = mysqli_query($con,$sql);
  
      //关闭数据库
      mysqli_close($con);
?>

		<div class="sui-layout">
  			<div class="sidebar">
				<?php include("caidan.php"); ?>
  			</div>
 			 <div class="content">
				<p class="sui-text-large my-padd">班级列表</p>
				<table class="sui-table table-primary">
                                                <tr><th>id</th><th>班号</th><th>班长</th><th>教室</th><th>班主任</th><th>操作</th></tr>
                            <?php 
                           if (mysqli_num_rows($result)>0) {
                              while ( $row =mysqli_fetch_assoc($result)) {
                                 echo "<tr>
                                 <td>{$row['id']}</td>
                                 <td>{$row['班号']}</td>
                                 <td>{$row['班长']}</td>
                                 <td>{$row['教室']}</td>
                                 <td>{$row['班主任']}</td>
                                 <td>
                                <a class='sui-btn btn-small btn-warning' href='banji-update.php?kid={$row['id']}'>修改</a>&nbsp;&nbsp;
<a class='sui-btn btn-small btn-danger' href='banji-del.php?kid={$row['id']}'>删除</a></td>
                                 </tr>";
                              }
                           }else{
                              echo "没有记录";
                           }
                           ?>
                                    </table> 
 			 </div>
		</div>
	</div>

</body>
</html>
<?php include("foot.php") ?>


