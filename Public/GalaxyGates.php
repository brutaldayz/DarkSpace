<div class="spacer-40"></div>

    <div class="container">

        <?php require_once('GLOBAL/Data.php'); ?>

        <script type="text/javascript" src="<?php echo Config::Get('SERVER_URL'); ?>Assets/Js/jquery.flashembed.js"></script>

        <div class="spacer-10"></div>

        <div class="col-md-12 text-center">
            <div class="row rb-panel">
                <div id="gatebuilder" style="width: 100%;">
                    <div id="flashFailWebsite" style="display: none;">
                        <div class="flashFailHeadSmall">Get the Adobe Flash Player</div>
                        <div class="flashFailHeadTextSmall">
                            In order to play DarkOrbit, you need the latest version of Flash Player. Just install it to start playing!
                            <div class="flashFailHeadLinkSmall">Download the Flash Player here for free: <a href="http://www.adobe.com/go/getflashplayer" style="text-decoration: underline; color:#A0A0A0;">Download Flash Player</a></div>
                        </div>
                        <img class="enableFlashChromeSmall" src="https://darkorbit-22.bpsecure.com/do_img/global/enable_flash_chrome.gif?__cv=aa379971de325142bf2f3360bbf5eb00" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">


    function onFailFlashembed() {
        if (getBrowser() == "chrome") {
            jQuery("img.enableFlashChromeSmall").show();
        } else {
            jQuery("#flashFailWebsite").addClass("notChrome");
        }
        jQuery("#flashFailWebsite").show();
    }

    function getBrowser()
    {
        const agent = (window.navigator.userAgent.toLowerCase());
        switch(true){
            case agent.indexOf("edge") > -1: return "edge";
            case agent.indexOf("opr") > -1 && !!window.opr: return "opera";
            case agent.indexOf("chrome") > -1 && !!window.chrome: return "chrome";
            case agent.indexOf("trident") > -1: return "ie";
            case agent.indexOf("firefox") > -1: return "firefox";
            case agent.indexOf("safari") > -1: return "safari";
            default: return "other";
        }
    }

    function isVideoAvailable() {
    	return (window.BrandCinema && BrandCinema.isVideoAvailable());
    }

    function showVideo() {
        if (!window.BrandCinema) {
            return false;
        }

        BrandCinema.showVideo('galaxyGates_spin');
    }

    jQuery(document).ready(function(){
        flashembed("gatebuilder", {"src": "<?php echo Config::Get('SERVER_URL'); ?>swf_global/gatebuilder.swf?__cv=12aad5cf925903d076a079d0848eff00","version": [10,0],"expressInstall": "<?php echo Config::Get('SERVER_URL'); ?>swf_global/expressInstall.swf?__cv=93c5ee756f6d00a09159ecadd5e61c00","onFail": function(){ onFailFlashembed(); },"width": 786,"height": 395,"id": "flashGG","wmode": "transparent"}, {"cdn": "<?php echo Config::Get('SERVER_URL'); ?>","nosid": "1","eventItemEnabled": "","supporturl": "indexInternal.es%3Faction%3Dsupport%26back%3DinternalStart","jackpot": "10,000.00 EUR","uridium_highlighted": "","serverdesc": "Global America 5","server_code": "1","lang": "en","uid": "<?php echo $Player->Data['userID']; ?>","assetsConfigCV": "569f6e644aa86c808ebaab5d86d94a00","resourceItemsCV": "95052131774e5c99ba56c0e415e96300","sid": "<?php echo $Player->Data['sessionID']; ?>","useDeviceFonts": "0","languageXmlHash": "ab6bff439925b14a287def876298e900","videoAvailable": "0"});
    });


    </script>





    <div class="spacer-10"></div>
