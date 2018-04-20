<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>凤阳凤画</title>
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
					<a href="draw.html" class="" target="_blank">在线画凤画</a>
					<a href="ShowData.php" class="" target="_blank">新闻中心</a>
				</div>


		<?php }
		?>
				<!--导航条结束-->
			</div>
		</div>
		<!--顶部导航区域结束-->
		
		<!--顶部轮播图开始-->
		<div class="swiper-container">
			<div class="swiper-wrapper">
			    <div class="swiper-slide">
			    	<img src="img/banner1.jpg" /> 
			    </div>
			    <div class="swiper-slide">
			    	<img src="img/banner2.jpg" />
			    </div>
			    <div class="swiper-slide">
			    	<img src="img/banner3.jpg" />	
			    </div>
			    <div class="swiper-slide">
			    	<img src="img/banner4.jpg" />
			    </div>
			    <div class="swiper-slide">
			    	<img src="img/banner5.png" />
			    </div>
			</div>
		    <!-- 如果需要分页器 -->
		    <div class="swiper-pagination"></div>
		    
		    <!-- 如果需要导航按钮 -->
		    <div class="swiper-button-prev"></div>
		    <div class="swiper-button-next"></div>
		    
		    <!-- 如果需要滚动条 -->
		    <div class="swiper-scrollbar"></div>
		</div>

		<!--顶部轮播图结束-->
		
		<!--红圈分割线开始-->
		<img src="img/under-line.png" class="under-line"/>
		<!--红圈分割线结束-->

		<!--凤画起源开始-->
		<div id="origin">
			<img src="img/icon-2.png" class="icon-2"/>
			<p class="about-fh">凤画起源</p>
			<p class="about-fh-en">AboutFengHua</p>
			<img src="img/fh-1.jpg" class="fh-1"/>
			<img src="img/art-icon.jpg" class="icon-1"/>
			<div class="intro-box">
				<div class="intro-title">凤画起源</div>
				<div class="intro-content">凤画，即凤凰画，是安徽省凤阳县一带流传的民间绘画形式。已有六百余年的历史，现为安徽省非物质文化遗产项目之一。多以凤凰为主题，象征吉祥、幸福，一般绘制成中堂形式于春节时张挂。据传明代初年朱元璋做了皇帝，便将他们家乡濠州改为凤阳府，自古以来，人们对凤凰总报有神秘与崇敬之情，所谓“凤凰衔书”是帝王受命于天的瑞应，“凤鸣朝阳”喻贤才遇时而起或稀世之瑞等。传说中又有“雄为凤、雌为凰”之说，转为“帝为阳凤”，所以朱元璋将家乡改为“凤阳”，实有自喻受命于天的意思，而凤阳人画凤画除了象征幸福、和谐、吉祥之外，大概也有这层将凤凰与皇权观念结合起来的涵义。凤画在画诀上有“蛇头龟背，九尾十八翅，鹤腿鸡爪如意冠”之要领 </div>
				<a href="fh-origin.php" target="_blank" class="more">了解更多</a>
			</div>
		</div>
<!----------------凤画起源结束-->
		
		
		
<!---------------红圈分割线开始-->
		<img src="img/under-line.png" class="under-line" style="margin-top: 20px; margin-bottom: 30px;"/>
