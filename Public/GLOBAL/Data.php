        <div class="col-md-12">
            <div class="row rb-panel data-panel">
                <div class="col-3"><?php echo Lang::Get('Exp'); ?>: <?php echo number_format($Player->GetData('Data', 'experience')); ?></div>
                <div class="col-3"><?php echo Lang::Get('Honor'); ?>: <?php echo number_format($Player->GetData('Data', 'honor')); ?></div>
                <div class="col-3 UridiumTab">U. : <?php echo number_format($Player->GetData('Data', 'uridium')); ?></div>
                <div class="col-3 CrediTab">C. : <?php echo number_format($Player->GetData('Data', 'credits')); ?></div>
            </div>
        </div>