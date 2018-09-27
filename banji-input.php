<?php include("head.php"); ?>
		<div class="sui-layout">
  			<div class="sidebar ">
  				<?php include("caidan.php"); ?>
  			</div>
 			 <div class="content">
				<p class="sui-text-large my-padd">班级信息录入</p>
				<form class="sui-form form-horizontal sui-validate"action="banji-save.php" method="post" >
					<div class="control-group">
    					<label for="kcName" class="control-label">班号：</label>
   						 <div class="controls">
     					 	<input class="input-large input-fat" type="text" id="banhao"name="banhao" placeholder="请输入班号" data-rules='required|minlength=2|maxlength=10'>
    					</div>
    				</div>
    				<div class="control-group">
    					<label for="inputEmail" class="control-label">班长：</label>
   						 <div class="controls">
     					 	<input class="input-large input-fat" type="text" id="banzhang" name="banzhang" placeholder="请输入班长姓名" data-rules='required|minlength=2|maxlength=10'>
    					</div>
    				</div>
    				<div class="control-group">
    					<label for="jiaoshi" class="control-label">教室：</label>
   						 <div class="controls">
     					 	<input class="input-large input-fat" type="text" id="jiaoshi" name="jiaoshi" placeholder="请输入教室" data-rules='required|minlength=2|maxlength=10'>
    					</div>
    				</div>
    				<div class="control-group">
    					<label for="banzhuren" class="control-label">班长任：</label>
   						 <div class="controls">
     					 	<input class="input-large input-fat" type="text" id="banzhuren" name="banzhuren" placeholder="请输入班主任姓名" data-rules='required|minlength=2|maxlength=10'>
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
<script>
    console.log( document.cookie);
</script>
<?php include"foot.php"; ?>
