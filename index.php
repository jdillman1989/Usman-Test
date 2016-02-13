<!doctype html>
<html>
	<head>

		<meta charset="utf-8">

		<!-- <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" /> -->

		<title>Usman Group Test</title>

		<link href="stylesheets/min/reset.css" rel="stylesheet" type="text/css" />

		<link href="stylesheets/min/main.css" rel="stylesheet" type="text/css" />

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

		<script type="text/javascript" src="javascripts/min/usman.js"></script>

	</head>

	<body>
		<div class="container">

			<header class="nav animate position">
				<ul class="main-nav">
					<li><a href="#about">About Us</a></li>
					<li><a href="#services">Services</a></li>
					<li><a href="#whatwedo">What We Do</a></li>
					<li><a href="#works">Our Work</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</header>

			<div class="mobile-menu animate">

				<div class="mobile-icon-first mobile-icon animate"></div>

				<div class="mobile-icon-second mobile-icon animate"></div>

				<div class="mobile-icon-third mobile-icon animate"></div>
			</div>

			<?php @include("includes/header.inc.php"); ?>
			<?php @include("includes/about.inc.php"); ?>
			<?php @include("includes/services.inc.php"); ?>
			<?php @include("includes/whatwedo.inc.php"); ?>
			<?php @include("includes/works.inc.php"); ?>
			<?php @include("includes/contact.inc.php"); ?>
			<?php @include("includes/footer.inc.php"); ?>
		</div>
	</body>
</html>