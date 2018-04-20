<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>第四届“中博会”凤画大放异彩</title>
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

		<div id="article-main" style="height: 2300px;">
			<img src="images/article-head-bg.jpg" class="head-bg"/>
			<img src="images/lefi-icon.png" class="left-icon"/>
			<div class="head-line">
				<p class="title">第四届“中博会”凤画大放异彩</p>
				<p class="tips">发布时间: 2010-01-06　｜　来源: 凤阳新闻网　｜　作者: admin　｜　责任编辑: 朱东帅</p>
			</div>
			<div class="article-con" style="height: 2200px;">
				<img src="images/a6-1jpg.jpg" class="con-pic"/>
				<span class="img-intro">中博会上客商围观凤画创作</span><br />
				<p class="con">第四届中国中部投资贸易博览会于4月26日——28日在安徽省的省会合肥隆重举行，我国中部六省带来的门类齐全的招商引资项目和琳琅满目的地方贸易精品，吸引数以万计的海内外客商纷至沓来，贸易签约盛况空前。其间，素有“皖北一绝”的安徽省“非遗”项目，来自“中国民间艺术之乡”——凤阳的凤阳凤画也飞入其中，在展览大厅中，一幅幅具有浓郁地方特色、精美绝伦的凤阳凤画、水晶凤画、凤画花鼓、凤画扇子等工艺品，以其悠久的历史、独特的造型、多样的体裁和神奇的魅力，赢得了海内外观众的广泛赞誉。</p><br /><br />
				
				<p class="con">26日上午，在凤阳凤画的展示台前，滁州市副市长孟桂琳与现场工作人员亲切交谈，她说：“凤画是安徽省非物质文化遗产项目之一，颜色很鲜艳，造型很独特，而且还开发了有很多和凤有关的工艺品，使民族文化形成了产业化，这是一个与时俱进的进步”；在与凤阳年轻的凤画作者，不久前从澳门载誉归来的张维武交谈时，对凤阳凤画也给予了高度评价，她说：“你今年元月份赴澳门展演凤画大获成功的相关报道，我在报纸上看到了，你很年轻，也很了不起，把凤阳民间艺术向海外和世界展示，并取得了丰硕成果，为繁荣民族文化，推动安徽、滁州的经济发展做出了很大的贡献，我代表滁州人民感谢你”接着，她又对凤阳的相关部门领导提出：“要努力打好凤画的品牌，加大招商引资力度，更好推动旅游产业发展。”</p><br />
				<img src="images/a6-2.jpg" class="con-pic"/>
				<span class="img-intro">参加中博会凤画艺术创作展示活动的凤阳青年凤画艺人张维武</span><br />
				<p class="con">一位62岁的韩国参展老太太在观看凤画边感叹：“哎呀，画的太精细了，真难想象是手工画出来的，本来我以为作品是出自姑娘之手，没想到却是一位大小伙子画出来的，我是经营珠宝玉器的，和你们的凤画相比，我的珠宝都黯然失色了”。</p><br />
				<p class="con">一位老先生边看凤画边说：“这是我看到的最好的民间艺术作品，尤其是它蛇头、龟背、九尾十八翅、鸡嘴、如意冠的构造，显示出中国人的智慧”……</p><br />
				<p class="con"> 在展示大厅里，主办方还组织了来自中部六省的160多名书画家，进行现场动态表演，通过展示各自精湛的书画技艺和精美的民间艺术作品，为中博会增光添彩。</p><br />
				<p class="con">在凤阳凤画传承人张维武的展演现场，他以工整细致的笔法和精湛娴熟的绘画技艺描绘出一组组栩栩如生的五彩凤凰，博得了前来观看的海内外客商和观众的一致喝彩，安徽日报、安徽电视台、工商导报、滁州日报、滁州电视台及部分参会的其他省市电视台和报社记者纷纷对作者进行现场采访。</p><br />
				
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
  			<li><a href="">知名画家</a> </li>
  			<li><a href="">凤画大事件</a> </li>
  			
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
