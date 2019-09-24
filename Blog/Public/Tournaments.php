<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="Blog-Area">

                <?php
                    $Jpb = Database::Connection()->query("SELECT * FROM log_event_jpb ORDER BY id DESC")->fetchAll();
                    foreach ($Jpb as $Row) {
                ?>

                <article class="Blog-Main mb-5">
                    <header class="Blog-Header">
                        <div class="Blog-Header-Category tournaments"><?php echo Lang::Get('Tournament'); ?></div>
                        <div class="right">
                            <a class="Blog-Header-Title" href="<?php echo Config::Get('BLOG'); ?>Tournament/<?php echo $Row['id']; ?>"><h3><?php echo $Row['id']; ?>. <?php echo Lang::Get('Tournament'); ?></h3></a>
                            <time class="Blog-Header-Time"><?php echo Functions::ConvertDate($Row['start_date']); ?></time>
                        </div>
                    </header>
                    <img class="Blog-Image" src="<?php echo Main; ?>Upload/Blog/Blog.jpg" alt="<?php echo $Row['id']; ?>. Tournament"> 
                    <p><?php echo count(json_decode($Row['players'])); ?> <?php echo Lang::Get('PlayersJoined'); ?></p>
                    <a class="Blog-ReadMore" href="<?php echo Config::Get('BLOG'); ?>Tournament/<?php echo $Row['id']; ?>"><?php echo Lang::Get('ReadMore'); ?> ></a>
                </article>

                <?php } ?>

            </div>
        </div>
        <div class="col-md-4">
            <?php require_once('GLOBAL/RightColumn.php'); ?>
        </div>
    </div>
</div>

<div class="spacer-50"></div>