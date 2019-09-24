
    <?php 
        Clan::CheckClan(2);
        $Clan = Clan::GetClan($Player->Data['clanID']); 
    ?>

    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('SERVER_URL'); ?>Assets/Css/Clan.min.css" />

    <div class="spacer-40"></div>
    
    <div class="container">

        <?php require_once('GLOBAL/Data.php'); ?>
        
        <div class="spacer-10"></div>

        <div class="col-md-12">
            <div class="row rb-panel">
                <div class="col-md-12 clan-panel clan-main mb-3">
                    <img class="clan-logo mr-2" style="float: left;" src="<?php echo Config::Get('SERVER_URL'); ?>Upload/Clans/<?php echo $Clan['profile']; ?>" width="100" height="100">
                    <table class="full-width" style="max-width: 70%;">
                        <tr>
                            <td><?php echo Lang::Get('ClanNameTag'); ?></td>
                            <td id="clanNameTag">: <?php echo $Clan['name']; ?> [<?php echo $Clan['tag']; ?>]</td>
                        </tr>
                        <tr>
                            <td><?php echo Lang::Get('ClanLeader'); ?></td>
                            <td>: <?php echo Functions::getShipName($Clan['leaderID']); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo Lang::Get('ClanMembers'); ?></td>
                            <td>: <?php echo Clan::GetMemberCount($Clan['clanID']); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo Lang::Get('ClanRank'); ?></td>
                            <td>: <?php echo $Clan['rank']; ?></td>
                        </tr>
                    </table>
                </div>

                <div class="full-width">
                    <div class="row mb-2">
                        <div class="col-md-6 mb-2">
                            <textarea id="clanDescription" cols="30" rows="10" class="full-width clan-details clan-description clan-description-textarea" disabled><?php echo $Clan['description']; ?></textarea>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="full-width clan-news-box">
                                <?php
                                    $News = json_decode($Clan['news']);

                                    if(isset($News)){ foreach ($News as $value) {
                                ?>

                                <span class="clan-news"><span class="text-rb">[<?php echo Functions::ConvertTimeDate($value->date); ?>]</span> <?php echo ($value->type == 1) ? $value->content : Lang::clanMessage($value->userID, $value->content); ?></span>

                                <?php }} ?>
                            
                                <span class="clan-news"><span class="text-rb">[<?php echo Functions::ConvertTimeDate($Clan['date']); ?>]</span> <?php echo Lang::Get('CreatedClan'); ?></span>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <?php echo ($Clan['leaderID'] == $Player->Data['userID']) ? '<button type="button" class="full-width btn rb-button waves-effect waves-light" data-toggle="modal" data-target="#editClan">'.Lang::Get('Edit').'</button>' : ''; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="spacer-10"></div>

    <?php if($Clan['leaderID'] == $Player->Data['userID']){ ?>

    <div class="modal fade" id="editClan" tabindex="-1" role="dialog" aria-labelledby="editClan" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="col-md-12 modal-title text-center" id="newsTitle"><?php echo Lang::Get('EditClan'); ?></h5>
                </div>
                <div class="modal-body">
                    <button type="button" class="full-width btn rb-button waves-effect waves-light mb-2" data-dismiss="modal" data-toggle="modal" data-target="#editInformation"><?php echo Lang::Get('EditInformation'); ?></button>
                    <!--<button type="button" class="full-width btn rb-button waves-effect waves-light mb-2" data-dismiss="modal" data-toggle="modal" data-target="#changeLogo">Change Logo</button>-->
                    <button type="button" class="full-width btn rb-button waves-effect waves-light mb-2" data-dismiss="modal" data-toggle="modal" data-target="#addNews"><?php echo Lang::Get('AddNews'); ?></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn modal-button waves-effect waves-light" data-dismiss="modal"><?php echo Lang::Get('Close'); ?></button>
                </div>
            </div>
        </div>
    </div>

    <style>
        .modalInput option {
            background-color: rgb(0,0,0,.9)!important; 
            border:none;
        }
    </style>

    <div class="modal fade" id="editInformation" tabindex="-1" role="dialog" aria-labelledby="editInformation" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="col-md-12 modal-title text-center" id="newsTitle"><?php echo Lang::Get('EditClan'); ?></h5>
                </div>
                <form id="getClanInfo" class="modal-body">
                    <label for="Param1"><?php echo Lang::Get('ClanName'); ?></label>
                    <input name="Param1" id="Param1" type="text" class="modalInput full-width mb-4" placeholder="<?php echo $Clan['name']; ?>" value="<?php echo $Clan['name']; ?>">
                    <label for="Param2"><?php echo Lang::Get('ClanTag'); ?></label>
                    <input name="Param2" id="Param2" type="text" class="modalInput full-width mb-4" placeholder="<?php echo $Clan['tag']; ?>" value="<?php echo $Clan['tag']; ?>">
                    <label for="Param3"><?php echo Lang::Get('ClanCompany'); ?></label>
                    <select name="Param4" id="Param4" class="modalInput full-width mb-4">
                        <option <?php if($Clan['factionID'] == 1) echo "selected disabled"; ?> value="1">MMO</option>
                        <option <?php if($Clan['factionID'] == 2) echo "selected disabled"; ?> value="2">EIC</option>
                        <option <?php if($Clan['factionID'] == 3) echo "selected disabled"; ?> value="3">VRU</option>
                    </select>
                    <label for="Param3"><?php echo Lang::Get('ClanDescription'); ?></label>
                    <textarea name="Param3" id="Param3" cols="30" rows="10" class="modalTextarea full-width" placeholder="<?php echo $Clan['description']; ?>"><?php echo $Clan['description']; ?></textarea>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn modal-button waves-effect waves-light" data-dismiss="modal"><?php echo Lang::Get('Close'); ?></button>
                    <button id="changeInfo" type="button" class="btn btn-gradient-blue waves-effect waves-light" data-dismiss="modal"><?php echo Lang::Get('Change'); ?></button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $("#changeInfo").click(function(){
            $.ajax({
                type: 'POST',
                url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Clan/ClanEditInfo.php',
                data: $('#getClanInfo').serialize(),
                success: function(resultData){
                    if(resultData.error){
                        swal('<?php echo Lang::Get('Error'); ?>!', resultData.msg, 'error');
                    }
                    else{
                        $("#clanNameTag").html(resultData.Param1);
                        $("#clanDescription").html(resultData.Param2);
                        swal('<?php echo Lang::Get('Successful'); ?>!', resultData.msg, 'success');
                    }
                }
            });
        });
    </script>

    <?php
        /*
           <form action="<?php echo Config::Get('SERVER_URL'); ?>Ajax/Clan/ClanEditLogo.php" id="postForm" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="changeLogo" tabindex="-1" role="dialog" aria-labelledby="changeLogo" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="col-md-12 modal-title text-center" id="newsTitle">Change Logo</h5>
                    </div>
                    <div class="modal-body">
                        <form class="md-form">
                            <div class="file-field">
                                <div class="btn rb-button btn-sm float-left">
                                    <span>Choose file</span>
                                    <input type="file" name="Logo" id="Logo">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload your file" disabled>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn modal-button waves-effect waves-light" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-gradient-blue waves-effect waves-light updateImage">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
        if(isset($Page[2])){
            switch ($Page[2]) {
                case 1:
                    echo "<script>swal('".Lang::Get('Successful')."!', 'Bura test amkkkkkkk', 'success');</script>";
                    break;
                case 2:
                    echo "<script>swal('".Lang::Get('Error')."!', 'maks 1mb', 'error');</script>";
                    break;
                case 3:
                    echo "<script>swal('".Lang::Get('Error')."!', 'jpg png gif', 'error');</script>";
                    break;
                case 4:
                    echo "<script>swal('".Lang::Get('Error')."!', 'yenile', 'error');</script>";
                    break;
                case 5:
                    echo "<script>swal('".Lang::Get('Error')."!', 'gelmedi', 'error');</script>";
                    break;
            }
        }
        
        <script>
            $(".updateImage").click(function(){
                $("#postForm").submit();
            });
        </script>
        */
    ?>

    <div class="modal fade" id="addNews" tabindex="-1" role="dialog" aria-labelledby="addNews" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="col-md-12 modal-title text-center" id="newsTitle"><?php echo Lang::Get('AddNews'); ?></h5>
                </div>
                <div class="modal-body">
                    <textarea class="clan-details clan-application full-width mb-1 newsInput" cols="30" rows="10" placeholder="And?" maxlength="200"></textarea>
                    <button id="addNew" type="button" class="col-md-3 btn rb-button waves-effect waves-light"><?php echo Lang::Get('Add'); ?></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn modal-button waves-effect waves-light" data-dismiss="modal"><?php echo Lang::Get('Close'); ?></button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $("#addNew").click(function(){
            $.ajax({
                type: 'POST',
                url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Clan/ClanAddNew.php',
                data: {"Param1": $(".newsInput").val()},
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

    <?php } ?>