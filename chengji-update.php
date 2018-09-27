<?php include("head.php") ?>
<?php 
        $kid = empty($_GET["kid"])?"null":$_GET["kid"];
        if($kid == "null"){
            die("请选择要修改的记录");
        }else{
            include("conn.php");
            //执行SQL语句
            $sql = "select id,学号,课程编号,成绩 from xuanxui where id={$kid}";
            $result = mysqli_query($con, $sql);
        
            //输出数据
            if( mysqli_num_rows($result) > 0 ){
                //将查询结果转换成数组
                $row = mysqli_fetch_assoc($result);
            }else{
                echo "找不到这条记录";
            }
        
            //关闭数据连接
            mysqli_close( $con );  
        }

?>
		<div class="sui-layout">
  			<div class="sidebar">
				<?php include("caidan.php"); ?>
  			</div>
 			 <div class="content">
				<p class="sui-text-large my-padd">学生修改</p>
				<form  class="sui-form form-horizontal sui-validate"action="chengji-save.php"method="post">
					<div class="control-group">
    					<label for="inputEmail" class="control-label">学号：</label>
   						 <div class="controls">
                            <!--增加一个隐藏的input，用来区分是新增数据还是修改数据-->
                                                                        <input type="hidden" name="action" value="update">
                                                                           <!--增加一个隐藏的input，保存课程编号-->
     					 	<input  type="hidden" name="kid" value="<?php echo $row['id'];?>">
                                                                        <input  type="text" name="xuehaoc" value="<?php echo $row['学号'];?>" id="xuehaoc" placeholder="请输入学号" >
    					</div>
    				</div>
    				<div class="control-group">
    					<label for=" " class="control-label">课程编号：</label>
   						 <div class="controls">
                                    <!-- 新增一个input，用来区分新增数据还是修改数据 -->
                                      <input type="text" value="<?php echo $row['课程编号']; ?>" id="bianhao" name="bianhao" class="input-large input-fat" data-toggle="required|minlength=2|maxlength=10" placeholder="输入班号">
    					</div>
    				</div>
                                                <div class="control-group">
                                                    <label for=" " class="control-label">成绩：</label>
                                                     <div class="controls">
                                                                <!-- 新增一个input，用来区分新增数据还是修改数据 -->
                                                                  <input type="text" value="<?php echo $row['成绩']; ?>" id="chengji" name="chengji" class="input-large input-fat" data-toggle="required|minlength=2|maxlength=10" placeholder="输入姓名">
                                                    </div>
                                                </div>
                                                
    				<div class="control-group">
    					<label for="" class="control-lobel">
    						<div class="controls">
    							<input type="submit" value="提交" name="" class="sui-btn btn-xlarge btn-primary">
    						</div>
    					</label>
    				</div>
				</form>
 			 </div>
		</div>
	</div>

</body>
</html>
<?php include("foot.php") ?>


