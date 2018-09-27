<?php include("head.php") ?>
		<div class="sui-layout">
  			<div class="sidebar">
				<?php include("caidan.php"); ?>
  			</div>
 			 <div class="content">
				<p class="sui-text-large my-padd">课程录入</p>
				<form method="post" action="kecheng-save.php"  class="sui-form form-horizontal sui-validate">
					<div class="control-group">
    					<label for="kcName" class="control-label">课程名：</label>
   						 <div class="controls">
     					 	<input class="input-large input-fat" type="text" id="kcName"name="kcName" placeholder="请输入课程名称" data-rules='required|minlength=2|maxlength=10'>
    					</div>
    				</div>
    				<div class="control-group">
    					<label for="kcTime" class="control-label">课程时间：</label>
   						 <div class="controls">
     					 	<input class="input-large input-fat" type="text" id="kcTime" name="kcTime" data-toggle="datepicker" placeholder="请输入课程时间">
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


