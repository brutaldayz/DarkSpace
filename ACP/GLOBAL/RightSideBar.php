            <div class="sidebar sidebar-right sidebar-animate">
                <div class="panel-body tabs-menu-body side-tab-body p-0 border-0 ">
                    <div class="tab-content border-top">
                        <div class="tab-pane active " id="tab">
                            <div class="card-body p-0">
                                <div class="header-user text-center mt-4 pb-4">
                                    <span class="avatar avatar-xxl brround"><img src="<?php echo Config::Get('SERVER_URL'); ?>Upload/Players/Avatar.png" class="avatar avatar-xxl brround"></span>
                                    <div class="userName text-center font-weight-semibold user h3 mb-0"><?php echo $Player->Data['shipName']; ?></div>
                                    <small><?php echo Lang::Rank($Player->Data['rankID']); ?></small>
                                    <div class="card-body">
                                        <div class="form-group ">
                                            <label class="form-label text-left">Language</label>
                                            <select id="language" class="form-control select2">
                                                <option value="en" <?php echo (Cookie::getLanguage() == "en") ? 'selected' : ''; ?>>English</option>
                                                <option value="tr" <?php echo (Cookie::getLanguage() == "tr") ? 'selected' : ''; ?>>Türkçe</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <div class="row">
                                        <div class="col-4 text-center">
                                            <a href="<?php echo Config::Get('SERVER_URL'); ?>Logout">
                                                <i class="dropdown-icon mdi mdi-logout-variant fs-30 m-0 leading-tight"></i>
                                                <div style="color: #d3d8e2;">Sign out</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $("#language").change(function(){
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Account/LanguageChange.php',
                        data: {"Param1": $("#language").val()},
                        success: function(resultData){
                            if(resultData.error) swal('<?php echo Lang::Get('Error'); ?>!', resultData.msg, 'error');
                            else swal('<?php echo Lang::Get('Successful'); ?>!', resultData.msg, 'success');
                        }
                    });
                });
            </script>