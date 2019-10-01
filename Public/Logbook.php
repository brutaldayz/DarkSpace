
    <div class="spacer-40"></div>
    
    <div class="container">

        <?php require_once('GLOBAL/Data.php'); ?>

        <div class="spacer-10"></div>

        <div class="col-md-12">
            <div class="row rb-panel">
                <div class="full-width" style="display:flex;">
                    <div class="col-md-6 mb-2"><button id="killLogShow" class="btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('KillLog'); ?></button></div>
                    <div class="col-md-6 mb-2"><button id="accountLogShow" class="btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('AccountLog'); ?></button></div>
                </div>

                <div class="col-md-12 logbook_area">
                    <div class="killLog">
                        <?php $db = Database::Connection(); $KillLog = $db->query("SELECT * FROM log_player_kills WHERE killer_id = {$Player->Data['userID']} OR target_id = {$Player->Data['userID']} ORDER BY id DESC LIMIT 100"); if($KillLog->rowCount() != 0){ $KillLog = $KillLog->fetchAll(); foreach ($KillLog as $value) { ?>
                        <div>[<?php echo Functions::ConvertTimeDate($value['date_added']); ?>] - <?php echo Lang::KillLog($value['killer_id'] == $Player->Data['userID'] ? 1 : 2, $value['killer_id'] == $Player->Data['userID'] ? $value['target_id'] : $value['killer_id']); ?></div>
                        <?php }}else{ echo Lang::Get('ArentLog'); } ?>
                    </div>
                    <div class="accountLog" style="display: none;">
                        <?php
                            $getAccLog = $db->query("SELECT * FROM player_log WHERE UserID = {$Player->Data['userID']} ORDER BY LogID DESC");

                            if($getAccLog->rowCount() == 0) echo Lang::Get('ArentLog');
                            else{ foreach ($getAccLog as $value) {
                        ?>

                        <div>[<?php echo Functions::ConvertTimeDate($value['Date']); ?>] - 
                        <?php 
                            switch ($value['Type']) {
                                case 1:
                                    echo Lang::shopLogMessages($value['Content'],$value['PaymentType'],$value['PaymentAmount'],$value['Amount']);
                                    break;
                                case 2:
                                    echo Lang::skillTreeLogMessages($value['Content']);
                                    break;
                                case 3:
                                    echo Lang::accountLogMessages($value['Content']);
                                    break;
                            }
                        
                        ?>
                        
                        </div>

                        <?php }} ?>
                    </div>
                </div>

                <script>
                    $("#killLogShow").click(function(){
                        $(".accountLog").css('display', 'none');
                        $(".killLog").css('display', 'block');
                    });
                    $("#accountLogShow").click(function(){
                        $(".killLog").css('display', 'none');
                        $(".accountLog").css('display', 'block');
                    });
                </script>
            </div>
        </div>
    </div>

    <div class="spacer-10"></div>