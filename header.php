<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Rock CastleDescription: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20111127

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Peppa Pig</title>
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css' />
	<?php wp_head(); ?>
</head>
<body>
<div id="header" class="container">
	<div id="logo">
		<h1><a href="#">Peppa Pig</a></h1>
	</div>
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Homepage</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="wp-content/themes/peppapig/registr.php">Party</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>
</div>
<div id="splash-wrapper">
	<div id="splash">
		<h2>Nullam pretium nibh ut turpis</h2>
		<p>Lorem ipsum daolor sit amet, consectetur adipiscing elit. Nulla quis orci ut erat iaculis posuere in consequat nulla. Cras vel nisl ipsum, nec tincidunt nunc. Sed egestas lorem nisl, sed dignissim quam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce tristique dui sit amet mauris.</p>
	</div>
</div>










