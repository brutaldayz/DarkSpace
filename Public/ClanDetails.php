
    <?php
        if(!isset($Page[2])) Functions::router('ClanJoin');
        $Row = Clan::ClanDetails($Page[2]);
        if($Player->Data['clanID'] != 0 && $Player->Data['clanID'] == $Row['clanID']) Functions::router('Clan'); 
    ?>

    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('SERVER_URL'); ?>Assets/Css/Clan.min.css" />

    <div class="spacer-40"></div>
    
    <div class="container">

        <?php require_once('GLOBAL/Data.php'); ?>

        <div class="spacer-10"></div>

        <div class="col-md-12">
            <div class="row rb-panel">
            <div class="col-md-12 clan-panel clan-main mb-3">
                    <img class="clan-logo mr-2" style="float: left;" src="<?php echo Config::Get('SERVER_URL'); ?>Upload/Clans/<?php echo $Row['profile']; ?>" width="100" height="100">
                    <table class="full-width" style="max-width: 70%;">
                        <tr>
                            <td><?php echo Lang::Get('ClanNameTag'); ?></td>
                            <td id="clanNameTag">: <?php echo $Row['name']; ?> [<?php echo $Row['tag']; ?>]</td>
                        </tr>
                        <tr>
                            <td><?php echo Lang::Get('ClanLeader'); ?></td>
                            <td>: <?php echo Functions::getShipName($Row['leaderID']); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo Lang::Get('ClanMembers'); ?></td>
                            <td>: <?php echo Clan::GetMemberCount($Row['clanID']); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo Lang::Get('ClanRank'); ?></td>
                            <td>: <?php echo $Row['rank']; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="full-width">

                    <?php

                        if($Player->Data['clanID'] != 0){

                    ?>

                    <div class="row mb-2">
                        <div class="col-md-6"><textarea cols="30" rows="10" class="full-width clan-details clan-description" disabled><?php echo $Row['description']; ?></textarea></div>
                        <div class="col-md-6"><textarea cols="30" rows="10" class="full-width clan-details clan-application" placeholder="<?php echo Lang::Get('ClanDetailsHaveClan'); ?>" disabled></textarea></div>
                    </div>

                    <?php }else{ ?>

                        <?php 
                            $AppControl = Database::Connection()->query("SELECT * FROM server_clan_applications WHERE clanID = ".$Row['clanID']." AND userID = ".$Player->Data['userID']."");
                            if($AppControl->rowCount() == 0){
                        ?>

                        <div class="row mb-2">
                            <div class="col-md-6"><textarea cols="30" rows="10" class="full-width clan-details clan-description" disabled><?php echo $Row['description']; ?></textarea></div>
                            <div class="col-md-6"><textarea cols="30" rows="10" class="full-width clan-details clan-application" placeholder="<?php echo Lang::Get('ClanDetailsEnterApp'); ?>"></textarea></div>
                        </div>

                        <button type="button" id="sendApplication" class="btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('Send'); ?></button>

                        <script>
                            $("#sendApplication").click(function(){
                                $.ajax({
                                    type: 'POST',
                                    url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Clan/ClanJoin.php',
                                    data: {"Param1": $(".clan-application").val(), "Param2": "<?php echo base64_encode(base64_encode(base64_encode(base64_encode($Page[2])))); ?>"},
                                    success: function(resultData){
                                        if(resultData.error) swal('<?php echo Lang::Get('Error'); ?>!', resultData.msg, 'error');
                                        else{
                                            swal('<?php echo Lang::Get('Successful'); ?>!', resultData.msg, 'success')
                                            .then((value) => {
                                                location.reload();
                                            });
                                        }
                                    }
                                });
                            });
                        </script>

                        <?php }elseif($AppControl->rowCount() != 0){ ?>

                        <div class="row mb-2">
                            <div class="col-md-6"><textarea cols="30" rows="10" class="full-width clan-details clan-description" disabled><?php echo $Row['description']; ?></textarea></div>
                            <div class="col-md-6"><textarea cols="30" rows="10" class="full-width clan-details clan-application" placeholder="<?php echo Lang::Get('ClanDetailsPending'); ?>" disabled></textarea></div>
                        </div>

                        <button type="button" id="deleteApplication" class="btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('ClanDetailsDeleteApp'); ?></button>

                        <script>
                            $("#deleteApplication").click(function(){
                                $.ajax({
                                    type: 'POST',
                                    url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Clan/DeleteApplication.php',
                                    data: {"Param1": "<?php echo base64_encode(base64_encode(base64_encode(base64_encode($Page[2])))); ?>"},
                                    success: function(resultData){
                                        if(resultData.error) swal('<?php echo Lang::Get('Error'); ?>!', resultData.msg, 'error');
                                        else{
                                            swal('<?php echo Lang::Get('Successful'); ?>!', resultData.msg, 'success')
                                            .then((value) => {
                                                location.reload();
                                            });
                                        }
                                    }
                                });
                            });
                        </script>

                    <?php }} ?>
                </div>
            </div>
        </div>
    </div>

    <div class="spacer-10"></div>