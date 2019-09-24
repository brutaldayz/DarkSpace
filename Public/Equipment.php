
    <div class="spacer-40"></div>

    <script type="text/javascript" src="<?php echo Config::Get('SERVER_URL'); ?>Assets/Js/jquery.flashembed.js"></script>
    
    <div class="container">

        <?php require_once('GLOBAL/Data.php'); ?>

        <div class="spacer-10"></div>

        <div class="col-md-12 rb-panel">
            <div class="text-center" id="equipment_container"></div>
        </div>

        <script type='text/javascript'>
            function onFailFlashembed() {
				var html = '';

				html += '<div id="flashFail">';
				html += '<div class="flashFailHead">Get the Adobe Flash Player</div>';
				html += '<div class="flashFailHeadText">';
				html += 'In order to play DarkSpace, you need the latest version of Flash Player. Just install it to start playing!';
				html += '<div class="flashFailHeadLink">';
				html += 'Download the Flash Player here for free: <a href=\"http://www.adobe.com/go/getflashplayer\" style=\"text-decoration: underline; color:#A0A0A0;\">Download Flash Player<\/a>';
				html += '</div>';
				html += '</div>';
				html += '</div>';

				jQuery('#equipment_container').html(html);
			}

			function expressInstallCallback(info) {
				onFailFlashembed();
			}

            jQuery(document).ready(
                function(){
                    flashembed("equipment_container", {"onFail": onFailFlashembed, "src": "<?php echo Config::Get('SERVER_URL'); ?>swf_global/inventory/inventory.swf","version": [10,0],"expressInstall": "<?php echo Config::Get('SERVER_URL'); ?>swf_global/expressInstall.swf?__cv=93c5ee756f6d00a09159ecadd5e61c00","onFail": function(){ onFailFlashembed(); },"width": 770,"height": 395,"id": "inventory","wmode": "transparent"}, {"cdn": "<?php echo Config::Get('SERVER_URL'); ?>","nosid": "1","navPoint": "2","eventItemEnabled": "","supporturl": "indexInternal.es%3Faction%3Dsupport%26back%3DinternalStart","serverdesc": "Scandinavia 2","server_code": "1","jackpot": "12.39 EUR","uridium_highlighted": "","lang": "en","sid": "<?php echo $Player->Data['sessionID']; ?>","locale_hash": "","dynamicHost": "<?php echo Config::Get('SERVER_HOST'); ?>","menu_layout_config_hash": "","assets_config_hash": "","items_config_hash": "","useDeviceFonts": "0"});
                }
            );
        </script>
    </div>

    <div class="spacer-10"></div>