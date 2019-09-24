<?php 
        $db = Database::Connection(); 
        $UserSkills = $db->query("SELECT * FROM player_skilltree WHERE userID = ".$Player->Data['userID']."")->fetch(); 
    ?>
    
    <div class="spacer-40"></div>

    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('CSS'); ?>Skills.min.css" />
    
    <div class="container">

        <?php require_once('GLOBAL/Data.php'); ?>

        <div class="spacer-10"></div>

        <div class="col-md-12">
            <div class="row rb-panel">

                <div class="mt-1">
                    <div class="col-md-12"><?php echo Lang::Get('LogDisk'); ?> <span id="currentLog"><?php echo number_format($UserSkills['logDisk']); ?></span> / <?php echo Lang::Get('RequiredDisk'); ?> <span id="requiredLog"><?php echo number_format(Functions::getRequiredLogdisk(($UserSkills['currentRp']+$UserSkills['usedRp'])+1)); ?></span> <button class="btn rb-button changeBtn" style="width: auto; height: auto;"><?php echo Lang::Get('Exchange'); ?></button></div>
                    <div class="col-md-12 mt-1"><?php echo Lang::Get('ResearchPoints'); ?> <span id="currentRp"><?php echo $UserSkills['currentRp']; ?></span></div>
                </div>

                <div class="mt-3 row col-md-12">

                    <div class="skillContainer m-2" style="float:left; text-align: left">
                        <div onclick="skillModal('VkZaRk9WQlJQVDA9', true, '<?php echo Lang::SkillName(1); ?>', '<?php echo Lang::SkillDescription(1); ?>')" id="skill_13" class="skill">
                            <div class="skill_effect">
                                <div class="skillPoints skillPointFont">
                                    <span id="currentLevel_skill_13"><?php echo $UserSkills['skill_13']; ?></span>/5
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="skillContainer m-2" style="float:left; text-align: left">
                        <div onclick="skillModal('VkZkak9WQlJQVDA9', true, '<?php echo Lang::SkillName(2); ?>', '<?php echo Lang::SkillDescription(2); ?>')" id="skill_5a" class="skill">
                            <div class="skill_effect">
                                <div class="skillPoints skillPointFont">
                                    <span id="currentLevel_skill_5a"><?php echo $UserSkills['skill_5a']; ?></span>/2
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="skillContainer m-2" style="float:left; text-align: left">
                        <div onclick="skillModal('VkZaU1FsQlJQVDA9', true, '<?php echo Lang::SkillName(10); ?>', '<?php echo Lang::SkillDescription(10); ?>')" id="skill_1" class="skill">
                            <div class="skill_effect">
                                <div class="skillPoints skillPointFont">
                                    <span id="currentLevel_skill_1"><?php echo $UserSkills['skill_1']; ?></span>/5
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="skillContainer m-2" style="float:left; text-align: left">
                        <div onclick="skillModal('VkZoak9WQlJQVDA9', true, '<?php echo Lang::SkillName(3); ?>', '<?php echo Lang::SkillDescription(3); ?>')" id="skill_20" class="skill">
                            <div class="skill_effect">
                                <div class="skillPoints skillPointFont">
                                    <span id="currentLevel_skill_20"><?php echo $UserSkills['skill_20']; ?></span>/5        
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="skillContainer m-2" style="float:left; text-align: left">
                        <div onclick="skillModal('Vkd0Rk9WQlJQVDA9', true, '<?php echo Lang::SkillName(4); ?>', '<?php echo Lang::SkillDescription(4); ?>')" id="skill_6" class="skill">
                            <div class="skill_effect">
                                <div class="skillPoints skillPointFont">
                                    <span id="currentLevel_skill_6"><?php echo $UserSkills['skill_6']; ?></span>/5
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="skillContainer m-2" style="float:left; text-align: left">
                        <div onclick="skillModal('Vkd4Rk9WQlJQVDA9', true, '<?php echo Lang::SkillName(5); ?>', '<?php echo Lang::SkillDescription(5); ?>')" id="skill_23a" class="skill">
                            <div class="skill_effect">
                                <div class="skillPoints skillPointFont">
                                    <span id="currentLevel_skill_23a"><?php echo $UserSkills['skill_23a']; ?></span>/2
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="skillContainer m-2" style="float:left; text-align: left">
                        <div onclick="skillModal('Vkcxak9WQlJQVDA9', true, '<?php echo Lang::SkillName(6); ?>', '<?php echo Lang::SkillDescription(6); ?>')" id="skill_21a" class="skill">
                            <div class="skill_effect">
                                <div class="skillPoints skillPointFont">
                                    <span id="currentLevel_skill_21a"><?php echo $UserSkills['skill_21a']; ?></span>/2
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-1 row col-md-12">

                    <div class="skillContainer m-2" style="float:left; text-align: left">
                        <div onclick="skillModal('Vkc1ak9WQlJQVDA9', <?php echo ($UserSkills['skill_5a'] == 2) ? 'true' : 'false'; ?>,'<?php echo Lang::SkillName(7); ?>', '<?php echo Lang::SkillDescription(7); ?>')" id="skill_5b" class="skill">
                            <div id="data_skill_5b" class="<?php echo ($UserSkills['skill_5a'] == 2) ? 'skill_effect' : 'skill_effect_inactive'; ?>">
                                <div class="skillPoints skillPointFont">
                                    <span id="currentLevel_skill_5b"><?php echo $UserSkills['skill_5b']; ?></span>/3
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="skillContainer m-2" style="float:left; text-align: left">
                        <div onclick="skillModal('VkRCRk9WQlJQVDA9', <?php echo ($UserSkills['skill_21a'] == 2) ? 'true' : 'false'; ?>, '<?php echo Lang::SkillName(8); ?>', '<?php echo Lang::SkillDescription(8); ?>')" id="skill_21b" class="skill">
                            <div id="data_skill_21b" class="<?php echo ($UserSkills['skill_21a'] == 2) ? 'skill_effect' : 'skill_effect_inactive'; ?>">
                                <div class="skillPoints skillPointFont">
                                    <span id="currentLevel_skill_21b"><?php echo $UserSkills['skill_21b']; ?></span>/3
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="skillContainer m-2" style="float:left; text-align: left">
                        <div onclick="skillModal('VkRGRk9WQlJQVDA9', <?php echo ($UserSkills['skill_23a'] == 2) ? 'true' : 'false'; ?>,'<?php echo Lang::SkillName(9); ?>', '<?php echo Lang::SkillDescription(9); ?>')" id="skill_23b" class="skill">
                            <div id="data_skill_23b" class="<?php echo ($UserSkills['skill_23a'] == 2) ? 'skill_effect' : 'skill_effect_inactive'; ?>">
                                <div class="skillPoints skillPointFont">
                                    <span id="currentLevel_skill_23b"><?php echo $UserSkills['skill_23b']; ?></span>/3
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-12"><span id="usedRp"><?php echo Lang::getRP($UserSkills['usedRp']); ?></span></div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="skillModal" tabindex="-1" role="dialog" aria-labelledby="skillTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="col-md-12 modal-title text-center"></h5>
                </div>
                <div class="modal-body skillContent"></div>
                <div class="modal-footer">
                    <button type="button" class="btn modal-button waves-effect waves-light" data-dismiss="modal"><?php echo Lang::Get('Close'); ?></button>
                    <button id="upgradeButton" type="button" class="btn btn-success waves-effect waves-light buyButton" data-dismiss="modal"><?php echo Lang::Get('Upgrade'); ?></button>
                </div>
            </div>
        </div>
    </div>

    <script>
        var Value = '';
        var Param = true;

        function skillModal(Param1, Param4, Param2, Param3){
            $("#skillModal").modal();
            $(".modal-title").html(Param2);
            $(".skillContent").html(Param3);
            Value = Param1;
            if(Param4 == false){
                $(".buyButton").css('display', 'none');
                Param = false;
            }
            else{
                $(".buyButton").css('display', 'block');
                Param = true;
            }
        }

        $("#upgradeButton").click(function(){
            if(Param == false) return;
            $.ajax({
                type: 'POST',
                url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Account/SkillTree.php',
                data: {"Param1": Value},
                success: function(resultData){
                    if(resultData.error) swal('<?php echo Lang::Get('Error'); ?>!', resultData.msg, 'error');
                    else {
                        $("#currentLevel_" + resultData.Hash).html(resultData.Point);
                        $("#usedRp").html(resultData.UsedRP);
                        $("#currentRp").html(resultData.CurrentRP);
                        if(resultData.OpenMaxLevel == true){ $("#data_" + resultData.SkillName).removeClass("skill_effect_inactive"); $(".data_" + resultData.SkillName).addClass("skill_effect"); }
                        swal('<?php echo Lang::Get('Successful'); ?>!', resultData.msg, 'success');
                    }
                }
            });
        });

        $(".changeBtn").click(function(){
            $.ajax({
                type: 'POST',
                url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Account/ChangeRP.php',
                success: function(resultData){
                    if(resultData.error) swal('<?php echo Lang::Get('Error'); ?>!', resultData.msg, 'error');
                    else {
                        $("#currentLog").html(resultData.CurrentLog);
                        $("#requiredLog").html(resultData.RequiredLog);
                        $("#currentRp").html(resultData.CurrentRP);
                        swal('<?php echo Lang::Get('Successful'); ?>!', resultData.msg, 'success');
                    }
                }
            });
        });
    </script>

    <div class="spacer-10"></div>