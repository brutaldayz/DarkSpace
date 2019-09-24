<?php
    require_once('System/Minimize.php');
    //TODO: Rank System
?>
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
    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('CSS'); ?>MapRevolution.css" />

    <!-- Include JS -->
    <script type="text/javascript" src="<?php echo Config::Get('JS'); ?>jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo Config::Get('JS'); ?>jquery.js"></script>
    <script type="text/javascript" src="<?php echo Config::Get('JS'); ?>jquery.flashembed.js"></script>
    <script type="text/javascript" src="<?php echo Config::Get('JS'); ?>MapRevolution.js"></script>
</head>
<body>

    <div id="container"></div>

    <script type="text/javascript">
        function onFailFlashembed() {
            var html = '';
            html += '<div id="flashFail">';
            html += '<div class="flashFailHead">Get the Adobe Flash Player</div>';
            html += '<div class="flashFailHeadText">';
            html += 'In order to play <?php echo Config::Get('SERVER_NAME'); ?>, you need the latest version of Flash Player. Just install it to start playing!';
            html += '<div class="flashFailHeadLink">';
            html += 'Download the Flash Player here for free: <a href=\"http://www.adobe.com/go/getflashplayer\" style=\"text-decoration: underline; color:#b1b1e8;\">Download Flash Player<\/a>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            jQuery('#container').html(html);
        }

        function expressInstallCallback(info) {
            onFailFlashembed();
        }

        <?php ob_end_flush(); ?>

        jQuery(document).ready(function(){
            var aFlashVersion = flashembed.getVersion();
            if(!Object.keys) Object.keys = function(o){
                if (o !== Object(o))
                    throw new TypeError('Object.keys called on non-object');
                var ret=[],p;
                for(p in o) if(Object.prototype.hasOwnProperty.call(o,p)) ret.push(p);
                    return ret;
            }
            var sParam = '[' + '"jQuery.flashEmbed"' + ',"' + aFlashVersion[0] + "." +aFlashVersion[1] + '"' + ',"' + Object.keys(jQuery.browser)[0] + '"]';
            var data = {"action": "setClientBrowserConfig", "params": sParam, "isEncodeMessage":0}

            jQuery.post('<?php echo Config::Get('SERVER_URL'); ?>flashAPI/loadingScreen.php', data, function(data) {});
            flashembed("container", {"onFail": onFailFlashembed, "src": "<?php echo Config::Get('SERVER_URL'); ?>spacemap/preloader.swf","version": [11,0],"expressInstall": "<?php echo Config::Get('SERVER_URL'); ?>swf_global/expressInstall.swf","width": "100%","height": "100%","wmode": "direct","bgcolor": "#000000","id": "preloader","allowfullscreen": "true","allowFullScreenInteractive": "true"}, {"lang": "<?php echo (isset($_COOKIE['LANGUAGE']) ? $_COOKIE['LANGUAGE'] : 'en'); ?>","userID": "<?php echo $Player->Data['userID']; ?>","sessionID": "<?php echo $Player->Data['sessionID']; ?>","basePath": "spacemap","pid": "563","boardLink": "","helpLink": "","loadingClaim": "LOADING","chatHost": "<?php echo Config::Get('SERVER_HOST'); ?>","cdn": "","useHash": "0","host": "<?php echo Config::Get('SERVER_HOST'); ?>","browser": "Firefox","Chrome": "1","gameXmlHash": "","resourcesXmlHash": "","profileXmlHash": "","languageXmlHash": "","loadingscreenHash": "","gameclientHash": "","gameclientPath": "spacemap","loadingscreenAssetsXmlHash": "","showAdvertisingHint": "","gameclientAllowedInitDelay": "10","eventStreamContext": "","useDeviceFonts": "0","display2d": "<?php echo $Player->Data['Version']; ?>","autoStartEnabled": "<?php echo (int)$Player->getSettings('gameplay','autoStartEnabled', 1); ?>","mapID": "<?php echo $Player->GetData('Info','MapID'); ?>","allowChat": "<?php echo (int)$Player->getSettings('display','displayChat', 1); ?>"});
        });
    </script>
</body>
</html>