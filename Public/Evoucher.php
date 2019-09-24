
    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('SERVER_URL'); ?>Assets/Css/Evoucher.min.css" />
    <!--<script src="https://www.google.com/recaptcha/api.js"></script>-->
    <div class="spacer-40"></div>
    
    <div class="container">

        <?php require_once('GLOBAL/Data.php'); ?>

        <div class="spacer-10"></div>

        <style>.g-recaptcha > div{ width: auto!important; height: auto!important; }</style>

        <div class="col-md-12 mb-2">
            <form id="evoucherForm" class="row rb-panel">
                <div class="full-width text-center">
                    <input name="evoucher" type="text" class="evoucher-input text-center mb-3" placeholder="<?php echo Lang::Get('EnterCode'); ?>...">
                </div>
                <!--<div class="full-width text-center mb-2">
                    <div class="g-recaptcha" data-sitekey="6LcK_5EUAAAAAL4CgovsLv9AHUJhB8JAN3xadZeY"></div>
                </div>-->
                <button type="button" id="useEvoucher" class="btn rb-button col-md-6 waves-effect waves-light text-center"><?php echo Lang::Get('UseCode'); ?></button>
            </form>
        </div>

        <!--<div class="col-md-12">
            <div class="text-center">
                <button type="button" class="btn rb-button" data-toggle="modal" data-target="#availableCodes"><?php echo Lang::Get('AvailableCodes'); ?></button>
            </div>
        </div>-->

        <style>
            .Code:hover{
                color: #dd163b;
                cursor: pointer;
            }
        </style>

        <!--<div class="modal fade" id="availableCodes" tabindex="-1" role="dialog" aria-labelledby="availableCodesTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="col-md-12 modal-title text-center"><?php echo Lang::Get('AvailableCodes'); ?></h5>
                    </div>
                    <div class="modal-body">
                        <table class="table rb-table">
                            <thead>
                                <tr>
                                    <th scope="col"><?php echo Lang::Get('Code'); ?></th>
                                    <th><?php echo Lang::Get('Reward'); ?></th>
                                    <th><?php echo Lang::Get('CodeStatu'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $get = Database::Connection()->query("SELECT * FROM server_evoucher WHERE Available = 1")->fetchAll(); foreach ($get as $value) { ?>
                                    <tr>
                                        <td class="Code" onclick="writeCode('<?php echo $value['Code']; ?>');"><?php echo $value['Code']; ?></td>
                                        <td>U. : <?php echo number_format(json_decode($value['Reward'])->Uridium); ?> C. : <?php echo number_format(json_decode($value['Reward'])->Credits); ?></td>
                                        <td><?php echo ($value['Used'] >= $value['Max']) ? Lang::Get('MaxUsedCode') : (in_array($Player->Data['userID'], json_decode($value['User'], true)) ? Lang::Get('AlreadyUsed') : Lang::Get('Available')); ?></td>
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
        </div>-->

        <script>
            function writeCode(Param1){
                $("#availableCodes").modal('hide');
                $(".evoucher-input").val(Param1);
            }
            
            $("#useEvoucher").click(function(){
                $.ajax({
                    type: 'POST',
                    url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Account/Evoucher.php',
                    data: $('#evoucherForm').serialize(),
                    success: function(resultData){
                        if(resultData.error) swal('<?php echo Lang::Get('Error'); ?>!', resultData.msg, 'error');
                        else{
                            swal('<?php echo Lang::Get('Successful'); ?>!', resultData.msg, 'success');
                            $(".UridiumTab").html("U. : " + resultData.Param1);
                            $(".CrediTab").html("C. : " + resultData.Param2);
                        }
                        grecaptcha.reset();
                    }
                });
            });
        </script>
    </div>

    <div class="spacer-10"></div>