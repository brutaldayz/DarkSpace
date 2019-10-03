
    <div class="spacer-40"></div>

    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('SERVER_URL'); ?>Assets/Css/Clan.min.css" />

    <?php
        if($Player->Data['factionID'] == 1){
            $F1 = "eic";
            $F2 = "vru";
        }elseif($Player->Data['factionID'] == 2){
            $F1 = "mmo";
            $F2 = "vru";
        }else{
            $F1 = "mmo";
            $F2 = "eic";
        }
    ?>
    
    <div class="container">

        <?php require_once('GLOBAL/Data.php'); ?>

        <div class="spacer-10"></div>

        <style>
            .companyImage{
                height: 400px;
                cursor: pointer;
            }
            @media(max-width: 800px) { 
                .companyImage { 
                    height: 250px; 
                } 
            }
            .mmo, .eic, .vru { transition: all 0.3s ease; }
            .mmo:hover { box-shadow: 0px 0px 20px 0px #6c3d23; }
            .eic:hover { box-shadow: 0px 0px 20px 0px #5a7a9c; }
            .vru:hover { box-shadow: 0px 0px 20px 0px #409349; }
        </style>

        <div class="col-md-12">
            <div class="row rb-panel">
                <div class="col-md-12 mb-4 text-center">
                    <span><?php echo Lang::Get('CompanyCost'); ?></span>
                </div>
                <div class="mb-2 text-center">
                    <img class="companyImage <?php echo $F1; ?>" onclick="changeCompany('<?php echo base64_encode(base64_encode(base64_encode(base64_encode($F1)))); ?>');" src="<?php echo Config::Get('IMG'); ?>Company/character_<?php echo $F1; ?>.jpg">
                </div>
                <div class="mb-2 text-center">
                    <img class="companyImage <?php echo $F2; ?>" onclick="changeCompany('<?php echo base64_encode(base64_encode(base64_encode(base64_encode($F2)))); ?>');" src="<?php echo Config::Get('IMG'); ?>Company/character_<?php echo $F2; ?>.jpg">
                </div>
            </div>
        </div>

        <div class="modal fade" id="companyModal" tabindex="-1" role="dialog" aria-labelledby="companyTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="col-md-12 modal-title text-center"></h5>
                    </div>
                    <div class="modal-body DroneContent">
                        <?php echo Lang::Get('CompanyCost'); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn modal-button waves-effect waves-light" data-dismiss="modal"><?php echo Lang::Get('Close'); ?></button>
                        <button id="changeCompany" type="button" class="btn btn-success waves-effect waves-light" data-dismiss="modal"><?php echo Lang::Get('Change'); ?></button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var P1 = "";
            function changeCompany(Param1){
                P1 = Param1;
                $("#companyModal").modal();
            }
            $("#changeCompany").click(function(){
                $.ajax({
                    type: 'POST',
                    url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Company/ChangeCompany.php',
                    data: {"Param1": P1},
                    success: function(resultData){
                        if(resultData.error) swal('<?php echo Lang::Get('Error'); ?>!', resultData.msg, 'error');
                        else{
                            swal('<?php echo Lang::Get('Successful'); ?>!', resultData.msg, 'success')
                            .then((value) => {
                                window.location.href = "<?php echo Config::Get('SERVER_URL'); ?>Home";
                            });
                        }
                    }
                }); 
            });
        </script>
    </div>

    <div class="spacer-10"></div>