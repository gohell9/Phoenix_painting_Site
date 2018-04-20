<!DOCTYPE html> 
<html> 
<head> 
<title>闪念设计工作室</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<!--加入移动端优先声明-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="css/my.css" />
<link href="css/bootstrap.min.css" rel="stylesheet"> 
<!--<link rel="stylesheet" href="css/idangerous.swiper.css" />-->
<link rel="stylesheet" href="css/swiper4.0.5.min.css" />
<link rel="stylesheet" href="css/animate.min.css" />
<link rel="stylesheet" href="css/my-css.css" />

</head> 

<body> 
	
	
	
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
					
				</div>


		<?php }
		?>
				<!--导航条结束-->
			</div>
		</div>
		<!--顶部导航区域结束-->

	
	<!--头部大图开始-->
	

		<!--<p class="title animated bounceInUp">文思泉涌，妙笔生花</p>
		<p class="intro animated bounceInUp">我们创意无限，创新不止；我们热爱生活，崇尚自由！</p>-->
		<img src="img/about-us.jpg" style="max-width: 100%; margin-top: 0px;"/>
	
			
	
	<!--头部大图结束-->
	
	<!--关于我们主题介绍开始-->
	
	<div class="container main-container">
		<div class="row">
			<div class="col-lg-12 ">
				<div class="title">团队介绍</div>
				<div class="line"></div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-6">
				<img src="img/logo-xl.png" class="img-responsive center-block"/>
			</div>
			<div class="col-lg-6">
				<h4>文思泉涌，妙笔生花</h4>
				<span>闪念设计工作室是由一群“热爱生活，崇尚自由”，怀着“努力工作，快乐生活”单纯理想的年轻人所组成的互联网开发团队！团队成立于2016年7月,目前工作室位于滁州学院大学生创业孵化基地，从团队成立开始，我们一直致力于我们擅长和专业的领域，目前业务主要涵盖：web前端开发、PPT设计、海报设计等从工作室成立伊始，我们一直定位在为小微型企业互联网营销宣传渠道拓展方面贡献我们微薄之力。</span>
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-6">
				<h4>雄声泉涌，逸气风亮</h4>
				<span>闪念设计作室里的每一个成员都优秀的本科大学生，我们术业有专攻，有专业的理论知识和执行经验。我们创意无限，创新不止 。从工作室成立到现在短短的2年时间，我们已经为做出了各式各样的优秀作品。我们坚信，用心了，认真了，客户虽然看不到，但是一定感受的到！</span>
			</div>
			<div class="col-lg-6">
				<img src="img/about-us-1.png" class="img-responsive center-block"/>
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-6">
				<img src="img/about-us-2.jpg" class="img-responsive center-block"/>
			</div>
			<div class="col-lg-6">
				<h4>雏鹰初飞，志存高远</h4>
				<span>作为迅速崛起的企业互联网新生力量，我们将保持“用心做事，诚信做人”的服务理念为更多的小微型企业带去互联网带来的红利，我们立志成为“互联网+”业务创新和转型平台社会化营销领域的"开疆志士"。我们欢迎更多的有志之士和我们进行合作、交流、共进步。</span>
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-12 ">
				<div class="title">团队精神</div>
				<div class="line"></div>
			</div>
		</div>
		
		<div class="row ">
			<div class="col-lg-12">
				<img src="img/about-banner.jpg" class="img-responsive center-block"/>
			</div>
		</div>
		
	</div>
	
	
	<section class="two" style="background-image: url(img/faith.jpg); background-repeat: no-repeat;">
		<div class="container bottom-container ">
			
			<div class="row">
				<div class="col-lg-12">
					<div class="headline">全行业全渠道服务</div>
				</div>
			</div>
			
			<div class="row">
				
				<div class="col-lg-3">
					<div class="box">
						<img src="img/main2-icon1.png" class="img-responsive center-block"/>
						<div class="all">全行业服务</div>
						<div class="detials">适用于互联网、学习、融资、宣传.....<br />
