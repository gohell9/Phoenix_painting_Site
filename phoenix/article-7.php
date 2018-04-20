<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>凤阳凤画、花鼓成农歌会最亮色</title>
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

		<div id="article-main" style="height: 5500px;">
			<img src="images/article-head-bg.jpg" class="head-bg"/>
			<img src="images/lefi-icon.png" class="left-icon"/>
			<div class="head-line">
				<p class="title">凤阳凤画、花鼓成农歌会最亮色</p>
				<p class="tips">发布时间: 2010-01-03　｜　来源: 凤阳新闻网　｜　作者: admin　｜　责任编辑: 朱东帅</p>
			</div>
			<div class="article-con" style="height: 5400px;">
				<img src="images/a7-1.jpg" class="con-pic"/>
				<p class="con">安徽省委书记王金山、安徽省人民政府省长王三运、安徽省委常委、宣传部长臧世凯等省、市领导参观我县农民的现场凤画绘制表演。</p><br /><br />
				
				<p class="con">在2009年11月7日下午由中华人民共和国文化部、中华人民共和国农业部、安徽省人民政府主办，安徽省文化厅、安徽省农业委员会、安徽省滁州市政府、安徽省文学艺术届联合会、安徽省广播电视电影局承办的第二届中国农民歌会暨第八届安徽花鼓灯会大巡游和由安徽省美术家协会、滁州市文学艺术界联合会承办的第二届安徽省《金色的田野》农民画展上，凤阳花鼓和凤阳凤画精彩亮相，成为本次农歌会上一道靓丽的风景。</p><br />

				<p class="con">11月7日下午14：30，以《金色的田野》为主题的收获四季——第二届安徽省农民画展在滁州市大剧院的展厅正式展出。</p><br />
				<p class="con">此届农民画展以“农民画”与“画农民”相结合，有着浓郁地方特色和独特风格的我省萧县农民国画、青阳农村生活题材风俗画和凤阳凤画应征参展；专业画家创作的：“三农”题材作品，主要以邀请形式组织创作。在展出的100件的作品中，来自中国民间文化艺术之乡的凤阳县，参展的凤画和三农美术作品就达十余幅，张维武、刘耘冈、李运松、张芹等四位农民凤画家的现场作画表演，得到安徽省委书记王金山、安徽省人民政府省长王三运、安徽省委常委、宣传部长臧世凯等省领导和文化主管部门的负责人及观众的高度赞扬和一致好评。</p><br />
				<p class="con"> 以“花鼓敲天下”为主题的安徽花鼓灯会大巡游是本届农歌会的精彩看点之一。于当日下午15：30举行的安徽花鼓灯大巡游，荟萃了花鼓灯、凤阳花鼓、腰鼓、旱船河蚌、傩舞、肘阁抬阁、寿州锣鼓、高跷、得胜鼓等民间艺术，参加巡游人员近6000人，是安徽省非物质文化遗产的集中展示。来自全国著名的花鼓之乡凤阳县，由40名花鼓女表演的《花鼓声声》，利用传统的花鼓表演形式，融入新的舞蹈和音乐元素，展示凤阳人民新的精神风貌；另外，由凤阳县文化馆花鼓艺术团16名新一代花鼓女表演的《凤阳是个好地方》，以新题材、新舞蹈、新阵容，入选为在8日晚举行的花鼓灯新作比赛参赛的15个获奖作品之一，成为花鼓灯会上的又一新亮点。</p><br />
				<img src="images/a7-2.jpg" class="con-pic"/>
				<span class="img-intro">第二届安徽省《金色的田野》农民画展开幕式</span><br />
				<img src="images/a7-3.jpg" class="con-pic"/>
				<span class="img-intro">我县的花鼓女表演的《花鼓声声》，利用传统的花鼓表演形式，融入新的舞蹈和音乐元素，展示凤阳人民新的精神风貌</span><br />
				<img src="images/a7-4.jpg" class="con-pic"/>
				<span class="img-intro">装有凤阳花鼓、明鼓楼、十八颗手印人物造型等凤阳元素的彩车出现在开幕式上</span><br />
				<img src="images/a7-5.jpg" class="con-pic"/>
				<span class="img-intro">安徽省委书记王金山、安徽省人民政府省长王三运、安徽省委常委、宣传部长臧世凯等省、市领导参观我县农民创作的农民画。</span><br />
				<img src="images/a7-6.jpg" class="con-pic"/>
				<span class="img-intro">我县农民张维武、刘耘刚、李运松、张芹在展览现场表演凤画绘制</span><br />
				<img src="images/a7-7.jpg" class="con-pic"/>
				<span class="img-intro">凤画作者接受记者采访</span><br />
				<img src="images/a7-8.jpg" class="con-pic"/>
				<span class="img-intro">安徽卫视记者采访我县的农民凤画作者张维武</span><br />
				
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
