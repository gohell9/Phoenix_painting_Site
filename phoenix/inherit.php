<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>凤画传承</title>
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
	
	<!--引入中部文章区域css-->
	<link rel="stylesheet" href="css/inherit-main.css" />
	<style>
		body {
        background: white;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color:#000;
        margin: 0;
        padding: 0;
    }
    .swiper-container {
        width: 100%;
        height: 600px;
        margin: 20px 0;
        border-bottom: 1px solid gainsboro;
        /*margin-left: 10%;*/
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
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
    
     
 #lunch{
		width: 100%;
		height: 734px;
		/*border: 2px solid gold;*/
		margin: 0px auto;
		position: relative;
	}
	
	#lunch img{
		position: absolute;
        top: 0;
		left: 0;
		display: none;
		}
		
	#lunch ul{
		position: absolute;
		bottom: 25px;
		right: 862px;
		
	}
		
	#lunch ul li{
		list-style: none;
		width: 12px;
		height: 12px;
		float: left;
		background: #846C5D;
		border-radius: 6px;
		margin-right: 14px;
	}

	</style>
</head>
<body <!--style="background-image: url(img/body.png); background-repeat: repeat;"-->
	
		
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

<!----------------------------顶部大图开始------------------------------->

		<script>
			$(function(){
				
			//总变量
			var c=0;
			
			function run (){ //单独将效果存放在run函数里
				c++;
				if(c==4){
					c=0;
				}
				//让c号元素显示，兄弟元素隐藏
				
				$("#lunch img").eq(c).fadeIn();
				$("#lunch img").eq(c).siblings('img').fadeOut();
				
				//li变色
				$("#lunch ul li").eq(c).css({'background':'#007AFF'});
				$("#lunch ul li").eq(c).siblings('li').css({'background':'#846C5D'});
				
			}
			
			/*设置定时器，自动轮播*/
			var timer = setInterval(run,4000)

			//移入事件优化版 mouseenter mouseleave
				
			//给li加鼠标移入事件
			
			$("#lunch ul li").mouseenter(function(){
				
				//清理定时器
				clearInterval(timer);
				
				//获得当前移入的元素的序号
				c=$(this).index();
					//让c号元素显示，兄弟元素隐藏
				
				$("#lunch img").eq(c).stop().fadeIn(1000);
				$("#lunch img").eq(c).siblings('img').stop().fadeOut(1000);
				
				//li变色
				$("#lunch ul li").eq(c).css({'background':'#007AFF'});
				$("#lunch ul li").eq(c).siblings('li').css({'background':'#846C5D'});
				
			})
			
			//给鼠标加移入事件

			$("#lunch ul li").mouseleave(function(){
				
				timer = setInterval(run,4000)  //此处timer为全局变量
				
			})
					
			})
			
		</script>
		
		<div id="lunch">

			<img src="img/events-banner1.jpg"  />
			<img src="img/events-banner2.jpg" />
			<img src="img/events-banner3.jpg" />
			<img src="img/events-banner4.jpg" />
			<ul>
				<li></li>
				<li></li>
				<li></li>
				<li></li>


			</ul>
		</div>	
<!----------------------------顶部大图结束------------------------------->


