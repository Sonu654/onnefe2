<div class="row" style="background-color: #f3f3fc">
    <div class="col-sm-3">
        <?php $this->view('Feeds'); ?>
    </div>
    <div class="col-sm-6">
        <div class="row">
            <div style="background-color: #f8f8fb" id="mainDiv1">
                <div class="row" >
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <h1 style="color:blue">
                            Forget Password!
                        </h1>

                    </div>
                    <div class="col-sm-3"></div>

                </div>

                <div class="row">
                    <br/>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <div style="color: #999999" id="head1">Please enter your email,from which have registered to find your account.
                        </div>
                        <div style="color: #999999" id="head2">Please enter your Mobile No.,from which have registered to Change Your Password.
                        </div>

                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <br/><br/>
                <div class="row">
                    <input type="hidden" id="phnNo"/>
                    <input type="hidden" id="hideID"/>

                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-6" id="firstDiv">
                        <div class="form-group">
                            <lable for="userName"><span class="glyphicon glyphicon-user"></span>Email Id</lable>
                            <input class="form-control" id="emailuser" type="email">

                        </div>
                        <div id="error" style="color: red">

                        </div><br/>
                        <button type="button" class="btn btn-primary btnfrgt" id="Search">Search</button>&nbsp;&nbsp;
                        <a href="<?php echo baseurl; ?>/ONNEFE/Index"><button type="button" class="btn btn-default btnfrgt" id="Cancel">Cancel</button></a>

                    </div>
                    <div class="col-sm-6" id="secondDiv">
                        <div class="form-group">
                            <lable for="userphnNo"><span class="glyphicon glyphicon-phone"></span>Mobile No.</lable>
                            <input class="form-control" id="MNoUser" type="text">

                        </div>
                        <div id="errornew" style="color: red">

                        </div><br/>
                        <button type="button" class="btn btn-primary btnfrgt" id="Continue">Continue</button>&nbsp;&nbsp;
                        <a href="<?php echo baseurl; ?>/ONNEFE/Index"><button type="button" class="btn btn-default btnfrgt" id="Cancel2">Cancel</button></a>

                    </div>

                    <div class="col-sm-3">
                    </div>

                </div>

            </div>
            <div style="background-color: #f8f8fb" id="mainDiv2">

                <div class="row" >
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <h1 style="color:blue">
                            Change Password
                        </h1>

                    </div>
                    <div class="col-sm-3"></div>

                </div>

                <div class="row">
                    <br/>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <div style="color: #999999">Enter the new Password You Want to set.
                        </div>

                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <br/><br/>
                <div class="row">
                    <input type="hidden" id=""/>
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-6" id="">
                        <div class="form-group">
                            <lable for="userPassword">New Password</lable>
                            <input class="form-control" id="firstPass" type="password">

                        </div>
                        <div class="form-group">
                            <lable for="userPassword">Repeat Password</lable>
                            <input class="form-control" id="secondPass" type="password">

                        </div>

                        <div id="errorPass" style="color: red">

                        </div><br/>
                        <button type="button" class="btn btn-primary btnfrgt" id="Change">Change</button>&nbsp;&nbsp;
                        <a href="<?php echo baseurl; ?>/ONNEFE/Index"><button type="button" class="btn btn-default btnfrgt" id="Cancel3">Cancel</button></a>

                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
    </div>
</div>


