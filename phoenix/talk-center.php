<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>讨论专区</title>
		<!--引入自定义css文件-->
		<link rel="stylesheet" href="css/my-css.css" />
		<!--引入swiper-->
		<link rel="stylesheet" href="css/swiper4.0.5.min.css" />
		<!--引入bootstrap-->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<!--引入风画赏析模块css-->
		<link rel="stylesheet" href="css/certify.css" />
		<!--引入swiper-->
		<link rel="stylesheet" href="css/animate.min.css" />
		<link rel="stylesheet" href="css/swiper.min.css" />
		<script type="text/javascript" src="js/swiper.min.js" ></script>
		<style>
			.sub{
				color: RGB(255,66,82);
				color: black;
				
			}
			
			.bj_bai{
				background-color: RGB(255,66,82);
			}
		</style>
	</head>
	<body  >
		
		
	<?php
		session_start();
		include_once("functions/is_login.php");
			if(!is_login()){
					?>
		
		<!--最顶部导航开始-->
		<div id="head-top">
			<div class="fast-nav">
				<a href="register.php" class="" target="_blank">注册</a>
				<a href="login.php" class="" target="_blank">登录</a>
				<a href="about-us.php" class="" target="_blank">关于我们</a>
				<a href="about-us.php" class="" target="_blank">联系我们</a>
			</div>
		</div>

		<?php	}
		else {
		?>
		<div id="head-top">
			<div class="fast-nav">
				<a href="about-us.php" class="" target="_blank">关于我们</a>
				<a href="about-us.php" class="" target="_blank">联系我们</a>
				<a href="" class="" target="_blank"><?php  echo $_SESSION["user"];  ?></a>
				<a href="logout.php" class="" target="_blank">注销</a>
			</div>
		</div>
		<!--最顶部导航结束-->
		<?php }
		?>

		<!--顶部长图介绍开始-->
		<img src="img/top-img.png" class="top-logo"/>
		<!--顶部长图介绍结束-->
		
		
		<!--顶部导航区域开始-->
		<div id="top">
			<div id="a-box">
				<!--左上角标题部分开始-->
				<div class="top-title">
					<a href="index.php" class="web-name">首页</a>
				</div>
				<!--左上角标题部分结束-->
				<!--导航条开始-->
<?php
		
		include_once("functions/is_login.php");
			if(!is_login()){
					?>


				<div class="top-menu">
					<a href="fh-origin.php" class="" target="_blank">凤画起源</a>
					<!--<a href="" class="" target="_blank">凤画风采</a>-->
					<a href="cultural-exchange.php" class="" target="_blank">文化交流</a>
					<a href="inherit.php" class="" target="_blank">凤画传承</a>
					<a href="painter.php" class="" target="_blank">知名画家</a>
					<a href="big-events.php" class="" target="_blank">凤画大事件</a>
					<a href="draw.html" class="" target="_blank">在线画凤画</a>
					<a href="ShowData.php" class="" target="_blank">新闻中心</a>
					
				</div>


					<?php	}
		else {
		?>

				<div class="top-menu">
					<a href="fh-origin.php" class="" target="_blank">凤画起源</a>
					<!--<a href="" class="" target="_blank">凤画风采</a>-->
					<a href="cultural-exchange.php" class="" target="_blank">文化交流</a>
					<a href="inherit.php" class="" target="_blank">凤画传承</a>
					<a href="painter.php" class="" target="_blank">知名画家</a>
					<a href="big-events.php" class="" target="_blank">凤画大事件</a>
					<a href="talk-center.php" class="" target="_blank">专题讨论</a>
					<a href="draw.html" class="" target="_blank">在线画凤画</a>
					<a href="ShowData.php" class="" target="_blank">新闻中心</a>
				</div>


		<?php }
		?>
				<!--导航条结束-->
			</div>
		</div>
		<!--顶部导航区域结束-->
		<!--顶部大图开始-->
		<div class="top">
			<img src="images/talk-banner.jpg" />
			<div class="head-line">凤阳凤画 · 专题讨论区</div>
		</div>
		
		<!--顶部大图结束-->
		
		<!---------------------讨论区域开始----------------------->
		<div id="talk-main" style="background-color: RGB(255,66,82)">
			<div class="bj_bai" style="">
                <form action="comment.php" method="get" class="zz" style="">
                    <table style="margin: 15px auto;">
                        <tr><td><textarea style="width:960px;height:100px;background-color:RGB(255,255,255);margin:40px" name="words" placeholder="在这里输入留言..."></textarea></td>
                        	<tr class="sub"><td><input type="submit" value="提交留言" style="float: right;line-height: 20px;"  style="color: RGB(255,66,82); background-color: white;"/></td></tr>
                        </tr>
     
                    </table>
                </form>
               <center style=" margin-top: 0;">
					<?php
					include_once("functions/database.php");
                    $sql = "select * from comment order by id desc";
                    get_connection();
                    mysql_query("set names 'utf8'");

					
					$result_set = mysql_query($sql);   //使用mysql_query()发送SQL请求
					echo "<h2 style='text-align: center;color:white'>留言列表：</h2>";
					echo "<table style='line-height:100px'>";     //使用表格格式化数据
					echo "<tr>
					<td style='text-align: center;color:white'> <h3>凤画友人</h3></td>
					<td style='text-align: center;color:white'><h3>留言内容</h3></td>
					<td style='text-align: center;color:white'><h3>那一天</h3></td>
						</tr>";
					while($row=mysql_fetch_array($result_set))  //遍历SQL语句执行结果把值赋给数组
					{
					 echo "<tr style='margin: 500px 100px;'>";
					 echo "<td style=' text-align: center;margin: 100px 50px;background-color:RGB(255,255,255);line-height:150px;color:#237AFF'><h4>".$row[user_name]." </h4></td>";  
					 echo "<td style='width:960px;line-height:100px;background-color:RGB(255,255,255);color:#FF4252;text-align: center' >  <h4>".$row[words]."  </h4></td>"; 
					 echo "<td style=' text-align: center;margin: 100px auto;width:150px;background-color:RGB(255,255,255);color:#FF4252' >  <h4>".$row[date]."  </h4></td>";  
					
					 echo "</tr>";
					}
					echo "</table>";
					?>
				</center>
      
        	</div>
			<!--<div class="foot" >
				
				<h2 class="title">凤画画板</h2>
				<p class="con">看完网站中优美的凤画和网友的留言后，我们在这里给大家准备了一个凤画画板，大家可以在这里学者画一幅自己的凤画</p>
				<div class="go"> <a href="draw.html" target="_blank">一起打开凤画画板</a> </div>
			</div>-->
		</div>
