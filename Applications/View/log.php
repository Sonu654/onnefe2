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
                                <th>login</th>
                                <th>logout</th>

                            </tr>
                        </thead>
                        <tbody>
                        <script>
                            function get_log(log){
                                for (i = 0; i < log.length; i++) {
                                    document.write("<tr><td>" + log[i].login_id + "</td><td>" + log[i].user_first_name + " " + log[i].user_mid_name + " " + log[i].user_last_name + "</td><td>" + log[i].login_time + "</td><td>" + log[i].logout_time + "</td></tr>");
                                }
                            }
                            log =<?php echo $data['log']; ?>;
                            get_log(log);

                        </script>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-1"></div>

        </div> 
    </div>
</div>