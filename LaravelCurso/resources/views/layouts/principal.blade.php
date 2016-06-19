<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>Cinema A Entertainment Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
	{!!Html::style('css/bootstrap.css')!!}
	<!-- Custom Theme files -->
	{!!Html::style('css/style.css')!!}
	<!-- Custom Theme files -->
	{!!Html::script('js/jquery.min.js')!!}
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Cinema Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--webfont-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
	<!-- header-section-starts -->
	<div class="full">
		<div class="menu">
			<ul>
				@yield('menu')
			</ul>
		</div>
		<div class="main">

			@yield('content')

			<div class="footer">
				<h6>Disclaimer : </h6>
				<p class="claim">This is a freebies and not an official website, I have no intention of disclose any movie, brand, news.My goal here is to train or excercise my skill and share this freebies.</p>
				<a href="example@mail.com">example@mail.com</a>
				<div class="copyright">
					<p> Template by  <a href="http://w3layouts.com">  W3layouts</a></p>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(window).load(function() {

			$("#flexiselDemo1").flexisel({
				visibleItems: 6,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: false,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint:480,
						visibleItems: 2
					},
					landscape: {
						changePoint:640,
						visibleItems: 3
					},
					tablet: {
						changePoint:768,
						visibleItems: 4
					}
				}
			});
		});
	</script>

	<script type="text/javascript" src="js/jquery.flexisel.js"></script>

	<div class="clearfix"></div>
</body>
</html>