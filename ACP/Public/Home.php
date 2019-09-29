        <?php $db = Database::Connection(); $OnlinePlayers = Socket::Get('OnlineCount', array('Return' => 0)); ?>

        <?php require_once('GLOBAL/Navbar.php'); ?>

        <div class="container content-area p-3">
            <div class="side-app">
                <div class="row"> 
                    <div class="col-sm-6 col-md-12 col-lg-6 col-xl-6"> 
                        <div class="card"> 
                            <div class="card-body"> 
                                <div class="d-flex clearfix"> 
                                    <div class="text-left mt-3"> 
                                        <p class="card-text text-muted mb-1">Total Players</p>
                                        <h2 class="mb-0 text-dark mainvalue"><?php echo number_format(Admin::getTotalPlayers()); ?></h2> 
                                    </div> 
                                    <div class="ml-auto"> 
                                        <span class="bg-primary-transparent icon-service text-primary "> <i class="si si-user fs-2"></i> </span> 
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                    </div>
                    
                    <div class="col-sm-6 col-md-12 col-lg-6 col-xl-6"> 
                        <div class="card" <?php if($OnlinePlayers != 0) echo 'id="onlinePlayers" style="cursor: pointer;"'; ?>> 
                            <div class="card-body"> 
                                <div class="d-flex clearfix"> 
                                    <div class="text-left mt-3"> 
                                        <p class="card-text text-muted mb-1">Online Players</p>
                                        <h2 class="mb-0 text-dark mainvalue"><?php echo number_format($OnlinePlayers); ?></h2> 
                                    </div> 
                                    <div class="ml-auto"> 
                                        <span class="bg-success-transparent icon-service text-success"> <i class="si si-user-following fs-2"></i> </span> 
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                    </div>

                    <?php 

                        if($OnlinePlayers != 0){
                            $array = [];

                            $query = $db->query("SELECT userID FROM player_accounts")->fetchAll();
                            foreach ($query as $value) {
                                if(Socket::Get('IsOnline', array('UserId' => $value['userID'], 'Return' => false))) array_push($array, $value['userID']);
                            }
                        }

                        if(!empty($array)){
                    ?>
                    
                    <script>$("#onlinePlayers").click(function(){ $("#onlineUserModal").modal(); });</script>
                        <div class="modal fade" id="onlineUserModal">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Online Players</h5>
                                        <button type="button" class="close text-white" data-dismiss="modal"><span>&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="table-responsive">
                                            <table class="table card-table table-striped table-vcenter table-outline table-bordered text-nowrap ">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="border-top-0">Username</th>
                                                        <th scope="col" class="border-top-0">Last Login IP</th>
                                                        <th scope="col" class="border-top-0">Register IP</th>
                                                        <th scope="col" class="border-top-0">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php

                                                        foreach ($array as $value) {
                                                    
                                                        $User = $db->query("SELECT userID, profileID, shipName, profileID, Info FROM player_accounts WHERE userID = $value")->fetch();

                                                    ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $User['shipName']; ?></th>
                                                        <td><?php echo json_decode($User['Info'])->LastLoginIP; ?></td>
                                                        <td><?php echo json_decode($User['Info'])->RegisterIP; ?></td>
                                                        <td>
                                                            <a class="btn btn-sm btn-danger" style="width:100%" href="<?php echo Config::Get('ACP'); ?>PlayerEdit/<?php echo $User['profileID']; ?>"><i class="fa fa-pencil"></i> Edit</a>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn rb-button" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    
                    <div class="col-sm-6 col-md-12 col-lg-6 col-xl-6"> 
                        <div class="card"> 
                            <div class="card-body"> 
                                <div class="d-flex clearfix"> 
                                    <div class="text-left mt-3"> 
                                        <p class="card-text text-muted mb-1">This Daily Income</p>
                                        <h2 class="mb-0 text-dark mainvalue"><?php echo number_format(Admin::getDailyRevenue()); ?> €</h2> 
                                    </div> 
                                    <div class="ml-auto"> 
                                        <span class="bg-danger-transparent icon-service text-danger"> <i class="fa fa-money" aria-hidden="true"></i> </span> 
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                    </div> 

                    <div class="col-sm-6 col-md-12 col-lg-6 col-xl-6"> 
                        <div class="card"> 
                            <div class="card-body"> 
                                <div class="d-flex clearfix"> 
                                    <div class="text-left mt-3"> 
                                        <p class="card-text text-muted mb-1">This Weekly Income</p>
                                        <h2 class="mb-0 text-dark mainvalue"><?php echo number_format(Admin::getWeeklyRevenue()); ?> €</h2> 
                                    </div> 
                                    <div class="ml-auto"> 
                                        <span class="bg-danger-transparent icon-service text-danger"> <i class="fa fa-money" aria-hidden="true"></i> </span> 
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                    </div> 

                    <div class="col-sm-6 col-md-12 col-lg-6 col-xl-6"> 
                        <div class="card"> 
                            <div class="card-body"> 
                                <div class="d-flex clearfix"> 
                                    <div class="text-left mt-3"> 
                                        <p class="card-text text-muted mb-1">This Monthly Income</p>
                                        <h2 class="mb-0 text-dark mainvalue"><?php echo number_format(Admin::getMonthlyRevenue()); ?> €</h2> 
                                    </div> 
                                    <div class="ml-auto"> 
                                        <span class="bg-danger-transparent icon-service text-danger"> <i class="fa fa-money" aria-hidden="true"></i> </span> 
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                    </div> 
                    
                    <div class="col-sm-6 col-md-12 col-lg-6 col-xl-6"> 
                        <div class="card"> 
                            <div class="card-body"> 
                                <div class="d-flex clearfix"> 
                                    <div class="text-left mt-3"> 
                                        <p class="card-text text-muted mb-1">Total Income</p>
                                        <h2 class="mb-0 text-dark mainvalue"><?php echo number_format(Admin::getTotalRevenue()); ?> €</h2> 
                                    </div> 
                                    <div class="ml-auto"> 
                                        <span class="bg-warning-transparent icon-service text-warning"> <i class="fa fa-money" aria-hidden="true"></i> </span> 
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header ">
                                <h3 class="card-title ">Support Requests</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table card-table table-striped table-vcenter table-outline table-bordered text-nowrap ">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-top-0">ID</th>
                                            <th scope="col" class="border-top-0">Username</th>
                                            <th scope="col" class="border-top-0">Category</th>
                                            <th scope="col" class="border-top-0">Subject</th>
                                            <th scope="col" class="border-top-0">Urgency</th>
                                            <th scope="col" class="border-top-0">Date</th>
                                            <th scope="col" class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Abbas Yanbasan</td>
                                            <td>Bug</td>
                                            <td>Bug buldum amdinnn</td>
                                            <td>Acil</td>
                                            <td>15/11/2018</td>
                                            <td>
                                                <a class="btn btn-sm btn-danger" style="width:100%" href="#"><i class="fa fa-eye"></i> Görüntüle</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Abbas Yanbasan</td>
                                            <td>Bug</td>
                                            <td>Bug buldum amdinnn</td>
                                            <td>Acil</td>
                                            <td>15/11/2018</td>
                                            <td>
                                                <a class="btn btn-sm btn-danger" style="width:100%" href="#"><i class="fa fa-eye"></i> Görüntüle</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Abbas Yanbasan</td>
                                            <td>Bug</td>
                                            <td>Bug buldum amdinnn</td>
                                            <td>Acil</td>
                                            <td>15/11/2018</td>
                                            <td>
                                                <a class="btn btn-sm btn-danger" style="width:100%" href="#"><i class="fa fa-eye"></i> Görüntüle</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Abbas Yanbasan</td>
                                            <td>Bug</td>
                                            <td>Bug buldum amdinnn</td>
                                            <td>Acil</td>
                                            <td>15/11/2018</td>
                                            <td>
                                                <a class="btn btn-sm btn-danger" style="width:100%" href="#"><i class="fa fa-eye"></i> Görüntüle</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <?php require_once('GLOBAL/RightSideBar.php'); ?>