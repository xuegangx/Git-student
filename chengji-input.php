<?php include("head.php") ?>
		<div class="sui-layout">
  			<div class="sidebar">
				<?php include("caidan.php"); ?>
  			</div>
 			 <div class="content">
				<p class="sui-text-large my-padd">成绩录入</p>
				<form method="post" action="chengji-save.php"  class="sui-form form-horizontal sui-validate">
					<div class="control-group">
    					<label for="cxuehao" class="control-label">学号：</label>
   						 <div class="controls">
     					 	<input class="input-large input-fat" type="text" id="xuehaoc"name="xuehaoc" placeholder="请输入学号" data-rules='required|minlength=2|maxlength=10'>
    					</div>
    				</div>
    				<div class="control-group">
    					<label for="kechengbianhao" class="control-label">课程编号：</label>
   						 <div class="controls">
     					 	<input class="input-large input-fat" type="text" id="bianhao" name="bianhao"placeholder="请输入课程编号">
    					</div>
    				</div>
                          <div class="control-group">
                            <label for="chengji" class="control-label">成绩：</label>
                             <div class="controls">
                              <input class="input-large input-fat" type="text" id="chengji" name="chengji"  placeholder="请输入成绩">
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


