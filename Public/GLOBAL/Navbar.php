
    <nav class="navbar navbar-expand-lg navbar-dark rb-nav rb">
        <div class="container">
            <a class="navbar-brand" href="<?php echo Config::Get('SERVER_URL'); ?>"><?php echo Config::Get('SERVER_NAME'); ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarEx01" aria-controls="navbarEx01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarEx01">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item waves-effect"><a class="nav-link" href="<?php echo Config::Get('SERVER_URL'); ?>"><?php echo Lang::Get('NavHome'); ?></a></li>
                    <li class="nav-item waves-effect"><a class="nav-link play-btn" target="_blank" href="<?php echo Config::Get('SERVER_URL'); ?>MapRevolution"><?php echo Lang::Get('NavPlay'); ?></a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item waves-effect" href="<?php echo Config::Get('SERVER_URL'); ?>Blog">Blog</a>
                            <a class="dropdown-item waves-effect" href="<?php echo Config::Get('SERVER_URL'); ?>Blog/Events"><?php echo Lang::Get('Events'); ?></a>
                            <a class="dropdown-item waves-effect" href="<?php echo Config::Get('SERVER_URL'); ?>Blog/Tournaments"><?php echo Lang::Get('Tournaments'); ?></a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo Lang::Get('NavHangar'); ?></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item waves-effect" href="<?php echo Config::Get('SERVER_URL'); ?>Hangar"><?php echo Lang::Get('NavHangar'); ?></a>
                            <a class="dropdown-item waves-effect" href="<?php echo Config::Get('SERVER_URL'); ?>Equipment"><?php echo Lang::Get('NavEquipment'); ?></a>
                            <a class="dropdown-item waves-effect" href="<?php echo Config::Get('SERVER_URL'); ?>SkilTree"><?php echo Lang::Get('NavSkillTree'); ?></a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo Lang::Get('NavShop'); ?></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item waves-effect" href="<?php echo Config::Get('SERVER_URL'); ?>Shop"><?php echo Lang::Get('NavShop'); ?></a>
                            <a class="dropdown-item waves-effect" href="<?php echo Config::Get('SERVER_URL'); ?>Evoucher"><?php echo Lang::Get('NavEvoucher'); ?></a>
                            <a class="dropdown-item waves-effect" href="<?php echo Config::Get('SERVER_URL'); ?>Payment"><?php echo Lang::Get('NavPayment'); ?></a>
                            <a class="dropdown-item waves-effect" href="<?php echo Config::Get('SERVER_URL'); ?>Dsc"><?php echo Lang::Get('NavDsc'); ?></a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo Lang::Get('NavClan'); ?></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php if($Player->Data['clanID'] == 0){ ?>
                            <a class="dropdown-item waves-effect" href="<?php echo Config::Get('SERVER_URL'); ?>ClanJoin"><?php echo Lang::Get('NavJoin'); ?></a>
                            <a class="dropdown-item waves-effect" href="<?php echo Config::Get('SERVER_URL'); ?>ClanFound"><?php echo Lang::Get('NavFound'); ?></a>
                            <?php }else{ ?>
                            <a class="dropdown-item waves-effect" href="<?php echo Config::Get('SERVER_URL'); ?>Clan"><?php echo Lang::Get('NavClan'); ?></a>
                            <a class="dropdown-item waves-effect" href="<?php echo Config::Get('SERVER_URL'); ?>ClanMembers"><?php echo Lang::Get('NavMembers'); ?></a>
                            <a class="dropdown-item waves-effect" href="<?php echo Config::Get('SERVER_URL'); ?>ClanDiplomacy"><?php echo Lang::Get('NavDiplomacy'); ?></a>
                            <?php } ?>
                            <a class="dropdown-item waves-effect" href="<?php echo Config::Get('SERVER_URL'); ?>Company"><?php echo Lang::Get('NavCompany'); ?></a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo Lang::Get('NavAccount'); ?></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item waves-effect" href="<?php echo Config::Get('SERVER_URL'); ?>Account"><?php echo Lang::Get('NavProfile'); ?></a>
                            <a class="dropdown-item waves-effect" href="<?php echo Config::Get('SERVER_URL'); ?>Settings"><?php echo Lang::Get('NavSettings'); ?></a>
                            <?php if($Player->Data['rankID'] == 21){ ?><a class="dropdown-item waves-effect" href="<?php echo Config::Get('SERVER_URL'); ?>ACP">ACP</a><?php } ?>
                            <a class="dropdown-item waves-effect" href="<?php echo Config::Get('SERVER_URL'); ?>Logout"><?php echo Lang::Get('NavLogout'); ?></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
