            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li><a href="<?php echo Config::Get('SERVER_URL'); ?>ACP/Home"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i> <span>Player Operations</span></a>
                                <ul class="collapse">
                                    <li><a href="<?php echo Config::Get('SERVER_URL'); ?>ACP/Search">Search</a></li>
                                    <li><a href="<?php echo Config::Get('SERVER_URL'); ?>ACP/Ban">Ban</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-book"></i> <span>Blog</span></a>
                                <ul class="collapse">
                                    <li><a href="<?php echo Config::Get('SERVER_URL'); ?>ACP/Share">Share</a></li>
                                    <li><a href="<?php echo Config::Get('SERVER_URL'); ?>ACP/Edit">Edit</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>