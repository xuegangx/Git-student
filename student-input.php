<?php include("head.php");
	include("conn.php");
	$sql ="SELECT DISTINCT 班号 FROM 班级"
?>

<div class="sui-layout">
  			<div class="sidebar">
				<?php include("caidan.php"); ?>
  			</div>
 			 <div class="content">
				<p class="sui-text-large my-padd">学生录入</p>
				<form action="student-save.php"  class="sui-form form-horizontal sui-validate"method="post" >
				<div class="control-group">
    					<label for="sNumber" class="control-label">学号：</label>
   						 <div class="controls">
     					 	<input class="input-large input-fat" type="text" id="sNumber"name="sNumber" placeholder="请输入学号" data-rules='required|digits|minlength=3|maxlength=6'>
    					</div>
    				</div>
    				<div class="control-group">
    					<label for="bjNumber" class="control-label">班号：</label>
   						 <div class="controls">
     					 	<input class="input-large input-fat" type="text" id="bjNumber" name="bjNumber"  placeholder="请输入课程时间">
                                                                            
     					 	
    					</div>
    				</div>
    				<div class="control-group">
    					<label for="sName" class="control-label">姓名：</label>
    						<div class="controls">
    							<input type="text"id="sName" name="sName" class="input-large input-fat" placeholder="请输入姓名" data-rules="required">
    						</div>
    					
    				</div>
    				
    				<div class="control-group">
    					<label for="sSex" class="control-label">姓别：</label>
    						<div class="controls">
    							<label class="radio-pretty inline checked">
    								<input type="radio"value="1" name="sSex" checked="checked"><span>男</span>
    							</label>
    							<label class="radio-pretty inline">
    								<input type="radio"value="0" name="sSex"><span>女</span>
    							</label>
    							
    						</div>
    					
    				</div>
                                                <div class="control-group">
                                                    <label for="sBrithday" class="control-label">出生日期：</label>
                                                        <div class="controls">
                                                            <input type="text"id="sBrithday" name="sBrithday" class="input-large input-fat" placeholder="请输入出生日期" data-rules="datepicker"data-toggle="datepicker">
                                                        </div>
                                                    
                                                </div>
    				<div class="control-group">
    					<label for="sPhone" class="control-label">电话：</label>
    						<div class="controls">
    							<input type="text"id="sPhone" name="sPhone" class="input-large input-fat" placeholder="请输入电话" data-rules="mobile">
    						</div>
    					
    				</div>
    				<div class="control-group">
    					<label for="" class="control-label">
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