<?php 
        $db = Database::Connection(); 

        $UserSkills = $db->query("SELECT * FROM player_skilltree WHERE userID = ".$Player->Data['userID']."")->fetch();
        $SkillTree = SkillTree::GetSkills($UserSkills);
       
    ?>
    
    <div class="spacer-40"></div>

    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('CSS'); ?>Skills.min.css" />
    
    <div class="container">

        <?php require_once('GLOBAL/Data.php'); ?>

        <div class="spacer-10"></div>

        <div class="col-md-12">
            <div class="row rb-panel">

                <script>
                    $(function () {
                        $('[data-toggle="tooltip"]').tooltip({ html: true });
                    })
                </script>

                <div class="mt-1">
                    <div class="col-md-12">
                        <span class="font-17">
                            <?php echo Lang::Get('LogDisk'); ?> <span id="currentLog"><?php echo number_format($UserSkills['logDisk']); ?></span> / <?php echo Lang::Get('RequiredDisk'); ?> <span id="requiredLog"><?php echo number_format(SkillTree::getRequiredLogdisk(($UserSkills['currentRp']+$UserSkills['usedRp'])+1)); ?></span> > <button class="rb-button btn-sm changeBtn" style="width: auto; height: auto;border:none;text-align:center;" <?php if($UserSkills['logDisk'] < SkillTree::getRequiredLogdisk(($UserSkills['currentRp']+$UserSkills['usedRp'])+1)) echo "disabled"; ?>><?php echo Lang::Get('Exchange'); ?></button> >> <?php echo Lang::Get('ResearchPoints'); ?> <span id="currentRp"><?php echo $UserSkills['currentRp']; ?></span>
                        </span>
                    </div>
                </div>

                <div class="mt-3 row col-md-12">

                    <?php foreach ($SkillTree as $key => $Skill) { ?>

                    <div class="skillContainer m-2" style="float:left; text-align: left" data-toggle="tooltip" data-placement="left" title="<?php echo Lang::Get('SkillName'); ?>: <span style='color: #a4d3ef;'><?php echo Lang::SkillName($Skill['ID']); ?></span><br><?php echo Lang::Get('Level'); ?>: <span style='color: #a4d3ef;'><?php echo $Skill['CurrentLevel']; ?>/<?php echo $Skill['MaxLevel']; ?></span><?php echo SkillTree::GetTooltips($Skill['ID'], $Skill['CurrentLevel'], $Skill['MaxLevel']); ?>">
                        <div onclick="skillModal('<?php echo $Skill['Hash']; ?>', '<?php echo Lang::SkillName($Skill['ID']); ?>')" id="<?php echo $key; ?>" class="skill">
                            <div id="data_<?php echo $key; ?>" class="<?php if($Skill['HighLevel']) { echo $SkillTree[$Skill['LowLevel']]['CurrentLevel'] == $SkillTree[$Skill['LowLevel']]['MaxLevel'] ? 'skill_effect' : 'skill_effect_inactive'; } else{ echo "skill_effect"; } ?>">
                                <div class="skillPoints <?php echo ($Skill['CurrentLevel'] == $Skill['MaxLevel'] ? 'skill_font_max' : 'skillPointFont'); ?>" data-id="<?php echo $key; ?>">
                                    <span id="currentLevel_<?php echo $key; ?>"><?php echo $Skill['CurrentLevel']; ?></span>/<?php echo $Skill['MaxLevel']; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                    
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

        function skillModal(Param1, Param2){
            $.ajax({
                type: 'POST',
                url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Account/SkillTree.php',
                data: {"Param1": Param1},
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
        }

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