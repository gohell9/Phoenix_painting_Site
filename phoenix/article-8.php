<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>葫芦凤画绽异彩</title>
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

		<div id="article-main" style="height: 1400px;">
			<img src="images/article-head-bg.jpg" class="head-bg"/>
			<img src="images/lefi-icon.png" class="left-icon"/>
			<div class="head-line">
				<p class="title">葫芦凤画绽异彩</p>
				<p class="tips">发布时间: 2014-10-16　｜　来源: 中国文明网　｜　作者: 陈友田　｜　编辑: 朱东帅</p>
			</div>
			<div class="article-con" style="height: 1300px;">
				<img src="images/a8-1.jpg" class="con-pic"/>
				<p class="con">10月14日，由凤阳凤画传承人张维武精心创作的葫芦凤画正式问世，这是继金箔凤画、水晶凤画、凤画扇面、凤画花鼓之后，凤阳凤画工艺增添的一个新品种，也是凤阳凤画首次与工艺葫芦“联姻”。</p><br /><br />
				
				<p class="con"> 此次张维武创作的葫芦凤画作品共两个，主题内容具有浓郁的民间艺术特色。其中一只葫芦上画着五个活泼可爱的福娃与一只五彩凤凰相伴，表达“五福吉祥”的寓意；另一只是个异型葫芦，画面主题是“凤鸣朝阳”，内容来源于凤阳传统凤画“丹凤朝阳”。</p><br />

				<p class="con">据张维武介绍，葫芦上画凤画难度很大，在凸面上构图、用笔都难以把握，葫芦表面光滑不容易着色，创作时要把葫芦流动的线条与凤凰的动感相结合，才能画出凤画的美感。“历时数月完成的两个葫芦凤画作品，是葫芦上画凤画的首次尝试，以后我还将创作出更多的葫芦凤画作品，多形式继承发扬凤阳凤画传统艺术。”张维武说。</p><br />
				<p class="con">据了解，凤阳凤画起源于元末明初，距今已有600多年历史，其造型独特美观、设色鲜明艳丽、技法细腻严谨，是凤阳具有浓郁地方特色和独特风格的民间艺术，2006年，凤阳凤画被列入安徽省第一批省级非物质文化遗产名录，现已申报国家级非物质文化遗产。</p><br />
				
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
  			<li><a href="index.php" class="title">凤阳凤画</a> </li>
			<li><a href="cultural-exchange.php">文化交流</a> </li>
			<li><a href="fh-origin.php">凤画起源</a> </li>
			<li><a href="big-events.php">凤画大事件</a> </li>
			<li><a href="painter.php">知名画家</a> </li>
  			
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
