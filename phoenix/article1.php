<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>【非遗】古老凤阳凤画涅磐重生</title>
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

		<div id="article-main" style="height: 5130px;">
			<img src="images/article-head-bg.jpg" class="head-bg"/>
			<img src="images/lefi-icon.png" class="left-icon"/>
			<div class="head-line">
				<p class="title">【非遗】古老凤阳凤画涅磐重生</p>
				<p class="tips">发布时间: 2015-01-19　｜　来源: 中国网　｜　作者: 高建业　｜　责任编辑: 伦晓璇 </p>
			</div>
			<div class="article-con">
				<img src="images/a1-1.jpg" class="con-pic"/>
				<p class="con">图为凤阳凤画《百鸟朝凤》。凤阳凤画是凤阳县独有的民间绘画艺术，起源于元末明初，已有600多年历史，因产生在凤阳县而得名。中国网图片库 高建业/摄</p>
				<p class="con">凤阳凤画是凤阳县独有的民间绘画艺术，起源于元末明初，已有600多年历史，因产生在凤阳县而得名</p>
				<p class="con"> 关于凤阳凤画的形成，当地有着一个动人的传说：身为凤阳人的明代开国皇帝朱元璋登基后，在凤阳兴建都城时，一只五彩凤凰翩翩降临，全城百姓欣喜若狂，扶老携幼争相观看。一位画师将空中飞舞的凤凰挥毫入画，从此，象征吉祥如意的凤画便在凤阳古城彼此传阅、争相临画。</p>
				<p class="con"> 凤阳凤画中凤凰造型独特，画工精细。形象可概括为“蛇头、龟背、九尾十八翅，鹰嘴、鹤腿、鸡爪、如意冠”。在绘制技法上，以民间工艺色彩为主，并吸取了工笔花鸟画的勾线敷色技法，又兼蓄年画通俗画风，有“五彩、素彩、水墨”的色彩表现手法，富有装饰性和浓郁的民间艺术风味。</p>
				<p class="con">  凤阳凤画独特之处在于其造型、配色、衬景上都有一套固定的程式，色调明丽，红绿相衬，色彩强调鲜亮，工笔重彩。经过多年的流传，目前较为流行的的题材主要有丹凤朝阳、百鸟朝凤、带子上朝、五凤楼、龙凤图、凤撵麒麟、百鸟献寿、四扇屏等。</p>
				<p class="con"> 数百年来，凤阳凤画深受老百姓喜爱，特别是明清两代，凤阳府城内有数十家凤画店，盛行时期凤画师近百名。及至民国时期，军阀连年混战，凤阳陷于兵荒马乱中，凤画店由原先数十家跌为三四家。“七七”卢沟桥事变，凤阳很快沦陷，凤画店全被焚毁。战后虽有华姓和尹姓两户支撑门面，然而因卖不出去而被迫关门，凤画至此几乎绝迹。</p>
				<p class="con">  多年来，当地文化部门积极组织开展各种挖掘整理、继承与创新工作，先后多次从各地请回老艺人，举办凤画培训班，培养凤画新秀。</p>
				<p class="con">  2007年，凤阳凤画被列为安徽省首批非物质文化遗产。目前，凤阳有吴文军、涂维良、吴德椿、王金生和张维武等代表性传承人。近年来传承人们不断探索和创新凤画表现形式，让这一有着独特的地方特色和艺术风格的民间艺术得以更好地传承和发展。</p><br />
				<img src="images/a1-2.jpg" class="con-pic"/>
				<p class="con">凤阳凤画代表性传承人张维武在作画时，先用铅笔勾勒出凤凰的形态。和可以印刷的年画不同，凤画需画师纯手工一笔一划绘制，一幅画作少则一周，有的甚至需要用上月余的时间。中国网图片库 高建业/摄</p><br />
				<img src="images/a1-3.jpg" class="con-pic"/>
				<p class="con">凤画研究会老艺人吴德春在画室绘制凤画。他把宣纸蒙在绘有凤画图案的模板上，用淡色笔墨顺着模板描绘出背景图案，留待上色。中国网图片库 高建业/摄</p><br />
				<img src="images/a1-4.jpg" class="con-pic"/>
				<p class="con">一凤阳凤画艺人在调配颜料，画桌上各种作画工具玲琅满目。中国网图片库 高建业/摄</p><br />
				<img src="images/a1-5.jpg" class="con-pic"/>
				<p class="con"> 凤画艺人刘耘岗在绘制凤画。和可以印刷的年画不同，凤画需画师纯手工一笔一划绘制，一幅画作少则一周，有的甚至需要用上月余的时间。中国网图片库 高建业/摄</p><br />
				<img src="images/a1-6.jpg" class="con-pic"/>
				<p class="con"> 凤阳凤画局部特写。长短共九根灵动的尾羽是凤阳凤画必不可少的特征。中国网图片库 高建业/摄</p><br />
				
				<img src="images/a1-7.jpg" class="con-pic"/>
				<p class="con"> 凤阳凤画中的凤凰头部，可以更清楚地看出蛇头、鹰嘴、如意冠。中国网图片库 高建业/摄</p><br />
				<!--一键分享 图片大小-->
				<div class="bdsharebuttonbox" style="padding-top:10px;"><a href="#" class="bds_more" data-cmd="more"></a><a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone"></a><a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina"></a><a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq"></a><a title="分享到人人网" href="#" class="bds_renren" data-cmd="renren"></a><a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin"></a></div> 
				<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script> 
				<!--一键分享-->
				
			</div>
			<img src="images/article-foot-bg -.jpg" class="foot-bg"/>
		</div>

		<
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
