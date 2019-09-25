<?php require_once('System/Minimize.php'); require_once('System/Init.php'); ?>
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
    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('CSS'); ?>Main.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('CSS'); ?>Login.min.css" />

    <!-- Include JS-->
    <script type="text/javascript" src="<?php echo Config::Get('JS'); ?>Jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo Config::Get('JS'); ?>Main.min.js"></script>
    <script type="text/javascript" src="<?php echo Config::Get('JS'); ?>sweetalert.min.js"></script>
    <script type="text/javascript" src="<?php echo Config::Get('JS'); ?>material-bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700|Lato:400,700,900|Raleway:300,400,500,600,700,800,900" rel="stylesheet">
</head>
<body>

    <div class="container mt-5" style="background: #fff;padding: 15px;font-family: 'Comfortaa', cursive;">
        <h3 class="mb-4 text-center"><?php echo Config::Get('SERVER_NAME'); ?></h3>

        <h3><?php echo Lang::Terms('1Title'); ?></h3>
        <ol type="a">
            <li><?php echo Lang::Terms('1Message'); ?></li>
        </ol>

        <br>

        <h3><?php echo Lang::Terms('2Title'); ?></h3>
        <ol type="a">
            <li><?php echo Lang::Terms('2Message'); ?></li>
        </ol>

        <br>

        <h3><?php echo Lang::Terms('3Title'); ?></h3>
        <ol type="a">
            <li><?php echo Lang::Terms('3Message'); ?></li>
        </ol>

        <br>

        <h3><?php echo Lang::Terms('4Title'); ?></h3>
        <ol type="a">
            <li><?php echo Lang::Terms('4Message'); ?></li>
        </ol>

        <br>

        <h3><?php echo Lang::Terms('5Title'); ?></h3>
        <ol type="a">
            <li><?php echo Lang::Terms('5Message'); ?></li>
        </ol>

        <br>

        <h3><?php echo Lang::Terms('6Title'); ?></h3>
        <ol type="a">
            <li><?php echo Lang::Terms('6Message'); ?></li>
        </ol>

        <br>

        <h3><?php echo Lang::Terms('7Title'); ?></h3>
        <ol type="a">
            <li><?php echo Lang::Terms('7Message'); ?></li>
        </ol>

        <br>

        <h3><?php echo Lang::Terms('8Title'); ?></h3>
        <ol type="a">
            <li><?php echo Lang::Terms('8Message'); ?></li>
        </ol>

        <br>

        <h3><?php echo Lang::Terms('9Title'); ?></h3>
        <p><?php echo Lang::Terms('9MessageA'); ?></p>

        <ol type="a">
            <?php echo Lang::Terms('9MessageB'); ?></li>
        </ol>

        <br>

        <h3><?php echo Lang::Terms('10Title'); ?></h3>
        <p><?php echo Lang::Terms('10MessageA'); ?></p>
        <ol type="a">
            <?php echo Lang::Terms('10MessageB'); ?>
        </ol>

        <br>

        <p><?php echo Lang::Terms('10MessageC'); ?></p>
    </div>
</body>
</html>