等各行各业的网站定制需求</div>
					</div>
				</div>
				
				<div class="col-lg-3">
					<div class="box">
						<img src="img/main2-icon2.png" class="img-responsive center-block"/>
						<div class="all">全渠道支持</div>
						<div class="detials">线下当面提需求定制、线上预约定制</div>
					</div>
				</div>
				
				<div class="col-lg-3">
					<div class="box">
						<img src="img/main2-icon3.png" class="img-responsive center-block"/>
						<div class="all">一对一服务</div>
						<div class="detials">一个需求对应一个设计团队，让定制质量更加完美</div>
					</div>
				</div>
				
				<div class="col-lg-3">
					<div class="box">
						<img src="img/main2-icon4.png" class="img-responsive center-block"/>
						<div class="all">全设备兼容</div>
						<div class="detials">高性能的服务网站兼容各种终端设备</div>
					</div>
				</div>
				
			</div>
					
		</div>
	</section>
	
	<!--<section class="four" style="background-image: url(img/foot.jpg); background-repeat: no-repeat;">
		<div class="container foot-container">
			<div class="row">
				<div class="col-lg-12">
					<a href="特色服务.html">立即个性定制您的网站</a>
				</div>
			</div>
		</div>
	</section>-->
	
	
	<!--联系我们开始-->
	
	<section class="nine">
		<div class="container">
			
			<div class="row">
				<div class="col-lg-12">
					<div class="title">联系我们</div>
					<div class="line"></div>
				</div>
			</div>
			
			<div class="row " >
				<div class="col-lg-6">
					<div id="title">联系我们</div>
					<ul>
						<li><img src="img/addr.png" />  地址：安徽省滁州学院（会峰校区）丰乐大道1528号</li>
						<li> <img src="img/电话.png" />  电话：18855055159</li>
						<li> <img src="img/邮箱.png" />  邮箱：285085215@qq.com</li>
						<li> <img src="img/微信(1).png" />  微信：lcy15224925159</li>
					</ul>
				</div>
				
				<div class="col-lg-6" style="margin-top: -20px;">
					<div class="map-box" style="margin-left: 0;">
						<iframe src="ourPosition.html" width="590" height="300" frameborder="0" scrolling="no" style="margin-left: 0;"></iframe>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	
	<!--联系我们结束-->
	
	
	
	<!--关于我们主题介绍结束-->
	
	
	
<!---------------------------底部公用部分开始--------------------------->
<!--侧边导航开始-->
  	
  	<!--<div id="slide-nav">
  		<ul>
  			<li><a href="index.php">首页</a> </li>
  			<li><a href="fh-origin.php">凤画起源</a> </li>
  			<li><a href="cultural-exchange.php">文化交流</a> </li>
  			<li><a href="inherit.php">凤画传承</a> </li>
  			<li><a href="">知名画家</a> </li>
  			<li><a href="">凤画大事件</a> </li>
  			
  		</ul>
  	</div>-->

  
<!--侧边导航结束-->


  	
  	<!--引入js库-->
  	
	<script type="text/javascript" src="js/jquery-1.8.3.min.js" ></script>
	<script type="text/javascript" src="js/jquery-2.0.0.min.js" ></script>
	<script type="text/javascript" src="js/bootstrap.min.js" ></script>
  	
  	
  	
  <!--返回顶部按钮开始-->
  <div id="back-to-top" style="z-index: 4;">
  	<img src="img/back-top.png" class="back" title="返回顶部"/>
  </div>

  
	<script type="text/javascript">
		$(function(){
		  $("#back-to-top").click(function() {
		      $("php,body").animate({scrollTop:0}, 500);
		  }); 
		 })
	</script>
<!--返回顶部按钮结束-->



<!--底部部分开始-->
<footer>
	
	<div class="box">
		<ul class="foot-ul">
			<li><a href="index.php" class="title">凤阳凤画</a> </li>
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
			<li><a href="" class="title">关于我们</a> </li>
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

<!---------------------------底部公用部分结束--------------------------->
<script src="js/jquery-2.0.0.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/idangerous.swiper.min.js" ></script>
<script type="text/javascript" src="js/swiper4.0.5.min.js" ></script>
<script type="text/javascript" src="js/html5.js" ></script>
<script type="text/javascript" src="js/my.js" ></script>

</body> 
</html>