<!----------------------讨论区域结束----------------------------->
		
<!--------------------------------------------------------------------------------------------------------->
		<!--引入bootstrap-->
		<script type="text/javascript" src="js/jquery-1.8.3.min.js" ></script>
		<script type="text/javascript" src="js/jquery-2.0.0.min.js" ></script>
		<script type="text/javascript" src="js/bootstrap.min.js" ></script>
		<!--引入swiper-->
		<script type="text/javascript" src="js/swiper4.0.5.min.js" ></script>
		<script type="text/javascript" src="js/swiper.animate1.0.2.min.js" ></script>
		
<!--底部部分开始-->
<footer>
	
	<div class="box">
		<ul class="foot-ul">
			<li><a href="home-page.php" class="title">凤阳凤画</a> </li>
			<li><a href="cultural-exchange.php">文化交流</a> </li>
			<li><a href="fh-origin.php">凤画起源</a> </li>
			<li><a href="big-events.php">凤画大事件</a> </li>
			<li><a href="painter.php">知名画家</a> </li>
		</ul>
		
		<ul class="foot-ul">
			<li><a href="" class="title">友情链接</a> </li>
			<li><a href="http://www.ahly.cc/">安徽旅游网</a> </li>
			<li><a href="http://chz.wenming.cn/">滁州文明网</a> </li>
			<li><a href="http://www.fengyang.gov.cn/">凤阳县文明政府</a> </li>
			<li><a href="http://huaban.com/">花瓣网</a> </li>
		</ul>
		
		<ul class="foot-ul">
			<li><a href="about-us.php" class="title">关于我们</a> </li>
			<li><a href="about-us.php">关于我们</a> </li>
			<li><a href="about-us.php">联系我们</a> </li>
			<li><a href="http://mp.weixin.qq.com/s/677MVZWwpdMZ58Fd3Y5ROA
">闪念设计</a> </li>
		</ul>
	</div>
	
	
	<div class="media">
		<img src="img/sy-code.jpg" />
		<p>关注我们的官方开发微信</p>
	</div>
	
	<!--底部分割线开始-->
	<div class="bottom-line">
		
	</div>
	<!--底部分割线结束-->
	
	
	<!--版权声明开始-->
	<div class="copyright">
		Copyright ©闪念设计工作室 2016-2018 www.chzusn.com 
	</div>
	<!--版权声明结束-->
	
</footer>
<!--底部部分结束-->
 
 
  	
  <!--返回顶部按钮开始-->
  <div id="back-to-top">
  	<img src="img/back-top.png" class="back" title="返回顶部"/>
  </div>

  
	<script type="text/javascript">
		$(function(){
		  $("#back-to-top").click(function() {
		      $("html,body").animate({scrollTop:0}, 500);
		  }); 
		 })
	</script>
<!--返回顶部按钮结束-->
  				
	</body>
</html>
