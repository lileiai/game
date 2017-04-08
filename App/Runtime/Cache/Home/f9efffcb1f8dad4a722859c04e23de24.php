<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="/Public/Home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/Public/Home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--// css -->
<!-- font -->
<!-- <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'> -->
<!-- //font -->
<script src="/Public/Home/js/jquery.min.js"></script>
<script src="/Public/Home/js/bootstrap.js"></script>
</head>
<body> 
<!-- banner -->
<div class="sub-banner">
		<!-- Navbar -->
		<nav class="navbar navbar-default">
			<div class="container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a  href="index.html"><h1>游戏 <img src="/Public/Home/images/c1.png" alt=" " /> 家园</h1></a>
				</div>

				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="hover-effect"><a href="<?php echo U('Index/index');?>">主页</a></li>

						<li class="hover-effect"><a href="<?php echo U('News/news');?>">游戏站</a></li>
						<li class="hover-effect"><a href="<?php echo U('Games/games');?>">游戏资讯</a></li>

					</ul>
				</div>

			</div>
		</nav>
</div>
<!-- banner -->
<div class="contact-agileinfo">
	<div class="container">
		<h2>欢迎登录</h2>
		<div class="col-md-4 contact-left-agile">
			<div class="address-w3-agileits" id="address">
				<h4>地址</h4>
				<address>
				<ul>
					<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> 中国</li>
					<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> 北京市</li>
					<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> 海淀区西三旗</li>
				</ul>
				</address>
			</div>
		</div>
		<div class="col-md-8 contact-right-w3">
			<form action="<?php echo U('Login/loginin');?>" method="post">
				<p>
				<input type="text" class="text" name="name" placeholder="用户名" required="">
				</p>
				<!--<input type="text" class="text" name="Email" placeholder="邮箱" required="">-->
				<p>
				<input type="password" class="text" name="pwd" placeholder="密码" required="">
				</p>
				<!--<p>
					<input type="text" name="yzm" placeholder="验证码"/>
					<img src="<?php echo U('Login/verify');?>" width="80" height="38"
						 style="position: relative; top:13px; left:-84px;"
						 onclick="this.src='/index.php/Home/Login/verify/t/'+Math.random();"
					/>
				</p>-->

				<!--<p class="top15 captcha" id="captcha-container">
					<input name="verify" width="50%" height="50" class="captcha-text" placeholder="验证码" type="text">
					<img width="30%" class="left15" height="50" alt="验证码" src="<?php echo U('Home/Login/verify_c',array());?>" title="点击刷新">
				</p>-->
				<!--<input type="text" class="text" name="City" placeholder="居住地" required="">-->
				<!--<textarea name="Message" placeholder="个人简介" required=""></textarea>-->
				<input type="submit" class="more_btn" value="点击登录">
			</form>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<!-- Map-iFrame -->
<!--<div class="map" id="map">-->
	<!--<div class="map-hover">-->
		<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22702.22744502486!2d11.113366067229226!3d44.662878362361056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477fc3eca9065c15%3A0x12ec8a03aadae866!2s40019+Sant&#39;Agata+Bolognese+BO%2C+Italy!5e0!3m2!1sen!2sin!4v1451281303075" allowfullscreen></iframe>-->
		<!--<div class="map-hover-1"></div>-->
	<!--</div>-->
<!--</div>-->
<!-- //Map-iFrame -->
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-left-w3">
			<h4>联系方式</h4>
			<ul>
				<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></li>
				<li><a href="mailto:example@mail.com"><h6>lazy@mail.com</h6></a></li>
			</ul>
			<ul>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></li>
				<li><h6>+1808888888</h6></li>
			</ul>
			<ul>
				<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></li>
				<li><h6>北京海淀黑马</h6></li>
			</ul>
			<ul>
				<li><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span></li>
				<li><h6>(0033)6544 5453 644</h6></li>
			</ul>
		</div>
		<div class="col-md-5 footer-middle-w3">
			<h4>最近热门游戏</h4>
			<div class="col-md-3 img-w3-agile">
				<a href="single.html"><img src="/Public/Home/images/ng1.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile">
				<a href="single.html"><img src="/Public/Home/images/ng2.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile">
				<a href="single.html"><img src="/Public/Home/images/ng3.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile">
				<a href="single.html"><img src="/Public/Home/images/ng4.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile footer-middle-wthree">
				<a href="single.html"><img src="/Public/Home/images/ng5.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile footer-middle-wthree">
				<a href="single.html"><img src="/Public/Home/images/ng6.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile footer-middle-wthree">
				<a href="single.html"><img src="/Public/Home/images/ng7.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile footer-middle-wthree">
				<a href="single.html"><img src="/Public/Home/images/ng8.jpg" alt=" " /></a>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-4 footer-right-w3">
			<a href="index.html"><h4>游戏 <img src="/Public/Home/images/f1.png" alt=" " /> 园</h4></a>
			<p>如果您有什么好的想法或者建议，欢迎与我们联系，我们的客服妹子随时恭候</p>
			<p class="agileinfo">玩游戏，就要玩的尽兴</p>
		</div>
		<div class="clearfix"></div>
		<div class="copyright">
			<p>Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
		</div>
	</div>
</div>
<!-- //footer -->
</body>
</html>