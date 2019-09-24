<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="Blog-Area">

                <?php
                    $Blog = Database::Connection()->query("SELECT * FROM server_blog ORDER BY BlogID DESC")->fetchAll();
                    foreach ($Blog as $Row) {
                ?>

                <article class="Blog-Main mb-5">
                    <header class="Blog-Header">
                        <div class="Blog-Header-Category <?php echo ($Row['Type'] == 1) ? 'update' : (($Row['Type'] == 2) ? 'announcement' : 'new'); ?>"><?php echo Lang::Get(($Row['Type'] == 1) ? 'Update' : (($Row['Type'] == 2) ? 'Announcement' : 'New')); ?></div>
                        <div class="right">
                            <a class="Blog-Header-Title" href="<?php echo Config::Get('BLOG'); ?>Post/<?php echo $Row['Url']; ?>"><h3><?php echo $Row['Title']; ?></h3></a>
                            <time class="Blog-Header-Time"><?php echo Functions::ConvertDate($Row['Date']); ?></time>
                        </div>
                    </header>
                    <?php if($Row['Image'] != ""){ ?><img class="Blog-Image" src="<?php echo Main; ?>Upload/Blog/<?php echo $Row['Image']; ?>" alt="<?php echo $Row['Title']; ?>"><?php } ?>
                    <p><?php echo $Row['Content']; ?></p>
                    <a class="Blog-ReadMore" href="<?php echo Config::Get('BLOG'); ?>Post/<?php echo $Row['Url']; ?>"><?php echo Lang::Get('ReadMore'); ?> ></a>
                </article>

                <?php } ?>

            </div>
        </div>
        <div class="col-md-4">
            <?php require_once('GLOBAL/RightColumn.php'); ?>
        </div>
    </div>
</div>