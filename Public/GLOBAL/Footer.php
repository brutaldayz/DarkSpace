
    <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="col-md-12 modal-title text-center"><?php echo Lang::Get('VideoEventTitle'); ?></h5>
                </div>
                <div class="modal-body DroneContent">
                    <div><span class="rb-text"><?php echo Lang::Get('VideoEventParticipate'); ?></span> <?php echo Lang::Get('VideoEventPAnswer'); ?></div>
                    <div><span class="rb-text"><?php echo Lang::Get('VideoEventRating'); ?>:</span> <?php echo Lang::Get('VideoEventRAnser'); ?></div>
                    <div><span class="rb-text"><?php echo Lang::Get('VideoEventReward'); ?>:</span> <?php echo Lang::Get('VideoEventReAnswer'); ?></div>
                    <div><span class="rb-text"><?php echo Lang::Get('VideoEventNote'); ?>:</span> <?php echo Lang::Get('VideoEventNAnswer'); ?></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn modal-button waves-effect waves-light" data-dismiss="modal"><?php echo Lang::Get('Close'); ?></button>
                    <a href="<?php echo Main; ?>JoinEvent"><button type="button" class="btn btn-success waves-effect waves-light"><?php echo Lang::Get('NavJoin'); ?></button></a>
                </div>
            </div>
        </div>
    </div>

    <?php //echo ($Page[1] == "Home") ? '<script type="text/javascript">$(document).ready(function() { if(sessionStorage.Popup == null){ sessionStorage.setItem(\'Popup\', 1); $("#eventModal").modal(); } });</script>' : ''; ?>
    
    <script type="text/javascript" src="<?php echo Config::Get('JS'); ?>material-bootstrap.min.js"></script>
</body>
</html>