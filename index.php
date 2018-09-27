<?php include("head.php"); ?>
	<div class="sui-layout">
  			<div class="sidebar">
				<?php include("caidan.php"); ?>
  			</div>
 			 <div class="content">
				<?php echo "欢迎访问学生管理系统";?>	
 			 </div>
		</div>
	</div>
</body>
</html>
<script>
	 document.cookie="uname=denghin;expires=Thu,22 Aug 2018 00:00:00 GMT";
	 //第二种方法
	 var days=30;
	 var daysTime=30*24*60*60*1000;//转换为毫秒
	 var exp=new Date();
	 exp.setTime(exp.getTime()+daysTime);//设置为30天后

	 document.cookie="uname=dengbin;expires="+exp.toGMTString;

	 var password="12345678";
	 document.cookie="password"=password;


</script>
<?php include("foot.php"); ?>
