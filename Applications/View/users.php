<div class="row">
    <div class="col-sm-3">
       <?php $this->view('Feeds'); ?>
    </div>
    <div class="col-sm-9" style="">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>User id</th>
                                <th>User Name</th>
                                <th>isActive</th>
                            </tr>
                        </thead>
                        <tbody>
                        <script>
                            function get_user(users) {
                                for (i = 0; i < users.length; i++) {
                                    if(users[i].isActive==true){
                                        val="Block";
                                        v='success';
                                    }else{
                                        val="Active";
                                        v='warning';
                                    }
                                    document.write('<tr class="'+v+'"><td>' + users[i].login_id + '</td><td>' + users[i].user_first_name + " " + users[i].user_mid_name + ' ' + users[i].user_last_name + '</td>\n\
                                <td><input type="hidden" name="user_id" id="userID" value='+users[i].login_id+'>\n\
                                <button class="btn btn-primary" id="btnUserBA">'+val+'</button></td></tr>');
                                }
                            }
                            user =<?php echo $data['users']; ?>;
                            get_user(user);

                        </script>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-1"></div>

        </div> 
    </div>
</div>