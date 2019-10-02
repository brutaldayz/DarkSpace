
    <div class="spacer-40"></div>

    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('CSS'); ?>Clan.min.css" />
    
    <div class="container">

        <?php require_once('GLOBAL/Data.php'); ?>

        <div class="spacer-10"></div>

        <style>
            .companyImage{
                height: 500px;
                cursor: pointer;
            }
            @media(max-width: 1200px) { 
                .companyImage { 
                    height: 400px; 
                } 
            }
            @media(max-width: 800px) { 
                .companyImage { 
                    height: 300px; 
                } 
            }
            @media(max-width: 500px) { 
                .companyImage { 
                    height: 200px; 
                } 
            }
            @media(max-width: 360px) { 
                .companyImage { 
                    height: 150px; 
                } 
            }
            .mmo:hover{
                opacity: 0.8;
                border: 1px solid #fff;
            }
            .eic:hover{
                opacity: 0.8;
                border: 1px solid #fff;
            }
            .vru:hover{
                opacity: 0.8;
                border: 1px solid #fff;
            }
        </style>

        <div class="col-md-12">
            <div class="row rb-panel">
                <div class="mb-2 mt-2 text-center">
                    <img class="companyImage mmo" src="<?php echo Config::Get('IMG'); ?>Company/character_mmo.jpg" onclick="selectCompany('<?php echo base64_encode(base64_encode(base64_encode(base64_encode(1)))); ?>');">
                </div>
                <div class="mb-2 mt-2 text-center">
                    <img class="companyImage eic" src="<?php echo Config::Get('IMG'); ?>Company/character_eic.jpg" onclick="selectCompany('<?php echo base64_encode(base64_encode(base64_encode(base64_encode(2)))); ?>');">
                </div>
                <div class="mb-2 mt-2 text-center">
                    <img class="companyImage vru" src="<?php echo Config::Get('IMG'); ?>Company/character_vru.jpg" onclick="selectCompany('<?php echo base64_encode(base64_encode(base64_encode(base64_encode(3)))); ?>');">
                </div>
            </div>
        </div>


        <div class="modal fade" id="selectCompanyModal" tabindex="-1" role="dialog" aria-labelledby="companyTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="col-md-12 modal-title text-center"></h5>
                    </div>
                    <div class="modal-body DroneContent">
                        <?php echo Lang::Get('CompanySMessage'); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn modal-button waves-effect waves-light" data-dismiss="modal"><?php echo Lang::Get('Close'); ?></button>
                        <button id="selectCompanyButton" type="button" class="btn btn-success waves-effect waves-light" data-dismiss="modal"><?php echo Lang::Get('Select'); ?></button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var P1 = "";
            function selectCompany(Param1){
                P1 = Param1;
                $("#selectCompanyModal").modal();
            }

            $("#selectCompanyButton").click(function(){
                $.ajax({
                    type: 'POST',
                    url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Company/SelectCompany.php',
                    data: {"Param1": P1},
                    success: function(resultData){
                        if(resultData.error) swal('<?php echo Lang::Get('Error'); ?>!', resultData.msg, 'error');
                        else window.location.href = "<?php echo Config::Get('SERVER_URL'); ?>Home";
                    }
                });
            });
        </script>
    </div>

    <div class="spacer-10"></div>