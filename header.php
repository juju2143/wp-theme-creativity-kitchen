<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title><?php wp_title('&laquo;', true, 'right'); bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
	<?php wp_head(); ?>
</head>
<body>
	<nav>
		<?php wp_nav_menu(array("theme_location"=>"menu_head","container"=>false)); ?>
	</nav>
	<header>
		<img id="logo" src="<?php bloginfo('template_url'); ?>/images/logo.png" />
		<div id="synopsis"><?php bloginfo('description'); ?></div>
	</header>
