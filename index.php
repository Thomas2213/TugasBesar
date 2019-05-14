<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">

	<title>Homepage</title>
	<link rel="icon" href="favicon.png" type="image/png">
	<link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="css/responsive.css" rel="stylesheet" type="text/css">
	<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">

	<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.js"></script>
	<script type="text/javascript" src="js/wow.js"></script>
	<script type="text/javascript" src="js/classie.js"></script>
	<script type="text/javascript" src="js/magnific-popup.js"></script>
	<script src="contactform/contactform.js"></script>

	<!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
	======================================================= -->

</head>

<body>
	<header class="header" id="header">
		<!--header-start-->
		<div class="container">
			<figure class="logo animated fadeInDown delay-07s">
				<a href="#"><img src="img/logo.png" alt=""></a>
			</figure>
			<h1 class="animated fadeInDown delay-07s">Welcome To Thomas Streaming TV And Movies!</h1>
			<ul class="we-create animated fadeInUp delay-1s">
				<li>Kami Menyediakan Berbagai Tontonan Berkualitas!</li>
			</ul>
			<a class="link animated fadeInUp delay-1s servicelink" href="login.php">LOGIN!</a>
			<div>
			<a class="we-create animated fadeInUp delay-1s" href ="regis.php">Register!</a>
			</div>
		</div>
	</header>
	<!--header-end-->

	


	<!--c-logo-part-end-->
	<section class="main-section team" id="team">
		<!--main-section team-start-->
		<div class="container">
			<h2>Team</h2>
			<h6>Temui Team Kami. Kami Tidak Menggigit!</h6>
			<div class="team-leader-block clearfix">
				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-03s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="thomas.jpg" alt="">
						<ul>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-facebook"></a></li>
							<li><a href="#" class="fa fa-pinterest"></a></li>
							<li><a href="#" class="fa fa-google-plus"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-06s">Thomas Al Kadafi</h3>
					<span class="wow fadeInDown delay-06s">Product Manager</span>
					<p class="wow fadeInDown delay-06s">Meet Our Leader Thomas Al Kadafi. From Information System Generation 2018 Sriwijaya University</p>
					
				</div>
				<div class="team-leader-box">
					<div class="team-leader  wow fadeInDown delay-06s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="nady.jpg" alt="">
						<ul>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-facebook"></a></li>
							<li><a href="#" class="fa fa-pinterest"></a></li>
							<li><a href="#" class="fa fa-google-plus"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-06s">Nadya Nurfadillah</h3>
					<span class="wow fadeInDown delay-06s">Assistant Manager</span>
					<p class="wow fadeInDown delay-06s">Meet Our Assistant Nadya Nurfadillah. From Information System Generation 2018 Sriwijaya University</p>
				</div>
	
				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-09s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="thomas.jpg" alt="">
						<ul>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-facebook"></a></li>
							<li><a href="#" class="fa fa-pinterest"></a></li>
							<li><a href="#" class="fa fa-google-plus"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-06s">Thomas Al Kadafi</h3>
					<span class="wow fadeInDown delay-06s">Product Manager</span>
					<p class="wow fadeInDown delay-06s">Meet Our Leader Thomas Al Kadafi. From Information System Generation 2018 Sriwijaya University</p>
				</div>
			</div>
		</div>
	</section>
	<!--main-section team-end-->



	
	<footer class="footer">
		<div class="container">
			<div class="footer-logo"><a href="#"><img src="img/footer-logo.png" alt=""></a></div>
			<span class="copyright">&copy; ThoMz Theme. All Rights Reserved</span>
			<div class="credits">
				<!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Knight
        -->
				Designed by ThoMz Made!</a>
			</div>
		</div>
	</footer>


	<script type="text/javascript">
		$(document).ready(function(e) {

			$('#test').scrollToFixed();
			$('.res-nav_click').click(function() {
				$('.main-nav').slideToggle();
				return false

			});

      $('.Portfolio-box').magnificPopup({
        delegate: 'a',
        type: 'image'
      });

		});
	</script>

	<script>
		wow = new WOW({
			animateClass: 'animated',
			offset: 100
		});
		wow.init();
	</script>


	<script type="text/javascript">
		$(window).load(function() {

			$('.main-nav li a, .servicelink').bind('click', function(event) {
				var $anchor = $(this);

				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top - 102
				}, 1500, 'easeInOutExpo');
				/*
				if you don't want to use the easing effects:
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 1000);
				*/
				if ($(window).width() < 768) {
					$('.main-nav').hide();
				}
				event.preventDefault();
			});
		})
	</script>

	<script type="text/javascript">
		$(window).load(function() {


			var $container = $('.portfolioContainer'),
				$body = $('body'),
				colW = 375,
				columns = null;


			$container.isotope({
				// disable window resizing
				resizable: true,
				masonry: {
					columnWidth: colW
				}
			});

			$(window).smartresize(function() {
				// check if columns has changed
				var currentColumns = Math.floor(($body.width() - 30) / colW);
				if (currentColumns !== columns) {
					// set new column count
					columns = currentColumns;
					// apply width to container manually, then trigger relayout
					$container.width(columns * colW)
						.isotope('reLayout');
				}

			}).smartresize(); // trigger resize to set container width
			$('.portfolioFilter a').click(function() {
				$('.portfolioFilter .current').removeClass('current');
				$(this).addClass('current');

				var selector = $(this).attr('data-filter');
				$container.isotope({

					filter: selector,
				});
				return false;
			});

		});
	</script>

</body>

</html>
