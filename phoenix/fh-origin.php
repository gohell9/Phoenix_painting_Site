<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>凤画起源</title>
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
	 <p class="one">南前清时候，江淮两岸有这种说法：“皖北有三绝：凤阳凤画、天长天官、灵璧灵判。”据说朱元璋当上皇帝后，立即在家乡凤阳建造一座皇城，名曰中都城。</p>
	 <p class="two">源自600年前的优秀文化艺术</p>
	 <ul>
	 	<li>凤阳凤画的造型特点和表现手法独具一格</li>
	 	<li>绘制凤的形态时，画者心中默诵口诀</li>
	 	<li>蛇头、龟背、九尾、十八翅、鹰嘴...</li>
		<li>如有偏离或某处不到位，都不够格...</li>
	 </ul>
	 
	 <div class="img-show">
	 	<img src="img/origin-show.png" />
	 </div>
	
</div>
<!--顶部长图介绍结束-->


<!--中部主要区域开始-->
<div id="origin-main">
	<div class="origin-con">
		<img src="img/origin-title-bg.png" class="title"/>
		<p class="p1">前清时候，江淮两岸有这种说法：“皖北有三绝：凤阳凤画、天长天官、灵璧灵判。”据说朱元璋当上皇帝后，立即在家乡凤阳建造一座皇城，名曰中都城。</p>
		<p class="p2">忽一日从天边飞来一只五彩凤凰，金光闪闪，祥云缭绕，香风习习，那凤凰鸣叫数声，在皇城上空翱翔一圈，遂飞到城南一座小山上落下，这小山却正是朱元璋父母的墓丘（今为明皇陵）</p>
		<p class="p3">全城百姓都扶老携幼争相观看。可巧，人群中有一位号称“神笔张”的画师将凤凰模样画了下来，自此，专以画凤为业，开设画店，传经授艺，并在每年春节绘制几幅精品献给朱元璋，马娘娘尤为喜爱，总是挂在后宫大殿上，率领众嫔妃焚香朝拜，祈祷富贵、吉祥。</p>
		<img src="img/origin-pic1.jpg" class="pic1"/>
		
		<p class="p4">凤阳凤画经历代艺人不断创造，逐渐形成一套独特的民间艺术风格和绘画程式，其凤凰造型必须是“蛇头、龟背、鹰嘴、鹤腿、如意冠、九尾十八翅”等，它聚集了百鸟之长。凤画以色彩分类有三种：即全彩凤画、素彩凤画、全水墨凤画。在绘制技法上，以民间工艺色彩为主，并吸取了工笔花鸟画的勾线敷色技法，又兼蓄年画通俗画风，有“五彩、素彩、水墨”的色彩表现手法，能做到雅俗共赏。凤画的题材很多，其中有：丹凤朝阳、百鸟朝风、带子上朝、五凤楼、龙凤图、凤撵麒麟、百鸟献寿、四扇屏等传统佳作。故深为广大群众所喜爱。</p>
		<img src="img/origin-pic2.jpg" class="pic2"/>
		
		<p class="p5">凤画形成约在元末。明初，朱元璋于凤凰山之阳营建中都皇城，定家乡名为“凤阳”，使凤阳成为“龙凤之乡”，象征着吉祥如意的凤凰画得以广泛流传。晚清时凤画最为兴盛。过新年时，皇宫内都是悬挂着凤画以示吉祥。由于凤画成为贡品，凤画生意更加兴隆。外国传教士回国时也曾带往本国收藏转卖。 </p>
		
		<p class="p6">改革开放二十多年来，在老艺人、文化工作者及业余爱好者的共同努力下，创作了一大批具有时代精神及新内容的风画精晶，部分作品分别在国家、省、市及香港各主要报刊、杂志上介绍发表，多次参加国家、省、市美展并获奖，还进入艺术市场，被各界人士收藏及远销海外。中央新闻电影制片厂曾专题制作新闻电影片及地方电视台多次录制专题片播放。展望未来风画事业前程似锦，凤凰会更高地翱翔。</p>
		
		
	</div>
	
	

	
</div>
<!--中部主要区域结束-->


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


	<!--引入bootstrap-->
		<script type="text/javascript" src="js/jquery-1.8.3.min.js" ></script>
		<script type="text/javascript" src="js/jquery-2.0.0.min.js" ></script>
		<script type="text/javascript" src="js/bootstrap.min.js" ></script>

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
