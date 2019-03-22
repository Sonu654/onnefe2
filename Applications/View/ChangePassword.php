<div class="row">
    <div class="col-sm-3"> 
        <?php $this->view('Feeds'); ?>
    </div>
    <div class='col-sm-1'></div>
    <div class="col-sm-8" style="">
        <div class="row">
            
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8"><h3> <label for="ChangePassword"class="center-block" style="color: #6666ff;">Change Your Password</label></h3></div>
                    <div class="col-sm-2"></div>
                </div>
                 
                       <div class="form-group">
                           <div id="SuccessState" style="color: green;"></div>
                            <label for="currentPassword">Current Password</label>
                            <input type="hidden" name="user" id="passuser" value="<?php echo $data['user'];?>">
                            <input type="hidden" id="oldPassStatus" value="false"/>
                            <input type="password" class="form-control" id="chpass" name="currentPass" data-toggle="popover" data-trigger="focus" data-content="Password must be greater then 8 character"/>
                            <div id="error1" style="color: red;"></div>
                        </div>
                       <div class="form-group">
                            <label for="newPass">New Password</label>
                            <input type="password" class="form-control" id="newPass"/>
                            <div id="error2" style="color: red;"></div>
                        </div>
                       <div class="form-group">
                            <label for="newPasscnfrm">Repeat New Password</label>
                            <input type="hidden" id="newPassStatus" value="false"/>
                            <input type="password" class="form-control" id="rNewPass"/>
                            <div id="error3" style="color: red;"></div>
                       </div>
                      <div class="row">
                          <div class="col-sm-3"></div>
                          <div class="col-sm-6"> <button class="btn btn-primary disabled" id="Change_pass"><span class="glyphicon glyphicon-erase"></span>Change Password</button> </div>
                          <div class="col-sm-3"></div>
                      </div>
                   
            </div>
            <div class="col-sm-6">
            </div>
            
        </div>
    </div>
</div>