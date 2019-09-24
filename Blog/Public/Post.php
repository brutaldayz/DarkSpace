<?php Blog::checkPost($Page[3]); $Blog = Blog::getBlog($Page[3]); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="Blog-Area">
                <article class="Blog-Main">
                    <header class="Blog-Header">
                        <div class="Blog-Header-Category <?php echo ($Blog['Type'] == 1) ? 'update' : (($Blog['Type'] == 2) ? 'announcement' : 'new'); ?>"><?php echo Lang::Get(($Blog['Type'] == 1) ? 'Update' : (($Blog['Type'] == 2) ? 'Announcement' : 'New')); ?></div>
                        <div class="right">
                            <a class="Blog-Header-Title" href="javascript:;"><h3><?php echo $Blog['Title']; ?></h3></a>
                            <time class="Blog-Header-Time"><?php echo Functions::ConvertDate($Blog['Date']); ?></time>
                        </div>
                    </header>

                    <?php if($Blog['Image'] != ""){ ?><img class="Blog-Image" src="<?php echo Main; ?>Upload/Blog/<?php echo $Blog['Image']; ?>" alt="<?php echo $Blog['Title']; ?>"><?php } ?>
                    <?php echo $Blog['Content']; ?>
                </article>
            </div>
        </div>
        <div class="col-md-4">
            <?php require_once('GLOBAL/RightColumn.php'); ?>
        </div>
    </div>
</div>