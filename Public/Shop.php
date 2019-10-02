<?php $db = Database::Connection(); ?>
    <div class="spacer-40"></div>
    
    <div class="container">

        <?php require_once('GLOBAL/Data.php'); ?>

        <div class="spacer-10"></div>

        <div class="col-md-12">
            <div class="row text-center">
                <button onclick="changeTab('ship');" class="btn btn rb-button waves-effect waves-light shopBtn"><?php echo Lang::Shop('Ship'); ?></button>
                <button onclick="changeTab('drone');" class="btn btn rb-button waves-effect waves-light shopBtn"><?php echo Lang::Shop('Drone'); ?></button>
                <button onclick="changeTab('pet');" class="btn btn rb-button waves-effect waves-light shopBtn">PET</button>
                <button onclick="changeTab('booster');" class="btn btn rb-button waves-effect waves-light shopBtn"><?php echo Lang::Shop('Booster'); ?></button>
                <button onclick="changeTab('extra');" class="btn btn rb-button waves-effect waves-light shopBtn"><?php echo Lang::Shop('Extra'); ?></button>
                <button onclick="changeTab('design');" class="btn btn rb-button waves-effect waves-light shopBtn"><?php echo Lang::Shop('Design'); ?></button>
            </div>
        </div>

        <div class="spacer-10"></div>

        <div class="col-md-12">
            <div class="row rb-panel ship">

                <?php 
                $Ships = $db->query("SELECT * FROM server_shop WHERE Category = 'Ship' AND Enabled = 1")->fetchAll(); 

                foreach ($Ships as $value) {
            ?>
                
                <div class="m-2">
                    <div class="item">
                        <div onclick="shopModal('<?php echo $value['Category']; ?>', '<?php echo $value['ItemHash']; ?>', '<?php echo number_format(Functions::GetPercentage($value['Cost'])); ?>', '<?php echo Lang::shopItems($value['Item']); ?>');" class="item-image" style="background-image: url(<?php echo Config::Get('IMG'); ?>Shop/<?php echo $value['Category']; ?>/<?php echo in_array($value['Item'], ["Spearhead","Aegis","Citadel"]) ? $value['Item'] . '_' . $Player->Data['factionID'] : $value['Item']; ?>.png)"></div>
                        <span class="item-price"><?php echo ($value['Cost'] == 0) ? 'Payment' : number_format(Functions::GetPercentage($value['Cost'])); ?> <?php echo ($value['Cost'] == 0) ? '' : (($value['Type'] == 1) ? 'U.' : 'C.'); ?></span>
                    </div>
                </div>

                <?php } ?>
            </div>

            <div class="row rb-panel drone" style="display: none;">
                <?php $Drones = $db->query("SELECT * FROM server_shop WHERE Category = 'Drone' AND Enabled = 1")->fetchAll(); foreach ($Drones as $value) { ?>
                
                <div class="m-2">
                    <div class="item">
                        <div onclick="shopModal('<?php echo $value['Category']; ?>', '<?php echo $value['ItemHash']; ?>', '<?php echo number_format(Functions::GetPercentage($value['Cost'])); ?>', '<?php echo Lang::shopItems($value['Item']); ?>');" class="item-image" style="background-image: url(<?php echo Config::Get('IMG'); ?>Shop/<?php echo $value['Category']; ?>/<?php echo $value['Item']; ?>.png)"></div>
                        <span class="item-price"><?php echo ($value['Cost'] == 0) ? 'Payment' : number_format(Functions::GetPercentage($value['Cost'])); ?> <?php echo ($value['Cost'] == 0) ? '' : (($value['Type'] == 1) ? 'U.' : 'C.'); ?></span>
                    </div>
                </div>

                <?php } ?>
            </div>

            <div class="row rb-panel extra" style="display: none;">
                <?php $Extra = $db->query("SELECT * FROM server_shop WHERE Category = 'Extra' AND Enabled = 1")->fetchAll(); foreach ($Extra as $value) { ?>
                
                <div class="m-2">
                    <div class="item">
                        <div onclick="shopModal('<?php echo $value['Category']; ?>', '<?php echo $value['ItemHash']; ?>', '<?php echo number_format(Functions::GetPercentage($value['Cost'])); ?>', '<?php echo Lang::shopItems($value['Item']); ?>', true);" class="item-image" style="background-image: url(<?php echo Config::Get('IMG'); ?>Shop/<?php echo $value['Category']; ?>/<?php echo $value['Item']; ?>.png)"></div>
                        <span class="item-price"><?php echo ($value['Cost'] == 0) ? 'Payment' : number_format(Functions::GetPercentage($value['Cost'])); ?> <?php echo ($value['Cost'] == 0) ? '' : (($value['Type'] == 1) ? 'U.' : 'C.'); ?></span>
                    </div>
                </div>

                <?php } ?>
            </div>

            <div class="row rb-panel booster" style="display: none;">
                <?php $Booster = $db->query("SELECT * FROM server_shop WHERE Category = 'Booster' AND Enabled = 1")->fetchAll(); foreach ($Booster as $value) { ?>
                
                <div class="m-2">
                    <div class="item">
                        <div onclick="shopModal('<?php echo $value['Category']; ?>', '<?php echo $value['ItemHash']; ?>', '<?php echo number_format(Functions::GetPercentage($value['Cost'])); ?>', '<?php echo Lang::shopItems($value['Item']); ?>');" class="item-image" style="background-image: url(<?php echo Config::Get('IMG'); ?>Shop/<?php echo $value['Category']; ?>/<?php echo $value['Item']; ?>.png)"></div>
                        <span class="item-price"><?php echo ($value['Cost'] == 0) ? 'Payment' : number_format(Functions::GetPercentage($value['Cost'])); ?> <?php echo ($value['Cost'] == 0) ? '' : (($value['Type'] == 1) ? 'U.' : 'C.'); ?></span>
                    </div>
                </div>

                <?php } ?>
            </div>

            <div class="row rb-panel pet" style="display: none;">
                <?php $Pet = $db->query("SELECT * FROM server_shop WHERE Category = 'Pet' AND Enabled = 1")->fetchAll(); foreach ($Pet as $value) { ?>
                
                <div class="m-2">
                    <div class="item">
                        <div onclick="shopModal('<?php echo $value['Category']; ?>', '<?php echo $value['ItemHash']; ?>', '<?php echo number_format(Functions::GetPercentage($value['Cost'])); ?>', '<?php echo Lang::shopItems($value['Item']); ?>');" class="item-image" style="background-image: url(<?php echo Config::Get('IMG'); ?>Shop/<?php echo $value['Category']; ?>/<?php echo $value['Item']; ?>.png)"></div>
                        <span class="item-price"><?php echo ($value['Cost'] == 0) ? 'Payment' : number_format(Functions::GetPercentage($value['Cost'])); ?> <?php echo ($value['Cost'] == 0) ? '' : (($value['Type'] == 1) ? 'U.' : 'C.'); ?></span>
                    </div>
                </div>

                <?php } ?>
            </div>

            <div class="row rb-panel design" style="display: none;">

                <?php $Designs = $db->query("SELECT * FROM server_shop WHERE Category = 'Design' AND Enabled = 1")->fetchAll(); foreach ($Designs as $value) { ?>
                
                <div class="m-2">
                    <div class="item">
                        <div onclick="shopModal('<?php echo $value['Category']; ?>', '<?php echo $value['ItemHash']; ?>', '<?php echo number_format(Functions::GetPercentage($value['Cost'])); ?>', '<?php echo Lang::shopItems($value['Item']); ?>');" class="item-image" style="background-image: url(<?php echo Config::Get('IMG'); ?>Shop/<?php echo $value['Category']; ?>/<?php echo in_array($value['Item'], ["Spearhead_Veteran", "Spearhead_Elite", "Aegis_Veteran", "Aegis_Elite", "Citadel_Veteran", "Citadel_Elite"]) ? $value['Item'] . '_' . $Player->Data['factionID'] : $value['Item']; ?>.png)"></div>
                        <span class="item-price"><?php echo ($value['Cost'] == 0) ? 'Payment' : number_format(Functions::GetPercentage($value['Cost'])); ?> <?php echo ($value['Cost'] == 0) ? '' : (($value['Type'] == 1) ? 'U.' : 'C.'); ?></span>
                    </div>
                </div>

                <?php } ?>

            </div>
        </div>

        <div class="modal fade" id="shopModal" tabindex="-1" role="dialog" aria-labelledby="shopTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="col-md-12 modal-title text-center"></h5>
                    </div>
                    <div class="modal-body shopContent"></div>
                    <div class="modal-body amountContent row" style="display:none;">
                        <label for="amount" class="col-1 col-form-label" style="font-size:15px;">Miktar</label>
                        <div class="col-md-6">
                            <input class="rb-input" type="text" placeholder="1" value="1" id="amount">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn modal-button waves-effect waves-light" data-dismiss="modal"><?php echo Lang::Get('Close'); ?></button>
                        <button id="BuyButton" type="button" class="btn btn-success waves-effect waves-light buyButton" data-dismiss="modal"><?php echo Lang::Get('BuyButton'); ?></button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var P1 = "";
            var P2 = "";
            var P3 = false;

            function shopModal(Param1, Param2, Param3, Param4, Param5 = false){
                P1 = Param1;
                P2 = Param2;
                if(Param5 == true){
                    $(".amountContent").css('display', 'block');
                    P3 = true;
                }
                else{
                    $(".amountContent").css('display', 'none');
                    P3 = false;
                }
                if(Param3 == 0) return window.open("<?php echo Config::Get('SERVER_URL'); ?>Payment");
                $(".shopContent").html('<?php echo Lang::Get('BuyMessage'); ?>' + '<?php echo Lang::Get('Price'); ?>: ' + Param3 + ' <?php echo ($value['Cost'] == 0) ? '' : (($value['Type'] == 1) ? 'U.' : 'C.'); ?>' + '<br><br> <?php echo Lang::Shop('Description'); ?> ' + Param4);
                $("#shopModal").modal();
            }

            $('#amount').keypress(function(e) {
                var specialKeys = new Array();
                specialKeys.push(8);
                var keyCode = e.which ? e.which : e.keyCode;
                var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
                return ret;
            });

            $("#BuyButton").click(function(){
                var Am = $("#amount").val();
                if(Am == ""){
                    $("#amount").val("1");
                    Am = 1;
                }
                $.ajax({
                    type: 'POST',
                    url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Shop/'+P1+'.php',
                    data: {"Param1": P2, "Param2": Am},
                    success: function(resultData){
                        if(resultData.error) swal('<?php echo Lang::Get('Error'); ?>!', resultData.msg, 'error');
                        else{
                            swal('<?php echo Lang::Get('Successful'); ?>!', resultData.msg, 'success');
                            $(".UridiumTab").html("U. : " + resultData.Param3);
                            $(".CrediTab").html("C. : " + resultData.Param4);
                        }
                    }
                });
            });

            function changeTab(Param1){
                $(".ship").css('display', 'none');
                $(".drone").css('display', 'none');
                $(".pet").css('display', 'none');
                $(".booster").css('display', 'none');
                $(".extra").css('display', 'none');
                $(".design").css('display', 'none');

                $("." + Param1).css('display', 'flex');
            }
        </script>
    </div>

    <div class="spacer-10"></div>