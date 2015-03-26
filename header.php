<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name=viewport content="width=device-width, initial-scale=1" />
	<title><?php wp_title('&laquo;', true, 'right'); bloginfo('name'); ?></title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon.png" />
	<?php wp_head(); ?>
</head>
<body>
	<nav>
		<?php wp_nav_menu(array("theme_location"=>"menu_head","container"=>false)); ?>
	</nav>
	<header>
		<div id="sandwich"><i class="fa fa-bars"></i></div>
		<a href="<?php bloginfo('url'); ?>"><img id="logo" src="<?php bloginfo('template_url'); ?>/images/logo.png" /></a>
		<div id="synopsis"><?php bloginfo('description'); ?></div>
	</header>
