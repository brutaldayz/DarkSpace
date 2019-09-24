<?php require_once('../System/Minimize.php');  require_once('../System/Init.php'); ?>
<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('ADMIN_CSS'); ?>bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('ADMIN_CSS'); ?>font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('ADMIN_CSS'); ?>themify-icons.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('ADMIN_CSS'); ?>metisMenu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('ADMIN_CSS'); ?>owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('ADMIN_CSS'); ?>slicknav.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('ADMIN_CSS'); ?>typography.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('ADMIN_CSS'); ?>default-css.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('ADMIN_CSS'); ?>styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('ADMIN_CSS'); ?>responsive.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('CSS'); ?>Main.min.css" />

    <!-- Include JS-->
    <script type="text/javascript" src="<?php echo Config::Get('ADMIN_JS'); ?>modernizr-2.8.3.min.js"></script>
    <script type="text/javascript" src="<?php echo Config::Get('ADMIN_JS'); ?>jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="<?php echo Config::Get('JS'); ?>sweetalert.min.js"></script>
</head>
<body>