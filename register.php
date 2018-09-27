<?php include("head1.php") ?>
	
	 
		<p class="sui-text-large my-padd">用户注册</p>
		<form class="sui-form form-horizontal sui-validate" id="form1" action="register-save.php" method="post">
			<div class="control-group">
    				<label for="inputEmail" class="control-label">用户邮件：</label>
   				<div class="controls">
     				 	<input id="cemail" name="cemail" class="input-large input-fat" type="text" placeholder="请输入课程名称" data-rules="required|email">
    				</div>
    			</div>
    			<div class="control-group">
              			<label for="inputEmail" class="control-label">用户名：</label>
               			<div class="controls">
               				 <input class="input-large input-fat" type="text" name="cname" id="cname" placeholder="请输入用户名" >
              			</div>
           			 </div>
    			<div class="control-group">
    				<label for="inputPassword" class="control-label">密码：</label>
    				<div class="controls">
      					<input type="password" id="cpassword" name="password" placeholder="请输入密码" data-rules="required" title="请输入密码">
    				</div>
  				</div>
  				<div class="control-group">
    				<label for="inputRepassword" class="control-label">重复密码: </label>
    				<div class="controls">
      					<input type="password" id="inputRepassword" name="crepassword" placeholder="重复密码" data-rules="required|match=password">
    				</div>
  				</div>
    			<div class="control-group">
    				<label for="inputEmail" class="control-label">验证码：</label>
   					<div class="controls">
             			<input type="text" placeholder="" class="input-small" name="yanzhengma" id="zcyzm"data-rules="required">
           			 </div>
                          <input type="text" id="code_btn"class="input-small">
    			</div>
    			<div class="control-group">
    				<label for="inputEmail" class="control-label">密码提示问题：</label>
    						<div>
    							<select name="cmimawenti" id="cmimawenti">
      							<option value="你的小学在哪里上?">你的小学在哪里上?</option>
      							<option value="你的最好的朋友的姓名?">你的最好的朋友的姓名?</option>
      							<option value="你的最有纪念的日期?">你的最有纪念的日期?</option>
      						</select>
    					<!-- </div> -->
    					</div>
    				</div>
    			<div class="control-group">
              			<label for="inputEmail" class="control-label">密码答案：</label>
               			<div class="controls">
               				<input class="input-large input-fat" type="text" name="cmimadaan" id="cmimadaan" placeholder="请输入密码答案" data-rules="required">
              			</div>
            			</div>
    			<div class="control-group">
    				<label for="" class="control-lobel">
    					<div class="controls">
    						<input type="submit" value="提交" name="" id="tijiao"class="sui-btn btn-xlarge btn-primary">
    					</div>
    				</label>
    			</div>
		</form>
 	</div>
</body>
</html>
<?php include("foot.php") ?>
<script>
  var code_btn=document.getElementById('code_btn');
            getCodeFn();
            code_btn.onclick=getCodeFn;
    function getCodeFn(){
            var strArry=["0","1","2","3","4","5","6","7","8","9","a","b",'c','d','e','f','h','i','g','k','l','m','m','o','p','q','r','s','t','u','v','w','x','y','z',"A","B",'C','D','E','F','G','I','G','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
            var code_str="",num;
         for (var i = 0; i <4; i++) {
                num=parseInt(Math.random()*strArry.length);
                    code_str+=strArry[num];
            }
            code_btn.value=code_str;

    }   
    var tijiao=document.getElementById('tijiao');
        var yzm=document.getElementById('yanzhengma');
    
    tijiao.onclick=function(){
            var neirong=yzm.value.toUpperCase();    
                // var yzm_in=yzm.Value;
                if(neirong==code_btn.value.toUpperCase()){
                    alert("验证通过");
                }else if(yzm.value.length==0){
                        alert("请输入验证码");
                }else{
                        alert("验证有误");
                        $("form").attr("action","register.php");
                        history.go(0);
                }
        
        }
</script>