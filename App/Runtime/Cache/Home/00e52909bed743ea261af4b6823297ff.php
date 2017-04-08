<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<title>Index</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="/game/Public/Home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="/game/Public/Home/css/flexslider.css" type="text/css" media="screen" property="" />
<link href="/game/Public/Home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--// css -->
<!-- font -->
<!-- <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'> -->
<!-- //font -->
<script src="/game/Public/Home/js/jquery.min.js"></script>
<script src="/game/Public/Home/js/bootstrap.js"></script>

</head>
<body> 
<!-- Header -->
	<div class="header">
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
					<a  href="<?php echo U('Index/index');?>"><h1>游戏 <img src="/game/Public/Home/images/c1.png" alt=" " /> <br>园</h1></a>
				</div>

				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="hover-effect"><a href="<?php echo U('Index/index');?>">主页</a></li>

						<li class="hover-effect game">
							<a href="<?php echo U('Games/games');?>">游戏专区</a>
							<a href="<?php echo U('Games/games');?>">地下城与勇士</a>
							<a href="<?php echo U('Games/games');?>">英雄联盟</a>
							<a href="<?php echo U('Games/games');?>">剑灵</a>
							<a href="<?php echo U('Games/games');?>">炉石传说</a>
						</li>

						<li class="hover-effect"><a href="<?php echo U('Login/login');?>">登录</a></li>
					</ul>
				</div>

			</div>
		</nav>
		<!-- //Navbar -->

		<!-- Slider -->
		<div class="slider">
			<ul class="rslides" id="slider">
				<li>
					<img src="/game/Public/Home/images/banner3.jpg" alt="" />
				</li>
				<li>
					<img src="/game/Public/Home/images/banner2.jpg" alt="" />
				</li>
				<li>
					<img src="/game/Public/Home/images/banner1.jpg" alt="" />
				</li>
			</ul>
		</div>
		<!-- //Slider -->

	</div>
	<!-- Banner-Slider-JavaScript -->
	<script src="/game/Public/Home/js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider").responsiveSlides({
				auto: true,
				nav: true,
				speed: 800,
				namespace: "callbacks",
				pager: true,
			});
		});
	</script>
	<!-- //Banner-Slider-JavaScript -->
	<!-- //Header -->

