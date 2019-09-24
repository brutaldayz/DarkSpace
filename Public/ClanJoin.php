

    <?php Clan::CheckClan(1); ?>

    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('SERVER_URL'); ?>Assets/Css/Clan.min.css" />

    <div class="spacer-40"></div>
    
    <div class="container">

        <?php require_once('GLOBAL/Data.php'); ?>

        <div class="spacer-10"></div>

        <div class="col-md-12">
            <div class="row rb-panel">
                <div class="col-md-3 clan-title mb-2"><?php echo Lang::Get('ClanList'); ?></div>
                <div class="col-md-9 mb-4">
                    <div class="input-group">
                        <input type="text" class="form-control search-input" placeholder="<?php echo Lang::Get('Search'); ?>...">
                        <div class="input-group-prepend">
                            <button id="clanSearch" class="btn rb-button waves-effect waves-light" type="button"><?php echo Lang::Get('Search'); ?></button>
                        </div>
                    </div>
                </div>

                <?php $Clans = Database::Connection()->query("SELECT name, tag, rankPoints, clanID, randomID FROM server_clan ORDER BY rankPoints DESC", PDO::FETCH_ASSOC)->fetchAll(); ?>

                <div class="clan-list clan-list2">
                    <table class="table table-dark">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th><?php echo Lang::Get('ClanNameTag'); ?></th>
                                <th><?php echo Lang::Get('Members'); ?></th>
                                <th><?php echo Lang::Get('Value'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $k = 1; foreach($Clans as $Row){ ?>
                            <tr>
                                <th><?php echo $k++; ?></th>
                                <td><a href="<?php echo Config::Get('SERVER_URL'); ?>ClanDetails/<?php echo $Row['randomID']; ?>"><?php echo $Row['name']; ?> [<?php echo $Row['tag']; ?>]</a></td>
                                <td><?php echo Clan::GetMemberCount($Row['clanID']); ?></td>
                                <td><?php echo number_format($Row['rankPoints']); ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="clan-search" style="display: none;"></div>
            </div>
        </div>

        <script>
            $("#clanSearch").click(function(){
                if($(".search-input").val() === ""){
                    if ($(".clan-search").is(':visible')) {
                        $(".clan-search").css('display', 'none');
                        $(".clan-list2").css('display', 'block');
                    }
                    return false;
                }else{
                    $.ajax({
                        type: 'POST',
                        url: '/Ajax/Clan/ClanSearch.php',
                        data: {"Value": $(".search-input").val()},
                        success: function(resultData){
                            $(".clan-search").html(resultData);
                        }
                    });
                }
            });

            function hide(){
                if ($(".clan-list2").is(':visible')) {
                    $(".clan-list2").css('display', 'none');
                    $(".clan-search").css('display', 'block');
                }
            }

            function clear(){
                $(".clan-search").css('display', 'none');
                $(".clan-list2").css('display', 'block');
            }
        </script>
    </div>

    <div class="spacer-10"></div>