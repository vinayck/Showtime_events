<!DOCTYPE HTML>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<title>Showtime Events</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/index_style.css" media="screen" />
	<!--[if lt IE 9]>
		<script src="html5shiv.js"></script>
	<![endif]-->
	<!-- Add jQuery library -->
	<script type="text/javascript" src="fancybox/source/jquery-latest.min.js"></script>
	<link rel="stylesheet" href="nivo-slider.css" type="text/css" />
	<script src="jquery.nivo.slider.pack.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(window).load(function() {
			$('#slider').nivoSlider({
				prevText: '',
				nextText: '',
				directionNav: false,  		
				pauseOnHover : false,				
				effect: 'fade',
			})})
	</script>
</head>
<body>
	<div id="main_wrap">
		<div id="header">
			<div id="logo">
				<a href="index.php"><img src="images/logo.png"/></a>
			</div>
			<div id="menu">
				<ul>
					<li><a href="index.php" class="current_nav">Home</a></li>
					<li><a href="about_us.html">About Us</a></li>
					<li><a href="why_us.html">Why Us</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="portfolio.html">Portfolio and Gallery</a></li>
				</ul>
			</div>
		</div>
		<div id="home_content">
			<div class="mask_wrap">
				<div id="slider" class="nivoSlider">
					<img src="images/index/main_gear_image1.png"/ class="deeper">										
					<img src="images/index/main_gear_image2.png"/ class="deeper">
					<img src="images/index/main_gear_image3.png"/ class="deeper">
					<img src="images/index/main_gear_image.png"/ class="deeper">
				</div>
				<img src="images/index/main_gear_mask.png"/ class="upper">
			</div>	
			<script type="text/javascript">
				$(window).load(function() {
					$('#slider').nivoSlider();
				});
			</script>
			<div id="side_text">
				<h5>LET THE SHOW BEGIN</h5>
				<p>What makes any activity fun? The way it is planned, organized and executed? 
				   The people behind it? If these are some questions coming to your mind when 
				   partaking in any activity, we are the solution for it. “Showtime Group – Showing 
				   Beyond the Time”
				</p>
				<p class="right"><strong><a href="about_us.html">Click Here to Know More</a></strong></p>
			</div>
			<div id="gear_boy">
				<img src="images/index/left_gear.png"/ id="gear">

				<img src="images/index/gear.png"/ class="gearboy" id="gear1">	
				<img src="images/index/gear.png"/ class="gearboy2" id="gear2">
				<img src="images/index/gear.png"/ class="gearboy" id="gear3">
				<img src="images/index/gear.png"/ class="gearboy2" id="gear4">
				<img src="images/index/gear.png"/ class="gearboy" id="gear5">
			</div>
			<h4 id="promo"><a href="services.html">Promotions</a></h4>
			<h4 id="merch"><a href="services.html">Merchandise</a></h4>
			<h4 id="brand"><a href="services.html">Branding</a></h4>
			<h4 id="wed"><a href="services.html">Wedding</a></h4>
			<h4 id="exhibit"><a href="services.html">Exhibitions</a></h4>
			<div id="contact_box">
				<img src="images/index/right_gear.png"/>
				<div id="contact_content">
					<h3>Want to join the party?</h3>
					<h3>Drop a Line</h3>
					<?php if(isset($_GET['c']) && $_GET['c'] == true) {
					?> 
					<br><br><br>
					<h3>Message sent!</h3>
					<?php
					} else { ?>
					<form method="POST" id="ajax-contact-form" action="phone.php" >
						<p>NAME <input type="text" value="" name="name" id="name" class="write"></p>
						<p>EMAIL <input type="text" value="" name="email" id="email" class="write"></p>
						<p>PHONE NUMBER <input type="text" value="" name="phn" id="name" class="write"></p>
						<p>MESSAGE <textarea class="textarea" name="message" cols="25" rows="5"></textarea></p>
						<p><input type="submit" name="submit" id="button_submit" value="SEND" class="write"></p>
					</form>
					<?php } ?>
				</div>
			</div>
			<div class="marquee">
				<ul class="slide">
				  <li><img src="images/portfolio/1.png"/></li>
				  <li><img src="images/portfolio/2.png"/></li>
				  <li><img src="images/portfolio/3.png"/></li>
				  <li><img src="images/portfolio/4.png"/></li>
				  <li><img src="images/portfolio/5.png"/></li>
				  <li><img src="images/portfolio/6.png"/></li>
				  <li><img src="images/portfolio/7.png"/></li>
				  <li><img src="images/portfolio/8.png"/></li>
				  <li><img src="images/portfolio/9.png"/></li>
				  <li><img src="images/portfolio/10.png"/></li>
				  <li><img src="images/portfolio/11.png"/></li>
				  <li><img src="images/portfolio/12.png"/></li>
				  <li><img src="images/portfolio/13.png"/></li>
				  <li><img src="images/portfolio/14.jpg"/></li>
				  <li><img src="images/portfolio/15.png"/></li>
				  <li><img src="images/portfolio/16.jpg"/></li>
				  <li><img src="images/portfolio/17.png"/></li>
				</ul>
			</div>
			<script type='text/javascript' src='marquee.js'></script>
		</div>
		<div id="footer">
			<div id="social">
				<div class="float_right">
					<a href="https://www.facebook.com/ShowTimeEvent.net" target="_blank"><img src="images/fb.png"/></a>
					<a href="#" target="_blank"><img src="images/linked_in.png"/></a>
					<a href="#" target="_blank"><img src="images/twitter.png"/></a>
				</div>
			</div>
			<div id="power">
				<span>Powered by</span>
				<a target="_blank" href="http://klientas.com">
					<img src="images/klientas.png" id="klientas">
				</a> 
			</div>
		</div>
	</div>
</body>
</html>