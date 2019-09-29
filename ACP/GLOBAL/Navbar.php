<body class="app sidebar-mini rtl">

<div id="global-loader">
    <img src="<?php echo Config::Get('ASSETS'); ?>ACP/images/icons/loader.svg" alt="loader">
</div>

<div class="page">
    <div class="page-main">
        <div class="app-header header hor-topheader d-flex">
			<div class="container">
				<div class="d-flex">
					<a class="header-brand mt-2" href="<?php echo Config::Get('ACP'); ?>"><?php echo Config::Get('SERVER_NAME'); ?></a>
					<a id="horizontal-navtoggle" class="animated-arrow hor-toggle"><span></span></a>
                    <div class="d-flex order-lg-2 ml-auto header-rightmenu">
                        <div class="dropdown">
							<a class="nav-link icon full-screen-link" id="fullscreen-button"><i class="fe fe-maximize-2"></i></a>
                        </div>
                        <div class="dropdown header-user">
							<a class="nav-link leading-none siderbar-link" data-toggle="sidebar-right" data-target=".sidebar-right">
								<span class="mr-3 d-none d-lg-block">
									<span class="text-gray-white"><span class="ml-2"><?php echo $Player->Data['shipName']; ?></span></span>
								</span>
								<span class="avatar avatar-md brround"><img src="<?php echo Config::Get('SERVER_URL'); ?>Upload/Players/Avatar.png" class="avatar avatar-md brround"></span>
							</a>
					    </div>
				    </div>
                </div>
            </div>
        </div>
                
        <div class="horizontal-main hor-menu clearfix">
            <div class="horizontal-mainwrapper container clearfix">
                <nav class="horizontalMenu clearfix">
                    <ul class="horizontalMenu-list">
                        <li aria-haspopup="true"><a href="<?php echo Config::Get('ACP'); ?>Home" class="sub-icon active"><i class="typcn typcn-device-desktop hor-icon"></i> Homepage</a></li>
                        <li aria-haspopup="true"><a href="javascript:;" class="sub-icon"><i class="si si-user hor-icon"></i> Player Operations <i class="fa fa-angle-down horizontal-icon"></i></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="<?php echo Config::Get('ACP'); ?>Players">Players</a></li>
                                <li aria-haspopup="true"><a href="<?php echo Config::Get('ACP'); ?>PlayerSearch">Search</a></li>
                            </ul>
                        </li>
                        <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="si si-pencil hor-icon"></i> Blog <i class="fa fa-angle-down horizontal-icon"></i></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="<?php echo Config::Get('ACP'); ?>BlogShare">Share</a></li>
                                <li aria-haspopup="true"><a href="<?php echo Config::Get('ACP'); ?>BlogEdit">Edit</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>