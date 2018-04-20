<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>知名画家</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<!--引入自定义css文件-->
		<link rel="stylesheet" href="css/my-css.css" />
		<!--引入swiper-->
		<link rel="stylesheet" href="css/swiper4.0.5.min.css" />
		<!--引入bootstrap-->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<!--引入swiper-->
		<link rel="stylesheet" href="css/animate.min.css" />
		<link rel="stylesheet" href="css/swiper.min.css" />
		<link rel="stylesheet" href="css/swiper.min.3.css" />
		<script type="text/javascript" src="js/swiper.min.js" ></script>
		
		<style>
    html, body {
        position: relative;
        height: 100%;
    }

    .swiper-container {
        width: 90%;
        height: 100%;
       
         background-repeat: repeat;
    }
    .swiper-slide {
    	width: 90%;
        text-align: center;
        font-size: 18px;
      
        
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    </style>
	</head>
	<body>
			
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
	 <p class="one">走进张维武的画室，刚刚创作完成的《百鸟朝凤》图醒目地展现在眼前。作品色彩清新亮丽，构图严谨秀美，凤凰威武雄壮，百鸟灵动齐鸣...</p>
	 <p class="two">回归生活，看当代画家妙笔生花</p>
	 <ul>
	 	<li>人们来凤阳爱购买凤画作为馈赠亲友的佳品</li>
	 	<li>画家当着群众的面亲自作画</li>
	 	<li>当代画家将凤画和其他非遗结合...</li>
		<li>形成了别具一格的文化结晶...</li>
	 </ul>
	 
	 <div class="img-show">
	 	<img src="img/painter-show.jpg" style="display: block; width: 790px;"/>
	 </div>
	<img src="img/icon13.png" class="icon-13"/>
</div>
<!--顶部长图介绍结束-->

<!--<img src="img/p-title-bg.png" style="display: block; margin: 0 auto;"/>-->

<!--中部主要部分开始-->


<!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" data-hash="slide1">
            	<div class="painter-main">
					<div class="p-box">
						<div class="p-wrap">
							<img src="img/painter1-1.jpg" class="painter-photo"/>
							<div class="intro-wrap">
								<p class="name">吴文军</p>
								<p class="con">吴文军，笔名：栖凤斋主，1932生，安徽怀远人，原凤阳文联副主席，现为安徽省工艺美术大师，安徽省非物质文化遗产项目（凤画）代表性传承人，安徽省美术家协会会员，凤阳县美术家协会名誉主席。 </p>
							</div>
						</div>
						<div class="works-show">
							<p class="title">优<br />秀<br />作<br />品<br />展<br />示</p>
							<img src="images/w1.jpg" class="works"/>
							<img src="images/w2.jpg" class="works"/>
						</div>
					</div>
					
					<div class="p-box">
						<div class="p-wrap">
							<img src="img/painter2-1.jpg" class="painter-photo"/>
							<div class="intro-wrap">
								<p class="name">涂维良</p>
								<p class="con">涂维良：1938年生，安徽凤阳人，世界艺术家联合会会员，中国国家书画院副院长，现为安徽省工艺美术大师，安徽省非物质文化遗产项目（凤画）代表性传承人，安徽美协会员，安徽民间文化传承人。</p>
							</div>
						</div>
						<div class="works-show">
							<p class="title">优<br />秀<br />作<br />品<br />展<br />示</p>
							<img src="images/w3.jpg" class="works"/>
							<img src="images/w4.jpg" class="works"/>
						</div>
					</div>	
				</div>
            </div>
            
            <div class="swiper-slide" data-hash="slide2">
            	<div class="painter-main">
					<div class="p-box">
						<div class="p-wrap">
							<img src="img/painter3-1.jpg" class="painter-photo"/>
							<div class="intro-wrap">
								<p class="name">吴德椿</p>
								<p class="con">吴德椿，1950年生，祖籍合肥市肥东县，系中国凤阳凤画研究所所长。吴德椿长期以来从事凤阳凤画的搜集、整理、研究、创作工作，在传统凤画创作方面造诣颇深，一批批传统凤画得以重见天日，一批批创新凤画不断问世。</p>
							</div>
						</div>
						<div class="works-show">
							<p class="title">优<br />秀<br />作<br />品<br />展<br />示</p>
							<img src="images/w5.jpg" class="works"/>
							<img src="images/w5.jpg" class="works"/>
						</div>
					</div>
					
					<div class="p-box">
						<div class="p-wrap">
							<img src="img/painter4-1.jpg" class="painter-photo"/>
							<div class="intro-wrap">
								<p class="name">王金生</p>
								<p class="con"> 王金生：1959年生，安徽凤阳人，安徽省非物质文化遗产项目（凤画）代表性传承人，安徽民间文化传承人，中国民间文艺家协会会员，安徽省美术家协会会员，滁州市美术家协会协副主席，凤阳县美术家协会主席。</p>
							</div>
						</div>
						<div class="works-show">
							<p class="title">优<br />秀<br />作<br />品<br />展<br />示</p>
							<img src="images/w6.jpg" class="works"/>
							<img src="images/w7.jpg" class="works"/>
						</div>
					</div>	
				</div>
            </div>
            <div class="swiper-slide" data-hash="slide3">
            	<div class="painter-main">
					<div class="p-box">
						<div class="p-wrap">
							<img src="img/painter5-2.jpg" class="painter-photo"/>
							<div class="intro-wrap">
								<p class="name">张维武</p>
								<p class="con">张维武：1970年生，安徽凤阳人，安徽美协会员，安徽民协会员，滁州市非物质文化遗产项目（凤画）代表性传承人，凤阳县美术家协会常务副主席，曾赴澳门、上海世博会、中国农民歌会等地进行民间艺术交流展示活动。 </p>
							</div>
						</div>
						<div class="works-show">
							<p class="title">优<br />秀<br />作<br />品<br />展<br />示</p>
							<img src="images/w8.jpg" class="works"/>
							<img src="images/w8.jpg" class="works"/>
						</div>
					</div>
					
					<div class="p-box">
						<div class="p-wrap">
							<img src="img/painter6-1.jpg" class="painter-photo"/>
							<div class="intro-wrap">
								<p class="name">唐勤智</p>
								<p class="con">唐勤智：1968年生，安徽凤阳人，安徽美协会员，安徽民协会员，滁州市非物质文化遗产项目（凤画）代表性传承人，中华善报国学研究会会员，中国毛体书法艺术研究会理事，自由公益慈善人，著名书画家。</p>
							</div>
						</div>
						<div class="works-show">
							<p class="title">优<br />秀<br />作<br />品<br />展<br />示</p>
							<img src="images/w10.jpg" class="works"/>
							<img src="images/w11.jpg" class="works"/>
						</div>
					</div>	
				</div>
            </div>
            <div class="swiper-slide" data-hash="slide4">
            	<div class="painter-main">
					<div class="p-box">
						<div class="p-wrap">
							<img src="img/painter7-1.jpg" class="painter-photo"/>
							<div class="intro-wrap">
								<p class="name">刘云刚</p>
								<p class="con">刘云刚：笔名耘冈，1967年生，安徽凤阳人。滁州市非物质文化遗产项目（凤画）代表性传承人，现为中国当代农民书画研究会会员，安徽美协会员，安徽民协会员，凤阳美协副主席。 </p>
							</div>
						</div>
						<div class="works-show">
							<p class="title">优<br />秀<br />作<br />品<br />展<br />示</p>
							<img src="images/w12.jpg" class="works"/>
							<img src="images/w12.jpg" class="works"/>
						</div>
					</div>
					
					<div class="p-box">
						<div class="p-wrap">
							<img src="img/painter8-1.jpg" class="painter-photo"/>
							<div class="intro-wrap">
								<p class="name"> 谢冬梅</p>
								<p class="con"> 谢冬梅：1971年生，安徽凤阳人，安徽美协会员，安徽民协会员，滁州市非物质文化遗产项目（凤画）代表性传承人，中华善报国学研究会会员。</p>
							</div>
						</div>
						<div class="works-show">
							<p class="title">优<br />秀<br />作<br />品<br />展<br />示</p>
							<img src="images/w13.jpg" class="works"/>
							<img src="images/w14.jpg" class="works"/>
						</div>
					</div>	
				</div>
            </div>
            <div class="swiper-slide" data-hash="slide5">
            	<div class="painter-main">
					<div class="p-box">
						<div class="p-wrap">
							<img src="img/painter9-1.jpg" class="painter-photo"/>
							<div class="intro-wrap">
								<p class="name">常道江</p>
								<p class="con">常道江：1965年生，回族，安徽凤阳人，滁州市非物质文化遗产项目（凤画）代表性传承人，滁州市美术家协会会员，凤阳县美术家协会理事。 </p>
							</div>
						</div>
						<div class="works-show">
							<p class="title">优<br />秀<br />作<br />品<br />展<br />示</p>
							<img src="images/w15.jpg" class="works"/>
							<img src="images/w15.jpg" class="works"/>
						</div>
					</div>
					
					<div class="p-box">
						<div class="p-wrap">
							<img src="img/painter10-1.jpg" class="painter-photo"/>
							<div class="intro-wrap">
								<p class="name"> 吴恒元</p>
								<p class="con"> 吴恒元，女，1941年生，安徽凤阳人。滁州市非物质文化遗产项目（凤画）代表性传承人。</p>
							</div>
						</div>
						<div class="works-show">
							<p class="title">优<br />秀<br />作<br />品<br />展<br />示</p>
							<img src="images/w16.jpg" class="works"/>
							<img src="images/w17.jpg" class="works"/>
						</div>
					</div>	
				</div>
            </div>
            <div class="swiper-slide" data-hash="slide6">
            	<div class="painter-main">
					<div class="p-box">
						<div class="p-wrap">
							<img src="img/painter11-1.jpg" class="painter-photo"/>
							<div class="intro-wrap">
								<p class="name">李运松</p>
								<p class="con">李运松：笔名：李昀松，1980年生，安徽凤阳人，凤阳县非物质文化遗产项目（凤画）代表性传承人，安徽美协会员，安徽民协会员，滁州美协会员。凤阳美协理事，2009年应澳门文化局邀请赴澳进行民间艺术交流展演。</p>
							</div>
						</div>
						<div class="works-show">
							<p class="title">优<br />秀<br />作<br />品<br />展<br />示</p>
							<img src="images/w18.jpg" class="works"/>
							<img src="images/w18.jpg" class="works"/>
						</div>
					</div>
					
					<div class="p-box">
						<div class="p-wrap">
							<img src="img/painter12-1.jpg" class="painter-photo"/>
							<div class="intro-wrap">
								<p class="name"> 王云之</p>
								<p class="con"> 王云之，1940年生，滁州市非物质文化遗产项目（凤画）代表性传承人，自幼从艺凤画，许多作品曾在安徽画报、江淮文艺、中国农民报等刊物发表和多次参加省、市、县美展并获奖。现为滁州美协会员，凤阳美协顾问。</p>
							</div>
						</div>
						<div class="works-show">
							<p class="title">优<br />秀<br />作<br />品<br />展<br />示</p>
							<img src="images/w19.jpg" class="works"/>
							<img src="images/w20.jpg" class="works"/>
						</div>
					</div>	
				</div>
            </div>
            <div class="swiper-slide" data-hash="slide7">
            	<div class="painter-main">
					<div class="p-box">
						<div class="p-wrap">
							<img src="img/painter13.jpg" class="painter-photo"/>
							<div class="intro-wrap">
								<p class="name">马克云</p>
								<p class="con">马克云：男：1970年生，安徽凤阳人，凤阳县非物质文化遗产项目（凤画）代表性传承人，安徽美协会员，安徽民协会员，滁州美协会员。</p>
							</div>
						</div>
						<div class="works-show">
							<p class="title">优<br />秀<br />作<br />品<br />展<br />示</p>
							<img src="images/w21.jpg" class="works"/>
							<img src="images/w21.jpg" class="works"/>
						</div>
					</div>
					
					<div class="p-box">
						<div class="p-wrap">
							<img src="img/painter14.jpg" class="painter-photo"/>
							<div class="intro-wrap">
								<p class="name"> 武云</p>
								<p class="con"> 武云，男，1978年生，安徽滁州人，滁州市非物质文化遗产项目（凤画）代表性传承人，许多作品曾在安徽画报、江淮文艺、中国农民报等刊物发表和多次参加省、市、县美展并获奖。现为滁州美协会员，凤阳美协顾问。</p>
							</div>
						</div>
						<div class="works-show">
							<p class="title">优<br />秀<br />作<br />品<br />展<br />示</p>
							<img src="images/w22.jpg" class="works"/>
							<img src="images/w23.jpg" class="works"/>
						</div>
					</div>	
				</div>
            </div>
            <!--<div class="swiper-slide" data-hash="slide8">Slide 8</div>
            <div class="swiper-slide" data-hash="slide9">Slide 9</div>-->
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
	<script type="text/javascript" src="js/swiper.min.3.js" ></script>
	<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 30,
        hashnav: true,
        hashnavWatchState: true
        
    });
    </script>
<!------------------------------------------------------------------------------------>

<!--中部主要部分结束-->


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
			<li><a href="" class="title">关于我们</a> </li>
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
