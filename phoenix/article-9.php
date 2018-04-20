<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>花鼓雕凤画 “双绝”再联姻</title>
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
	</head>
	<body style="background-image: url(images/mainbg.jpg);background-repeat-y;">
		
			
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
		
		<!--文章区域开始-->

		<div id="article-main" style="height: 1800px;">
			<img src="images/article-head-bg.jpg" class="head-bg"/>
			<img src="images/lefi-icon.png" class="left-icon"/>
			<div class="head-line">
				<p class="title">花鼓雕凤画 “双绝”再联姻</p>
				<p class="tips">发布时间: 2016-01-17　｜　来源: 中国文明网　｜　作者: 陈友田　｜　编辑: 朱东帅</p>
			</div>
			<div class="article-con" style="height: 1700px;">
				<img src="images/a9-1.jpg" class="con-pic"/>
				<span class="img-intro">大小花鼓作凤画 “双绝”合璧传非遗</span><br />
				<p class="con">今年“五一”期间，到凤阳县明鼓楼朱元璋纪念馆参观的游客惊奇地发现，陈列在纪念馆中的世界上最大、最小两面凤阳花鼓鼓面上画上了精美的凤画。凤画与花鼓的完美结合，让游人赞不绝口。</p><br /><br />
				
				<p class="con"> 　凤阳花鼓素有“东方芭蕾”美誉，是全国非物质文化遗产，这最大、最小两面花鼓是的凤阳花鼓两朵“姐妹花”，在2006年获得上海大世界吉尼斯之最记录。大的花鼓鼓面直径200厘米，鼓身绘有双龙，2005年5月制作完成，现收藏于明鼓楼朱元璋纪念馆;小的花鼓鼓面直径只有2厘米，鼓身精致小巧，只能让人夹在指间，2006年7月制作完成。而凤阳凤画是安徽省级非物质文化遗产，和凤阳花鼓一样，都是凤阳民间艺术瑰宝。</p><br />
				<img src="images/a9-2.jpg" class="con-pic"/>
				<span class="img-intro">大小花鼓作凤画 “双绝”合璧传非遗</span><br />
				<p class="con">今年4月初，凤阳县凤画传承人张维武接受了凤阳县明鼓楼管理处的邀请，开始在这两面鼓上作画。他经过反复斟酌，决定在最小花鼓上画始于秦汉年间青铜器上的凤凰图案，在最大花鼓上画经典的凤凰涅图案。“在小鼓上作画，因为鼓面太小，画的时候需要借助放大镜;在大鼓上作画，色彩和比例都不容易把握。”张维武说。为此，他花了十多天的时间精雕细琢，终于在“五一”前夕把栩栩如生的凤凰绘到了两个鼓面上。</p><br />

				<!--一键分享 图片大小-->
				<div class="bdsharebuttonbox" style="padding-top:10px;"><a href="#" class="bds_more" data-cmd="more"></a><a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone"></a><a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina"></a><a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq"></a><a title="分享到人人网" href="#" class="bds_renren" data-cmd="renren"></a><a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin"></a></div> 
				<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script> 
				<!--一键分享-->
			</div>
			<img src="images/article-foot-bg -.jpg" class="foot-bg"/>
		</div>

		<!--文章区域结束-->



		
		
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
 
	
  	
  	<!--侧边导航开始-->
  	
  	<div id="slide-nav">
  		<ul>
  			<li><a href="index.php">首页</a> </li>
  			<li><a href="fh-origin.php">凤画起源</a> </li>
  			<li><a href="cultural-exchange.php">文化交流</a> </li>
  			<li><a href="inherit.php">凤画传承</a> </li>
  			<li><a href="painter.php">知名画家</a> </li>
  			<li><a href="big-events.php">凤画大事件</a> </li>
  			
  		</ul>
  	</div>
  	

  	
  	<!--侧边导航结束-->
  	
  	
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
