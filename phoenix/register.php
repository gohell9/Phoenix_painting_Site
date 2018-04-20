<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册页面</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <link type="text/css" rel="stylesheet" href="css/dmaku.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <style>
    	/*.zc{
    		border: 1px solid gold;
    	}
    	
    	.bg_bai{
    		border: 1px solid red;
    	}*/
    </style>
</head>
<body class="login_bj" >
<div class="zhuce_body">
	<!-- <div class="logo"><a href="#"><img src="images/logo.png" border="0"></a></div> -->
    <div class="zhuce_kong">
    	<div class="zc">
        	<div class="bj_bai">
            <h3>欢迎注册</h3>
       	  	  <form action="register_check.php" method="get">
                <input name="user_name" type="text" class="kuang_txt phone" placeholder="请输入用户名">
               
                <input name="password" type="password" class="kuang_txt possword" placeholder="请输入密码">
              
               <!-- <input name="" type="text" class="kuang_txt yanzm" placeholder="验证码">-->
                <!--<div>
                	<div class="hui_kuang"><img src="images/z2-cc.jpg" width="92" height="31"></div>
                	<div class="shuaxin"><a href="javascript:;"><img src="images/z2-cc.jpg" width="13" height="14"></a></div>
                </div>-->
                <div>
               		<input name="" type="checkbox" value=""><span>已阅读并同意<a href="javascript:;" target="_blank"><span class="lan">《使用协议》</span></a></span>
                </div>
                <input name="注册" type="submit" class="btn_zhuce" value="注册">
                
                </form>
            </div>

        	
            
        </div>
    </div>

</div>

</body>
</html>