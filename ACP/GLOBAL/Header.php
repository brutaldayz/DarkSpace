<?php require_once('../System/Minimize.php');  require_once('../System/Init.php'); ?>
<!doctype html>
<html lang="en" dir="ltr">
	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo Config::Get('SERVER_NAME'); ?> | ACP</title>
        <meta name="description" content="<?php echo Config::Get('SERVER_NAME'); ?> is the ultimate space shooter. Explore the endless expanses of universe in one of the best and most exciting online browser games ever produced. Brave all dangers and go where nobody's ever gone before - either alone or with others. Set a course for undiscovered galaxies and seek out new lifeforms!">
        <meta property="og:title" content="<?php echo Config::Get('SERVER_NAME'); ?>"/>
        <meta property="og:image" content="<?php echo Config::Get('IMG'); ?>Logo.jpg"/>
        <meta property="og:url" content="<?php echo Config::Get('SERVER_URL'); ?>"/>
        <meta property="og:site_name" content="<?php echo Config::Get('SERVER_NAME'); ?>"/>
        <meta property="og:description" content="<?php echo Config::Get('SERVER_NAME'); ?> is the ultimate space shooter. Explore the endless expanses of universe in one of the best and most exciting online browser games ever produced. Brave all dangers and go where nobody's ever gone before - either alone or with others. Set a course for undiscovered galaxies and seek out new lifeforms!"/>
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="1 days">

		<!-- Include Icons -->
        <link rel="shortcut icon" href="<?php echo Config::Get('IMG'); ?>Favicon.ico" />

        <!-- Include CSS -->
		<link rel="stylesheet" href="<?php echo Config::Get('ASSETS'); ?>ACP/plugins/bootstrap/css/bootstrap.min.css">
		<link href="<?php echo Config::Get('ASSETS'); ?>ACP/css/style.css" rel="stylesheet" />
		<link href="<?php echo Config::Get('ASSETS'); ?>ACP/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />
		<link href="<?php echo Config::Get('ASSETS'); ?>ACP/plugins/horizontal-menu/dropdown-effects/fade-down.css" rel="stylesheet">
		<link href="<?php echo Config::Get('ASSETS'); ?>ACP/plugins/horizontal-menu/dark-horizontalmenu.css" rel="stylesheet">
		<link href="<?php echo Config::Get('ASSETS'); ?>ACP/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
		<link href="<?php echo Config::Get('ASSETS'); ?>ACP/plugins/sidebar/dark-sidebar.css" rel="stylesheet">
		<link href="<?php echo Config::Get('ASSETS'); ?>ACP/plugins/accordion1/css/dark-easy-responsive-tabs.css" rel="stylesheet">
		<link href="<?php echo Config::Get('ASSETS'); ?>ACP/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
		<link href="<?php echo Config::Get('ASSETS'); ?>ACP/plugins/morris/morris.css" rel="stylesheet" />
		<link href="<?php echo Config::Get('ASSETS'); ?>ACP/plugins/iconfonts/plugin.css" rel="stylesheet" />
		<link href="<?php echo Config::Get('ASSETS'); ?>ACP/plugins/iconfonts/icons.css" rel="stylesheet" />
		<link href="<?php echo Config::Get('ASSETS'); ?>ACP/fonts/fonts/font-awesome.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700|Lato:400,700,900|Raleway:300,400,500,600,700,800,900" rel="stylesheet">
		<script src="<?php echo Config::Get('ASSETS'); ?>ACP/js-dark/vendors/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="<?php echo Config::Get('JS'); ?>sweetalert.min.js"></script>
	</head>