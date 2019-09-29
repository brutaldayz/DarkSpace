<?php require_once('GLOBAL/Navbar.php'); ?>

<div class="container content-area p-3">
    <div class="side-app">

        <div class="row row-cards">
            <div class="col-lg-3">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                    <div class="card">
                            <div class="card-header">
                                <h4 style="margin-bottom: 0px;">Categories</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Category</label>
                                    <select name="beast" id="select-beast4" class="form-control custom-select">
                                        <option value="0">Username</option>
                                        <option value="1">User ID</option>
                                        <option value="2">Profile ID</option>
                                        <option value="3">Old Usernames</option>
                                    </select>
                                </div>
                                <a class="btn rb-button" style="width: 100%;" href="#">Search</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 style="margin-bottom: 0px;">Category Filters</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Username</label>
                                    <select name="beast" id="select-beast3" class="form-control custom-select">
                                        <option value="0">--Select--</option>
                                        <option value="1">Username</option>
                                        <option value="2">ShipName</option>
                                        <option value="2">Old ShipNames</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Company</label>
                                    <select name="beast" id="select-beast" class="form-control custom-select">
                                        <option value="0">--Select--</option>
                                        <option value="1">MMO</option>
                                        <option value="2">EIC</option>
                                        <option value="3">VRU</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Online</label>
                                    <select name="beast" id="select-beast2" class="form-control custom-select">
                                        <option value="0">--Select--</option>
                                        <option value="1">Online</option>
                                        <option value="2">Offline</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Ban</label>
                                    <select name="beast" id="select-beast3" class="form-control custom-select">
                                        <option value="0">--Select--</option>
                                        <option value="1">Banned</option>
                                        <option value="2">Not Banned</option>
                                    </select>
                                </div>
                                <a class="btn rb-button" style="width: 100%;" href="#">Apply Filter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="input-group">
                    <input type="text" class="form-control" style="height: 50px;" placeholder="Search">
                    <div class="input-group-append">
                        <button type="button" class="btn rb-button" style="padding: 0px 20px 0px 20px;">
                            Search
                        </button>
                    </div>
                </div>
                <div class="card mt-5 store">
                    <div class="table-responsive">
                        <table class="table card-table table-striped table-vcenter table-outline table-bordered text-nowrap ">
                            <thead>
                                <tr>
                                    <th style="padding: 10px;">UserID</th>
                                    <th style="padding: 10px;">Username</th>
                                    <th style="padding: 10px;">Clan</th>
                                    <th style="padding: 10px;">Company</th>
                                    <th style="padding: 10px;">Ban</th>
                                    <th style="padding: 10px;">Action</th>
                                </tr>
                            </thead>
                           <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Test</td>
                                    <td>Free Agent</td>
                                    <td>MMO</td>
                                    <td>Not Banned</td>
                                    <td><a class="btn btn-sm btn-danger" style="width:100%" href="javascript:;"><i class="fa fa-eye"></i> View</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Test</td>
                                    <td>Free Agent</td>
                                    <td>MMO</td>
                                    <td>Banned</td>
                                    <td><a class="btn btn-sm btn-danger" style="width:100%" href="javascript:;"><i class="fa fa-eye"></i> View</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Test</td>
                                    <td>FUCK OFF [FUCK]</td>
                                    <td>MMO</td>
                                    <td>Not Banned</td>
                                    <td><a class="btn btn-sm btn-danger" style="width:100%" href="javascript:;"><i class="fa fa-eye"></i> View</a></td>
                                </tr>
                           </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <?php require_once('GLOBAL/RightSideBar.php'); ?>