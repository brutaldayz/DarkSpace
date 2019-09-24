

    <?php Clan::CheckClan(1); ?>

    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('SERVER_URL'); ?>Assets/Css/Clan.min.css" />

    <div class="spacer-40"></div>
    
    <div class="container">

        <?php require_once('GLOBAL/Data.php'); ?>

        <div class="spacer-10"></div>

        <div class="col-md-12">
            <div class="row rb-panel">
                <div class="col-md-5">
                    <div class="description">
                        <?php echo Lang::Get('ClanFoundTitle'); ?>
                        <div class="spacer-20"></div>
                        <span class="grey"><?php echo Lang::Get('ClanFound1'); ?></span>
                        <div class="spacer-20"></div>
                        <span class="bluegrey">
                            <?php echo Lang::Get('ClanFound2'); ?><br>
                            <?php echo Lang::Get('ClanFound3'); ?><br>
                            <?php echo Lang::Get('ClanFound4'); ?><br>
                        </span>
                        <br>
                        <span class="grey"><?php echo Lang::Get('ClanFound5'); ?></span>
                    </div>
                </div>
                <form id="createClan" class="col-md-7">
                    <input name="Param1" type="text" class="clan-input full-width p-2 mb-1" placeholder="<?php echo Lang::Get('ClanName'); ?>" maxlength="50">
                    <input name="Param2" type="text" class="clan-input full-width p-2 mb-1" placeholder="<?php echo Lang::Get('ClanTag'); ?>" maxlength="4">
                    <textarea name="Param3" class="clan-details clan-application full-width mb-1" cols="30" rows="10" placeholder="<?php echo Lang::Get('EnterClanDesc'); ?>" maxlength="200"></textarea>
                    <button type="button" class="btn rb-button full-width clanFound"><?php echo Lang::Get('FoundButton'); ?></button>
                </form>
            </div>
        </div>

        <script>
            $(".clanFound").click(function() {
                $.ajax({
                    type: 'POST',
                    url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Clan/ClanFound.php',
                    data: $('#createClan').serialize(),
                    success: function(resultData){
                        if(resultData.error) swal('<?php echo Lang::Get('Error'); ?>!', resultData.msg, 'error');
                        else window.location.href = "<?php echo Config::Get('SERVER_URL'); ?>Clan";
                    }
                });
            });
        </script>
    </div>

    <div class="spacer-10"></div>