<!-- trend -->
<div class="trend-w3layouts">
	<div class="container">
		<h2>热门游戏</h2>
		<ul id="flexiselDemo1">			
				<li>
					<div class="trend-grid">
						<h4>赛车游戏</h4>
						<img src="/game/Public/Home/images/tg1.jpg" alt=" " class="img-responsive" />
					</div>
				</li>
				<li>
					<div class="trend-grid">
						<h4>3D 游戏</h4>
						<img src="/game/Public/Home/images/tg2.jpg" alt=" " class="img-responsive" />
					</div>
				</li>
				<li>
					<div class="trend-grid">
						<h4>动作游戏</h4>
						<img src="/game/Public/Home/images/tg3.jpg" alt=" " class="img-responsive" />
					</div>
				</li>
				<li>
					<div class="trend-grid">
						<h4>儿童游戏</h4>
						<img src="/game/Public/Home/images/tg4.jpg" alt=" " class="img-responsive" />
					</div>
				</li>
			</ul>
						<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 4,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 2
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:3
										},
										tablet: { 
											changePoint:768,
											visibleItems: 4
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="/game/Public/Home/js/jquery.flexisel.js"></script>
	</div>
</div>
<!-- //trend -->

<!-- 
services
<div class="services-agileits-w3layouts">
	<div class="container">
		<h3>Services</h3>
		<div class="col-md-3 service-grid-agileits service-grid-agileits-top">
			<span class="glyphicon glyphicon-sort-by-attributes" aria-hidden="true"></span>
			<h4>Quis tortor</h4>
			<p>Curabitur suscipit porttitor aliquam. Etiam id placerat purus. Integer sodales elit eget arcu placerat.</p>
			<a href="<?php echo U('Single/single');?>">Read More</a>
		</div>
		<div class="col-md-3 service-grid-agileits">
			<span class="glyphicon glyphicon-random" aria-hidden="true"></span>
			<h4>Eget arcu</h4>
			<p>Curabitur suscipit porttitor aliquam. Etiam id placerat purus. Integer sodales elit eget arcu placerat.</p>
			<a href="<?php echo U('Single/single');?>">Read More</a>
		</div>
		<div class="col-md-3 service-grid-agileits service-grid-agileits-bottom">
			<span class="glyphicon glyphicon-yen" aria-hidden="true"></span>
			<h4>Risus porta</h4>
			<p>Curabitur suscipit porttitor aliquam. Etiam id placerat purus. Integer sodales elit eget arcu placerat.</p>
			<a href="<?php echo U('Single/single');?>">Read More</a>
		</div>
		<div class="col-md-3 service-grid-agileits service-grid-agileits-bottom">
			<span class="glyphicon glyphicon-object-align-right" aria-hidden="true"></span>
			<h4>Proin sapien</h4>
			<p>Curabitur suscipit porttitor aliquam. Etiam id placerat purus. Integer sodales elit eget arcu placerat.</p>
			<a href="<?php echo U('Single/single');?>">Read More</a>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
//services
 -->
<!-- new games -->
<div class="new-w3-agile">
	<div class="container">
		<h3>最新游戏</h3>
		<div class="col-md-3 new-grid-w3l view view-eighth">
			<img src="/game/Public/Home/images/ng1.jpg" alt=" " />
			<div class="mask">
				<a href="<?php echo U('Single/single');?>"><h4>单击</h4></a>
				<p>获得更多资讯</p>
			</div>
		</div>
		<div class="col-md-3 new-grid-w3l view view-eighth">
			<img src="/game/Public/Home/images/ng2.jpg" alt=" " />
			<div class="mask">
				<a href="<?php echo U('Single/single');?>"><h4>单击</h4></a>
				<p>获得更多资讯</p>
			</div>
		</div>
		<div class="col-md-3 new-grid-w3l view view-eighth">
			<img src="/game/Public/Home/images/ng3.jpg" alt=" " />
			<div class="mask">
				<a href="<?php echo U('Single/single');?>"><h4>单击</h4></a>
				<p>获得更多资讯</p>
			</div>
		</div>
		<div class="col-md-3 new-grid-w3l view view-eighth">
			<img src="/game/Public/Home/images/ng4.jpg" alt=" " />
			<div class="mask">
				<a href="<?php echo U('Single/single');?>"><h4>单击</h4></a>
				<p>获得更多资讯</p>
			</div>
		</div>
		<div class="col-md-3 new-grid-agile view view-eighth">
			<img src="/game/Public/Home/images/ng5.jpg" alt=" " />
			<div class="mask">
				<a href="<?php echo U('Single/single');?>"><h4>单击</h4></a>
				<p>获得更多资讯</p>
			</div>
		</div>
		<div class="col-md-3 new-grid-agile view view-eighth">
			<img src="/game/Public/Home/images/ng6.jpg" alt=" " />
			<div class="mask">
				<a href="<?php echo U('Single/single');?>"><h4>单击</h4></a>
				<p>获得更多资讯</p>
			</div>
		</div>
		<div class="col-md-3 new-grid-agile view view-eighth">
			<img src="/game/Public/Home/images/ng7.jpg" alt=" " />
			<div class="mask">
				<a href="<?php echo U('Single/single');?>"><h4>单击</h4></a>
				<p>获得更多资讯</p>
			</div>
		</div>
		<div class="col-md-3 new-grid-agile view view-eighth">
			<img src="/game/Public/Home/images/ng8.jpg" alt=" " />
			<div class="mask">
				<a href="<?php echo U('Single/single');?>"><h4>单击</h4></a>
				<p>获得更多资讯</p>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //new games-->



<div class="services-bottom-w3-agileits">
		<div class="container">
			<div class="wthree_info">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="wthree_info_grid">
									<h3>地下城与勇士</h3>
									<p>Fighting with us！</p>
									<a href="<?php echo U('Single/single');?>" class="learn">查看更多...</a>
								</div>
							</li>
							<li>
								<div class="wthree_info_grid">
									<h3>英雄联盟</h3>
									<p>敌军还有30秒到达战场，碾碎他们！</p>
									<a href="<?php echo U('Single/single');?>" class="learn">查看更多...</a>
								</div>
							</li>
							<li>
								<div class="wthree_info_grid">
									<h3>炉石传说</h3>
									<p>来喝一杯吧，朋友！</p>
									<a href="<?php echo U('Single/single');?>" class="learn">查看更多...</a>
								</div>
							</li>
							<li>
								<div class="wthree_info_grid">
									<h3>剑灵</h3>
									<p>白色情人节，不一样的浪漫~~</p>
									<a href="<?php echo U('Single/single');?>" class="learn">查看更多...</a>
								</div>
							</li>
						</ul>
					</div>
				</section>
						<!-- flexSlider -->
							
							<script defer src="/game/Public/Home/js/jquery.flexslider.js"></script>
							<script type="text/javascript">
							$(window).load(function(){
							  $('.flexslider').flexslider({
								animation: "slide",
								start: function(slider){
								  $('body').removeClass('loading');
								}
							  });
							});
						  </script>
						<!-- //flexSlider -->
			</div>
		</div>
	</div>

<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-left-w3">
			<h4>联系方式</h4>
			<ul>
				<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></li>
				<li><a href="#"><h6>ex@mail.com</h6></a></li>
			</ul>
			<ul>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></li>
				<li><h6>+18045678834</h6></li>
			</ul>
			<ul>
				<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></li>
				<li><h6>西三旗</h6></li>
			</ul>
			<ul>
				<li><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span></li>
				<li><h6>(0033)6544 5453 644</h6></li>
			</ul>
		</div>
		<div class="col-md-5 footer-middle-w3">
			<h4>最新游戏</h4>
			<div class="col-md-3 img-w3-agile">
				<a href="<?php echo U('Single/single');?>"><img src="/game/Public/Home/images/ng1.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile">
				<a href="<?php echo U('Single/single');?>"><img src="/game/Public/Home/images/ng2.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile">
				<a href="<?php echo U('Single/single');?>"><img src="/game/Public/Home/images/ng3.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile">
				<a href="<?php echo U('Single/single');?>"><img src="/game/Public/Home/images/ng4.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile footer-middle-wthree">
				<a href="<?php echo U('Single/single');?>"><img src="/game/Public/Home/images/ng5.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile footer-middle-wthree">
				<a href="<?php echo U('Single/single');?>"><img src="/game/Public/Home/images/ng6.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile footer-middle-wthree">
				<a href="<?php echo U('Single/single');?>"><img src="/game/Public/Home/images/ng7.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile footer-middle-wthree">
				<a href="<?php echo U('Single/single');?>"><img src="/game/Public/Home/images/ng8.jpg" alt=" " /></a>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-4 footer-right-w3">
			<a href="<?php echo U('Index/index');?>"><h4>游戏 <img src="/game/Public/Home/images/f1.png" alt=" " /> 园</h4></a>
			<p>我们是一群热爱游戏的人，如果你也是，join us！</p>
			<p class="agileinfo">让我们在游戏的世界里拼出我们的巅峰~~</p>
		</div>
		<div class="clearfix"></div>
		<div class="copyright">
			<!-- <p>Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="#/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p> -->
		</div>
	</div>
</div>

<!-- //footer -->
</body>
</html>