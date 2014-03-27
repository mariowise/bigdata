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
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url');?>" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/stylesheets/yahootheme.css">

		<!-- JS -->
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/javascripts/vendor/custom.modernizr.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/javascripts/vendor/jquery.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/javascripts/mariowise/common.js"></script>

	</head>

	<body>

		<div id="wrapper">


			<div id="header">

				<div class="background"></div>

				<div id="header-menu">
					<div id="logo-menu" class="row">
						<div id="logo" class="large-4 columns">
							<a href="<?php echo home_url();?>"><img id="respond-logo" src="<?php bloginfo('template_directory');?>/img/respond_logo2.png"></a>
						</div>
						<div class="large-8 columns">
							<ul id="header-menu-links">
								<li name="home"><a href="<?php echo home_url();?>">HOME</a></li>
								<li name="people"><a href="<?php echo home_url();?>/people/">PEOPLE</a></li>
								<!-- <li name="news"><a href="<?php echo home_url();?>/news/">NEWS</a></li> -->
								<li name="publications"><a href="<?php echo home_url();?>/publications/">PUBLICATIONS</a></li>
								<li name="projects"><a href="<?php echo home_url();?>/projects/">PROJECTS</a></li>
							</ul>		
						</div>
					</div>
				</div>

			</div>



			