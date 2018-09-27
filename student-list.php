<?php include("head.php") ?>
<?php 
     include("conn.php");
      // 执行SQL语句
     $sql = "select id,学号,班号,姓名,性别,出生日期,电话 from student";
      $result = mysqli_query($con,$sql);
  
      //关闭数据库
      mysqli_close($con);
?>

		<div class="sui-layout">
  			<div class="sidebar">
				<?php include("caidan.php"); ?>
  			</div>
 			 <div class="content">
				<p class="sui-text-large my-padd">学生列表</p>
				<table class="sui-table table-primary">
                                        <thead>
                                              <tr><th>id</th><th>学号</th><th>班号</th><th>姓名</th><th>性别</th><th>出生日期</th><th>电话</th><th>操作</th></tr>
                                        </thead>
                                          <tbody id="studentlist">
                                          
                                          </tbody>
                             
                         <!--  if (mysqli_num_rows($result)>0) {
                             while ( $row =mysqli_fetch_assoc($result)) {
                               $sex1=$row["性别"]=="1"?"男":"女";
                                echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['学号']}</td>
                                <td>{$row['班号']}</td>
                                <td>{$row['姓名']}</td>
                                <td>{$sex1}</td>
                                <td>{$row['出生日期']}</td>
                                <td>{$row['电话']}</td>
                                <td>
                               <a class='sui-btn btn-warning btn-small' href='student-update.php?kid={$row['id']}'>修改</a> &nbsp;&nbsp; 
                                     <a class='sui-btn btn-danger btn-small' href='student-del.php?kid={$row['id']}'>删除</a>
                                </tr>";
                             }
                          }else{
                             echo "没有记录";
                          } -->
                           
                                    </table> 
 			 </div>
		</div>
	</div>

</body>
</html>
<?php include("foot.php") ?>

<script>
            $(function(){
                        $.ajax({
                                url : "api.php",
                                type : "POST",
                                dataType : "json",
                                data : {
                                        "action" : "student"
                                },
                                beforeSend : function(XMLHttpRequest){
                                    $("#studentlist").html("<tr><td>正在查询，请稍后……</td></tr>");
                                },
                                success : function(data,textStatus){
                                    console.log(data.data);
                                    if (data.code == 200) {
                                        var str= "";
                                        for (var i = 0; i<data.data.length; i++) {
                                           console.log(data.data[i])
                                            str +="<tr><td>"+data.data[i].id+"</td><td>"+data.data[i].学号+"</td><td>"+data.data[i].班号+"</td><td>"+data.data[i].姓名+"</td><td>"+data.data[i].性别+"</td><td>"+data.data[i].出生日期+"</td><td>"+data.data[i].电话+"</td><td>  <a class='sui-btn btn-warning btn-small' href='student-update.php?kid=id'>修改</a> &nbsp; &nbsp;<a class='sui-btn btn-danger btn-small' href='student-del.php? kid=id'>删除</a></td></tr>";
                                        };
                                        $("#studentlist").html(str);
                                    };
                                },
                              error   : function(XMLHttpRequest,textStatus,errorThrown){
                                    //请求失败后调用此函数
                                    console.log( "失败原因：" + errorThrown );
                             }
                        });
            });
</script>


