<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>文化交流</title>
    <!-- Link Swiper's CSS -->
    <!--引入自定义css文件-->
	<link rel="stylesheet" href="css/my-css.css" />
	<!--引入swiper-->
	<link rel="stylesheet" href="css/swiper4.0.5.min.css" />
	<!--引入bootstrap-->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<!--引入swiper-->
	<link rel="stylesheet" href="css/animate.min.css" />
	<link rel="stylesheet" href="css/swiper.min.css" />
	<script type="text/javascript" src="js/swiper.min.js" ></script>

</head>
<body style="background-image: url(img/body.png); background-repeat: repeat;">
	
		
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

<!--顶部长图介绍开始-->	

<div id="origin-to-img">
	<img src="img/icon-6.png" class="icon-6"/>
	 <p class="one">古往今来，文化的传承不仅仅是文化本身的继承与发扬，更重要的是文化之间的不断交流，产生碰撞，让文化绽放出新的火花</p>
	 <p class="two">穿越古今，看当今凤画的千姿百态</p>
	 <ul>
	 	<li>凤阳凤画参加上海世博会</li>
	 	<li>凤阳凤画与凤阳花鼓结合产生新的艺术</li>
	 	<li>德国女孩学习凤画--凤画的发扬光大</li>
		<li>凤阳凤画亮相中国非物质文化遗产画展</li>
	 </ul>
	 
	 <div class="img-show">
	 	<img src="img/history-bg.png" />
	 </div>
	 <img src="img/icon-8.png" class="icon-8"/>
	
</div>
<!--顶部长图介绍结束-->

<!--中部主要部分开始-->

<div id="cultural-main">
	<img src="img/icon-9.png" class="icon-9"/>
	<div class="con-box">
		<img src="img/curtural-title-bg.png" class="title-bg"/>
		
		<div class="case-box">
			<div class="case">
				<img src="img/case1-bg1.png" />
				<a href="article4.php"> 凤阳凤画参展上海世博会</a>
				<p class="con">受安徽省世博办的邀请，在凤阳县商务局的推荐下，我县凤画传承人张维武于2010年6月23日至27日赴上海世博会安徽周进行凤画展演活动，并接受了安徽电视台、安徽日报、滁州日报等多家新闻媒体的采访。</p>
			</div>
			<div class="case">
				<img src="img/case2-bg1.jpg" />
				<a href="article3.php"> 凤阳凤画亮相首届中国非遗精品大展</a>
				<p class="con">2014年10月5日，首届中国非物质文化遗产精品大展在合肥市中国非物质文化遗产园开幕。凤阳凤画传承人涂维良、王金生、张维武携20余幅凤画精品，以成品展出和现场作画的方式展示了凤阳凤画。</p>
			</div>
			
			<div class="case">
				<img src="img/case3-bg1.jpg" />
				<a href="article-6.php"> 第四届“中博会”凤画大放异彩</a>
				<p class="con">第四届中国中部投资贸易博览会于2010年4月26日——28日在安徽省的省会合肥隆重举行，素有“皖北一绝”的安徽省“非遗”项目以其悠久的历史、独特的造型、多样的体裁和神奇的魅力，赢得了海内外观众的广泛赞誉。</p>
			</div>
		</div>
		
		<div class="case-box">
			<div class="case">
				<img src="img/case4-bg1.png" />
				<a href="article-7.php">凤阳凤画、花鼓成农歌会最亮色</a>
				<p class="con">在第二届中国农民歌会暨第八届安徽花鼓灯会大巡游和由安徽省美术家协会、滁州市文学艺术界联合会承办的第二届安徽省《金色的田野》农民画展上，凤阳花鼓和凤阳凤画精彩亮相，成为本次农歌会上一道靓丽的风景。</p>
			</div>
			
			<div class="case">
				<img src="img/case5-bg1.png" />
				<a href="article5.php"> “凤舞中华”凤画巡展在皖西博物馆如期开展</a>
				<p class="con">2015年8月1日，“凤舞中华巡展—安徽省非物质文化遗产凤阳凤画皖西精品展”，在位于六安市的皖西博物馆如期开展。此次展会历时8天，共展出凤阳凤画研究会30多位会...</p>
			</div>
			<div class="case">
				<img src="img/case6-bg1.jpg" />
				<a href="article-8.php"> 葫芦凤画绽异彩</a>
				<p class="con">10月14日，由凤阳凤画传承人张维武精心创作的葫芦凤画正式问世，这是继金箔凤画、水晶凤画、凤画扇面、凤画花鼓之后，凤阳凤画工艺增添的一个新品种，也是凤阳凤画首次与工艺葫芦“联姻”</p>
			</div>
		</div>
		
		<div class="case-box">
			<div class="case">
				<img src="img/case7-bg1.jpg" />
				<a href="article-9.php">花鼓雕凤画 “双绝”再联姻(图)</a>
				<p class="con">“这些年，我一直致力于把凤阳凤画雕刻在凤阳花鼓上，借助雕刻艺术把这两种非物质文化遗产完美结合起来。”近日，凤阳县实验小学退休教师唐乃胜高兴地展示了他的绝活——花鼓雕凤画...</p>
			</div>
			
			<div class="case">
				<img src="img/case8-bg1.png" />
				<a href="article-10.php">滁州:传承非遗文化 凤阳凤画《百鸟朝凤》献礼国庆节</a>
				<p class="con"> 9月28日，滁州市凤阳凤画传承人张维武创作完成大画幅作品《百鸟朝凤》，以此向国庆佳节献礼。</p>
			</div>
			<div class="case">
				<img src="img/case9-bg1.jpg" />
				<a href="article-11.php">凤阳八旬老人吴文军画凤画纪念抗战胜利70周年</a>
				<p class="con">领袖题词庆胜利，抗日打败鬼子兵。长治久安歌盛世，凤鸣神州颂和平。”这首七言绝句题写在凤阳凤画代表性传承人吴文军新近创作的凤画作品《凤鸣神州图》顶部，诗句体现了...</p>
			</div>
		</div>
	</div>
</div>
<!--中部主要部分结束-->

<img src="img/icon-10.png" class="icon-10"/>


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
 
 
 		<script type="text/javascript" src="js/jquery-1.8.3.min.js" ></script>
		<script type="text/javascript" src="js/jquery-2.0.0.min.js" ></script>
		<script type="text/javascript" src="js/bootstrap.min.js" ></script>
 
  	
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


 
</body>
</html>