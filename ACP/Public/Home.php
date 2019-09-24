
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
                                <li><span>Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-content-inner">
                <div class="sales-report-area mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30 onlineUsers" style="cursor: pointer;">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-user"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Online User</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2><?php echo Socket::Get('OnlineCount', array('Return' => 0)); ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="onlineUserModal">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Online Players</h5>
                                        <button type="button" class="close text-white" data-dismiss="modal"><span>&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-dark">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Username</th>
                                                    <th>Last Login IP</th>
                                                    <th>Register IP</th>
                                                </tr>
                                            </thead>
                                        <?php $users = $db->query("SELECT shipName, profileID, Info FROM player_accounts WHERE online = 1"); if($users->rowCount() != 0){ $users = $users->fetchAll(); foreach ($users as $key => $value) { ?>
                                            <tr>
                                                <td><?php echo $key+1; ?></td>
                                                <td><a href="<?php echo Config::Get('SERVER_URL'); ?>ACP/Player/<?php echo $value['profileID']; ?>"><?php echo $value['shipName']; ?></a></td>
                                                <td><?php echo json_decode($value['Info'])->LastLoginIP; ?></td>
                                                <td><?php echo json_decode($value['Info'])->RegisterIP; ?></td>
                                            </tr>
                                        <?php }} ?>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn rb-button" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            $(".onlineUsers").click(function(){
                                $("#onlineUserModal").modal();
                            });
                        </script>
                        
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-envelope"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Support Requests</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2>0</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-envelope"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Support Requests</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2>0</h2>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
