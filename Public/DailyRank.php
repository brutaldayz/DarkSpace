
    <div class="spacer-40"></div>
    
    <div class="container">

        <?php require_once('GLOBAL/Data.php'); ?>

        <div class="spacer-10"></div>

        <?php
            $Date1 = new DateTime(date('d.m.Y H:i:s'));
            $Date2 = new DateTime($Player->GetData('Info', 'CreatedDate'));
            $Interval = $Date1->diff($Date2);
            $Date = $Interval->format('%a');
            if($Date == 0) $Date = 1;
        ?>

        <div class="col-md-12">
            <div class="row rb-panel">
                <div class="text-center mb-4">
                    <a id="section_your" class="hof_section_active" href="<?php echo Config::Get('SERVER_URL'); ?>DailyRank"></a>
                    <a id="section_exp" class="hof_section" href="<?php echo Config::Get('SERVER_URL'); ?>HomeExp"></a>
                    <a id="section_hnr" class="hof_section" href="<?php echo Config::Get('SERVER_URL'); ?>HomeHonor"></a>
                    <a id="section_user" class="hof_section" href="<?php echo Config::Get('SERVER_URL'); ?>HallOfFame"></a>
                    <a id="section_clan" class="hof_section" href="<?php echo Config::Get('SERVER_URL'); ?>HomeClan"></a>
                    <!--<a id="section_gate" class="hof_section" href="<?php echo Config::Get('SERVER_URL'); ?>HomeGate"></a>
                    <a id="section_event" class="hof_section" href="<?php echo Config::Get('SERVER_URL'); ?>HomeEvent"></a>-->
                </div>

                <div class="full-width text-center halloffame_title mb-2">
                    <?php echo Lang::GetDailyRank(); ?>
                </div>

                <div class="full-width text-center">
                    <table class="halloffame_table full-width text-center">
                        <tr>
                            <td class="p-10 text-left"><span class="rb-text">+</span> <?php echo Lang::Get('ExperiencePoints'); ?></td>
                            <td class="p-10 text-right"><?php echo number_format($Player->GetData('Data', 'experience')); ?> <span class="rb-text">/ 10,000</span></td>
                        </tr>
                        <tr>
                            <td class="p-10 text-left"><span class="rb-text">+</span> <?php echo Lang::Get('HonorPoints'); ?></td>
                            <td class="p-10 text-right"><?php echo number_format($Player->GetData('Data', 'honor')); ?> <span class="rb-text">/ 100</span></td>
                        </tr>
                        <tr>
                            <td class="p-10 text-left"><span class="rb-text">+</span> <?php echo Lang::Get('YourLevel'); ?></td>
                            <td class="p-10 text-right"><?php echo $Player->Data['level']; ?> <span class="rb-text">x 100</span></td>
                        </tr>
                        <tr>
                            <td class="p-10 text-left"><span class="rb-text">+</span> <?php echo Lang::Get('DaySince'); ?></td>
                            <td class="p-10 text-right"><?php echo $Date; ?> <span class="rb-text">x 6</span></td>
                        </tr>
                        <tr>
                            <td class="p-10 text-left"><span class="rb-text">+</span> <?php echo Lang::Get('ShipType'); ?> (<?php echo Database::Connection()->query("SELECT name FROM server_ships WHERE shipID = {$Player->Data['shipID']}")->fetch()['name']; ?>)</td>
                            <td class="p-10 text-right">10 <span class="rb-text">x 1,000</span></td>
                        </tr>
                    </table>

                    <?php if($Player->Data['rankID'] <= 19){ ?>
                    <p class="mt-2 text-left"><?php echo Lang::GetOtherRank(number_format(Rank::getOtherRank($Player->Data['rankID']+1, $Player->Data['factionID']) - $Player->Data['rankPoints']), $Player->Data['rankID']+1); ?></p>
                    <?php }else{ ?>
                    <p class="mt-2 text-left"><?php echo Lang::Get('HighestRank'); ?> <img src="<?php echo Config::Get('SERVER_URL'); ?>do_img/global/ranks/rank_<?php echo $Player->Data['rankID']; ?>.png"> <?php echo Lang::Rank($Player->Data['rankID']); ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <div class="spacer-10"></div>