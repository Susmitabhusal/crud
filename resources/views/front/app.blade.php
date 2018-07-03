
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Fashion Gaze a Fashion Category Bootstrap responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Fashion Gaze a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<!-- gallery -->
<link rel="stylesheet" href="../css/lightGallery.css" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="../css/component.css" />

<!-- //gallery -->
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<script src="../js/modernizr.custom.js"></script>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="..///fonts.googleapis.com/css?family=Arimo:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,hebrew,latin-ext,vietnamese" rel="stylesheet">
<link href="..///fonts.googleapis.com/css?family=Covered+By+Your+Grace" rel="stylesheet">
<link href="..///fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet">
<!--Start-slider-script-->
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
<!--End-slider-script-->
</head>
<!-- Head -->
<body>
<!-- Slider -->
<div class="w3-banner-info-agile">
		<div class="slider w3layouts agileits">
			@yield('slider')
		</div>
</div>
<!-- //Slider -->
<!-- banner -->
<div class="banner" id="home">
		<!-- <div class="container"> -->
			<nav class="navbar navbar-default cl-effect-5"  id="cl-effect-5">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.html">Fashion Gaze</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
          				<li><a href="#"><span data-hover="Home">Home</span></a></li>
						<li><a class="active scroll" href="#models"><span data-hover="models">Models</span></a></li> 
						<li><a class="scroll" href="#services"><span data-hover="Services">Services</span></a></li>
						<li><a class="scroll" href="#gallery"><span data-hover="Gallery">Gallery</span></a></li> 
						<li><a class="scroll" href="#team"><span data-hover="Team">Team</span></a></li>
						<li><a class="scroll" href="#contact"><span data-hover="Contact">Contact</span></a></li> 
         			</ul>
       			</div>
        		<!-- /.navbar-collapse -->
			</nav>	   
		<!-- </div> -->
		
							  <ul class="top-links">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
</div>
<!-- //banner -->	
@yield('content')
	
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="agile-footer-grids">
			<div class="col-md-4 w3-agile-footer-grid">
					<h3>Newsletter</h3>
					<form action="#" method="post">
						<input type="email" id="mc4wp_email" name="EMAIL" placeholder="Enter your email here" required="">
						<input type="submit" value="Subscribe">
					</form>
				</div>
				<div class="col-md-4 w3-agile-footer-grid">
					<h3>Navigation</h3>
					<ul>
						<li><a href="#home" class="scroll">Home</a></li>
						<li><a href="#models" class="scroll">About</a></li>
						<li><a href="#services" class="scroll">Services</a></li>
						<li><a href="#gallery" class="scroll">Gallery</a></li>
						<li><a href="#team" class="scroll">Team</a></li>
						<li><a href="#brands" class="scroll">Brands</a></li>
						<li><a href="#contact" class="scroll">contact Us</a></li>
					</ul>
				</div>
				<div class="col-md-4 w3-agile-footer-grid">
					<h3>Follow Us :</h3>
					<div class="footer-social-grids">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>
				<div class="clearfix"> </div>
				<div class="footer-bottom">
				<p>© 2017 Fashion Gaze . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts.</a></p>
			</div>

</div>
	<!-- //footer -->
	<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	<!-- Slider-JavaScript -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider, #slider1").responsiveSlides({
				auto: true,
				nav: true,
				speed: 1500,
				namespace: "callbacks",
				pager: true,
			});
		});
	</script>
<!-- //Slider-JavaScript -->
<!-- //Default-JavaScript-File -->
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
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems:2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<script src="js/lightGallery.js"></script>
	<script>
    	 $(document).ready(function() {
			$("#lightGallery").lightGallery({
				mode:"fade",
				speed:800,
				caption:true,
				desc:true,
				mobileSrc:true
			});
		});
    </script>

	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
<!-- start-smoth-scrolling -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

</body>
</html>

