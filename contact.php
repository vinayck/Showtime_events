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
	<link rel="stylesheet" type="text/css" href="css/contact_us_style.css" media="screen" />
	<!--[if lt IE 9]>
		<script src="html5shiv.js"></script>
	<![endif]-->
</head>
<body>
	<div id="main_wrap">
		<div id="header">
			<div id="logo">
				<a href="index.php"><img src="images/logo.png"/></a>
			</div>
			<div id="menu">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about_us.html">About Us</a></li>
					<li><a href="why_us.html">Why Us</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="contact.php" class="current_nav">Contact</a></li>
					<li><a href="portfolio.html">Portfolio and Gallery</a></li>
				</ul>
			</div>
		</div>
		<div id="contact">
			<div id="contact_us">
				<h5>Contact Us</h5>
				<p>What makes any activity fun? The way it is planned, organized and executed? The people behind it?</p>
				<p>P.O. Box: 29514 Dubai,UAE<br>
				Phone: +9714-3426661<br>
				Fax: +9714-3709989</p>
				<p>Email : info@showtimeevent.net</p>
			</div>
			<div id="contact_box">
				<img src="images/contact_box/contact_box.png"/>
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