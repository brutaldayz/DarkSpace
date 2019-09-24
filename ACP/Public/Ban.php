
<?php $db = Database::Connection(); ?>
<div id="preloader">
    <div class="loader"></div>
</div>
<div class="page-container">
    <div class="sidebar-menu">
        <div class="sidebar-header">
            <div class="logo"><a href="<?php echo Config::Get('SERVER_URL'); ?>Home"><h4><?php echo Config::Get('SERVER_NAME'); ?></h4></a></div>
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
                                <li><a href="javascript:;">Player Operations</a></li>
                                <li><span>Ban</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-content-inner">
                
                <div class="row">
                    <div class="col-lg-12 col-ml-12">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="col-form-label">User ID</label>
                                            <input class="form-control Param1" type="text" placeholder="User ID...">
                                            <label class="col-form-label">Reason (Use Only With Ban)</label>
                                            <textarea class="form-control Param2" cols="30" rows="10" style="resize: none; outline: none;"></textarea>
                                            <button id="ban" type="button" class="col-md-2 btn btn-primary mt-4 pr-4 pl-4">Ban</button>
                                            <button id="unban" type="button" class="col-md-2 btn btn-danger mt-4 pr-4 pl-4">Un-Ban</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    $("#ban").click(function(){
                        $.ajax({
                            type: 'POST',
                            url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Admin/Ban.php',
                            data: {"Param1": $(".Param1").val(), "Param2": $(".Param2").val()},
                            success: function(resultData){
                                if(resultData.error) swal('<?php echo Lang::Get('Error'); ?>!', resultData.msg, 'error');
                                else swal('<?php echo Lang::Get('Successful'); ?>!', resultData.msg, 'success');
                            }
                        });
                    });

                    $("#unban").click(function(){
                        $.ajax({
                            type: 'POST',
                            url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Admin/UnBan.php',
                            data: {"Param1": $(".Param1").val()},
                            success: function(resultData){
                                if(resultData.error) swal('<?php echo Lang::Get('Error'); ?>!', resultData.msg, 'error');
                                else swal('<?php echo Lang::Get('Successful'); ?>!', resultData.msg, 'success');
                            }
                        });
                    });
                </script>

            </div>
        </div>
    </div>
</div>