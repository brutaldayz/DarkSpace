
    <?php User::checkUser($Page[2]); $Account = User::getAccount($Page[2]); $db = Database::Connection(); ?>
    <script type="text/javascript" src="<?php echo Config::Get('SERVER_URL'); ?>Assets/Js/jquery.flashembed.js"></script>
    <div class="spacer-40"></div>

    <?php
        $Ship = $db->query("SELECT * FROM server_ships WHERE shipID = {$Account['shipID']}")->fetch(PDO::FETCH_OBJ);
    ?>
    
    <div class="container">

        <?php require_once('GLOBAL/Data.php'); ?>

        <div class="spacer-10"></div>

        <div class="full-width mb-2">
            <div class="rb-panel user-panel p-4">
                <div class="avatar" style="background:url('<?php echo Config::Get('SERVER_URL'); ?>Upload/Players/Avatar.png');"></div>
                <div class="infos">
                    <div class="shipName pb-2"><?php echo $Account['shipName']; ?></div>
                    <label><?php echo Lang::Get('NavClan'); ?>:</label> <?php echo ($Account['clanID'] != 0) ? ''.Clan::MyClan($Account['clanID'], 'name').'' : ''.Lang::Get('DontHaveClan').''; ?><br>
                    <label><?php echo Lang::Get('Rank'); ?>:</label> <img src="<?php echo Config::Get('DO_IMG'); ?>global/ranks/rank_<?php echo $Account['rankID']; ?>.png"> <?php echo Lang::Rank($Account['rankID']); ?><br>
                    <label><?php echo Lang::Get('Level'); ?>:</label> <?php echo $Account['level']; ?></i>
                </div>
            </div>
        </div>

        <div class="full-width">
            <div id="videoPlayer" style="height: 225px;"></div>
        </div>

        <script type="text/javascript">
            jQuery(document).ready( function () {
                var videoFlashVars = jQuery.parseJSON('{"ship":{"id":"<?php echo $Ship->lootID; ?>","id_hash":"","bg":"ship_ship_bg","bg_hash":""},"drone":{"id":"<?php echo $Drone; ?>","id_hash":"","bg":"drone_drone_bg","bg_hash":""}<?php if($Pet == true) echo ',"pet":{"id":"pet_pet10-15","bg":"pet_pet_bg","id_hash":"","bg_hash":""}'; ?>,"server":{"host":"<?php echo Config::Get('SERVER_URL'); ?>","cdn":"<?php echo Config::Get('SERVER_URL'); ?>","basepath":{"item":"/do_img/global/items/","background":"/do_img/global/pilotSheet/videoplayer/background/"}}}');
                flashembed("videoPlayer", {src: "<?php echo Config::Get('SERVER_URL'); ?>resources/videoplayer/main.swf", wmode: 'transparent'}, {"flashVars": videoFlashVars});
            });
        </script>
    </div>

    <div class="spacer-10"></div>