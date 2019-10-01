<?php Clan::CheckClan(2); ?>

    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('SERVER_URL'); ?>Assets/Css/Clan.min.css" />

    <div class="spacer-40"></div>
    
    <div class="container">

        <?php require_once('GLOBAL/Data.php'); ?>

        <div class="spacer-10"></div>

        <div class="col-md-12">
            <div class="row rb-panel clan-member-panel">
                <?php
                    $db = Database::Connection();
                    $Clan = Clan::GetClan($Player->Data['clanID']);
                    $Members = $db->query("SELECT members FROM server_clan WHERE clanID = {$Player->Data['clanID']}")->fetch()['members'];
                    foreach (json_decode($Members) as $Row) {
                ?>

                <table class="full-width mb-2 clan-member">
                    <tr>
                        <td class="col-md-4 clan-member-line rb-text"><?php echo Functions::getUserData('player_accounts', 'userID', $Row->userID, 'shipName'); ?></td>
                        <td class="col-md-4 clan-member-line"><?php echo Lang::Get('Joined'); ?>: <?php echo Functions::ConvertDate($Row->date); ?></td>
                        <td class="col-md-4 clan-member-line"><?php $FactionID = Functions::getUserData('player_accounts', 'userID', $Row->userID, 'factionID'); if($FactionID == 1){ echo 'MMO'; }elseif($FactionID == 2){ echo 'EIC'; }else{ echo 'VRU'; } ?></td>
                    </tr>
                    <tr>
                        <td class="col-md-4 clan-member-line"><?php echo Lang::Get('Exp'); ?>: <?php echo number_format(Functions::getJsonData($Row->userID,'Data', 'experience')); ?></td>
                        <td class="col-md-4 clan-member-line"><?php echo Lang::Get('Function'); ?>: <?php if($Row->userID != $Clan['leaderID']){ echo "-"; }else{ echo Lang::Get('Leader'); } ?></td>
                        <td class="col-md-4 clan-member-line">
                            <?php
                                if($Player->Data['userID'] != $Clan['leaderID'] && $Player->Data['userID'] == $Row->userID){
                                    echo "<a href='javascript:;' id='leaveClan' class='rb-text'>".Lang::Get('LeaveClan')."</a>";
                                }else if($Player->Data['userID'] == $Clan['leaderID'] && $Player->Data['userID'] != $Row->userID){
                                    echo "<a href='javascript:;' onclick = 'kickUser(\"".base64_encode(base64_encode(base64_encode(base64_encode($Row->userID))))."\");' id='kickUser' class='rb-text'>".Lang::Get('DissmissClanMember')."</a>";
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-md-4 clan-member-line"><?php echo Lang::Get('Rank'); ?>: <?php echo Lang::Rank(Functions::getUserData('player_accounts', 'userID', $Row->userID, 'rankID'), (isset($_COOKIE['LANGUAGE']) ? $_COOKIE['LANGUAGE'] : 'en')); ?></td>
                        <td class="col-md-4 clan-member-line"><?php echo Lang::Get('Position'); ?>: <?php echo Lang::Map(Functions::getJsonData($Row->userID,'Info', 'MapID')); ?></td>
                        <td class="col-md-4 clan-member-line">
                                <?php
                                    if($Player->Data['userID'] == $Clan['leaderID'] && $Player->Data['userID'] == $Row->userID){
                                        echo "<a href='javascript:;' id='deleteClan' class='rb-text'>".Lang::Get('DeleteClan')."</a>";
                                    }else if($Player->Data['userID'] == $Clan['leaderID'] && $Player->Data['userID'] != $Row->userID){
                                        echo "<a href='javascript:;' onclick='changeLeader(\"".base64_encode(base64_encode(base64_encode(base64_encode($Row->userID))))."\");' class='rb-text'>".Lang::Get('TransferLeadership')."</a>";
                                    }
                                ?>
                        </td>
                    </tr>
                </table>

                <?php } ?>
            </div>
        </div>

        <div class="spacer-10"></div>

        <?php if($Player->Data['userID'] == $Clan['leaderID']){ ?>

        <div class="modal fade" id="ClanDeleteModal" tabindex="-1" role="dialog" aria-labelledby="ClanDeleteModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="col-md-12 modal-title text-center"></h5>
                    </div>
                    <div class="modal-body"><?php echo Lang::Get('ClanDeleteMessage'); ?></div>
                    <div class="modal-footer">
                        <button type="button" class="btn modal-button waves-effect waves-light" data-dismiss="modal"><?php echo Lang::Get('Close'); ?></button>
                        <button type="button" id="deleteClanConfirm" class="btn btn-success waves-effect waves-light" data-dismiss="modal"><?php echo Lang::Get('Accept'); ?></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="kickUserModal" tabindex="-1" role="dialog" aria-labelledby="kickUserModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="col-md-12 modal-title text-center"></h5>
                    </div>
                    <div class="modal-body">
                    <?php echo Lang::Get('PlayerKickMessage'); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn modal-button waves-effect waves-light" data-dismiss="modal"><?php echo Lang::Get('Close'); ?></button>
                        <button type="button" id="kickUserConfirm" class="btn btn-success waves-effect waves-light" data-dismiss="modal"><?php echo Lang::Get('Accept'); ?></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="changeLeaderModal" tabindex="-1" role="dialog" aria-labelledby="changeLeaderModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="col-md-12 modal-title text-center"></h5>
                    </div>
                    <div class="modal-body">
                    <?php echo Lang::Get('TransferLMessage'); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn modal-button waves-effect waves-light" data-dismiss="modal"><?php echo Lang::Get('Close'); ?></button>
                        <button type="button" id="changeLeaderConfirm" class="btn btn-success waves-effect waves-light" data-dismiss="modal"><?php echo Lang::Get('Accept'); ?></button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $("#deleteClan").click(function(){
                $("#ClanDeleteModal").modal();
            });
            $("#deleteClanConfirm").click(function(){
                $.ajax({
                    type: 'POST',
                    url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Clan/DeleteClan.php',
                    success: function(resultData){
                        if(resultData.error) swal('<?php echo Lang::Get('Error'); ?>!', resultData.msg, 'error');
                        else window.location.href = "<?php echo Config::Get('SERVER_URL'); ?>ClanJoin";
                    }
                });
            });
            var Kick = "";
            function kickUser(Param1){
                Kick = Param1;
                $("#kickUserModal").modal();
            }
            $("#kickUserConfirm").click(function(){
                $.ajax({
                    type: 'POST',
                    url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Clan/KickUser.php',
                    data: {"Param1": Kick},
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
            var Leader = "";
            function changeLeader(Param1){
                Leader = Param1;
                $("#changeLeaderModal").modal();
            }
            $("#changeLeaderConfirm").click(function(){
                $.ajax({
                    type: 'POST',
                    url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Clan/ChangeLeader.php',
                    data: {"Param1": Leader},
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

        <?php $appCount = $db->query("SELECT * FROM server_clan_applications WHERE clanID = {$Clan['clanID']}"); if($appCount->rowCount() != 0){ ?>

        <div class="col-md-12">
            <div class="row rb-panel clan-member-app-panel">
                <?php $query = $appCount->fetchAll(PDO::FETCH_OBJ); foreach ($query as $value) { ?>
 
                <table class="full-width mb-2 clan-member">
                    <tr>
                        <td class="col-md-4 clan-member-line rb-text"><?php echo Functions::getUserData('player_accounts', 'userID', $value->userID, 'shipName'); ?></td>
                        <td class="col-md-4 clan-member-line"><?php echo Lang::Get('Level'); ?>: <?php echo Functions::getUserData('player_accounts', 'userID', $value->userID, 'level'); ?></td>
                        <td class="col-md-4 clan-member-line"><?php echo Lang::Get('Date'); ?>: <?php echo Functions::ConvertDate($value->date); ?></td>
                    </tr>
                    <tr>
                        <td class="col-md-4 clan-member-line"><?php echo Lang::Get('Exp'); ?>: <?php echo number_format(Functions::getJsonData($value->userID,'Data', 'experience')); ?></td>
                        <td class="col-md-4 clan-member-line"><?php $FactionID = Functions::getUserData('player_accounts', 'userID', $value->userID, 'factionID'); if($FactionID == 1){ echo 'MMO'; }elseif($FactionID == 2){ echo 'EIC'; }else{ echo 'VRU'; } ?></td>
                        <td class="col-md-4 clan-member-line"><a class="rb-text" href="javascript:;" id="seeApplication" onclick="seeApplication('<?php echo base64_encode(base64_encode(base64_encode(base64_encode($value->applicationID)))); ?>');"><?php echo Lang::Get('See'); ?></a></td>
                    </tr>
                </table>

                <?php } ?>

                <div class="modal fade" id="memberApplication" tabindex="-1" role="dialog" aria-labelledby="memberApplicationTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="col-md-12 modal-title text-center Param1"></h5>
                            </div>
                            <div class="modal-body Param2"></div>
                            <input class="Param3" type="hidden">
                            <div class="modal-footer">
                                <button type="button" class="btn modal-button waves-effect waves-light" data-dismiss="modal"><?php echo Lang::Get('Close'); ?></button>
                                <button type="button" id="declineApp" class="btn btn-danger waves-effect waves-light" data-dismiss="modal"><?php echo Lang::Get('Decline'); ?></button>
                                <button type="button" id="acceptApp" class="btn btn-success waves-effect waves-light" data-dismiss="modal"><?php echo Lang::Get('Accept'); ?></button>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    function seeApplication(Param1){
                        $.ajax({
                            type: 'POST',
                            url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Clan/GetApplication.php',
                            data: {"Param1": Param1},
                            success: function(resultData){
                                $(".Param1").text(resultData.Param1);
                                $(".Param2").text(resultData.Param2);
                                $(".Param3").val(resultData.Param3);
                                $("#memberApplication").modal();
                            }
                        });
                    }

                    $("#acceptApp").click(function(){
                        $.ajax({
                            type: 'POST',
                            url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Clan/AcceptApplication.php',
                            data: {"Param1": $(".Param3").val()},
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

                    $("#declineApp").click(function(){
                        $.ajax({
                            type: 'POST',
                            url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Clan/DeclineApplication.php',
                            data: {"Param1": $(".Param3").val()},
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

            </div>
        </div>

        <div class="spacer-10"></div> <?php }}else{ ?>

            <div class="modal fade" id="leaveClanModal" tabindex="-1" role="dialog" aria-labelledby="leaveClanModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="col-md-12 modal-title text-center"></h5>
                        </div>
                        <div class="modal-body"><?php echo Lang::Get('LeaveClanMessage'); ?></div>
                        <div class="modal-footer">
                            <button type="button" class="btn modal-button waves-effect waves-light" data-dismiss="modal"><?php echo Lang::Get('Close'); ?></button>
                            <button type="button" id="confirmLeaveClan" class="btn btn-success waves-effect waves-light" data-dismiss="modal"><?php echo Lang::Get('Accept'); ?></button>
                        </div>
                    </div>
                </div>
            </div>

        <script>
            $("#leaveClan").click(function(){
                $("#leaveClanModal").modal();
            });
            $("#confirmLeaveClan").click(function(){
                $.ajax({
                    type: 'POST',
                    url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Clan/LeaveClan.php',
                    success: function(resultData){
                        if(resultData.error) swal('<?php echo Lang::Get('Error'); ?>!', resultData.msg, 'error');
                        else window.location.href = "<?php echo Config::Get('SERVER_URL'); ?>ClanJoin";
                    }
                });
            });
        </script>

        <?php } ?>
    </div>

    <div class="spacer-10"></div>