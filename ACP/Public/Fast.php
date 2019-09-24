
<?php $db = Database::Connection(); ?>
<div id="preloader">
    <div class="loader"></div>
</div>
<div class="page-container">
    <div class="sidebar-menu">
        <div class="sidebar-header">
            <div class="logo">
                <a href="<?php echo Config::Get('SERVER_URL'); ?>Home"><h4><?php echo Config::Get('SERVER_NAME'); ?></h4></a>
            </div>
        </div>
        
        <?php require_once('GLOBAL/Sidebar.php'); ?>
        <div class="main-content">
            <?php require_once('GLOBAL/Navbar.php'); ?>
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="<?php echo Config::Get('ADMIN'); ?>Home">Home</a></li>
                                <li><a href="javascript:;">Param1</a></li>
                                <li><span>Param2</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-content-inner">
                
                <div class="row">
                    <div class="col-lg-12 col-ml-12">
                        <div class="row">
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">User ID</label>
                                            <input class="form-control" type="text" placeholder="User ID...">
                                            <button id="ban" type="button" class="col-md-2 btn btn-primary mt-4 pr-4 pl-4">Ban</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>