<!-----------------红圈分割线结束-->
		
	 
	 <!---------------------------新闻发布部分开始------------------------->
		 
		<div id="fh-show">
			<div class="head-line">
				<p class="good-fh">凤画动态</p>
				<p class="good-fh-en">FH-news</p>
				<!--<ul>
					<li> <a href="">凤画起源</a> </li>
					<li> <a href="">凤画大事件</a> </li>
					<li> <a href="">更多</a> </li>
				</ul>-->
			</div>
			
		</div>
		
		
		<div id="news">
			<div class="news-wrap">
				<div class="left-box">
					<p class="head-line">凤画要闻</p>
					<ul>
						<li> <img src="images/news-icon.png" /> <p class="title"> <a href="article3.php">首届中国非物质文化遗产精品大展在合肥市中国非物质文化遗产园开幕</a>  </p>  <p class="date">3月12日</p></li>
						
						<li> <img src="images/news-icon.png" /> <p class="title"><a href="article14.php">凤阳凤画参展上海世博会</a> </p> <p class="date">6月23日</p></li>
						
						<li> <img src="images/news-icon.png" /> <p class="title"><a href="article3.php">凤阳凤画亮相首届中国非遗精品大展</a> </p> <p class="date">3月13日</p></li>
						
						<li> <img src="images/news-icon.png" /> <p class="title"><a href="article-6.php">第四届“中博会”凤画大放异彩</a> </p> <p class="date">3月14日</p></li>
						
						<li> <img src="images/news-icon.png" /> <p class="title"><a href="article5.php">“凤舞中华”凤画巡展在皖西博物馆如期开展</a> </p> <p class="date">4月12日</p></li>
						
						<li> <img src="images/news-icon.png" /> <p class="title"><a href="article-10.php">滁州:传承非遗文化 凤阳凤画《百鸟朝凤》献礼国庆节</a> </p> <p class="date">3月9日</p></li>
						
						<li> <img src="images/news-icon.png" /> <p class="title"><a href="article-11.php">凤阳八旬老人吴文军画凤画纪念抗战胜利70周年</a> </p> <p class="date">3月10日</p></li>
						
			
					</ul>
				</div>
				

				<div class="right-box">
					<p class="head-line">凤画大事件</p>
					<ul>
						<li>  <p class="title"><a href="big-events.php">凤画艺术得到恢复</a> </p>  <p class="date">1959<br />年</p></li>
						
						<li>  <p class="title"><a href="big-events.php">凤画画册出版</a></p>  <p class="date">1983<br />年</p></li>
						
						<li>  <p class="title"><a href="big-events.php">华荣生举办凤画学习班</a></p><p class="date">1985<br />年</p></li>
						
						<li>  <p class="title"><a href="big-events.php">凤画赶赴香港展览</a></p>  <p class="date">1985<br />年</p></li>
						
						<li>  <p class="title"><a href="big-events.php">凤画申遗成功</a> </p>  <p class="date">2006<br />年</p></li>

					</ul>
				</div>
				
				
			</div>
		</div>
		 
		 <!---------------------------新闻发布部分结束------------------------->
		

		 
		 <!--红圈分割线开始-->
		<img src="img/under-line.png" class="under-line" style="margin-top: -20px; margin-bottom: 30px;"/>
		<!--红圈分割线结束-->
		 
		 
		 <!--风画渊源总体介绍开始--------------------------------------------->
		 
		 <div id="fh-history">
		 	
		 	<img src="img/icon-3.png" class="icon-3"/>
		 	<div class="box">
		 		<div class="fh-wrap1">
		 			<img src="img/fh-2.png" class="fh-2"/>
		 			<p class="title">凤阳凤画</p>
		 			<a href="fh-origin.php">凤画，即是凤凰的画，是凤阳独有的民间绘画技术，已有600多年的历史，现为安徽省非物质文化遗产之一，由于凤画造型独特，色彩鲜丽，手法细腻严谨，在民间广有一定的影响，深受广大人民群众喜爱...</a>
		 		</div>
		 		<div class="fh-wrap2">
		 			<img src="img/fh-3.png" class="fh-3"/>
		 			<p class="title">古老凤画涅槃重生</p>
		 			<a href="article1.php">数百年来，凤阳风画深受老百姓喜爱，明清时期最盛，及至民国时期，连年战乱，凤画店全被焚毁，凤画几乎绝迹...</a>
		 		</div>
		 		<div class="fh-wrap3">
		 			<img src="img/fh-4.png" class="fh-4"/>
		 			<p class="title">入选省非物质文化遗产</p>
		 			<a href="article2.php">数百年来，凤阳风画深受老百姓喜爱，明清时期最盛，及至民国时期，连年战乱，凤画店全被焚毁，凤画几乎绝迹...</a>
		 		</div>
		 		
		 	</div>
		 	
		 </div>
		 
		 <!--风画渊源总体介绍结束--------------------------------------------->
		
		
		
		<!--优秀凤画赏析标题开始-->
		<div id="fh-show">
			<div class="head-line">
				<p class="good-fh">凤画精选</p>
				<p class="good-fh-en">GoodFengHua</p>
				<ul>
					<li> <a href="fh-origin.php">凤画起源</a> </li>
					<li> <a href="big-events.php">凤画大事件</a> </li>
					<li> <a href="painter.php">更多</a> </li>
				</ul>
			</div>
			
		</div>
		
		<!--优秀凤画赏析标题结束-->
		
