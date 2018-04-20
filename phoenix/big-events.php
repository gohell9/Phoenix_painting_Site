<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>凤画大事件</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- Link Swiper's CSS -->
    <!--引入自定义css文件-->
	<link rel="stylesheet" href="css/my-css.css" />
	<!--引入swiper-->
	<link rel="stylesheet" href="css/swiper4.0.5.min.css" />
	<!--引入swiper animate jquery-->
	<link rel="stylesheet" href="css/animate.min.css" />
	<link rel="stylesheet" href="css/swiper.min.css" />
	<link rel="stylesheet" href="css/swiper.min.3.css" />
	<link rel="stylesheet" href="css/inherit-top-lb.css" />
	<script type="text/javascript" src="js/swiper.min.js" ></script>
	<script type="text/javascript" src="js/jquery-1.11.0.min.js" ></script>
	
	<style>
   
    .swiper-container {
        width: 100%;
        height: 300px;
        margin: 0px auto;
        margin-bottom: 300px;
    }
    .swiper-slide {
        
        background: #fff;
        
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

<!--大事件中部区域开始-->
<div class="event_main">
	<img src="events-pic/title1.png" class="title1"/>
	  <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide 01">
            	<div class="wrap">
            		<div class="con">1959年，李凤鸣和华先荣赴京参加全国美术工作座谈会，与著名画家李若婵，叶浅予、陈半丁、于非共同研画技，从此凤画艺术有了新的发展
</div>
					<img src="events-pic/e01.jpg" />
            	</div>
            </div>
            <div class="swiper-slide 02">
            	<div class="wrap">
            		<div class="con">1964年，即建国15周年，李凤鸣与崔思九、曾广轩、铁如征、马希林、崔贵琪等合作巨幅凤画《祖国颂》轰动一时，李凤鸣从此成为凤画名家，被推选为安徽美术协会理事</div>
					<img src="events-pic/e02.jpg" />
            	</div>
            </div>
            <div class="swiper-slide 03">
            	<div class="wrap">
            		<div class="con">1965年，李凤鸣受邀凤阳县文化馆专门作画。不料在“文革中”，他耗费几十年心血创作的两大箱凤画，被付之一炬
</div>
					<img src="events-pic/e03.jpg" />
            	</div>
            </div>
            <div class="swiper-slide 04">
            	<div class="wrap">
            		<div class="con">1968年李凤鸣、1976年华先荣先后病逝。王德鑫改行卖菜。</div>
					<img src="events-pic/e04.jpg" />
            	</div>
            </div>
            <div class="swiper-slide 05">
            	<div class="wrap">
            		<div class="con">1979年，蚌埠市美术协会发现了老艺人伊杰承及其徒弟曹秀成。接着凤阳县和滁州县文化部门开始了对凤画的恢复工作
</div>
					<img src="events-pic/e05.jpg" />
            	</div>
            </div>
            <div class="swiper-slide 06">
            	<div class="wrap">
            		<div class="con">1983年元月，凤阳成立了美协，大批专业和业余美术工作者、教师成立创作队伍，凤画得以继承、创新、发展。同年10月，安徽省群众艺术馆、滁州文化局、凤阳文化局发行了《凤阳凤画》画册，收录了收录了传统及新作凤画29副
</div>
					<img src="events-pic/e06.jpg" />
            	</div>
            </div>
            <div class="swiper-slide 07">
            	<div class="wrap">
            		<div class="con">1985年11月，应凤阳文化馆邀请，华荣先生回凤阳办了第一期凤画学习班，馆长成守忠、副馆长吴晓泉。</div>
					<img src="events-pic/e07.jpg" />
            	</div>
            </div>
            <div class="swiper-slide 08">
            	<div class="wrap">
            		<div class="con">1985年4月13日，香港文汇报以整版篇幅刊印了凤画，使凤画艺术闻名中外，刘海栗题写“华彩”，同年12月中央新闻电影制片厂《祖国新貌》2号专题拍摄了凤画艺术，华荣专程从四川赶回凤阳。</div>
					<img src="events-pic/e08.jpg" />
            	</div>
            </div>
            <div class="swiper-slide">
            	<div class="wrap">
            		<div class="con">1991年8月，应凤阳文化馆邀请，华荣先生回凤阳举办了第二期凤画学习班，副馆长涂维良，年底；华荣先生携带作品，赴广州参加“百绝”艺术博览会。凤画被誉为中华民间艺术一绝，受到了会议各方面人士的称赞。</div>
					<img src="events-pic/e09.jpg" />
            	</div>
            </div>
            <div class="swiper-slide">
            	<div class="wrap">
            		<div class="con">1992年5月，华荣生、王德鑫被凤阳县委、县政府授予凤画艺术家、著名凤画传承人称号。<br /><br />1994年5月，成立“中山凤画院”，聘请华荣生为特级凤画师，院长马夕林</div>
					<img src="events-pic/e10.jpg" />
            	</div>
            </div>
            <div class="swiper-slide 11">
            	<div class="wrap">
            		<div class="con">1994年12月25日，成立了“中国凤阳凤画院”院长马夕林。<br /><br />1999年4月，华荣生作品《飞向世界》获得第三届世界华人艺术大会展览特别金奖
</div>
					<img src="events-pic/e11.jpg" />
            	</div>
            </div>
            <div class="swiper-slide 12">
            	<div class="wrap">
            		<div class="con">2001年王德鑫病逝。<br /><br />2004年6月25日，吴文军作品《三王图》获得全国政协服务书画奖一等奖，8月12日，吴文军的凤画《春到小岗》在中国国家博物馆展出
</div>
					<img src="events-pic/e12.jpg" />
            	</div>
            </div>
            <div class="swiper-slide 13">
            	<div class="wrap">
            		<div class="con">2006年9月15日，吴文军被评为安徽省首届工艺美术大师。涂维良、王金生等被评为工艺美术名人。<br /><br />12月凤阳凤画成功申报安徽省非物质文化遗产
</div>
					<img src="events-pic/e13.jpg" />
            	</div>
            </div>
            <div class="swiper-slide 14">
            	<div class="wrap">
            		<div class="con">2008年8月4日，华派嫡系传人在石家庄病逝。10月7日，王金生赴澳门卢家大屋展示凤阳凤画</div>
					<img src="events-pic/e14.jpg" />
            	</div>
            </div>
            
            <div class="swiper-slide 15">
            	<div class="wrap">
            		<div class="con">2009年1月5日，张维武赴澳门卢家大屋展示凤阳凤画。1月10日在凤阳成立华氏凤画研究会。1月30日，在凤阳宾馆多功能厅举办首届华氏凤画会员作品展。
</div>
					<img src="events-pic/e15.jpg" />
            	</div>
            </div>
            
            <div class="swiper-slide 16">
            	<div class="wrap">
            		<div class="con">2009年6月2日，李云松赴澳门卢家大屋展示凤阳凤画，6月13日，李氏凤画在安徽画廊展出。</div>
					<img src="events-pic/e16.jpg" />
            	</div>
            </div>
            
            <div class="swiper-slide 17">
            	<div class="wrap">
            		<div class="con">2009年11月8日，刘耘岗、张维武、李云松等参加第二届农民歌会书画展现场表演，省委书记王金山、省长王三运等领导观看了演示
</div>
					<img src="events-pic/e17.jpg" />
            	</div>
            </div>
            
            <div class="swiper-slide 18">
            	<div class="wrap">
            		<div class="con">2010年6月23日，凤画传承人张维武赴上海参加上海世博会“安徽周”进行凤画展演活动。安徽省委书记张宝顺，央视节目主持人观看了展演
</div>
					<img src="events-pic/e18.jpg" />
            	</div>
            </div>
   
            
        </div>
 
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
    	<div class="swiper-button-next"></div>
    </div>

    <!-- Swiper JS -->
    <script type="text/javascript" src="js/swiper.min.3.js" ></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 3,
        paginationClickable: true,
        spaceBetween: 30,
        freeMode: true,
        prevButton:'.swiper-button-prev',
		nextButton:'.swiper-button-next',
		
    });
    </script>
    
    
    <script>
			$(' .wrap').mousemove(function(){
				$(' .01 img').addClass('animated flipInX');
			})
	</script>
    
	
</div>
<!--大事件中部区域结束-->



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
  	
  	<!--引入js库-->
  	
	<script type="text/javascript" src="js/jquery-1.8.3.min.js" ></script>
	<script type="text/javascript" src="js/jquery-2.0.0.min.js" ></script>
	<script type="text/javascript" src="js/bootstrap.min.js" ></script>
  	
  	
  	
  <!--返回顶部按钮开始-->
  <div id="back-to-top" style="z-index: 4;">
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


 
</body>
</html>