<?php include("head1.php") ?>
	
	 
		<p class="sui-text-large my-padd">用户登录</p>
		<form class="sui-form form-horizontal sui-validate" id="form1" action="login-save-ajax.php" method="post">
			<div class="control-group">
    				<label for="inputEmail" class="control-label">用户邮件：</label>
   				<div class="controls">
     				 	<input id="email" name="email" class="input-large input-fat" type="text" placeholder="请输入课程名称" data-rules="required|email">
    				</div>
    			</div>
    			
    			<div class="control-group">
    				<label for="inputPassword" class="control-label">密码：</label>
    				<div class="controls">
      					<input type="password" id="cpassword" name="cpassword" placeholder="请输入密码" data-rules="required" title="请输入密码">
    				</div>
  				</div>
  				
    			<div class="control-group">
    				<label for="inputEmail" class="control-label">验证码：</label>
   					<div class="controls">
             			                <input type="text" placeholder="" class="input-small" name="yanzhengma" id="yanzhengma"data-rules="required">
                                                                </div>
                                                                <input type="text" id="code_btn"class="input-small">
    			</div>
    			
    			<div class="control-group">
    				<label for="" class="control-lobel">
    					<div class="controls">
    						<input type="submit" value="提交" name="" id="tijiao"class="sui-btn btn-xlarge btn-primary">
    					</div>
    				</label>
    			</div>
		</form>
     <!--    <p class='pp'>登录成功</p>       -->

 	</div>
</body>
</html>
<?php include("foot.php") ?>
<script>

$("button[type=submit]").on("click",function(){
    //使用$.ajax()提交数据
    $.ajax({
        url     : "login-save-ajax.php",
        type    : "POST",
        data    : $("#form1").serialize(),
        dataType: "json",
        success :  function(data,textStatus){
            //请求成功后调用此函数
            console.log( data );
            if( data.code == 200 ){
                $(".pp").slideDown(2000,function(){
                    window.location.href = "index.php";
                });
            }
            if( data.code == 20001){
                //提示密码错误
            }
            if( data.code == 20004){
                //提示邮箱填写错误
            }
        },
        error   : function(XMLHttpRequest,textStatus,errorThrown){
            //请求失败后调用此函数
            console.log( "失败原因：" + errorThrown );
        }
    });
    return false;
})
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
                        $("form").attr("action","login.php");
                        history.go(0);
                }
        
        }
  
</script>