<!--------------------------------------------------------------------------------------------------------->
		<!--引入bootstrap-->
		<script type="text/javascript" src="js/jquery-1.8.3.min.js" ></script>
		<script type="text/javascript" src="js/jquery-2.0.0.min.js" ></script>
		<script type="text/javascript" src="js/bootstrap.min.js" ></script>
		<!--引入swiper-->
		<script type="text/javascript" src="js/swiper4.0.5.min.js" ></script>
		<script type="text/javascript" src="js/swiper.animate1.0.2.min.js" ></script>
		<!--控制轮播的js-->
		<script>        
		  var mySwiper = new Swiper ('.swiper-container', {
		    direction: 'horizontal',
		    loop: true,
		    
		    autoplay: {
    		delay: 4000,//3.5秒切换一次
 			 },
		    
		    // 如果需要分页器
		    pagination: {
		      el: '.swiper-pagination',
		    },
		    
		    // 如果需要前进后退按钮
		    navigation: {
		      nextEl: '.swiper-button-next',
		      prevEl: '.swiper-button-prev',
		    },
		    
		    // 如果需要滚动条
		    scrollbar: {
		      el: '.swiper-scrollbar',
		    },
		  })        
  		</script>
 <!--优秀风画赏析结束-------------------------------------------------->

  		
  		
<!-- ---------------------控制风画展示轮播开始-------------------------->	

<div id="certify">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide"><img src="images/one.jpg" /> <a href=""><p>凤求凰</p> </a>  </div>
			<div class="swiper-slide"><img src="images/two.jpg" />  <a href=""><p>龙凤吉祥</p> </a>  </div>
			<div class="swiper-slide"><img src="images/three.jpg" />  <a href=""><p>凤凰于飞</p> </a>  </div>
			<div class="swiper-slide"><img src="images/four.jpg" />  <a href=""><p>百鸟朝凤白金盘</p> </a>   </div>
			<div class="swiper-slide"><img src="images/five.jpg" />  <a href=""><p>凤凰朝日</p> </a>  </div>
		</div>
	</div>
	
	<div class="swiper-pagination"></div>
	<div class="swiper-button-prev"></div>
	<div class="swiper-button-next"></div>
