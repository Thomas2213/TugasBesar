<?php 
require 'koneksi.php';
session_start();
  if (!isset($_SESSION['login'])) {

  }
  ?>

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
				<ul class="animated fadeInDown delay-07s">Silahkan Scroll Kebawah Untuk Lihat Popular Movies Tahun Ini!</ul>
				
				<br></br>
				<a class="animated fadeInDown delay-07s"href="logout.php"<font color=blue>LOGOUT</font></a>
			</ul>
			</div>
			
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<center>
				<center><div class="col-sm-6 col-dm-offset-2 col-md-offset-3 main">
				
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
					<div class="item active">
					
					  <img src="av.jpg" alt="...">
					  <div class="carousel-caption">
					  </div>
					</div>
					<div class="item">
					  <img src="it.jpg" alt="...">
					  <div class="carousel-caption">
					  </div>
					</div>
					<div class="item">
					  <img src="mi.jpg" alt="...">
					  <div class="carousel-caption">
					  </div>
					</div>
					</center>
				  </div>
	
</div>
		</div></div>
	</header>
	<br><br><br><br><br><br><br>
	<section class="main-section paddind" id="Portfolio">
		<!--main-section-start-->
		<div class="container">
			<h2>POPULAR MOVIES!</h2>
			<h6>Acara Tv Dan Film Berkualitas!</h6>
			<div class="portfolioFilter">
				<ul class="Portfolio-nav wow fadeIn delay-02s">
					
				</ul>
			</div>

		</div>
		<div class="portfolioContainer wow fadeInUp delay-04s">
			<div class=" Portfolio-box printdesign">
				<a href="av.jpg"><img src="av.jpg" alt=""></a>
				<h3>Avenger End Game!</h3>
				
			</div>
			<div class="Portfolio-box webdesign">
				<a href="mi.jpg"><img src="mi.jpg" alt=""></a>
				<h3>Mission Imposibble!</h3>
			</div>
			<div class="Portfolio-box webdesign">
				<a href="it.jpg"><img src="it.jpg" alt=""></a>
				<h3>I.T!</h3>
			</div>
			<div class="Portfolio-box webdesign">
				<a href="c.jpg"><img src="c.jpg" alt=""></a>
				<h3>Captain Marvel!</h3>
			</div>
			<div class="Portfolio-box webdesign">
				<a href="p.jpg"><img src="p.jpg" alt=""></a>
				<h3>PIKKACHU 2019!</h3>
			</div>
			<div class="Portfolio-box webdesign">
				<a href="al.jpg"><img src="al.jpg" alt=""></a>
				<h3>ALLADIN 2019!</h3>
			</div>
		</div>
	</section>
	<!--main-section-end-->
	<br>
	<br>
	<?php
  include "info.php";
  
?>
	

    <?php
      include_once "api/api_tv.php";
    ?>
	<center>
        <h2>On Air TV Show</h2>
        <hr>
          <?php
            foreach($tv_onair->results as $tp){
              $dd = date('d F Y', strtotime($tp->first_air_date));
              echo '<h3><a href="tvshow.php?id=' . $tp->id . '">'. $tp->original_name .'</a></h3><p>First Air Date : '.$dd.'</p><p>Popularity : '.round($tp->popularity).'</p>';
            }
          ?>

        <h2>Top Rated TV Show</h2>
        <hr>
        <ul>
          <?php
            foreach($tv_top->results as $tt){
              $de = date('d F Y', strtotime($tt->first_air_date));
              echo '<li><a href="tvshow.php?id=' . $tt->id . '"><img src="'.$imgurl_2.''. $tt->poster_path . '"><h4>' . $tt->original_name . "</h4><h5><em>First Air Date : ".$tt->first_air_date."<br />Popularity : " . round($tt->popularity) . "</em></h5></a></li>";
            }
          ?>
        </ul>
      </div>
    </div>
    </center>


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


<?php 
require 'koneksi.php';
  $tampil = query ("SELECT * FROM blog");
	function query ($query){
		global $conn;
		$result = mysqli_query ($conn,$query);
		$rows = [];

		while ($mhs = mysqli_fetch_assoc($result)) {
			$rows[]=$mhs;
		}
		return $rows;
	}
	

 ?>
	
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
	<br></br>
	<div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
					<div class="form">

						<div id="sendmessage">Your message has been sent. Thank you!</div>
						<div id="errormessage"></div>
						<form action="actioncreat.php" method="post" role="form" class="contactForm">

							<div class="form-group">
								<textarea class="form-control input-text text-area" name="komentar" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
								<div class="validation"></div>
							</div>

							<div class="text-center"><button type="submit" class="input-btn" name="submit">Send Message</button></div>
						</form>
						
						
					</div>
				</div>
			</div>
		</section>
	</div>
	<table class="table-striped"  cellpadding="10" cellspacing="0" width="70%">
  <tr>
   
    <th>No</th>
    <th>Komentar</th>
    
  </tr> 
	<?php $i=1; ?>
<?php foreach ($tampil as $x ) : //foreach itu pengulangan pada array  ?> 
  
  <tr>
    <td><?= $i; ?></td>
 
    <td><?= $x["komentar"];  ?></td>
    
    
    <td><a href="hapus.php?id=<?= $x["id"]?>">hapus</a></td>
  </tr>
<?php $i++; ?>
<?php endforeach; ?>

</table>
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
