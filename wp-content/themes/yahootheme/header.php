<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php wp_title('', true, 'right'); ?></title>
		
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/stylesheets/yahootheme.css">

		<!-- JS -->
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/javascripts/vendor/custom.modernizr.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/javascripts/vendor/jquery.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/javascripts/vendor/paper-full.min.js"></script>

	</head>

	<body>

		<div id="wrapper">


			<div id="header">

				<div class="background">
					<canvas id="myCanvas" resize="true"></canvas>
					<script type="text/paperscript" src="<?php bloginfo('template_directory');?>/javascripts/mariowise/fluid-animate.js" canvas="myCanvas"></script>
				</div>

				<div id="header-menu">
					<div class="row">
						<div class="large-3 large-offset-9 columns">
							<!-- Links especiales -->
						</div>
					</div>
					<div id="logo-menu" class="row">
						<div class="small-3 columns">
							<!-- LOGO -->
						</div>
						<div class="small-9 columns">
							<!-- MENU -->
						</div>
					</div>
				</div>

			</div>



			