</div>
<!--控制风画展示的js-->
<script>
certifySwiper = new Swiper('#certify .swiper-container', {
	watchSlidesProgress: true,
	slidesPerView: 'auto',
	centeredSlides: true,
	loop: true,
	loopedSlides: 5,
	autoplay: true,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	pagination: {
		el: '.swiper-pagination',
		//clickable :true,
	},
	on: {
		progress: function(progress) {
			for (i = 0; i < this.slides.length; i++) {
				var slide = this.slides.eq(i);
				var slideProgress = this.slides[i].progress;
				modify = 1;
				if (Math.abs(slideProgress) > 1) {
					modify = (Math.abs(slideProgress) - 1) * 0.3 + 1;
				}
				translate = slideProgress * modify * 260 + 'px';
				scale = 1 - Math.abs(slideProgress) / 5;
				zIndex = 999 - Math.abs(Math.round(10 * slideProgress));
				slide.transform('translateX(' + translate + ') scale(' + scale + ')');
				slide.css('zIndex', zIndex);
				slide.css('opacity', 1);
				if (Math.abs(slideProgress) > 3) {
					slide.css('opacity', 0);
				}
			}
		},
		setTransition: function(transition) {
			for (var i = 0; i < this.slides.length; i++) {
				var slide = this.slides.eq(i)
				slide.transition(transition);
			}

		}
	}

})
</script>
 <!--凤画展示轮播结束-->
 
 <!--红圈分割线开始-->
		<img src="img/under-line.png" class="under-line" style="margin-top: -50px; margin-bottom: 20px;"/>
<!--红圈分割线结束-->
 
 <!--学术交流部分开始-->
 <div id="communion">
 	<p class="fh-cmm">文化交流</p>
	<p class="fh-cmm-en">FH-communion</p>
	<p class="more"> <a href="cultural-exchange.php">了解更多</a> </p>
	<div class="box">
		<div class="wrap">
			<img src="img/xueshu-1.jpg" class="xueshu"/>
			<p class="topic">凤阳凤画亮相首届中国非遗精品大展</p>
			<p class="date">2014-10-05</p>
			<p class="intro"> <a href="article3.php">10月5日，首届中国非物质文化遗产精品大展在合肥市中国非物质文化遗产园开幕。凤阳凤画传承人涂维良、王金生、张维武携20余幅凤画精品，以成品展出和现场作画的方式展示了凤阳凤画。...</a></p>
		</div>
		<div class="wrap">
			<img src="img/xueshu-2.png" class="xueshu"/>
			<p class="topic">世博会上凤阳凤画</p>
			<p class="date">2010-10-09</p>
			<p class="intro"> <a href="article4.php">受安徽省世博办的邀请，在凤阳县商务局的推荐下，我县凤画传承人张维武于2010年6月23日至27日赴上海世博会安徽周进行凤画展演活动... </a>
		</div>
		<div class="wrap">
			<img src="img/xueshu-3.png" class="xueshu"/>
			<p class="topic">“凤舞中华”凤画巡展在皖西博物馆如期开展</p>
			<p class="date">2015-08-01</p>
			<p class="intro"> <a href="article5.php">2015年8月1日，“凤舞中华巡展—安徽省非物质文化遗产凤阳凤画皖西精品展”，在位于六安市的皖西博物馆如期开展... </a>
		</div>
	</div>
 </div>
 <!--学术交流部分结束-->
 
  <!--红圈分割线开始-->
		<img src="img/under-line.png" class="under-line" style="margin-top: 0px; margin-bottom: 0px;"/>
