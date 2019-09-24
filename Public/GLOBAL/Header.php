<?php require_once('System/Minimize.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo Config::Get('SERVER_NAME'); ?></title>
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
    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('CSS'); ?>material-bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('CSS'); ?>fontawesome.min.css" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700" />
    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('CSS'); ?>Main.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('CSS'); ?>Style.min.php" />

    <!-- Include JS-->
    <script type="text/javascript" src="<?php echo Config::Get('JS'); ?>Jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo Config::Get('JS'); ?>Main.min.js"></script>
    <script type="text/javascript" src="<?php echo Config::Get('JS'); ?>sweetalert.min.js"></script>
</head>
<body>
