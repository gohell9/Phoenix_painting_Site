<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>凤阳凤画亮相首届中国非遗精品大展</title>
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

		<div id="article-main" style="height: 1500px;">
			<img src="images/article-head-bg.jpg" class="head-bg"/>
			<img src="images/lefi-icon.png" class="left-icon"/>
			<div class="head-line">
				<p class="title">凤阳凤画亮相首届中国非遗精品大展</p>
				<p class="tips">发布时间: 2014-09-08　｜　来源: 中国文明网　｜　作者: 张树虎 　｜　责任编辑: 涂冬颀</p>
			</div>
			<div class="article-con" style="height: 1200px;">
				<img src="images/a3-1.jpg" class="con-pic"/>
				<p class="con">10月5日，首届中国非物质文化遗产精品大展在合肥市中国非物质文化遗产园开幕。凤阳凤画传承人涂维良、王金生、张维武携20余幅凤画精品，以成品展出和现场作画的方式展示了凤阳凤画。</p><br />
				<p class="con"> 在本次会展上，凤阳凤画以独特的凤凰造型，辅以花鸟树木、人物山石等景色搭配，使其具备了极高的艺术观赏和收藏价值，并以其绚丽多彩的非遗内容和现场制作体验吸引了大批参观者的目光，传承人精湛的画艺更是令观者赞不绝口。</p><br />
				<p class="con">据悉，凤阳凤画现为省级非遗保护名录，源于元末明初，是流行于淮河中游及凤阳地域的民间绘画艺术，600多年来一直在民间流传，是对远古图腾的传承与发展。凤画以其“蛇头”、“龟背”、“鹰嘴”、“鸡爪”、“如意冠”、“九尾十八翅”的独特艺术造型，及富贵吉祥的形意、色彩艳丽的艺术形象深受大众的喜爱和推崇。在绘制技法上，以民间工艺色彩为主，并吸取工笔花鸟画的勾线敷色技法，又兼蓄年画通俗画风，有“五彩、素彩、水墨”等色彩表现手法，以宣纸为绘画纸张，并形成一套独特的民间艺术风格和陈式，色泽鲜艳而不俗套，极富装饰味，雅俗共赏，具有浓郁的乡土艺术特色。</p><br />
				<p class="con">另悉，本次非遗大展会聚了来自安徽、江西等多个省份300多位国家或省级非遗传承人和工艺美术大师同台献艺，旨在更进一步地促进非遗的保护、传承、交流和发展，是安徽省近年来举办的规模较大的以非遗为主题的展览活动。</p><br />
				
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
