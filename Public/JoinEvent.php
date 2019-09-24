
    <div class="spacer-40"></div>
    
    <div class="container">

        <?php require_once('GLOBAL/Data.php'); ?>

        <div class="spacer-10"></div>

        <div class="col-md-12 mb-3">
            <div class="row rb-panel">
                <div class="col-md-6 mb-2 text-center">
                    <input type="text" class="rb-input video-link mb-1" placeholder="Video Link...">
                    <button id="join" class="btn rb-button full-width"><?php echo Lang::Get('NavJoin'); ?></button>
                </div>
                <div class="full-width" style="font-size: 20px;"><span class="rb-text"><?php echo Lang::Get('VideoEventDetails'); ?>;</span> <br> 1) <?php echo Lang::Get('VideoEventLastDay'); ?> <br> 2) <?php echo Lang::Get('VideoEventResultDAnswer'); ?> <br> 3) <?php echo Lang::Get('VideoEventMaxVideoCount'); ?> <br> 4) <?php echo Lang::Get('VideoLastApp'); ?> <br> 5) <span class="rb-text"><?php echo Lang::Get('VideoEventReward'); ?>:</span> <?php echo Lang::Get('VideoEventReAnswer'); ?> <br> 6) <span class="rb-text"><?php echo Lang::Get('VideoEventNote'); ?>:</span> <?php echo Lang::Get('VideoEventNAnswer'); ?></div>
            </div>
        </div>

        <?php $get = Database::Connection()->query("SELECT * FROM server_video_event WHERE UserID = {$Player->Data['userID']}"); if($get->rowCount() != 0){ $get = $get->fetchAll(); ?>

        <div class="col-md-12 mb-3 text-center">
            <button type="button" class="col-md-6 btn rb-button waves-effect waves-light" data-toggle="modal" data-target="#myApplications"><?php echo Lang::Get('VideoMyApplications'); ?></button>
        </div>

        <div class="modal fade" id="myApplications" tabindex="-1" role="dialog" aria-labelledby="myApplicationsTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="col-md-12 modal-title text-center"><?php echo Lang::Get('VideoMyApplications'); ?></h5>
                    </div>
                    <div class="modal-body">
                        <table class="table rb-table">
                            <thead>
                                <tr>
                                    <th scope="col"><?php echo Lang::Get('VideoApplicationID'); ?></th>
                                    <th>Link</th>
                                    <th><?php echo Lang::Get('Date'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($get as $value) { ?>
                                    <tr>
                                        <td><?php echo $value['RandomID']; ?></td>
                                        <td><?php echo $value['Link']; ?></td>
                                        <td><?php echo Functions::ConvertTimeDate($value['Date']); ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn modal-button waves-effect waves-light" data-dismiss="modal"><?php echo Lang::Get('Close'); ?></button>
                    </div>
                </div>
            </div>
        </div>

        <?php } ?>

        <script>
            $("#join").click(function(){
                $.ajax({
                    type: 'POST',
                    url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Account/JoinEvent.php',
                    data: {"Param1": $(".video-link").val()},
                    success: function(resultData){
                        if(resultData.error) swal('<?php echo Lang::Get('Error'); ?>!', resultData.msg, 'error');
                        else swal('<?php echo Lang::Get('Successful'); ?>!', resultData.msg, 'success');
                    }
                });
            });
        </script>
    </div>

    <div class="spacer-10"></div>