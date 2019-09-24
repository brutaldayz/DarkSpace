
    <div class="spacer-40"></div>
    
    <div class="container">

        <?php require_once('GLOBAL/Data.php'); ?>

        <div class="spacer-10"></div>

        <div class="col-md-12">
            <div class="row rb-panel">
                <div class="text-center mb-4">
                    <a id="section_your" class="hof_section" href="<?php echo Config::Get('SERVER_URL'); ?>DailyRank"></a>
                    <a id="section_exp" class="hof_section" href="<?php echo Config::Get('SERVER_URL'); ?>HomeExp"></a>
                    <a id="section_hnr" class="hof_section_active" href="<?php echo Config::Get('SERVER_URL'); ?>HomeHonor"></a>
                    <a id="section_user" class="hof_section" href="<?php echo Config::Get('SERVER_URL'); ?>HallOfFame"></a>
                    <a id="section_clan" class="hof_section" href="<?php echo Config::Get('SERVER_URL'); ?>HomeClan"></a>
                    <!--<a id="section_gate" class="hof_section" href="<?php echo Config::Get('SERVER_URL'); ?>HomeGate"></a>
                    <a id="section_event" class="hof_section" href="<?php echo Config::Get('SERVER_URL'); ?>HomeEvent"></a>-->
                </div>

                <div class="full-width text-center halloffame_title mb-2">
                    <?php echo Lang::Get('HonorRank'); ?>
                </div>

                <div class="full-width halloffame_table_limited">
                    <table class="halloffame_table full-width">
                        <?php Rank::GetHallOfFameRanking($Player->Data['userID'], 'honor', 250); ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="spacer-10"></div>