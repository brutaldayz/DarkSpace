    <div class="spacer-40"></div>
    
    <div class="container">

        <?php require_once('GLOBAL/Data.php'); ?>

        <div class="spacer-10"></div>

        <style>
            .user-table td{
                padding: 5px;
                border: none;
            }
        </style>

        <div class="row">
            <div class="col-6 mb-2">
                <div class="rb-panel user-panel p-4">
                    <div class="avatar" style="background:url('<?php echo Config::Get('SERVER_URL'); ?>Upload/Players/Avatar.png');"></div>
                    <div class="infos">
                        <div class="shipName pb-2"><?php echo $Player->Data['shipName']; ?></div>
                        <label><?php echo Lang::Get('NavClan'); ?>:</label> <?php echo ($Player->Data['clanID'] != 0) ? ''.Clan::MyClan($Player->Data['clanID'], 'name').'' : ''.Lang::Get('DontHaveClan').''; ?><br>
                        <label><?php echo Lang::Get('Rank'); ?>:</label> <img src="<?php echo Config::Get('DO_IMG'); ?>global/ranks/rank_<?php echo $Player->Data['rankID']; ?>.png"> <?php echo Lang::Rank($Player->Data['rankID']); ?><br>
                        <label><?php echo Lang::Get('Level'); ?>:</label> <?php echo $Player->Data['level']; ?></i>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-2">
                <div class="rb-panel">
                    <div class="full-width">
                        <div class="full-width mt-2 text-center">
                            <a href="<?php echo Config::Get('SERVER_URL'); ?>Profile/<?php echo $Player->Data['profileID']; ?>" target="_blank"><button class="full-width btn rb-button waves-effect waves-light mb-2"><?php echo Lang::Get('Pilot'); ?></button></a>
                            <a href="<?php echo Config::Get('SERVER_URL'); ?>DailyRank"><button class="full-width btn rb-button waves-effect waves-light mb-2"><?php echo Lang::Get('Ranking'); ?></button></a>
                            <a href="<?php echo Config::Get('SERVER_URL'); ?>Logbook"><button class="full-width btn rb-button waves-effect waves-light mb-2"><?php echo Lang::Get('Logbook'); ?></button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="spacer-10"></div>

        <div class="row">
            <div class="col-md-6 mb-2"><button id="ShowPlayers" class="btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('Players'); ?></button></div>
            <div class="col-md-6 mb-2"><button id="ShowClans" class="btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('Clans'); ?></button></div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="Players">
                    <table class="table table-bordered rb-table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col"><?php echo Lang::Get('Username'); ?></th>
                                <th scope="col" class="text-center"><?php echo Lang::Get('Company'); ?></th>
                                <th scope="col" class="text-center"><?php echo Lang::Get('Rank'); ?></th>
                                <th scope="col"><?php echo Lang::Get('Value'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($Player->Data['rankID'] > 10) $Limit = 9; else $Limit = 10; $PlayerRank = Rank::getPlayerRank($Limit); foreach ($PlayerRank as $value) { ?>
                            <tr>
                                <td><?php echo $value['rank'] ?></td>
                                <td><a href="<?php echo Config::Get('SERVER_URL'); ?>Profile/<?php echo $value['profileID']; ?>"><?php echo $value['shipName']; ?></a></td>
                                <td class="text-center"><img src="<?php echo Config::Get('DO_IMG'); ?>global/companies/company_<?php echo ($value['factionID'] != 0) ? $value['factionID'] : '1'; ?>.png"></td>
                                <td class="text-center"><img src="<?php echo Config::Get('DO_IMG'); ?>global/ranks/rank_<?php echo $value['rankID']; ?>.png"></td>
                                <td><?php echo number_format($value['rankPoints']); ?></td>
                            </tr>
                            <?php } ?>
                            <?php if($Player->Data['rankID'] > 10){ ?>
                            <tr>
                                <td><?php echo $Player->Data['rank'] ?></td>
                                <td><a href="<?php echo Config::Get('SERVER_URL'); ?>Profile/<?php echo $Player->Data['profileID']; ?>"><?php echo $Player->Data['shipName']; ?></a></td>
                                <td class="text-center"><img src="<?php echo Config::Get('DO_IMG'); ?>global/companies/company_<?php echo $Player->Data['factionID']; ?>.png"></td>
                                <td class="text-center"><img src="<?php echo Config::Get('DO_IMG'); ?>global/ranks/rank_<?php echo $Player->Data['rankID']; ?>.png"></td>
                                <td><?php echo number_format($Player->Data['rankPoints']); ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div id="Clans" style="display: none;">
                    <table class="table table-bordered rb-table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col"><?php echo Lang::Get('NameTag'); ?></th>
                                <th scope="col"><?php echo Lang::Get('Value'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($Player->Data['clanID'] != 0 && Clan::MyClan($Player->Data['clanID'], 'rank') > 10) $Limit = 9; else $Limit = 10; $ClanRank = Rank::getClanRank($Limit); foreach ($ClanRank as $value) { ?>
                            <tr>
                                <td><?php echo $value['rank']; ?></td>
                                <td><a href="<?php echo Config::Get('SERVER_URL'); ?>ClanDetails/<?php echo $value['randomID']; ?>"><?php echo $value['name']; ?> [<?php echo $value['tag']; ?>]</a></td>
                                <td><?php echo number_format($value['rankPoints']); ?></td>
                            </tr>
                            <?php } ?>
                            <?php if($Player->Data['clanID'] != 0 && Clan::MyClan($Player->Data['clanID'], 'rank') > 10){ ?>
                            <tr>
                                <td><?php echo Clan::MyClan($Player->Data['clanID'], 'rank'); ?></td>
                                <td><a href="<?php echo Config::Get('SERVER_URL'); ?>ClanDetails/<?php echo Clan::MyClan($Player->Data['clanID'], 'randomID'); ?>"><?php echo Clan::MyClan($Player->Data['clanID'], 'name'); ?> [<?php echo Clan::MyClan($Player->Data['clanID'], 'tag'); ?>]</a></td>
                                <td><?php echo number_format(Clan::MyClan($Player->Data['clanID'], 'rankPoints')); ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-12 mb-3 text-center">
                <a href="<?php echo Config::Get('SERVER_URL'); ?>HallOfFame"><button class="col-md-6 btn rb-button waves-effect waves-light"><?php echo Lang::Get('HallOfFame'); ?></button></a>
            </div>
        </div>
    </div>

    <div class="spacer-10"></div>

    <div class="modal fade" id="news" tabindex="-1" role="dialog" aria-labelledby="newsTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="col-md-12 modal-title text-center" id="newsTitle"><?php echo Lang::Get('News'); ?></h5>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn modal-button waves-effect waves-light" data-dismiss="modal"><?php echo Lang::Get('Close'); ?></button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="events" tabindex="-1" role="dialog" aria-labelledby="eventsTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="col-md-12 modal-title text-center" id="eventsTitle"><?php echo Lang::Get('Events'); ?></h5>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn modal-button waves-effect waves-light" data-dismiss="modal"><?php echo Lang::Get('Close'); ?></button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="announcements" tabindex="-1" role="dialog" aria-labelledby="announcementsTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="col-md-12 modal-title text-center" id="announcementsTitle"><?php echo Lang::Get('Announcements'); ?></h5>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn modal-button waves-effect waves-light" data-dismiss="modal"><?php echo Lang::Get('Close'); ?></button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $("#ShowPlayers").click(function(){
            if ($("#Players").is(':visible')) return false;
            $("#Clans").css('display', 'none');
            $("#Players").css('display', 'block');
        });

        $("#ShowClans").click(function(){
            if ($("#Clans").is(':visible')) return false;
            $("#Players").css('display', 'none');
            $("#Clans").css('display', 'block');
        });
    </script>