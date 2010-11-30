<!doctype html>  

<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Projects</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="[skin]/images/favicon.ico">

  <link rel="stylesheet" href="[skin]/css/base.css?v=2">
  <link rel="stylesheet" href="[skin]/css/global.css?v=1">
  <script src="[skin]/js/libs/modernizr-1.6.min.js"></script>

</head>

<body>

  <div id="wrapper">
    <header role="banner">
		<h1><a href="[site]/">Projects</a></h1>
		<nav role="usernav" id="usernav">
			<div class="avatarname">
				<a href="https://github.com/dbald"><img width="20" height="20" alt="" src="https://secure.gravatar.com/avatar/8c50a0347914a7365c04efa42204387c?s=140&amp;d=https%3A%2F%2Fgithub.com%2Fimages%2Fgravatars%2Fgravatar-140.png"></a>
				<a class="name" href="https://github.com/dbald">dbald</a>
			</div>
			<ul>
				<li class="how_it_works"><a href="/how_it_works">Dashboard</a></li>
				<li class="get_springpad"><a href="/get_springpad">Index</a></li>
				<li class="blog"><a href="http://blog.springpadit.com/">Account Settings</a></li>
				<li class="support"><a href="/support">Log Out</a></li>
			</ul>
		</nav>
	</header>
    
    <div id="container">
    	<div id="head">
    		<nav role="breadcrumbs" id="breadcrumbs">
			    <ul>
			    	<li><a href="#1">NaturalCodeProject</a></li>
			        <li>Test Project</li>
			    </ul>
			</nav>
    	</div>
    	<div id="main">
			<?php echo $this->_getViewContent(); ?>
		</div>
    </div>
    
    <footer>

    </footer>
  </div> <!-- end of #container -->


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
  <script>!window.jQuery && document.write(unescape('%3Cscript src="[skin]/js/libs/jquery-1.4.2.js"%3E%3C/script%3E'))</script>
  
  
  <!-- scripts concatenated and minified via ant build script-->
  <script src="[skin]/js/plugins.js"></script>
  <script src="[skin]/js/script.js"></script>
  <!-- end concatenated and minified scripts-->
  
  
  <!--[if lt IE 7 ]>
    <script src="[skin]/js/libs/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); </script>
  <![endif]-->
  
</body>
</html>