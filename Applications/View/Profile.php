<div class="row">
    <div class="col-sm-3">
              <?php
        $this->view('main_',$data);
      ?>
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-8" style="">
        <script>
            profile =<?php echo $data['profile']; ?>;

        </script>
        <div id="profile">
            <div class="row">
                <div class='col-sm-3'>
                    <label for="name">User Name</label>
                </div>
                <div class="col-sm-9">
                    <script>document.write(profile[0].user_first_name + '   ' + profile[0].user_mid_name + ' ' + profile[0].user_last_name);</script>
                </div>
            </div>
            <div class="row">
                <div class='col-sm-3'>
                    <label for="name">User id</label>
                </div>
                <div class="col-sm-9">
                    <script>document.write(profile[0].login_id);</script>
                </div>
            </div>
            <div class="row">
                <div class='col-sm-3'>
                    <label for="name">User Gender</label>
                </div>
                <div class="col-sm-9">
                    <script>document.write(profile[0].user_gender);</script>
                </div>
            </div>

            <div class="row">
                <div class='col-sm-3'>
                    <label for="name">User Contact</label>
                </div>
                <div class="col-sm-9">
                    <script>document.write(profile[0].user_contact);</script>
                </div>
            </div>
            <h5><b>User Address</b></h5>

            <div class="row">
                <div class='col-sm-3'>
                    <label for="name">Line 1</label>
                </div>
                <div class="col-sm-9">
                    <script>document.write(profile[0].local_address);</script>
                </div>
            </div>

            <div class="row">
                <div class='col-sm-3'>
                    <label for="name">City</label>
                </div>
                <div class="col-sm-9">
                    <script>document.write(profile[0].city);</script>
                </div>
            </div>

            <div class="row">
                <div class='col-sm-3'>
                    <label for="name">State</label>
                </div>
                <div class="col-sm-9">
                    <script>document.write(profile[0].state);</script>
                </div>
            </div>

            <div class="row">
                <div class='col-sm-3'>
                    <label for="name">Country</label>
                </div>
                <div class="col-sm-9">
                    <script>document.write(profile[0].country);</script>
                </div>
            </div>
            <button class="btn btn-primary" id="edit_pro"><span class="glyphicon glyphicon-edit"></span>Edit Profile</button>
        </div>
        <?php
        $profile = json_decode($data['profile'], true);
        $profile = $profile[0];
        ?>
        <div id="form-profile">
            <div class="row">
                <div class="col-sm-6">
                    <form  name="profile" class="form" method="post" action="<?php echo baseurl;?>/Profile/Update/<?php echo $profile['login_id']?>">
                        <div class="form-group">
                            <label for="user_name">User Name</label>
                            <table>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" type="text" name="ufname" value="<?php echo $profile['user_first_name']; ?>">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" type="text" name="umname" value="<?php echo $profile['user_mid_name']; ?>">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" type="text" name="ulname" value="<?php echo $profile['user_last_name']; ?>">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="form-group">
                            <label for="loginid">Login id</label>
                            <input type="text" class="form-control" name="login_id" value="<?php echo $profile['login_id']; ?>" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <input type="text" class="form-control" name="gender" value="<?php echo $profile['user_gender']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact</label>
                            <input type="text" class="form-control" name="contact" value="<?php echo $profile['user_contact']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="userAddress">Address</label>
                        </div>
                        <div class="form-group">
                            <label for="local">Local</label>
                            <input type="text" class="form-control" name="local_add" value="<?php echo $profile['local_address']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" name="city" value="<?php echo $profile['city']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="state">State</label>
                            <input type="text" class="form-control" name="state" value="<?php echo $profile['state']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" class="form-control" name="country" value="<?php echo $profile['country']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" name="submit" value="Update">
                            <input type="reset" class="btn btn-danger">
                        </div>
                    </form>  
                </div>
            </div>
        </div>
    </div>
</div>
<?php
?>