<!--红圈分割线结束-->
 
 <!--凤画传承部分开始-->
 <div id="inherit">
 	<p class="fh-inherit">凤画传承</p>
	<p class="fh-inherit-en">FH-inherit</p>
	<p class="more"> <a href="inherit.php">了解更多</a> </p>
 	<div class="box">
 		<div class="wrap">
 			<img src="img/inherit-1.png" />
 			<p class="title"> <a href="article12.php"> 凤阳纪念凤画杰出代表华荣生诞辰100周年</a></p>
 			<p class="con">2015年10月10日，凤阳县举办凤阳凤画研讨会，隆重纪念凤阳凤画杰出代表人华荣生先生诞辰100周年，县美术家协会和县非遗保护中心近30人参加了研讨会...</p>
 		</div>
 		<div class="wrap">
 			<img src="img/inherit-2.jpg" />
 			<p class="title"> <a href="article13.php"> 德国姑娘学凤画</a></p>
 			<p class="con">6月17日上午，凤阳县凤画艺术家涂维良老先生的画室里迎来了一批特殊的客人——来自德国的姑娘安娜及其丈夫（中国人）和安徽电视台国际频道专栏摄制组...</p>
 		</div>
 		<div class="wrap">
 			<img src="img/inherit-3.jpg" />
 			<p class="title"> <a href="article14.php">凤阳凤画得传承</a></p>
 			<p class="con">凤阳籍凤画家华荣生老先生是华氏凤阳凤画的重要传承人，凤阳凤画是华荣生老先生上下几代人口传面授，传承下来的、有着独特的地方特色和艺术风格的民间艺术...</p></div>
 		<div class="wrap">
 			<img src="img/inherit-4.png" />
 			<p class="title"> <a href="article-7.php">凤阳凤画、花鼓成农歌会最亮色</a></p>
 			<p class="con">　安徽省委书记王金山、安徽省人民政府省长王三运、安徽省委常委、宣传部长臧世凯等省、市领导参观我县农民的现场凤画绘制表演...</p>
 		</div>
 	</div>
 </div>
 
 <!--凤画传承部分结束-->
 
 
 <!--视频展示部分开始-->
		<div id="video-show">
			<div class="wrap">
		
				
					<div class="title">凤舞中华--凤阳风画全国巡展视频</div>
					<video src="video/凤舞中华·凤阳凤画全国巡展—南京站_高清.mp4" controls="controls" loop="loop" width="900px" poster="video/p1.jpg" class="v-2"></video>
				
			</div>
		</div> 
<!--视频展示部分结束-->	
 
 
<!--红圈分割线开始-->
		<img src="img/under-line.png" class="under-line" style="margin-top: 30px; margin-bottom: 30px;"/>
<!--红圈分割线结束-->
 
 
 <!--凤画传承人开始-->
 <div id="painter">
 	
 	<a href="painter.php"><img src="img/patainer-title.png" class="title"/></a> 
 	<img src="img/icon-4.png" class="icon-4"/>
 	<img src="img/icon-5.png" class="icon-5"/>
 	<ul>
 		<li>吴文军 </li>
 		<li>涂维良</li>
 		<li>吴德椿 </li>
 		<li>王金生 </li>
 		<li>张维武 </li>
 		<li>唐勤智 </li>
 		<li>刘云刚 </li>
 		
 		<li>谢冬梅 </li>
 		<li>常道江 </li>
 		<li>吴恒元 </li>
 		<li>李运松 </li>
 		<li>王云之 </li>
 		<li>马克云 </li>
 		<li>武云 </li>
 		
 		<!--<li><a href="">张芹</a> </li>
 		<li><a href="">成祖秀</a> </li>
 		<li><a href="">吴江</a> </li>
 		<li><a href="">刘晓玲</a> </li>
 		<li><a href=""></a> </li>
 		<li><a href=""></a> </li>
 		<li><a href=""></a> </li>-->
 	</ul>
 	
 </div>
 

 <!--凤画传承人结束-->
 
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
 
 
 <!--背景音乐部分开始-->
 <div id="music">
 	<img src="img/music-logo.png" id="music-icon" title="音乐开关"/>
 	<audio src="audio/来一碗饭 - 归隐.mp3"  loop="loop" autoplay="autoplay" id="main-bg"></audio> 
 </div>
 
 <script>
 	var main_bg=document.getElementById("main-bg");
	var music_icon=document.getElementById("music-icon");
	
	/*定义状态变量*/
	var sta=1;
	
	music_icon.onclick=function(){
		
		if(sta==1){
			/*停止音乐符旋转*/
			music_icon.style.animation='none';
			/*关闭背景音乐*/
			main_bg.pause();
			sta=2;
		}
		else if(sta==2){
			/*开启音乐符旋转*/
			music_icon.style.animation='xz 6s linear infinite';
			/*开启背景音乐*/
			main_bg.play();
			sta=1;
		}
		
		
	}
	
 </script>
   <!--背景音乐部分结束-->		
  	
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