<!----------------------------------------中部主要区域开始------------------------------------------------------->	
	<div id="inherit-main">
		<img src="img/d.png" class="top-pic" style="display: block; margin-left: 15%; margin-top: 30px;"/>
		<!--<img src="img/icon14.png" style=" display: block;max-width: 300px;"/>-->
		<div class="con">
				<p class="title">凤阳历史演变</p>
				<p class="intro">凤阳自古就是帝都古城，作为明朝古都的它，自打春秋战国以来，几经更名，数千年来，凤阳城经历了数不尽的历史演变</p>
			<!-- Swiper -->
		    <div class="swiper-container swiper1">
		        <div class="swiper-wrapper">
		        	<!--第一页-->
		            <div class="swiper-slide one">
		            	<div class="box">
		            		<div class="w-bg"></div>
		            		<img src="fy-pic/fy-000.png" />
		            		<div class="head-line">凤画之乡·凤阳简介</div>
		            		<p class="content">凤阳，古称“钟离”、“濠州”，滁州市下辖县，位于淮河中游南岸，北濒淮河与蚌埠市淮上区、五河县相望，东、南部与明光市、定远县毗连，西部和西北部与淮南市大通区、蚌埠市龙子湖区、蚌山区、禹会区接壤。凤阳是全国较有名的历史文化名城，有举世闻名的明中都皇城和明皇陵。<br />凤阳是明太祖朱元璋的家乡，是八仙之一的蓝采和的成仙之地，是庄子与惠子濠梁观鱼之地，也是中国农村改革开放的发源地。<br />凤阳有中国花鼓之乡、中国帝王之乡、中国改革之乡、中国曲艺之乡、中国石英之乡、中国民间艺术之乡，中国树莓之都等美誉。</p>
		            		
		            	</div>
		            </div>
		            
		            <!--第2页-->
		            <div class="swiper-slide two" >
		            	<div class="box" >
		            		<img src="fy-pic/fy-001.jpg" />
		            		<div class="white-bg"></div>
		            		<div class="text-wrap"></div>
		            		<p class="title">历史沿革</p>
		            		<div class="top-line"></div>
		            		<p class="content">凤阳古为淮夷之地，春秋时，在今临淮镇附近建钟离子国，并筑钟离城。公元前538年，楚攻占钟离城，钟离属楚。公元前518年钟离城又被吴王僚夺去。越王勾践灭吴后，钟离城属越，周显王三十五年（公元前332年）楚灭越，钟离城又属楚。秦统一中国后，钟离城属九江郡。秦王政二十四年（前223年）灭楚，正式设立钟离县（治临淮关）。刘邦封英布为淮南王，改九江郡为淮南国，钟离县为淮南国的领地。汉武帝元狩元年（公元前122年）平定吴楚7国之乱，杀淮南王刘安，改淮南国为九江郡，钟离县仍属其管辖。王莽夺取西汉政权后，改九江郡为延平郡，将钟离县改为蚕富县。东汉建武元年（25年）改称钟离侯国，后又称钟离县，仍属九江郡。</p>
		            		<div class="tips">温馨提示：左键按住鼠标，左右滑动可切换页面</div>
		            	</div>	
		            </div>
		            
		            <!--第3页-->
		            <div class="swiper-slide three">
		            	<div class="box" >
		            		<img src="fy-pic/fy-006.jpg" style="max-width: 1200px;"/>
		            		
		            	</div>
		            </div>
		            <div class="swiper-slide four">
		            	<div class="box">
		            		<img src="fy-pic/fy-007.jpg" style="max-width: 1200px;"/>
		            	</div>
		            </div>
		            <div class="swiper-slide five">
		            	<div class="box">
		            		<img src="fy-pic/fy-008.jpg" style="max-width: 1200px;"/>
		            	</div>
		            </div>
		            <div class="swiper-slide six">
		            	<div class="box">
		            		<img src="fy-pic/fy-009.png" style="max-width: 1200px;"/>
		            	</div>
		            </div>
		            <div class="swiper-slide seven">
		            	<div class="box">
		            		<img src="fy-pic/fy-010.png" style="max-width: 1200px;"/>
		            	</div>
		            </div>


		        </div>
		        <!-- Add Pagination -->
		        <div class="swiper-pagination swiper-pagination1"></div>
		        <div class="swiper-button-prev"></div>
    			<div class="swiper-button-next"></div>
		    </div>
				<p class="title">凤画的工艺传承</p>
				<p class="intro">凤画的绘制是一个及其复杂且需要高超手法的过程，其绘制手法历经600多年来都被保存的完好无损</p>
		    <!-- Swiper -->
		    <div class="swiper-container swiper2">
		        <div class="swiper-wrapper">
		            <div class="swiper-slide one">
		            	<div class="box">
		            		<img src="fy-pic/fy-011.png" style="max-width: 1200px; border: 1px solid gainsboro;"/>
		            	</div>
		            </div>
		            <div class="swiper-slide two">
		            	<div class="box">
		            		<img src="fy-pic/fy-012.png" style="max-width: 1200px; border: 1px solid gainsboro;"/>
		            	</div>
		            </div>
		            <div class="swiper-slide three">
		            	<div class="box">
		            		<img src="fy-pic/fy-013.png" style="max-width: 1200px; border: 1px solid gainsboro;"/>
		            	</div>
		            </div>
		            <div class="swiper-slide four">
		            	<div class="box">
		            		<img src="fy-pic/fy-014.png" style="max-width: 1200px; border: 1px solid gainsboro;"/>
		            	</div>
		            </div>
		            <div class="swiper-slide five">
		            	<div class="box">
		            		<img src="fy-pic/fy-015.png" style="max-width: 1200px; border: 1px solid gainsboro;"/>
		            	</div>
		            </div>
		            <div class="swiper-slide six">
		            	<div class="box">
		            		<img src="fy-pic/fy-016.png" style="max-width: 1200px; border: 1px solid gainsboro;"/>
		            	</div>
		            </div>
		            <div class="swiper-slide seven">
		            	<div class="box">
		            		<img src="fy-pic/fy-017.png" style="max-width: 1200px; border: 1px solid gainsboro;"/>
		            	</div>
		            </div>
		        </div>
		        <!-- Add Pagination -->
		        <div class="swiper-pagination swiper-pagination2"></div>
		        <div class="swiper-button-prev"></div>
    			<div class="swiper-button-next"></div>
		    </div>
		
		    
		    <!--<div class="swiper-container swiper3">
		        <div class="swiper-wrapper">
		            <div class="swiper-slide one">
		            	<div class="box">
		            		<img src="fy-pic/fy-017.png" style="max-width: 1200px; border: 1px solid gainsboro;"/>
		            	</div>
		            </div>
		            <div class="swiper-slide two">Slide 2</div>
		            <div class="swiper-slide three">Slide 3</div>
		            <div class="swiper-slide four">Slide 4</div>
		            <div class="swiper-slide five">Slide 5</div>
		            <div class="swiper-slide six">Slide 6</div>

		        </div>
		       
		        <div class="swiper-pagination swiper-pagination3"></div>
		        <div class="swiper-button-prev"></div>
    			<div class="swiper-button-next"></div>
		    </div>-->
		
		    <!-- Swiper JS -->
		    <script type="text/javascript" src="js/swiper.min.3.js" ></script>
		
		    <!-- Initialize Swiper -->
		    <script>
		    var swiper1 = new Swiper('.swiper1', {
		         pagination: '.swiper-pagination1',
				 paginationType : 'progress',
				 paginationProgressRender: function (swiper, progressbarClass) {
				      return '<span class="' + progressbarClass + '"></span>';
				  },
		        paginationClickable: true,
		        spaceBetween: 30,
		        prevButton:'.swiper-button-prev',
				nextButton:'.swiper-button-next',
				
		    });
		    var swiper2 = new Swiper('.swiper2', {
		        
		         pagination: '.swiper-pagination2',
				 paginationType : 'progress',
				 paginationProgressRender: function (swiper, progressbarClass) {
				      return '<span class="' + progressbarClass + '"></span>';
				  },
		        paginationClickable: true,
		        spaceBetween: 30,
		        prevButton:'.swiper-button-prev',
				nextButton:'.swiper-button-next',
				zoom : true,
				
		    });
		    var swiper3 = new Swiper('.swiper3', {
		        
		        
		         pagination: '.swiper-pagination3',
				 paginationType : 'progress',
				 paginationProgressRender: function (swiper, progressbarClass) {
				      return '<span class="' + progressbarClass + '"></span>';
				  },
		        paginationClickable: true,
		        spaceBetween: 30,
		        prevButton:'.swiper-button-prev',
				nextButton:'.swiper-button-next',
				zoom : true,
		    });
		    
		    
		    </script>
			
	
		<!--凤画制作过程-->
		
			<div class="video">
				<p class="title">凤画制作流程视频</p>
				<p class="intro">著名画家王金生老先生，是诸位凤画传承人中的一名，今天他给我们演示了一幅凤画制作的完整流程，包括临摹、调制颜料、原画上色等。</p>
				<video src="video/王金生凤画创作流程_高清.mp4" controls="controls" loop="loop" width="900px" class="v-2" poster="video/p2.jpg"></video>
			</div>
	
		<!--凤画制作过程结束-->	
		
		<!--传承意义开始-->
				<!--<p class="title">凤画的传承意义</p>
				<p class="intro">作为中华民族的优秀历史以及非物质文化遗产，凤画的传承是极其必要的，它不仅是祖先的智慧的结晶，更是子孙后代的无价之宝</p>
				<div class="mean">
					
				</div>-->
		<!--传承意义结束-->
	
		</div>
		<img src="img/b.png" class="foot-pic"/>
	</div>	
<!-----------------------------------------中部主要区域结束------------------------------------------------------------->	

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


 
</body>
</html>