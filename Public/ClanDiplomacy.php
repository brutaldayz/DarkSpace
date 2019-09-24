

    <?php Clan::CheckClan(2); $Clan = Clan::GetClan($Player->Data['clanID']); $db = Database::Connection(); ?>

    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('SERVER_URL'); ?>Assets/Css/Clan.min.css" />

    <div class="spacer-40"></div>
    
    <div class="container">

        <?php require_once('GLOBAL/Data.php'); ?>

        <div class="spacer-10"></div>

        <?php
                    $Query = $db->query("SELECT * FROM server_clan_diplomacy WHERE senderClan = {$Player->Data['clanID']} OR toClan = {$Player->Data['clanID']}");

                    if($Query->rowCount() != 0){ ?>
        <div class="col-md-12">
            <div class="row rb-panel clan-diplomacy-panel">
                <h4 class="col-md-12 text-center mb-4"><?php echo Lang::Get('ClanDiplomacy'); ?></h4>
                <?php
                    $Query = $Query->fetchAll();

                    foreach( $Query as $row ){
                    if($row['senderClan'] == $Player->Data['clanID']){ $Target = $row['toClan']; }else{ $Target = $row['senderClan']; }
                ?>
                <table class="full-width mb-2 clan-diplomacy">
                    <tr>
                        <td class="col-md-3 clan-diplomacy-line rb-text">[<?php echo Clan::GetClanData($Target, 'tag'); ?>] <?php echo Clan::GetClanData($Target, 'name'); ?></td>
                        <td class="col-md-3 clan-diplomacy-line"><?php echo Clan::GetRelation($row['diplomacyType']); ?></td>
                        <td class="col-md-3 clan-diplomacy-line"><?php echo Functions::ConvertDate($row['Date']); ?></td>
                    <?php if($Player->Data['userID'] == $Clan['leaderID']){ ?><td class="col-md-3 clan-diplomacy-line"><a href="javascript:;" onclick="deleteCurrentDiplomacy('<?php echo base64_encode(base64_encode(base64_encode(base64_encode($row['ID'])))); ?>');"><?php echo Lang::Get('Delete'); ?></a></td><?php } ?>
                    </tr>
                </table>
                <?php } ?>
            </div>
        </div>
        <?php } ?>

        <?php if($Player->Data['userID'] == $Clan['leaderID']){ ?>

        <script>
            function deleteCurrentDiplomacy(Param1){
                $.ajax({
                    type: 'POST',
                    url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Clan/DeleteCurrentDiplomacy.php',
                    data: {"Param1": Param1},
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
            }
        </script>

        <div class="spacer-10"></div>

        <?php $get_requests = $db->query("SELECT * FROM server_clan_diplomacy_applications WHERE toClan = {$Player->Data['clanID']}");
                    if($get_requests->rowCount() != 0){
                    $get_requests = $get_requests->fetchAll(); ?>

        <div class="col-md-12">
            <div class="row rb-panel clan-diplomacy-request-panel">
                <h4 class="col-md-12 text-center mb-4"><?php echo Lang::Get('Requests'); ?></h4>
                <?php 
                    foreach ($get_requests as $value) {
                ?>
                <table class="full-width mb-2 clan-diplomacy">
                    <tr>
                        <td class="col-md-3 clan-diplomacy-line rb-text">[<?php echo Clan::GetClanData($value['senderClan'], 'tag'); ?>] <?php echo Clan::GetClanData($value['senderClan'], 'name'); ?></td>
                        <td class="col-md-3 clan-diplomacy-line"><?php echo Clan::GetRelation($value['diplomacyType']); ?></td>
                        <td class="col-md-3 clan-diplomacy-line"><?php echo Functions::ConvertDate($value['date']); ?></td>
                        <td class="col-md-3 clan-diplomacy-line"><a href="javascript:;" onclick="deleteRequestDiplomacy('<?php echo base64_encode(base64_encode(base64_encode(base64_encode($value['ID'])))); ?>');"><?php echo Lang::Get('Delete'); ?></a> <a href="javascript:;" class="ml-5" onclick="acceptRequestDiplomacy('<?php echo base64_encode(base64_encode(base64_encode(base64_encode($value['ID'])))); ?>');"><?php echo Lang::Get('Accept'); ?></a></td>
                    </tr>
                </table>
                <?php } ?>
            </div>
        </div>

        <script>
            function deleteRequestDiplomacy(Param1){
                $.ajax({
                    type: 'POST',
                    url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Clan/DeleteDiplomacyRequest.php',
                    data: {"Param1": Param1},
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
            }
            function acceptRequestDiplomacy(Param1){
                $.ajax({
                    type: 'POST',
                    url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Clan/AcceptDiplomacyRequest.php',
                    data: {"Param1": Param1},
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
            }
        </script>

        <?php } ?>

        <div class="spacer-10"></div>

        <div class="col-md-12">
            <div class="row rb-panel clan-diplomacy-panel">
                <h4 class="col-md-12 text-center mb-4"><?php echo Lang::Get('RequestDiplomacy'); ?></h4>
                <div class="full-width mb-3">
                    <input type="text" class="clan-input full-width clanSearch-input" placeholder="<?php echo Lang::Get('ClanSearch'); ?>">
                    <button id="clanSearch" class="mt-2 btn rb-button waves-effect waves-light" type="button"><?php echo Lang::Get('Search'); ?></button>
                    <?php $get_my_requests = $db->query("SELECT * FROM server_clan_diplomacy_applications WHERE senderClan = {$Player->Data['clanID']}"); if($get_my_requests->rowCount() != 0){ ?>
                    <button id="showMyRequests" class="mt-2 btn rb-button waves-effect waves-light" type="button"><?php echo Lang::Get('OpenApplications'); ?></button> <?php } ?>
                </div>

                <div class="full-width clanResults" style="display: none;"></div>
            </div>
        </div>

        <div class="modal fade" id="myDiplomacyRequests" tabindex="-1" role="dialog" aria-labelledby="myDiplomacyRequestsTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="col-md-12 modal-title text-center"><?php echo Lang::Get('OpenApplications'); ?></h5>
                    </div>
                    <div class="modal-body">
                        <?php
                            if($get_my_requests->rowCount() != 0){
                            
                                foreach ($get_my_requests as $value) {
                        ?>
                        <table class="full-width mb-2 clan-diplomacy">
                            <tr>
                                <td class="col-md-3 clan-diplomacy-line rb-text">[<?php echo Clan::GetClanData($value['senderClan'], 'tag'); ?>] <?php echo Clan::GetClanData($value['senderClan'], 'name'); ?></td>
                                <td class="col-md-3 clan-diplomacy-line"><?php echo Clan::GetRelation($value['diplomacyType']); ?></td>
                                <td class="col-md-3 clan-diplomacy-line"><?php echo Functions::ConvertDate($value['date']); ?></td>
                                <td class="col-md-3 clan-diplomacy-line"><a href="javascript:;" onclick="deleteMyRequest('<?php echo base64_encode(base64_encode(base64_encode(base64_encode($value['ID'])))); ?>');"><?php echo Lang::Get('Delete'); ?></a></td>
                            </tr>
                        </table>
                        <?php }} ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn modal-button waves-effect waves-light" data-dismiss="modal"><?php echo Lang::Get('Close'); ?></button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $("#showMyRequests").click(function(){
                $("#myDiplomacyRequests").modal();
            });
            function deleteMyRequest(Param1){
                $.ajax({
                    type: 'POST',
                    url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Clan/DeleteMyDiplomacy.php',
                    data: {"Param1": Param1},
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
            }
        </script>

        <script>
            $("#clanSearch").click(function(){
                $.ajax({
                    type: 'POST',
                    url: '/Ajax/Clan/ClanDiplomacySearch.php',
                    data: {"Param1": $(".clanSearch-input").val()},
                    success: function(resultData){
                        $(".clanResults").html(resultData);
                        $(".clanResults").css('display', 'block');
                    }
                });
            });
            function showDiplomacyBox(Param1){
                if ($(".diplomacyBox_" + Param1).is(':visible')) {
                    $(".diplomacyBox_" + Param1).css('display', 'none');
                } else $(".diplomacyBox_" + Param1).css('display', 'table-row');
            }
            function sendDiplomacy(Param1){
                $.ajax({
                    type: 'POST',
                    url: '/Ajax/Clan/ClanDiplomacySend.php',
                    data: {"Param1": Param1, "Param2": $("#clanDiplomacySelect_" + Param1).val()},
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
            }
        </script>

        <?php } ?>
    </div>

    <div class="spacer-10"></div>