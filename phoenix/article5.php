<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>“凤舞中华”凤画巡展在皖西博物馆如期开展</title>
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

		<div id="article-main" style="height: 2700px;">
			<img src="images/article-head-bg.jpg" class="head-bg"/>
			<img src="images/lefi-icon.png" class="left-icon"/>
			<div class="head-line">
				<p class="title">“凤舞中华”凤画巡展在皖西博物馆如期开展</p>
				<p class="tips">发布时间: 2015-08-07　｜　来源: 凤阳新闻网　｜　作者: 唐勤智　｜　责任编辑: 朱东帅</p>
			</div>
			<div class="article-con" style="height: 2600px;">
				<img src="images/a5-1.jpg" class="con-pic"/>
				<p class="con">2015年8月1日，“凤舞中华巡展—安徽省非物质文化遗产凤阳凤画皖西精品展”，在位于六安市的皖西博物馆如期开展。</p><br />
				<p class="con">本次展会由滁州市美术家协会、凤阳县县委宣传部、凤阳县文联、凤阳县文广新局（旅游局）主办，皖西博物馆、凤阳县县非遗中心、凤阳县凤阳凤画研究会承办。此次展会历时8天，共展出凤阳凤画研究会30多位会员的101幅凤画精品，其中安徽省工艺美术大师涂维良先生、老艺人吴恒元、凤阳凤画研究会顾问曹秀成的凤画作品应邀参展，凤阳凤画研究会唐勤智、谢冬梅、刘晓玲、景幸福、马立敏、陈海珍、唐家善、曹翠莲等作者，于当日在展会现场助展，凤阳县文联主席吕建东、秘书长孟庆国、到会巡展。六安市文联主席马常地、办公室主任潘浩以及六安美协主席孙玉石，六安市老年大学等近600人观看了展览。六安新周报、六安电视台对展会进行了报道。</p><br />
				<img src="images/a5-2.jpg" class="con-pic"/>
				<p class="con">“凤阳凤画”是凤阳民间一种以画凤凰为主题的手工绘画形式，她产生于明代，距今已有近600多年的历史。经历代画家、画师以及民间艺人的精心绘制、形成其特有的固定的凤凰造型模式：蛇头、龟背、九尾、十八翅、鹰嘴、鹤腿、如意冠，……，为中华传统吉祥物结构中最美部分的集合体，寓意幸福吉祥。其中“九尾十八翅”意指古代“凤阳府”管辖九州十八县的历史盛事。凤阳凤画的艺术表现形式多种多样，除凤阳老艺人口传心授的民间绘制方法外，近期还发现了一批具有文人画风格的古代凤画。其绘制手法复杂且程式化，是全国独一无二的、地方特色浓郁的民间艺术。</p><br />
				<p class="con">上午9点30分，安徽省委书记张宝顺，省长王三运等省市领导参观了凤画，随后央视著名主持人，安徽周形象大使周涛观看了凤画，周涛听取张维武的讲解后她说：“哎呀！真是很精美、很有特色。”张维武说：“您像凤凰一样美丽”，周涛笑着说：“没有、没有，我哪有凤凰美丽呀！”全场赢得一片欢笑声。</p><br />
				<img src="images/a5-3.jpg" class="con-pic"/>
				<p class="con">解放前凤阳凤画几经磨难濒临失传，解放后特别是改革开放以来党和政府极为关怀、重视凤阳凤画的发展，如今凤阳凤画新人辈出，他们在继承传统的基础上与时俱进，努力创新，创作出一批雅俗共赏，意韵深邃的凤画新作。现“凤阳凤画”被列为安徽省首批“非物质文化遗产”。 </p><br />
				<p class="con">凤舞中华巡展，是凤阳凤画研究会，为传承和发展凤阳民间传统凤文化，打造的一个品牌展会，他们以凤阳凤画为载体，向展出地的人民，宣传凤阳民间传统文化，展示新时代凤阳人民的文化风貌，传送和谐和美的文化理念，歌颂幸福吉祥的美好生活。凤舞中华巡展自开始以来，已经在全国多个城市展出，其中在上海、南京、苏州、宜兴、合肥、淮南、蚌埠等地展出时轰动一时，深受当地人民好评。</p><br />
				<p class="con">皖西博物馆，是全国重点博物馆之一，系综合性博物馆，是省级爱国主义教育基地；六安是全国著名的革命老区；皖西也是红军的摇篮之一。凤舞中华巡展选择8.1期间，在皖西博物馆展出，为老区人民送去美丽吉祥的凤阳凤画作品，很有纪念意义。</p><br />
				
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
