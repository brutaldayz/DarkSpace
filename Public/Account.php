    <div class="spacer-40"></div>
    
    <div class="container">

        <div class="spacer-10"></div>

        <?php require_once('GLOBAL/Data.php'); ?>

        <div class="spacer-10"></div>

        <div class="col-md-12">
            <div class="row rb-panel">
                <div class="col-md-12 mb-2">
                    <div class="alert rb-alert alert-dismissible fade show">
                        <button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <strong>Hey!</strong><br><?php echo Lang::Get('UsernameDanger'); ?>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <span><?php echo Lang::Get('InGameName'); ?></span>
                    <input type="text" class="rb-input usernameInput mb-1" value="<?php echo $Player->Data['shipName']; ?>" placeholder="<?php echo $Player->Data['shipName']; ?>" maxlength="20">
                    <button id="changeUsername" class="btn rb-button full-width"><?php echo Lang::Get('Change'); ?></button>

                    <div class="mt-2 mb-2">ID: <?php echo $Player->Data['userID']; ?></div>
                    <div><?php echo Lang::Get('Company'); ?>: <?php echo ($Player->Data['factionID'] == 1) ? 'MMO' : (($Player->Data['factionID'] == 2) ? 'EIC' : 'VRU'); ?></div>
                </div>
                <div class="col-md-6 mb-2">
                    <span><?php echo Lang::Get('Password'); ?></span>
                    <input type="password" class="rb-input oldPassword mb-1" placeholder="<?php echo Lang::Get('OldPassword'); ?>" maxlength="40">
                    <input type="password" class="rb-input newPassword mb-1" placeholder="<?php echo Lang::Get('NewPassword'); ?>" maxlength="40">
                    <input type="password" class="rb-input repeatPassword mb-1" placeholder="<?php echo Lang::Get('RepeatPassword'); ?>" maxlength="40">
                    <button id="changePassword" class="btn rb-button full-width"><?php echo Lang::Get('Change'); ?></button>
                </div>
                <div class="col-md-12 mb-2">
                    <span><?php echo Lang::Get('PilotProfile'); ?>:</span>
                    <div class="rb-input"><a href="<?php echo Config::Get('SERVER_URL'); ?>Profile/<?php echo $Player->Data['profileID']; ?>" class="rb-text"><?php echo Config::Get('SERVER_URL'); ?>Profile/<?php echo $Player->Data['profileID']; ?></a></div>
                </div>
            </div>
        </div>

        <script>
            $("#changeUsername").click(function(){
                $.ajax({
                    type: 'POST',
                    url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Account/ChangeUsername.php',
                    data: {"Param1": $(".usernameInput").val()},
                    success: function(resultData){
                        if(resultData.error) swal('<?php echo Lang::Get('Error'); ?>!', resultData.msg, 'error');
                        else swal('<?php echo Lang::Get('Successful'); ?>!', resultData.msg, 'success');
                    }
                });
            });
            $("#changePassword").click(function(){
                $.ajax({
                    type: 'POST',
                    url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Account/ChangePassword.php',
                    data: {"Param1": $(".oldPassword").val(), "Param2": $(".newPassword").val(), "Param3": $(".repeatPassword").val()},
                    success: function(resultData){
                        if(resultData.error) swal('<?php echo Lang::Get('Error'); ?>!', resultData.msg, 'error');
                        else swal('<?php echo Lang::Get('Successful'); ?>!', resultData.msg, 'success');
                        $(".oldPassword").val("");
                        $(".newPassword").val("");
                        $(".repeatPassword").val("");
                    }
                });
            });
        </script>
    </div>