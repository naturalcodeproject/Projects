<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Projects</title>
	<link rel="stylesheet" href="[skin]/styles/global.css" type="text/css" media="screen" charset="utf-8" />
	
</head>

<body>
	<div id="container">
		<header role="banner">
			<h1></h1>
			<nav role="navigation" id="navigation">
				<ul>
					<li class="how_it_works"><a href="/how_it_works">How it Works</a></li>
					<li class="get_springpad"><a href="/get_springpad">Get Springpad</a></li>
					<li class="blog"><a href="http://blog.springpadit.com/">Blog</a></li>
					<li class="support"><a href="/support">Support</a></li>
				</ul>
			</nav>
			<nav role="util" id="util">
				<ul>
					<li><a href="/register">Create an Account</a></li>
					<li>•</li>
					<li><a href="/login">Sign In</a></li>
				</ul>
			</nav>
		</header>
		<div id="main">
			<?php echo $this->_getViewContent(); ?>
		</div>
		<footer>
			<p class="copy">
				© 2010 Spring Partners • 
				<a href="/about">About Us</a> • 
				<a href="/partners">Partners</a> • 
				<a href="/privacy">Privacy Policy</a> • 
				<a href="/terms">Terms of Service</a>
			</p>
		</footer>
	</div>
</body>
</html>
