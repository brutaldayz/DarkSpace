<?php Blog::checkTournament($Page[3]); $Row = Blog::getTournament($Page[3]); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="Blog-Area">
                <article class="Blog-Main">
                    <header class="Blog-Header">
                        <div class="Blog-Header-Category tournaments"><?php echo Lang::Get('Tournament'); ?></div>
                        <div class="right">
                            <a class="Blog-Header-Title" href="<?php echo Config::Get('BLOG'); ?>Tournament/<?php echo $Row['id']; ?>"><h3><?php echo $Row['id']; ?>. <?php echo Lang::Get('Tournament'); ?></h3></a>
                            <time class="Blog-Header-Time"><?php echo Functions::ConvertDate($Row['start_date']); ?></time>
                        </div>
                    </header>

                    <img class="Blog-Image mb-4" src="<?php echo Main; ?>Upload/Blog/Blog.jpg" alt="<?php echo $Row['id']; ?>. Tournament"> 
                    
                    <?php
                        $StartTime = $Row['start_date'];
                        $EndTime = $Row['end_date'];
                        $StartTime = strtotime($StartTime);
                        $EndTime = strtotime($EndTime);
                        $Time = $EndTime - $StartTime;
                    ?>

                    <div class="jpbInfo">
                        <p><?php echo Lang::Get('TotalJoined'); ?>: <?php echo count(json_decode($Row['players'])); ?> <?php echo Lang::Get('PlayersJoined'); ?></p>
                        <p><?php echo Lang::Get('TotalJoined'); ?>: <?php echo Functions::convertSecToStr($Time); ?></p>
                    </div>

                    <div class="finalists mb-2">
                        <strong><?php echo Lang::Get('FinalistPlayers'); ?>:</strong> <?php echo Functions::getShipName(json_decode($Row['finalists'])[0]); ?> <b>Vs</b> <?php echo Functions::getShipName(json_decode($Row['finalists'])[1]); ?>
                    </div>

                    <div class="winner mb-2">
                        <strong><?php echo Lang::Get('Winner'); ?>:</strong> <?php echo Functions::getShipName($Row['winner_id']); ?>
                    </div>

                    <button class="btn rb-button mb-2 waves-effect waves-light" type="button" data-toggle="collapse" data-target="#joinedPlayers" aria-expanded="false" aria-controls="joinedPlayers"><?php echo Lang::Get('ShowJoinedP'); ?></button>

                    <div class="collapse" id="joinedPlayers">
                        <div class="tournament-players">
                            <?php
                                $k = 1;
                                foreach (json_decode($Row['players']) as $value) {
                                    echo "<p>" . $k++ . ') ' . Functions::getShipName($value) . "</p>";
                                }
                            ?>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <div class="col-md-4">
            <?php require_once('GLOBAL/RightColumn.php'); ?>
        </div>
    </div>
</div>