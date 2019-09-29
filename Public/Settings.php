
    <div class="spacer-40"></div>
    
    <div class="container">

        <?php require_once('GLOBAL/Data.php'); ?>

        <div class="spacer-10"></div>

        <div class="col-md-12">
            <div class="row rb-panel settings p-4">
                <span><?php echo Lang::Get('Language'); ?></span>
                <select id="language" class="form-control rb-select mb-4">
                    <option value="en" <?php echo (Cookie::getLanguage() == "en") ? 'selected' : ''; ?>>English</option>
                    <option value="tr" <?php echo (Cookie::getLanguage() == "tr") ? 'selected' : ''; ?>>Türkçe</option>
                </select>

                <span>Version</span>
                <select id="version" class="form-control rb-select mb-4">
                    <option value="1" <?php echo ($Player->Data['Version'] == 1) ? 'selected' : ''; ?>>3D</option>
                    <option value="2" <?php echo ($Player->Data['Version'] == 2) ? 'selected' : ''; ?>>2D</option>
                </select>
            </div>
        </div>

        <script>
            $("#language").change(function(){
                $.ajax({
                    type: 'POST',
                    url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Account/LanguageChange.php',
                    data: {"Param1": $("#language").val()},
                    success: function(resultData){
                        if(resultData.error) swal('<?php echo Lang::Get('Error'); ?>!', resultData.msg, 'error');
                        else swal('<?php echo Lang::Get('Successful'); ?>!', resultData.msg, 'success');
                    }
                });
            });

            $("#version").change(function(){
                $.ajax({
                    type: 'POST',
                    url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Account/VersionChange.php',
                    data: {"Param1": $("#version").val()},
                    success: function(resultData){
                        if(resultData.error) swal('<?php echo Lang::Get('Error'); ?>!', resultData.msg, 'error');
                        else swal('<?php echo Lang::Get('Successful'); ?>!', resultData.msg, 'success');
                    }
                });
            });
        </script>
    </div>

    <div class="spacer-10"></div>