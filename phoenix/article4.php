<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>世博会上凤阳凤画</title>
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

		<div id="article-main" style="height: 3300px;">
			<img src="images/article-head-bg.jpg" class="head-bg"/>
			<img src="images/lefi-icon.png" class="left-icon"/>
			<div class="head-line">
				<p class="title">世博会上凤阳凤画</p>
				<p class="tips">发布时间: 2010-07-24　｜　来源: 凤阳新闻网　｜　作者: 张树虎 　｜　责任编辑: 涂冬颀</p>
			</div>
			<div class="article-con" style="height: 3200px;">
				<img src="images/a4-1.jpg" class="con-pic"/>
				<p class="con">受安徽省世博办的邀请，在凤阳县商务局的推荐下，我县凤画传承人张维武于2010年6月23日至27日赴上海世博会安徽周进行凤画展演活动。</p><br />
				<p class="con"> 6月23日上午，上海世博会宝钢大舞台安徽周活动现场，鼓乐喧天，彩旗招展，来自全省各地的民间工艺品，琳琅满目，异彩纷呈，有微雕、剪纸、挑花、木雕、宣纸、徽墨等，展览馆内布置的白墙灰瓦，雕刻镂空的木制隔墙，串串大红灯笼，具有浓郁的徽派风情。</p><br />
				<img src="images/a4-2.jpg" class="con-pic"/>
				<p class="con">据我县凤画传承人张维武的展台上方挂满了鲜艳亮丽、光彩夺目的凤画作品——“百鸟朝凤”、“龙凤呈祥”；还有工艺凤画扇子，画面灵动秀美，色彩丰润富丽，有着强烈的民族特色，凤画扇子小巧精致，彰显高贵典雅的独特魅力，使人爱不释手。
张维武正在现场绘画“丹凤朝阳”。“吉祥的凤凰”“富贵的牡丹”工细的笔法，艳丽的色彩，吸引游客驻足观看，他向客人介绍说：“凤画是凤阳县特有的民间绘画艺术，”以“蛇首、鸡嘴、如意冠、龟背、九尾、十八翅”等特点蜚声海内外，现为安徽省非物质文化遗产。 </p><br />
				<p class="con">上午9点30分，安徽省委书记张宝顺，省长王三运等省市领导参观了凤画，随后央视著名主持人，安徽周形象大使周涛观看了凤画，周涛听取张维武的讲解后她说：“哎呀！真是很精美、很有特色。”张维武说：“您像凤凰一样美丽”，周涛笑着说：“没有、没有，我哪有凤凰美丽呀！”全场赢得一片欢笑声。</p><br />
				<img src="images/a4-3.jpg" class="con-pic"/>
				<p class="con">上一位游客来拿一把空白的宣纸折扇，请张维武在他的扇子上画个小凤凰，张维武爽快的答应了，他用毛笔在扇子上精心的勾勒，不一会儿，一只栩栩如生飞舞的凤凰跃然纸上，围观的人们发出啧啧的赞叹声，这时又有一群游客拿来空白的折扇请张维武在上面做画。张维武一一满足他们的要求，画家与参观的游客互相交流的场面热闹而欢快。不时传来称赞声和欢笑声，把现场的气氛推向高潮。 </p><br />
				<p class="con">　一群小姑娘看到精美的凤画作品，纷纷在作品前留影，那纯洁稚嫩的表情，想和凤凰比比美。</p><br />
				<img src="images/a4-4.jpg" class="con-pic"/>
				<p class="con">　一位中年游客对凤画充满了兴趣，详细的询问有关凤画的情况，张维武说“凤画是中国民间美术作品，笔法较为工整细致，一副作品的完成需要十天左右，每道工序都要一丝不苟，细细如丝的线条，春雨如织般的羽毛花纹都显示出作者的绘画功力和凤凰美仑美奂的质感，这位游客欣然在留言本上题字：“辉煌安徽、精美凤画”。</p><br />
				<p class="con">　随后，张维武接受了安徽电视台、安徽日报、滁州日报等多家新闻媒体的采访。</p><br />
				
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
