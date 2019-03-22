<div class="row"><?php if ($data['status'] == 'Admin') { ?>
    <div class="col-sm-6">

        <div class="row">
            <div class="col-sm-12" style="text-align: center; color: #009999">
                <label for="Admin">Admin's</label>  
            </div>
            <div class="col-sm-3">
                <label for="News">News</label>
            </div>
            <div class="col-sm-9">
                <ul class="nav-pills navbar-right" style="list-style: none;">
                    <li><a href="<?php echo baseurl; ?>/Admin/getNews/<?php echo $data['id']; ?>"><img class="img_height"src="<?php echo baseurl; ?>/Assets/img/refresh.png" ></a></li>
                    <li><a href="<?php echo baseurl; ?>/Admin/AddNews/<?php echo $data['id']; ?>"><img class="img_height" src="<?php echo baseurl; ?>/Assets/img/add_news.png"></a></li>
                    <li><a href="<?php echo baseurl; ?>/Admin/editNews/<?php echo $data['id']; ?>"><img class="img_height" src="<?php echo baseurl; ?>/Assets/img/delete_news.png"></a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <label for="Category">Category</label>
            </div>
            <div class="col-sm-9" >
                <ul class="nav-pills navbar-right" style="list-style: none;">
                    <li><a href="<?php echo baseurl; ?>/Admin/getCat/<?php echo $data['id']; ?>"><img class="img_height" src="<?php echo baseurl; ?>/Assets/img/refresh.png"></a></li>
                    <li><a href="<?php echo baseurl; ?>/Admin/AddCat/<?php echo $data['id']; ?>"><img  class="img_height" src="<?php echo baseurl; ?>/Assets/img/edit_.png"></a></li>
                </ul>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-3">
                <label for="User">User</label>
            </div>
            <div class="col-sm-9">
                <ul class="nav-pills navbar-right" style="list-style: none;">

                    <li><a href="<?php echo baseurl; ?>/Admin/Users/<?php echo $data['id']; ?>"><img src="<?php echo baseurl; ?>/Assets/img/user_control.png" class="img_height"></a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <label for="Logs">Logs</label>
            </div>
            <div class="col-sm-9" >
                <ul class="nav-pills navbar-right" style="list-style: none;">
                    <li><a href="<?php echo baseurl; ?>/Admin/logs/<?php echo $data['id']; ?>"><img class="img_height" src="<?php echo baseurl; ?>/Assets/img/user_log.png"></a></li>
                </ul>
            </div>
        </div>
 <a class="btn btn-warning" href="<?php echo baseurl;?>/Admin/addNG/<?php echo $data['id'];?>">News Group</a>
   

    </div>
    <?php } ?>   
    <div class="col-sm-6">
        <div class="row">
            <div class="col-sm-12" style="text-align: center; color: #009999">
                <label for="User">User's</label>  
            </div>

            <div class="col-sm-3">
                <label for="interest">Interest</label>
            </div>
            <div class="col-sm-9">
                <ul class="nav-pills navbar-right" style="list-style: none;">
                    <li><a href="<?php echo baseurl; ?>/Profile/Interest/<?php echo $data['id']; ?>"><img class="img_height" src="<?php echo baseurl; ?>/Assets/img/view_interest.png"></a></li>
                    <li><a href="<?php echo baseurl; ?>/Profile/AddInterest/<?php echo $data['id']; ?>"><img  class="img_height"src="<?php echo baseurl; ?>/Assets/img/add.png"></a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <label for="password"> Password</label>
            </div>
            <div class="col-sm-9">
                <ul class="nav-pills navbar-right" style="list-style: none;">
                    <li><a href="<?php echo baseurl; ?>/Profile/Changepass/<?php echo $data['id'];?>"><img class="img_height" src="<?php echo baseurl; ?>/Assets/img/change_password.png"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>



