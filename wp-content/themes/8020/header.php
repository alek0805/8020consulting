<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage 8020
 * @since 8020 Consulting
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,900,700,500|Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'/>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri();?>/favicon.ico">
	<link href='<?php echo get_template_directory_uri()."/css/bootstrap.css"; ?>' rel='stylesheet' type='text/css'/>
	<?php wp_head(); ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<link href='<?php echo get_template_directory_uri()."/css/ie8-lower.css"; ?>' rel='stylesheet' type='text/css'/>	
	<![endif]-->
</head>

<body <?php body_class(); ?>>
	<header>
		<nav class="nav-menu " role="navigation">
			<ul id="top-nav">
				<li><a href="#overview">Overview</a></li>
				<li><a href="#the-work-we-do">The Work We Do</a></li>
				<li><a href="#why-we-do-it">Why We Do It</a></li>
				<li><a href="#our-team">Our Team</a></li>
				<li><a href="#we-believe">We Believe</a></li>
				<li><a href="#why-work-here">Why Work Here</a></li>
				<li><a href="#why-work-with-us">Why Work With Us</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
			<a href="#home" class="logo">8020 Consulting</a>
		</nav><!-- #site-navigation -->
		<div class="navbar navbar-default">
	        <div class="container">
	            <div>
	              <div class="navbar-header">
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
	                  <span class="icon-bar"></span>
	                  <span class="icon-bar"></span>
	                  <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="/"><img title="" src="<?php echo get_template_directory_uri()."/images/logo.png"; ?>" alt=""/></a>
	              </div>
	              <div class="navbar-collapse collapse">
	                <ul class="nav navbar-nav">
	                  	<li><a href="#overview">Overview</a></li>
						<li><a href="#the-work-we-do">The Work We Do</a></li>
						<li><a href="#why-work-here">Why Work Here</a></li>
						<li><a href="#our-team">Our Team</a></li>						
						<li><a href="#why-work-with-us">Why Work With Us</a></li>
						<li><a href="#contact">Contact</a></li>
	                </ul>
	              </div><!--/.nav-collapse -->
	            </div>
	        </div>
	    </div>
	</header><!-- #masthead -->
	<div id="home"></div>
	<div id="main">