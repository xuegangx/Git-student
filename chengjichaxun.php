<?php include("head.php") ?>
		<div class="sui-layout">
  			<div class="sidebar">
				<?php include("caidan.php"); ?>
  			</div>
 			 <div class="content">
				<p class="sui-text-large my-padd">成绩查询</p>
				<form class="sui-form form-horizontal sui-validate" action="chengjichaxun-list.php" method="post">
                                                                <div class="control-group">
                                                                            <label for="xuehao" class="control-label">学号：</label>
                                                                            <div class="controls">
                                                                                        <input type="text" id="xuehao"  name="xuehao" class="input-large input-fat" placeholder="请输入学号" data-rules="required|minlength=2|maxlength=10">
                                                                            </div>
                                                                </div>
                                                                <div class="control-group">
                                                                            <label for="xingming" class="control-label">姓名：</label>
                                                                            <div class="controls">
                                                                                
                                                                                        <input type="text" id="xingming" name="xingming" class="input-large input-fat"  placeholder="输入姓名"  data-rules="required|minlength=2|maxlength=10">
                                                                            </div>
                                                                </div>
                                                                <div class="control-group">
                                                                            <label for="kechengming" class="control-label">课程名：</label>
                                                                            <div class="controls">
                                                                                       <input type="text" id="kechengming" name="kechengming" class="input-large input-fat"  placeholder="输入课程名" >
                                                                            </div>
                                                                </div>
                                                                <div class="control-group">
                                                                            <label class="control-label"></label>
                                                                            <div class="controls">
                                                                                        <input type="submit" name="" value="查询" class="sui-btn btn-large btn-primary">
                                                                            </div>
                                                                </div>
                                                    </form>
 			 </div>
		</div>
	</div>

</body>
</html>
<?php include("foot.php") ?>


